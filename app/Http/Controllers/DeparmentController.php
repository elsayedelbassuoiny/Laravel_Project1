<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use DB ;
use App\Models\Subject;
use Illuminate\Support\Facades\Redirect;

class DeparmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dep= Department::all();
        return view('departments.index')->with('dep',$dep);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departmets= Department::get();
        $subjects=Subject::get();
        return view('departments.create',['departmets'=>$departmets]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $code = $request->input('code');

        $isInsertSucess = DB::table('departments')->insert(['name' => $name,'code'=>$code]);
        if ($isInsertSucess)   return Redirect::route('departments.index') ;
        else  echo '<h3>fail</h3>' ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return view('departments.show',['department'=>$department]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        return view('departments.edit',['department'=>$department]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->input('name');
        $code = $request->input('code');

        $user = Department::find($id);
        $user->name = $name;
        $user->code = $code;
        $user->save();
        return Redirect::route('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    // public function dataInsert(Request $req){
    //     $dep=$req->input('department');
    //     $data=array('department'=>$dep);
    //     DB::table('departments')->insert($data);
    //     return view('/Create');
    // }
}
