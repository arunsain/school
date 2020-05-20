<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Add_class extends Model
{

	protected $table = 'add_classes';
   protected $guarded = [];

      public function getTeacherData()
    {
        return $this->belongsTo(User::class,'teacher_id','id');
    }

}
