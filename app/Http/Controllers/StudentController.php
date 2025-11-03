<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return response()->json($students);
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'gpa' => 'required',
        ]);
        return Student::create([
            'name'=>request('name'),
            'gpa'=>request('gpa'),
        ]);
    }

    public function edit($id, Request $request){
        $student = Student::find($id);
        $data = $request->validate([
            'name' => 'required',
            'gpa' => 'required',
        ]);
        return $student->update([
            'name'=>request('name'),
            'gpa'=>request('gpa'),
        ]);
    }

    public function destroy($id){
        $student = Student::find($id);
        $student->delete();
    }
}
