<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Department;
use Illuminate\Support\Facades\Redirect;


class SubjectController extends Controller
{

    const SUBJECTS_ROUTE = '/subjects/';

    public function index()
    {
        $sub= Subject::all();
        return view('subjects.index')->with('sub',$sub);
    }

    public function create()
    {
        $departmets= Department::get();
        return view('subjects.create',['departmets'=>$departmets]);
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $code = $request->input('code');
        $dep = $request->input('dep');

        $isInsertSucess = DB::table('subjects')->insert(['name' => $name,'code'=>$code,'department_Id'=>$dep]);
        if ($isInsertSucess)   return Redirect::route('subjects.index') ;
        else  echo '<h3>fail</h3>' ;
    }

    public function show(string $id)
    {
        // $subject = Subject::where('id','=',$id)->with('department')->first();
        $subject = Subject::findOrFail($id);
        // echo $subject->department;
        // $department = Department::findOrFail($subject->department_id);
        // $subject=Subject::where('id','=',$id)->first();
        return view('subjects.show', ['subject' => $subject]);
    }

    public function edit(Subject $subject)
    {
        $departmets= Department::get();
        $subjects=Subject::get();
        return view('subjects.edit',['departmets'=>$departmets,'subject' => $subject,'subjects' => $subjects]);
    }

    public function update(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'code' => 'required',
        //     'department_Id' => 'required'
        // ]);
        $name = $request->input('name');
        $code = $request->input('code');
        $dep = $request->input('dep');

        $user = Subject::find($id);
        $user->name = $name;
        $user->code = $code;
        $user->department_Id = $dep;
        $user->save();
        return Redirect::route('subjects.index');


    }


    public function destroy(Subject $subject)
    {
        $subject->delete();
        return Redirect::route('subjects.index');

    }







    public function desplay() {
        $subjects = Subject::all();
        $available = [];

        $activeStudent = unserialize(session(LoginController::ACTIVE_STUDENT_KEY));
        if ($activeStudent != null) {
            foreach ($subjects as $subject) {
                if ($subject->pre_requisite == null) {
                    array_push($available, $subject);
                } else {
                    $student_subjects = json_decode($activeStudent->assign_subjects);
                    foreach ($student_subjects as $student_subject) {
                        if ($subject->pre_requisite == $student_subject[0] && $student_subject[1] >= Subject::SUCCESS_DEGREE) {
                            array_push($available, $subject);
                        }
                    }
                }
            }
        }
        $data = [
            'subjects' => $available
        ];
        return view('confirm_subject')->with($data);
    }

    public function subscribe(String $id)
    {
        $activeStudent = unserialize(session(LoginController::ACTIVE_STUDENT_KEY));

        $studentSubjects = json_decode($activeStudent->assign_subjects);
        array_push($studentSubjects , [(int)$id, null]);
        $activeStudent->assign_subjects = json_encode($studentSubjects);
        $activeStudent->save();

        session([LoginController::ACTIVE_STUDENT_KEY => serialize($activeStudent)]);

        return redirect('confirm_subject');
    }

}
