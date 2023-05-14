<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use DB ;

class DeparmentController extends Controller
{
    public function index(){
        $dep= Department::all();
        return view('adding_department')->with('dep',$dep);
    }

    public function dataInsert(Request $request){
        //  $depart = $request->input('department');

        //  $dep= Department::all();
        $department = Department::create($request->all());
        $dep = Department::all();
        // $isInsertSucess = DB::table('departments')->insert(['name' => $depart->name, 'code' => $depart->code]);
        if ($department != null)
            return view('adding_department')->with('dep',$dep) ;
        else
            echo '<h3>fail</h3>' ;

    }


    // public function dataInsert(Request $req){
    //     $dep=$req->input('department');
    //     $data=array('department'=>$dep);
    //     DB::table('departments')->insert($data);
    //     return view('/Create');
    // }
}
