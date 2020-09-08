<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public $fillable = ['title', 'teacher'];

    public function students(){
        return $this->hasMany('App\Student');
    }

}
