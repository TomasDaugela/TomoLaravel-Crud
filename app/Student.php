<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $fillable = ['name', 'surname', 'class', 'lesson_id'];

    public function lesson(){
        return $this->belongsTo('App\Lesson');
    }

}
