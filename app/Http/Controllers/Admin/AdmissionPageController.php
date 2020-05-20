<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Page;
use Auth;
use Storage;
 use App\PageMeta;
use Intervention\Image\Facades\Image;

class AdmissionPageController extends Controller
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
      $page = Page::where('id',2)->first();

        return view('admin.pages.addAdmission',compact('getUser','page'));                                
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
        //dd($request->all());
$arrayData = [
        "title" => $request->title,
  "sectionTitle1" => $request->sectionTitle1,
  "sectionDesc1" => $request->sectionDesc1,
  "sectionTitle2" => $request->sectionTitle2,
  "sectionDesc2" => $request->sectionDesc2,
  "sectionTitle3" => $request->sectionTitle3,
  "sectionDesc3" => $request->sectionDesc3,
  "sectionTitle4" => $request->sectionTitle4,
  "sectionDesc4" => $request->sectionDesc4,
  "youtubeLink" => $request->youtubeLink,
  "infoTitle" => $request->infoTitle,
  "infoDesc" => $request->infoDesc,
  "question" => $request->question,
  "answere" => $request->answere,
   "imageMain" => $request->oldImageMain,
   "imageMiddle" => $request->oldImageMiddle,
   // "oldImageMain" => 
   // "oldImageMiddle" => 
];


if($request->hasFile('imageMain')){



       //Get file from the browser 
                 $path= request()->file('imageMain');
                 // Resize and encode to required type
                 $imgFirst = Image::make($path)->fit(2200,660)->encode();
                 //Provide the file name with extension 
                 $filenameFirst = time().rand(). '.' .$path->getClientOriginalExtension();
                //Put file with own name
                Storage::put($filenameFirst, $imgFirst);
                //Move file to your location 
                Storage::move($filenameFirst, 'public/uploads/' . $filenameFirst);

                $arrayData['imageMain'] = 'uploads/'.$filenameFirst;
}


if(request()->hasFile('imageMiddle')){



       //Get file from the browser 
                 $path1 = request()->file('imageMiddle');
                 // Resize and encode to required type
                 $imgFirst1 = Image::make($path1)->fit(2200,888)->encode();
                 //Provide the file name with extension 
                 $filenameFirst1 = time().rand(). '.' .$path1->getClientOriginalExtension();
                //Put file with own name
                Storage::put($filenameFirst1, $imgFirst1);
                //Move file to your location 
                Storage::move($filenameFirst1, 'public/uploads/' . $filenameFirst1);

                $arrayData['imageMiddle'] = 'uploads/'.$filenameFirst1;
}

 $jsonData = json_encode($arrayData);
$affectedRows = PageMeta::where("page_id",$request->pageId)->update(["content" => $jsonData]);

            return redirect('admin/add-admission')->with('success','Data Update Successfully !');



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
