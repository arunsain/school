<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    //

    protected $table = "user_details";

     public function userDetail()
    {
        return $this->belongsTo(User::class);
    }
}
