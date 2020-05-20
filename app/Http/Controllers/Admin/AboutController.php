<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use App\User;
use Auth;
use App\PageMeta;
use Storage;
use Intervention\Image\Facades\Image;


class AboutController extends Controller
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
        $page = Page::where('page_name','ABOUT_PAGE')->first();
     $getUser =   User::where('id',$user)->first();
        return view('admin.pages.addAbout',compact('getUser','page'));
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

       // dd($request->all());
    $array =  [
        //"firstImageOld" => $request-> ,
  //"secondImageOld" => $request-> ,
 // "pageId" => $request->pageId,
  "pageTitle" => $request->pageTitle,
  "title" => $request->title,
  "description" => $request->description,
  "courseName1" => $request->courseName1,
  "coureseDesc1" => $request->coureseDesc1,
  "courseName2" => $request->courseName2,
  "coureseDesc2" => $request->coureseDesc2,
  "courseName3" => $request->courseName3,
  "coureseDesc3" => $request->coureseDesc3,
  "firstImage" => $request->firstImageOld,
  "secondImage" => $request->secondImageOld,
];


    if(request()->hasFile('firstImage')){



       //Get file from the browser 
                 $pathFirst = request()->file('firstImage');
                 // Resize and encode to required type
                 $imgFirst = Image::make($pathFirst)->fit(2200,660)->encode();
                 //Provide the file name with extension 
                 $filenameFirst = time().'_about1'.'.' .$pathFirst->getClientOriginalExtension();
                //Put file with own name
                Storage::put($filenameFirst, $imgFirst);
                //Move file to your location 
                Storage::move($filenameFirst, 'public/uploads/' . $filenameFirst);

                $array['firstImage'] = 'uploads/'.$filenameFirst;

    }

     if(request()->hasFile('secondImage')){
                //$path= request()->file('eventImage');
                 // Resize and encode to required type
         $pathSecond = request()->file('secondImage');
                 $imgSecond = Image::make($pathSecond)->fit(2200,888)->encode();
                 //Provide the file name with extension 
                 $filenameSecond = time().'_about2'. '.' .$pathSecond->getClientOriginalExtension();
                //Put file with own name
                Storage::put($filenameSecond, $imgSecond);
                //Move file to your location 
                Storage::move($filenameSecond, 'public/uploads/' . $filenameSecond);

                $array['secondImage'] = 'uploads/'.$filenameSecond;



    }


     $jsonData =  json_encode($array);


            $affectedRows = PageMeta::where("page_id",request()->pageId)->update(["content" => $jsonData]);

            return redirect('admin/about-create')->with('success','Data Update Successfully !');


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
