<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use App\PageMeta;
use App\User;
use App\NewsCategory;
use App\NewsContent;
use Auth;
use Storage;
use Intervention\Image\Facades\Image;

class EventsContentController extends Controller
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
     $newsCategory = NewsCategory::where('type','events')->get();
        //
        return view('admin.pages.addEventsContent',compact('getUser','newsCategory'));
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
     //  dd($request->all());

   $array =     [ "title" => $request->title,
  "catId" => $request->catId,
  "eventdate" => $request->eventdate,
  "eventLocation" => $request->eventLocation,
  "eventTime" => $request->eventTime,
  "description" => $request->description,
  "scheduleDec" => $request->scheduleDec,
  "sheduleHead" => $request->sheduleHead,
  "sheduleContent" => $request->sheduleContent,
  "eventImage" => "",
  "thumbnailEventImage" => "",
  "sideImage" => $request->sideImage,
];


  if(request()->hasFile('eventImage')){



       //Get file from the browser 
                 $path= request()->file('eventImage');
                 // Resize and encode to required type
                 $imgFirst = Image::make($path)->fit(1920,897)->encode();
                 //Provide the file name with extension 
                 $filenameFirst = time(). '.' .$path->getClientOriginalExtension();
                //Put file with own name
                Storage::put($filenameFirst, $imgFirst);
                //Move file to your location 
                Storage::move($filenameFirst, 'public/uploads/' . $filenameFirst);

                $array['eventImage'] = 'uploads/'.$filenameFirst;


                //$path= request()->file('eventImage');
                 // Resize and encode to required type
                 $imgSecond = Image::make($path)->fit(400,266)->encode();
                 //Provide the file name with extension 
                 $filenameSecond = time().'_thumnail'. '.' .$path->getClientOriginalExtension();
                //Put file with own name
                Storage::put($filenameSecond, $imgSecond);
                //Move file to your location 
                Storage::move($filenameSecond, 'public/uploads/' . $filenameSecond);

                $array['thumbnailEventImage'] = 'uploads/'.$filenameSecond;


                // $path= request()->file('eventImage');
                 // Resize and encode to required type
               

               // dd('upload');
                //now insert into database 
                //$inserts->webinarphoto = $filename;


                //   //Get file from the browser 
                //  $path= request()->file('eventImage');
                //  // Resize and encode to required type
                //  $img = Image::make($path)->fit(500,500)->encode();
                //  //Provide the file name with extension 
                //  $filename = time(). '.' .$path->getClientOriginalExtension();
                // //Put file with own name
                // Storage::put($filename, $img);
                // //Move file to your location 
                // Storage::move($filename, 'public/storage/thumnail/' . $filename);
                // //now insert into database 
                // $inserts->webinarphoto = $filename;








            //    $array['eventImage'] =  request()->eventImage->store('uploads','public');

            //      $image1 = Image::make(public_path('storage/'.$array['eventImage']))->fit(1920,897);
            // $image1->save();

            //   $array['thumbnailEventImage'] =  request()->eventImage->store('uploads','public');
            //    $image2 = Image::make(public_path('storage/'.$array['thumbnailEventImage']))->fit(400,266);
            // $image2->save();




            }



             if(request()->hasFile('sideImage')){

               $pathSideImage= request()->file('sideImage');

                $imgSideImage = Image::make($path)->fit(840,1115)->encode();
                 //Provide the file name with extension 
                 $filenameSideImage = time().'_side_image'. '.' .$pathSideImage->getClientOriginalExtension();
                //Put file with own name
                Storage::put($filenameSideImage, $imgSideImage);
                //Move file to your location 
                Storage::move($filenameSideImage, 'public/uploads/' . $filenameSideImage);
              // $array['sideImage'] =  request()->sideImage->store('uploads','public');


               $array['sideImage'] = 'uploads/'.$filenameSideImage;

            //      $image3 = Image::make(public_path('storage/'.$array['sideImage']))->fit(840,1115);
            // $image3->save();
              //  dd('upload3');
            }

            //  $image1 = Image::make(public_path('storage/'.$array['firstImage']))->fit(1920,1080);
            // $image1->save();

   $jsonData = json_encode($array);

        $newsContent = new NewsContent;

        $newsContent->news_content = $jsonData;
        $newsContent->news_category_id = $request->catId;
         $newsContent->save();

         return redirect('admin/eventscontent-create')->with('success','Event Contents  add successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {  //

         $page = Page::where('page_name','EVENT_PAGE')->first();
          $user = Auth::guard('admin');
       $user = $user->user()->id;

     $getUser =   User::where('id',$user)->first();


        return view('admin.pages.eventPage',compact('getUser','page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {



           // dd($request->all());
       $dataArray = [ 
       // "oldGalleryImage" => $request->oldGalleryImage,
  //"pageId" => "1"
  "title" => $request->title,
  "eventImage" => $request->oldEventImage
];


 if(request()->hasFile('eventImage')){



       //Get file from the browser 
                 $path= request()->file('eventImage');
                 // Resize and encode to required type
                 $imgFirst = Image::make($path)->fit(2200,660)->encode();
                 //Provide the file name with extension 
                 $filenameFirst = time().'contact'.'.' .$path->getClientOriginalExtension();
                //Put file with own name
                Storage::put($filenameFirst, $imgFirst);
                //Move file to your location 
                Storage::move($filenameFirst, 'public/uploads/' . $filenameFirst);
             //   dd($filenameFirst);

                $dataArray['eventImage'] = 'uploads/'.$filenameFirst;

     }

     $jsonData =  json_encode($dataArray);


            $affectedRows = PageMeta::where("page_id",request()->pageId)->update(["content" => $jsonData]);

            return redirect('admin/eventscontent-show')->with('success','Data Update Successfully !');
      
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
