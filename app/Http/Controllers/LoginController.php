<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Student;

use Illuminate\Http\Request;


class LoginController extends Controller
{

    const ACTIVE_STUDENT_KEY = 'activeStudent';

    private $admin =["admin@fci.com ", "admin"];


    public function index() {
        return view('login');
    }

    public function login(Request $request) {
        $this->validate($request, [
            'usertype' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $login = null;
        if($request -> usertype=='student'){
            $login = Student::where('email', $request->email)->first();
            if( $login != null && $login->password == $request->password){
                session([LoginController::ACTIVE_STUDENT_KEY => serialize($login)]);
                return view('studentwelcome');
            }
        }elseif($request -> usertype=='doctor'){
            $login = Doctor::where('email', $request->email)->first();
            if( $login != null && $login->password == $request->password){
                return view('doctorwelcome');
            }
        }elseif($request -> usertype=='admin') {
            if($request->email=="admin@fci.com"&&$request->password=="admin")
            return view('adminwelcome');

        }
            return 'InValid';

    }
}
