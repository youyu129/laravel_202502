<?php
namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
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

        // $data = DB::table('teachers')
        //     ->select('id', 'name', 'mobile')
        //     ->get();

        $data = Teacher::get();

        // $data = DB::table('teachers')->get();
        // dd($data);

        return view('teacher.index', ['data' => $data, 'data_fake' => $data_fake]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd("hi create teacher");
        return view('teacher.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $input = $request->except('_token');
        // dd($input);

        $data = new Teacher;

        $data->name   = $request->name;
        $data->mobile = $request->mobile;

        $data->save();

        return redirect()->route('teachers.index');
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
        // $url = route('teachers.edit', ['teacher' => $id]);
        // dd($url);
        // dd("hello edit $id");
        $data = Teacher::find($id);
        return view('teacher.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd("hello update $id");
        // dd("hello request $request");

        $input = $request->except('_token', '_method');
        $data  = Teacher::where('id', $id)->first();
        // $data = Teacher::find($id);
        // dd($data);

        // 從dd複製貼過來 多筆複製
        // "name" => "cat"
        // "mobile" => "0933"

        $data->name   = $input['name'];
        $data->mobile = $input['mobile'];
        $data->save();

        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("hello destroy $id");
        $data = Teacher::where('id', $id)->first();
        $data->delete();
        return redirect()->route('teachers.index');
    }
}
