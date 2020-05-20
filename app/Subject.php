<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Assign_subject;

class Subject extends Model
{
    //

       protected $guarded = [];

       public function getAssignTeacher(){

       		return $this->hasOne(Assign_subject::class,'subject_id','id');

       }
}
