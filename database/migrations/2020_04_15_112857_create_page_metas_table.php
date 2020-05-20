<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_metas', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->unsignedTinyInteger('page_id');
           $table->bigInteger('page_id')->unsigned();
             //$table->bigIncrements('id');
            $table->text('content');
            $table->timestamps();
              $table->foreign('page_id')->references('id')->on('pages');
           
        });

        DB::table('pages')->insert(['page_name' => 'MAIN_PAGE',"description" => 'Main page data','created_at' => now() ,'updated_at' => now()  ]);
         DB::table('page_metas')->insert(['page_id' =>1,"content" => '{"address":"3768 Seabury Ct, Burlington, NC, 27215","mobile":"+1 8910000891","email":"email@pathshala.com","time1":"MON - FRI 9:00 AM - 3:00 PM","time2":"SAT 9:00 AM - 1:00 PM","fbLink":"https:\/\/www.facebook.com\/","twitLink":"https:\/\/twitter.com\/","gPlusLink":"http:\/\/google.com\/","lkdLink":"https:\/\/in.linkedin.com\/","firstImage":"demo\/15879687591051284382.webp","secondImage":"demo\/15879687591402005238.jpg","thirdImage":"demo\/15879687601259057840.jpg"}','created_at' => now() ,'updated_at' => now()  ]);


           DB::table('pages')->insert(['page_name' => 'ADMISSION_PAGE',"description" => 'Admission page data','created_at' => now() ,'updated_at' => now()  ]);
         DB::table('page_metas')->insert(['page_id' => 2 ,"content" => '{"title":"ADMISSIONS","sectionTitle1":"WINNER BEST SCHOOL AWARD","sectionDesc1":"It is a long established fact that a reader will be distracted by the content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the content.","sectionTitle2":"COMPETITION WON","sectionDesc2":"It is a long established fact that a reader will be distracted.","sectionTitle3":"VOLUNTEER HOURS","sectionDesc3":"It is a long established fact that a reader will be distracted.","sectionTitle4":"SUCCESS RATE","sectionDesc4":"It is a long established fact that a reader will be distracted.","youtubeLink":"https:\/\/www.youtube.com\/embed\/054bszkOk_Y","infoTitle":"WHY PATHSHALA?","infoDesc":"Lorem Ipsum is simply dummy text of the printing and typesetting industry","question":["Why you should choose Pathshala?","What Pathshala Offers?","How Pathshala is different?"],"answere":["Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. s","Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi vg.","Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam misss."],"imageMain":"demo\/15879705261373032624.jpg","imageMiddle":"demo\/15879703052001147301.jpg"}','created_at' => now() ,'updated_at' => now()  ]);


           DB::table('pages')->insert(['page_name' => 'GALLERY_PAGE',"description" => 'Gallery page data','created_at' => now() ,'updated_at' => now()  ]);
         DB::table('page_metas')->insert(['page_id' => 3 ,"content" => '{"title":"CAMPUS GALLERY","galleryImage":"demo\/15879717671713005749galleryMain.jpg"}','created_at' => now() ,'updated_at' => now()  ]);


            DB::table('pages')->insert(['page_name' => 'ABOUT_PAGE',"description" => 'About page data','created_at' => now() ,'updated_at' => now()  ]);
         DB::table('page_metas')->insert(['page_id' => 4 ,"content" => '{"pageTitle":"ABOUT US","title":"WHAT WE OFFER","description":"Lorem Ipsum is simply dummy text of the printing and typesetting industry","courseName1":"EDUCATION","coureseDesc1":"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.","courseName2":"SPORTS","coureseDesc2":"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.","courseName3":"LIBRARY","coureseDesc3":"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.","firstImage":"demo\/1587977654_about1.jpg","secondImage":"demo\/1587977654_about2.jpg"}','created_at' => now() ,'updated_at' => now()  ]);


            DB::table('pages')->insert(['page_name' => 'CONTACT_PAGE',"description" => 'Contact page data','created_at' => now() ,'updated_at' => now()  ]);
         DB::table('page_metas')->insert(['page_id' => 5 ,"content" => '{"title":"GET IN TOUCH","contactImage":"demo\/15879717671713005749galleryMain.jpg"}','created_at' => now() ,'updated_at' => now()  ]);

              DB::table('pages')->insert(['page_name' => 'Event_PAGE',"description" => 'Event page data','created_at' => now() ,'updated_at' => now()  ]);
         DB::table('page_metas')->insert(['page_id' => 6 ,"content" => '{"title":"EVENTS","eventImage":"demo\/1587982991contact.jpg"}','created_at' => now() ,'updated_at' => now()  ]);

       

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_metas');
    }
}
