<?php
namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('hello');
        $data_fake = [
            [
                'id'   => 1,
                'name' => 'amy',
            ],
            [
                'id'   => 2,
                'name' => 'bob',
            ],
            [
                'id'   => 3,
                'name' => 'cat',
            ]];

        // $users = DB::table('users')
        //     ->select('name', 'email as user_email')
        //     ->get();

        // $data = DB::table('students')
        //     ->select('id', 'name', 'mobile')
        //     ->get();
        // $data = Student::get();
        // $data = Student::with('phone')->get();

        $data = Student::with('phone')->with('hobbies')->get();
        // dd($data[0]->phone);
        dd($data[0]->hobbies[1]->name);
        // $data = DB::table('students')->get();
        // dd($data);
        // dd($data[0]->phone);
        return view('student.index', ['data' => $data, 'data_fake' => $data_fake]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd("hi create");
        return view('student.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $input = $request->except('_token');
        // dd($input);

        // 主表
        $data         = new Student;
        $data->name   = $input['name'];
        $data->mobile = $input['mobile'];
        $data->save();

        // 子表
        $item             = new Phone;
        $item->student_id = $data->id;
        $item->phone      = $input['phone'];
        $item->save();

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $url = route('students.edit', ['student' => $id]);
        // dd($url);
        // dd("hello edit $id");
        // $data = Student::find($id);

        $data = Student::where('id', $id)->with('phone')->first();
        // dd($data);

        return view('student.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd("hello update $id");
        // dd("hello request $request");

        $input = $request->except('_token', '_method');
        // $data  = Student::where('id', $id)->first();
        // $data = Student::find($id);
        // dd($data);

        // 從dd複製貼過來 多筆複製
        // "name" => "cat"
        // "mobile" => "0933"

        //主表
        $data         = Student::where('id', $id)->first();
        $data->name   = $input['name'];
        $data->mobile = $input['mobile'];
        $data->save();

        //子表
        // 刪除子表
        Phone::where('student_id', $id)->delete();
        // 新增子表
        $item             = new Phone;
        $item->student_id = $data->id;
        $item->phone      = $input['phone'];
        $item->save();

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("hello destroy $id");

        // 刪除子表
        Phone::where('student_id', $id)->delete();

        // 刪除主表
        Student::where('id', $id)->delete();

        return redirect()->route('students.index');
    }
}
