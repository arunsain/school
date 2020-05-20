<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\User;
use Auth;
use App\Gallery;
use Storage;
use Yajra\Datatables\Facades\Datatables;
use App\Page;
use App\PageMeta;

class GalleryController extends Controller
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

         return datatables()->of(Gallery::latest()->get())
                    ->addColumn('action', function($data){
                       
                        $button = '<button type="button" data-id="'.$data->id.'" class="deleteGallery btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
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


       // $page = Page::where('id',1)->first();
        return view('admin.pages.addGallery',compact('getUser'));
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

       // $image = $request->file('file');






             $pathFirst= request()->file('file');
                 // Resize and encode to required type
                 $imgFirst = Image::make($pathFirst)->fit(400,266)->encode();
                 //Provide the file name with extension 
                 $filenameFirst = time()."orginal". '.' .$pathFirst->getClientOriginalExtension();
                //Put file with own name
                Storage::put($filenameFirst, $imgFirst);
                //Move file to your location 
                Storage::move($filenameFirst, 'public/uploads/' . $filenameFirst);


                $pathSecond= request()->file('file');
                 // Resize and encode to required type
                 $imgSecond = Image::make($pathSecond)->fit(400,266)->encode();
                 //Provide the file name with extension 
                 $filenameSecond = time()."thumbnail". '.' .$pathSecond->getClientOriginalExtension();
                //Put file with own name
                Storage::put($filenameSecond, $imgSecond);
                //Move file to your location 
                Storage::move($filenameSecond, 'public/uploads/' . $filenameSecond);



        // $imageName = $image->getClientOriginalName();
        // $image->move(public_path('images'),$imageName);
        
        $imageUpload = new Gallery();
        $imageUpload->image = '/uploads/'.$filenameFirst;
         $imageUpload->thumbnail_image =  '/uploads/'.$filenameSecond;
        $imageUpload->save();
        return response()->json(['success'=>$filenameFirst]);
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
    public function update(Request $request)
    {
        //
       // dd($request->all());
       $dataArray = [ 
       // "oldGalleryImage" => $request->oldGalleryImage,
  //"pageId" => "1"
  "title" => $request->title,
  "galleryImage" => $request->oldGalleryImage
];


 if(request()->hasFile('galleryImage')){



       //Get file from the browser 
                 $path= request()->file('galleryImage');
                 // Resize and encode to required type
                 $imgFirst = Image::make($path)->fit(2200,660)->encode();
                 //Provide the file name with extension 
                 $filenameFirst = time().rand().'galleryMain'.'.' .$path->getClientOriginalExtension();
                //Put file with own name
                Storage::put($filenameFirst, $imgFirst);
                //Move file to your location 
                Storage::move($filenameFirst, 'public/uploads/' . $filenameFirst);
             //   dd($filenameFirst);

                $dataArray['galleryImage'] = 'uploads/'.$filenameFirst;

     }

     $jsonData =  json_encode($dataArray);


            $affectedRows = PageMeta::where("page_id",request()->pageId)->update(["content" => $jsonData]);

            return redirect('admin/gallery-content')->with('success','Data Update Successfully !');





    }

     public function content()
    {

        $page = Page::where('page_name','GALLERY_PAGE')->first();
          $user = Auth::guard('admin');
       $user = $user->user()->id;

     $getUser =   User::where('id',$user)->first();
        return view('admin.pages.galleryContent',compact('getUser','page'));
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
       // echo $id;
        $flight = Gallery::find($id);

        $flight->delete();
    }
}
