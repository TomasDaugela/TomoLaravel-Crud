<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
        public function index(){
            return view('student.index', ['students' => Student::orderBy('name')->get()]);
        }
        // ATTENTION :: we need countries to be able to assign them
        public function create(){
            $lessons = \App\Lesson::orderBy('title')->get();
            return view('student.create', ['lessons' => $lessons]);
        }
        public function store(Request $request){
            $student = new Student();
            // can be used for seeing the insides of the incoming request
            // var_dump($request->all()); die();
            $student->fill($request->all());
            $student->save();
            return redirect()->route('students.index');
        }
        public function show(Student $student){
            //
        }
        // ATTENTION :: we need countries to be able to assign them
        public function edit(Student $student){
            $lessons = \App\Lesson::orderBy('title')->get();
            return view('student.edit', ['student' => $student, 'lessons' => $lessons]);
        }
        public function update(Request $request, Student $student){
            $student->fill($request->all());
            $student->save();
            return redirect()->route('students.index');
        }
        public function destroy(Student $student){
            $student->delete();
            return redirect()->route('students.index');
        }
    }
    
