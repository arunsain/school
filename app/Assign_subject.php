<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subject;
use App\User;

class Assign_subject extends Model
{
    //
       protected $guarded = [];

       public function getSubject(){

       		return $this->belongsTo(Subject::class,'subject_id','id');

       }

        public function getTeacherName(){

       		return $this->belongsTo(user::class,'teacher_id','id');

       }
}
