<?php

namespace App;
use App\Role;
use App\UserDetail;
use App\Add_class;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use  App\Notifications\ResetPasswordNotification;
//use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

       public function role()
    {
        return $this->belongsTo(Role::class);
    }


    public function getuser()
    {
        return $this->hasOne(UserDetail::class);
    }

     public function getTeacherClass()
    {
        return $this->hasOne(Add_class::class,'teacher_id','id');
    }

public function getTeacherSubject()
    {
        return $this->hasOne(Assign_subject::class,'teacher_id','id');
    }


     /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        // $this->notify(new ResetPasswordNotification($token));
       // $route = $this->role->nickname == 'admin' ? 'password.reset':'password.reset';
        if($this->role->nickname == 'admin'){
            $route = 'admin.password.reset';
        }
        if($this->role->nickname == 'teacher'){
            $route = 'teacher.password.reset';
        }

        if($this->role->nickname == 'student'){
            $route = 'student.password.reset';
        }
      //  dd($route);
   
    $this->notify(new ResetPasswordNotification($token,$route));
    }
}
