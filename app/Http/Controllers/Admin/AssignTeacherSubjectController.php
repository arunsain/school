<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Subject;
use App\Assign_subject;



class AssignTeacherSubjectController extends Controller
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
           $user = Auth::guard('admin');
       $user = $user->user()->id;

     $getUser =   User::where('id',$user)->first();
     $teacher = User::where('role_id',2)->get();

     $subject = Subject::where('status',1)->get();

     $assignSubject = Assign_subject::get();

    // dd($assignSubject->getSubject);

     return view('admin.pages.assignSubjectToTeacher',compact('getUser','teacher','subject','assignSubject'));

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());


         $assignSubject =  Assign_subject::where('teacher_id',$request->teacher)->where('subject_id',$request->subject)->first();

         if($assignSubject === null){

             $assign =  Assign_subject::create([

            "teacher_id" => $request->teacher,
            "subject_id" => $request->subject,
            "description" => $request->desc

        ]);

              $notification = array(
                'message' => 'Subject Assign To Teacher Successfully',
                'alert-type' => 'success'
            );

               return  redirect('admin/assign-subject')->with($notification);

         }else{

            

             $notification = array(
                'message' => 'Subject Already Assign To Teacher',
                'alert-type' => 'error'
            );
return  redirect('admin/assign-subject')->with($notification);


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
