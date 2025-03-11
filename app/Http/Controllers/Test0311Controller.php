<?php
namespace App\Http\Controllers;

use App\Models\Test0311;
use Illuminate\Http\Request;

class Test0311Controller extends Controller
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

        // $data = DB::table('test0311s')
        //     ->select('id', 'name', 'mobile')
        //     ->get();

        $data = Test0311::get();

        // $data = DB::table('test0311s')->get();
        // dd($data);

        return view('test0311.index', ['data' => $data, 'data_fake' => $data_fake]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd("hi create test0311");
        return view('test0311.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $input = $request->except('_token');
        // dd($input);

        $data = new Test0311;

        $data->name   = $request->name;
        $data->mobile = $request->mobile;

        $data->save();

        return redirect()->route('test0311s.index');
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
        // $url = route('test0311s.edit', ['test0311' => $id]);
        // dd($url);
        // dd("hello edit $id");
        $data = Test0311::find($id);
        return view('test0311.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd("hello update $id");
        // dd("hello request $request");

        $input = $request->except('_token', '_method');
        $data  = Test0311::where('id', $id)->first();
        // $data = Test0311::find($id);
        // dd($data);

        // 從dd複製貼過來 多筆複製
        // "name" => "cat"
        // "mobile" => "0933"

        $data->name   = $input['name'];
        $data->mobile = $input['mobile'];
        $data->save();

        return redirect()->route('test0311s.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("hello destroy $id");
        $data = Test0311::where('id', $id)->first();
        $data->delete();
        return redirect()->route('test0311s.index');
    }
}
