<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use App\PageMeta;
use App\User;
use Auth;

class AdminController extends Controller
{
    //

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
          $user = Auth::guard('admin');
       $user = $user->user()->id;

     $getUser =   User::where('id',$user)->first();

        return view('admin.pages.dashboard',compact('getUser'));
    }


    //   public function main()
    // {
    //     return view('admin.pages.dashboard');
    // }
}
