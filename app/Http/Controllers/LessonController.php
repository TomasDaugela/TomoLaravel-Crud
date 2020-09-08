<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index() {
        return view('lesson.index', ['lessons' => Lesson::orderBy('title')->get()]);
    }
    public function create() {
        return view('lesson.create');
    }
    public function store(Request $request) {
        $lesson = new Lesson();
     // can be used for seeing the insides of the incoming request
         // var_dump($request->all()); die();
        $lesson->fill($request->all());
        $lesson->save();
        return redirect()->route('lessons.index');
    }
 

    /**
     * Display the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson){
        return view('lesson.edit', ['lesson' => $lesson]);
    }
 
    public function update(Request $request, Lesson $lesson){
        $lesson->fill($request->all());
        $lesson->save();
        return redirect()->route('lessons.index');
    }
 
      /**
     * Remove the specified resource from storage.
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson) {
        if (count($lesson->students)){ 
            return back()->withErrors(['error' => ['Negalima Istrinti kol pamoka yra priskirta mokiniui']]);
        }
        $lesson->delete();
        return redirect()->route('lessons.index');
    }

     }
 

