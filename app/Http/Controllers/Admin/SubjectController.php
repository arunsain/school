<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Subject;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

         $user = Auth::guard('admin');
       $user = $user->user()->id;

     $getUser =   User::where('id',$user)->first();

     $subject = Subject::where('status',1)->get();
     //$callDetail = Add_class::where('status',1)->get();
        return view('admin.pages.addSubject',compact('getUser','subject'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
 $isSubjectExist =   Subject::where('subject',strtolower($request->subject))->first();

 if($isSubjectExist === null ){

     $subject = Subject::create([

            "subject" => strtolower($request->subject),
            "status" => 1

        ]);

     $notification = array(
                'message' => 'Subject Add Successfully',
                'alert-type' => 'success'
            );

  return  redirect('admin/subject-add')->with($notification);



 }else{

     $notification = array(
                'message' => 'Subject Already Exits',
                'alert-type' => 'error'
            );
return  redirect('admin/subject-add')->with($notification);
 }
        

      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
