<?php

namespace App\Http\Controllers\Admin;
use Auth;
use App\UserDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\User;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
  {
    $this->middleware('auth:admin');
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
       
         ///$userDetail =  UserDetail::where('user_id',$user)->get();
        return view('admin.pages.updateAdmin',compact('getUser'));
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
      //   $request->validate([

      //       "name" => "required",
      //     "dateOfBirth" => "required",
      //     "gender" => "required",
      //     "religion" => "required",
      //     "address1" => "required",
      //     "address2" => "required",
      //     "country" => "required",
      //     "state" => "required",
      //     "zip" => "required",
      //     "phone" => "required",
      //     "alternatePhone" => "required",
      //     "email" => "required",
      //     "degree.*" => "required",
      //     "university.*" => "required",
      //     "yearPassed.*" => "required",
      //     "CGPA.*" => "required",


      //   ]);


        $array = [


           // "name" => $request->name,
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
          "highestDegree" => $request->highestDegree,
          "highestUniversity" => $request->highestUniversity,
          "highestYearPassed" => $request->highestYearPassed,
          "highestCGPA" => $request->highestCGPA,
          "image" => $request->oldImage,




        ];
    //    dd($array);

         if($request->hasFile('image')){
                $array['image'] = request()->image->store('uploads','public');
                $image3 = Image::make(public_path('storage/'.$array['image']))->fit(882,1158);
            $image3->save();

            }

         


 $jsonData =  json_encode($array);
$affectedRows = UserDetail::where("user_id",$request->userId)->update(["content" => $jsonData]);

return redirect('/admin/principal-update')->with('success','Update Admin Profile Successfully !');



       





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
