<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index($id){

        $department = Department::all()->where('id','=',$id);
        $student = Student::all()->where('department_id','=',$id);
        return view('single' ,compact('department' , 'student'));
    }
    public function create($id)
    {
        $department = Department::all()->where('id','=',$id);
        return view('create-student' , compact('department'));
    }
    public function store (Request $request)
    {
        $student = new Student();
        $student->student_name=$request->input('student_name');
        $student->level=$request->input('level');
        $student->department_id=$request->input('department_id');
        $dep_id=$student->department_id;
        $student->save();

        return to_route('student.index',$dep_id)->with('msg', 'Student Added Successfully');
    }
    public function edit($id)
    {
        $student = Student::all()->where('id' , '=' , $id);
        return view('edit-student' , compact('student'));
    }

    public function update(Request $request,$id)
    {
        $student = Student::find($id);
        $student->update([
            'student_name'=>$request->student_name,
            'level'=>$request->level,

        ]);


        return to_route('student.index' , $id)->with('msg', 'Student Updated Successfully');
    }

    public function delete($id){

        $dep_id = Student::find($id)->pluck('department_id')->first();
        $student = Student::find($id)->delete();



        return to_route('student.index',$dep_id)->with('msg', 'Student Deleted successfully');

    }


}

