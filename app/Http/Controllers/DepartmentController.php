<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $department = Department::all();

        return view('index' , compact('department'));
    }

    public function create ()
    {
        return view('create');
    }

    public function store (Request $request)
    {
        $department = new Department();
        $department->department_name=$request->input('department_name');
        $department->save();
        return to_route('dep.index')->with('msg', 'Department Added Successfully');
    }

    public function edit($id)
    {
        $department = Department::all()->where('id' , '=' , $id);
        return view('edit' , compact('department'));
    }

    public function update(Request $request,$id)
    {
        $department = Department::find($id);
        $department->update([
            'department_name'=>$request->department_name,
        ]);


        return to_route('dep.index' , $id)->with('msg', 'Department Updated Successfully');
    }

    public function delete($id){
        $department = Department::find($id)->delete();
        return to_route('dep.index')->with('msg', 'Department Deleted successfully');

    }



}
