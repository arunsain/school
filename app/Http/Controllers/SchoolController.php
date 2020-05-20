<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Page;
use App\User;
use App\NewsCategory;
use App\NewsContent;
use App\Gallery;

class SchoolController extends Controller
{
    //

    public function index(){

    	$newsCategory = NewsCategory::where('status',1)->get();


    	//dd($newsCategory->limitContent);



    	$banner = Banner::where('status',1)->get();
    	//$page = Page::where('id',1)->first();
    	$user = User::where('id',1)->first();
    	//dd($banner);
    	

    	return view('fronthtml.pages.indexFront',compact('banner','user','newsCategory'));
    }

    public function events(){

       // dd(request()->id);
        $category = NewsCategory::all();
       // $page = Page::where('id',1)->first();
        if(request()->cat_id == 'all'){
             $getAllEvent =  NewsContent::simplePaginate(5);
         }else{
       $getAllEvent =  NewsContent::where('news_category_id',request()->cat_id)->simplePaginate(5);


   }
     $pageEvent = Page::where('page_name','EVENT_PAGE')->first();
         return view('fronthtml.pages.events',compact('getAllEvent','category','pageEvent'));
    }

      public function singleEvents($id){
 $pageEvent = Page::where('page_name','EVENT_PAGE')->first();
         $category = NewsCategory::all();
      //  $page = Page::where('id',1)->first();
        $getAllEvent =  NewsContent::where('id',$id)->first();

        return view('fronthtml.pages.singleEvent',compact('category','getAllEvent','pageEvent'));

      }



      public function admission(){
// $page = Page::where('id',1)->first();
// $page_admission = Page::where('id',1)->first();
        $pageAdmission = Page::where('page_name','ADMISSION_PAGE')->first();
        return view('fronthtml.pages.admission',compact('pageAdmission'));
      }


        public function gallery(){
 //$page = Page::where('id',1)->first();
 $pageGallery =  Page::where('page_name','GALLERY_PAGE')->first();
  $gallery = Gallery::all();
        //s$pageAdmission = Page::where('page_name','ADMISSION_PAGE')->first();
        return view('fronthtml.pages.gallery',compact('gallery','pageGallery'));
      }


       public function about(){
/// $page = Page::where('id',1)->first();
 $user = User::where('id',1)->first();
 $pageAbout =  Page::where('page_name','ABOUT_PAGE')->first();
  //$gallery = Gallery::all();
        //s$pageAdmission = Page::where('page_name','ADMISSION_PAGE')->first();
        return view('fronthtml.pages.aboutUs',compact('pageAbout','user'));
      }


       public function contact(){

     // $newsCategory = NewsCategory::where('status',1)->get();


      //dd($newsCategory->limitContent);



      //$banner = Banner::where('status',1)->get();
   //   $page = Page::where('id',1)->first();
      $user = User::where('id',1)->first();
       $pageContact =  Page::where('page_name','CONTACT_PAGE')->first();
      //dd($pageContact);
      

      return view('fronthtml.pages.contactUs',compact('user','pageContact'));
    }
    
}
