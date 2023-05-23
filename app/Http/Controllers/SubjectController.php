<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Subject;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Student;
use App\Models\Doctor;
class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub= Subject::all();
        return view('subjects.index')->with('sub',$sub);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departmets= Department::get();
        $subjects=Subject::get();
        $doctors=Doctor::get();
        return view('subjects.create',['departmets'=>$departmets,"subjects"=>$subjects , "doctors"=>$doctors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $code = $request->input('code');
        $dep = $request->input('dep');
        $pre = $request->input('pre');
        $doc = $request->input('doc');
        $isInsertSucess = DB::table('subjects')->insert(['name' => $name,'code'=>$code,'department_Id'=>$dep,'pre_requisite'=>$pre , 'doctor_id'=>$doc]);
        if ($isInsertSucess)   return Redirect::route('subjects.index') ;
        else  echo '<h3>fail</h3>' ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subject=Subject::where('id','=',$id)->with('department')->first();
        return view('subjects.show',['subject' => $subject]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        $departmets= Department::get();
        $subjects=Subject::get();
        $doctors=Doctor::get();
        return view('subjects.edit',['departmets'=>$departmets,'subject' => $subject,'subjects' => $subjects,'doctors'=>$doctors]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $name = $request->input('name');
        $code = $request->input('code');
        $dep = $request->input('dep');
        $pre = $request->input('pre');
        $doc = $request->input('doc');

        $user = Subject::find($id);
        $user->name = $name;
        $user->code = $code;
        $user->department_Id = $dep;
        $user->pre_requisite = $pre;
        $user->doctor_id = $doc;
        $user->save();
        return Redirect::route('subjects.index');


    }

    /**
     * Remove the specified resource from storage.
     */
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

        $assignCourse=Subject::find($id);
        $studentsidassign = json_decode($assignCourse->students);
        array_push($studentsidassign ,  $activeStudent->id );
        $assignCourse->students = json_encode($studentsidassign);
        $activeStudent->save();
        $assignCourse->save();

        session([LoginController::ACTIVE_STUDENT_KEY => serialize($activeStudent)]);

        return redirect('confirm_subject');
    }
}
