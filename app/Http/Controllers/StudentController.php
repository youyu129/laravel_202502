<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $data = DB::table('students')
            ->select('id as my_id', 'name as my_name', 'mobile as my_mobile')
            ->get();
        // $data = DB::table('students')->get();
        // dd($data);

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
        // $input = $request->except('_token');
        // dd($input);

        $data = new Student;

        $data->name   = $request->name;
        $data->mobile = $request->mobile;

        $data->save();

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
        return view('student.edit');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
