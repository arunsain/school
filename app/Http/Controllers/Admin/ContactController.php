<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\User;
use Auth;
use Storage;
use App\Page;
use App\PageMeta;

class ContactController extends Controller
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

         $page = Page::where('page_name','CONTACT_PAGE')->first();
          $user = Auth::guard('admin');
       $user = $user->user()->id;

     $getUser =   User::where('id',$user)->first();
        return view('admin.pages.contactContent',compact('getUser','page'));
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
          //

           // dd($request->all());
       $dataArray = [ 
       // "oldGalleryImage" => $request->oldGalleryImage,
  //"pageId" => "1"
  "title" => $request->title,
  "contactImage" => $request->oldContactImage
];


 if(request()->hasFile('contactImage')){



       //Get file from the browser 
                 $path= request()->file('contactImage');
                 // Resize and encode to required type
                 $imgFirst = Image::make($path)->fit(2200,660)->encode();
                 //Provide the file name with extension 
                 $filenameFirst = time().'contact'.'.' .$path->getClientOriginalExtension();
                //Put file with own name
                Storage::put($filenameFirst, $imgFirst);
                //Move file to your location 
                Storage::move($filenameFirst, 'public/uploads/' . $filenameFirst);
             //   dd($filenameFirst);

                $dataArray['contactImage'] = 'uploads/'.$filenameFirst;

     }

     $jsonData =  json_encode($dataArray);


            $affectedRows = PageMeta::where("page_id",request()->pageId)->update(["content" => $jsonData]);

            return redirect('admin/contact-create')->with('success','Data Update Successfully !');
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
