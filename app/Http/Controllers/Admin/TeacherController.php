<?php

namespace App\Http\Controllers\Admin;
use App\Events\Admin\TeacherEvent;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
use App\Page;
use App\PageMeta;
use App\User;
use App\UserDetail;
use Auth;

class TeacherController extends Controller
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
        $user = Auth::guard('admin');
       $user = $user->user()->id;


     $getUser =   User::where('id',$user)->first();
     $allTeacher =   User::where('role_id',2)->get();
     //dd($allTeacher);
      return view('admin.pages.teacherList',compact('getUser','allTeacher'));
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
        //
        return view('admin.pages.addTeacher',compact('getUser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //Hash::make($request->newPassword)
        //dd($request->all());


         $user = new User;

    $user->name = $request->name;
    $user->email = $request->email;
    $user->role_id = 2;
    $user->password = Hash::make('123456789');
    $user->save();

         $array = [


            //"name" => $request->name,
          "dateOfBirth" => $request->dateOfBirth,
          "gender" => $request->gender,
          "religion" => $request->religion,
          "address1" => $request->address1,
          "address2" => $request->address2,
          "country" => $request->country,
          "state" => $request->state,
          "zip" => $request->zip,
          "phone" => $request->phone,
          "alternatePhone" => $request->alternatePhone,
         // "email" => $request->email,
          "degree" => $request->degree,
          "university" => $request->university,
          "yearPassed" => $request->yearPassed,
          "CGPA" => $request->CGPA,
          "aboutUs" => $request->aboutUs,
          "facebook" => $request->facebook,
          "googlePlus" => $request->googlePlus,
         "linkedin" => $request->linkedin,
          "highestDegree" => $request->highestDegree,
          "highestUniversity" => $request->highestUniversity,
          "highestYearPassed" => $request->highestYearPassed,
          "highestCGPA" => $request->highestCGPA,
          //"image" => $request->oldImage,




        ];
    //    dd($array);

         if($request->hasFile('image')){
                $array['image'] = request()->image->store('uploads','public');
                $image3 = Image::make(public_path('storage/'.$array['image']))->fit(882,1158);
            $image3->save();

            }


           

$jsonData =  json_encode($array);

       $userDetail = new UserDetail;

    //$userDetail->name = $request->name,
    $userDetail->user_id = $user->id;
    $userDetail->content = $jsonData;
    $userDetail->save();
$user->randomPassword = '123456789';
$user->urlLink = $request->root()."/teacher/login";
    event(new TeacherEvent($user));

         


 
//$affectedRows = UserDetail::where("user_id",$request->userId)->update(["content" => $jsonData]);

return redirect('/admin/teacher-create')->with('success','Add Teacher Successfully !');
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
