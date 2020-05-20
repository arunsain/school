<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Banner;
use Auth;
use App\User;
use Storage;


class BannerController extends Controller
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

          $user = Auth::guard('admin');
       $user = $user->user()->id;

     $getUser =   User::where('id',$user)->first();
        //
         $banner = Banner::all();
        //print_r($banner);
        //die();
        return view('admin.pages.banner',compact('banner','getUser'));
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

        return view('admin.pages.addBanner',compact('getUser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        
        $this->validateRequest();
        $banner = new Banner;
        $banner->title = request()->title;
        $banner->short_desc = request()->shortDescription;
        $banner->description = request()->editor1;
        $banner->status = 1;
        $banner->save();

        $this->storeImage($banner);

        return redirect('admin/banner-create')->with('success','Banner Add Successfully');



    }

    private function validateRequest(){

        return  request()->validate([

            "title" => 'required',
            "shortDescription" => 'required|max:150',
            "editor1" => 'required|max:400',
            "bannerImage" =>'image|required|mimes:jpeg,jpg|max:3000',
        ]);

    }


    public function storeImage($banner){

        if(request()->has('bannerImage')){




             $path= request()->file('bannerImage');
                 // Resize and encode to required type
                 $imgFirst = Image::make($path)->fit(1920,990)->encode();
                 //Provide the file name with extension 
                 $filenameFirst = time().rand(). '.' .$path->getClientOriginalExtension();
                //Put file with own name
                Storage::put($filenameFirst, $imgFirst);
                //Move file to your location 
                Storage::move($filenameFirst, 'public/uploads/' . $filenameFirst);

                //$array['eventImage'] = 'uploads/'.$filenameFirst;




            $banner->update([

                "image" => 'uploads/'.$filenameFirst,

            ]);
            //dd($banner->image);

            // $image = Image::make('storage/'.$banner->image)->fit(1920,990);
            // $image->save();

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
