<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use App\PageMeta;
use App\User;
use Auth;
use Storage;
use Intervention\Image\Facades\Image;

class MainPageController extends Controller
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


        $page = Page::where('page_name','MAIN_PAGE')->first();
         return view('admin.pages.mainpage',compact('page','getUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

         echo "asaddd";
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
    public function update()
    {

        //dd(request()->all());

        $this->validateRule();

  //       {"firstImage":"uploads/xDHzmV1ET2nCzcZWANiulW6Pd33Daejp4FxebAFZ.jpeg"
  // ,"secondImage":"uploads/1VdSf6qe8nAAjZgiaiZmFYT1jb6O5L9EvRaicT7H.jpeg"
  //     ,"thirdImage":"uploads/xbDIuzk9ZxBgHQhTWWBFdBAXqim1Lq1TioeO6Vl5.jpeg"
  //     ,"fbLink":"https://www.facebook.com/"
  //     ,"twitLink":"https://twitter.com/"
  //    ,"gPlusLink":"http://google.com/"
  //           ,"lkdLink":"https://in.linkedin.com/"
  //     ,"address":"3768 Seabury Ct, Burlington, NC, 27215"
  //     ,"mobile":"+1 8910000891"
  //     ,"email":"email@pathshala.com"
  //     ,"time1":"MON - FRI 9:00 AM - 3:00 PM"
  //     ,"time2":" SAT 9:00 AM - 1:00 PM"}
        $array =[];

        $array['address'] =  request()->address;
        $array['mobile'] =  request()->mobile;
        $array['email'] =  request()->email;
        $array['time1'] =  request()->time1;
        $array['time2'] =  request()->time2;
        $array['fbLink'] =  request()->fbLink;
        $array['twitLink'] =  request()->twitLink;
        $array['gPlusLink'] =  request()->gPlusLink;
        $array['lkdLink'] =  request()->lkdLink;
        $array['firstImage'] =  request()->firstImageOld;
        $array['secondImage'] =  request()->secondImageOld;
        $array['thirdImage'] =  request()->thirdImageOld;



        





            //dd($array);
        if(request()->hasFile('firstImage')){



             //Get file from the browser 
                 $pathFirst = request()->file('firstImage');
                 // Resize and encode to required type
                 $imgFirst = Image::make($pathFirst)->fit(1920,1080)->encode();
                 //Provide the file name with extension 
                 $filenameFirst = time().rand().'.'.$pathFirst->getClientOriginalExtension();
                //Put file with own name
                Storage::put($filenameFirst, $imgFirst);
                //Move file to your location 
                Storage::move($filenameFirst, 'public/uploads/' . $filenameFirst);

                $array['firstImage'] = 'uploads/'.$filenameFirst;





             //  $array['firstImage'] =  request()->firstImage->store('uploads','public');
            }

            //  $image1 = Image::make(public_path('storage/'.$array['firstImage']))->fit(1920,1080);
            // $image1->save();

                 if(request()->hasFile('secondImage')){



                    //Get file from the browser 
                 $pathSecond = request()->file('secondImage');
                 // Resize and encode to required type
                 $imgSecond = Image::make($pathSecond)->fit(2048,1346)->encode();
                 //Provide the file name with extension 
                 $filenameSecond = time().rand(). '.' .$pathSecond->getClientOriginalExtension();
                //Put file with own name
                Storage::put($filenameSecond, $imgSecond);
                //Move file to your location 
                Storage::move($filenameSecond, 'public/uploads/' . $filenameSecond);

                $array['secondImage'] = 'uploads/'.$filenameSecond;








              // $array['secondImage'] = request()->secondImage->store('uploads','public');

            }
            //  $image2 = Image::make(public_path('storage/'.$array['secondImage']))->fit(2048,1346);
            // $image2->save();



            if(request()->hasFile('thirdImage')){


                    //Get file from the browser 
                 $pathThird = request()->file('thirdImage');
                 // Resize and encode to required type
                 $imgThird = Image::make($pathThird)->fit(1920,1023)->encode();
                 //Provide the file name with extension 
                 $filenameThird = time().rand(). '.' .$pathThird->getClientOriginalExtension();
                //Put file with own name
                Storage::put($filenameThird, $imgThird);
                //Move file to your location 
                Storage::move($filenameThird, 'public/uploads/' . $filenameThird);

                $array['thirdImage'] = 'uploads/'.$filenameThird;





               // $array['thirdImage'] = request()->thirdImage->store('uploads','public');

            }
           //  $image3 = Image::make(public_path('storage/'.$array['thirdImage']))->fit(1920,1023);
           // $image3->save();

            $jsonData = json_encode($array);

            //dd($jsonData);


            $affectedRows = PageMeta::where("page_id",request()->pageId)->update(["content" => $jsonData]);

            return redirect('admin/MainPage-create')->with('success','Data Update Successfully !');



        //
    }

    private function validateRule(){

        return tap(request()->validate([

"address" => 'required|max:150',
  // "mobile" => 'required|regex:/(01)[0-9]{9}/',
"mobile" => 'required',
  "email" => 'required|email|max:50',
  "time1" => 'required|max:100',
  "time2" => 'required|max:50',
  "fbLink" => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
  "twitLink" => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
  "gPlusLink" => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
  "lkdLink" => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',





        ]),function(){
            if(request()->hasFile('firstImage')){
                request()->validate([
                'firstImage' => 'file|image|max:2000',
            ]);

            }
            if(request()->hasFile('secondImage')){
                request()->validate([
                'secondImage' => 'file|image|max:2000'
                 ]);

            }

            if(request()->hasFile('thirdImage')){
                request()->validate([
                'thirdImage' => 'file|image|max:2000'

                 ]);

            }

        });

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
