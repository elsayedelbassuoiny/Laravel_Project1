<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{

    const SUBJECTS_ROUTE = '/subjects/';


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        $available = [];

        $activeStudent = unserialize(session(LoginController::ACTIVE_STUDENT_KEY));
        if ($activeStudent != null) {
            foreach ($subjects as $subject) {
                if ($subject->pre_requisite == null) {
                    array_push($available, $subject);
                } else {
                    // var_dump($activeStudent->assign_subjects);
                    // var_dump(json_decode($activeStudent->assign_subjects));
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

    public function subscribe(Request $request) {
        $this->validate($request, [
            'id' => 'required'
        ]);

        $activeStudent = unserialize(session(LoginController::ACTIVE_STUDENT_KEY));
        $studentSubjects = json_decode($activeStudent->assign_subjects);
        array_push($studentSubjects, [(int)$request->id, null]);
        $activeStudent->assign_subjects = json_encode($studentSubjects);
        $activeStudent->save();

        return redirect('/subjects/');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // session([LoginController::ACTIVE_STUDENT_KEY => serialize(\App\Models\Student::find(1))]);
        // return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // create a subject
        // $this->validate($request, [
        //     'name' => 'required',
        //     'code' => 'required',
        //     'department' => 'required'
        // ]);

        // $file = $request->file('file');
        // $filename = $file->getClientOriginalName();
        // $updatedFileName= time() . '_' . $filename;
        // $file -> move('files', $updatedFileName);

        // $subject = Subject::create($request->all());
        // $files = json_decode($subject->files);
        // array_push($files, $updatedFileName);
        // $subject->files = json_encode($files);
        // $subject->save();

        // return redirect(SubjectsController::SUBJECTS_ROUTE . $subject->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        // $data = [
        //     'subject' => Subject::findOrFail($subject->id)
        // ];

        // return view('confirm_subject')->with($data);
    }

    public function display_subject(Subject $subject){
        $data = [
            'subject' => Subject::findOrFail($subject->id)
        ];

        return view('confirm_subject')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        // $data = [
        //     'subject' => Subject::findOrFail($subject->id)
        // ];

        // return view('subject.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'code' => 'required',
        //     'department' => 'required'
        // ]);

        // $subject = Subject::find($request->id);
        // $subject->name = $request->name;
        // $subject->code = $request->code;
        // $subject->department = $request->department;

        // $subject->save();

        // return redirect(SubjectsController::SUBJECTS_ROUTE . $subject->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        // $subject = Subject::findOrFail($subject->id);
        // $subject->delete();

        // return redirect(SubjectsController::SUBJECTS_ROUTE);
    }
}
