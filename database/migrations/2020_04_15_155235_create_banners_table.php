<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',200);
            $table->string('short_desc',300);
            $table->string('description',500);
            $table->tinyInteger('status')->comment('0: inactive , 1: active');;
             $table->string('image',500)->nullable();
            $table->timestamps();
        });

          DB::table('banners')->insert(['title' => 'WE ARE BEST',"short_desc" => 'GIVE BOOST TO YOUR CHILD','description'=>'<p>We here at&nbsp;<strong>PATHSHALA</strong>&nbsp;provides best education<br />
to your little one</p>','status'=>'1','image'=>'demo/15879674681312252266.jpg','created_at' => now() ,'updated_at' => now()  ]);
           DB::table('banners')->insert(['title' => 'WE ARE BEST',"short_desc" => 'LET YOUR CHILD GROW','description'=>'<p>We here at&nbsp;<strong>PATHSHALA</strong>&nbsp;provides best education<br />
to your little one</p>','status'=>'1','image'=>'demo/15879673361828840002.jpg','created_at' => now() ,'updated_at' => now()  ]);
            DB::table('banners')->insert(['title' => 'WE ARE BEST',"short_desc" => 'CHOOSE BEST FOR YOUR CHILD','description'=>'<p>We here at&nbsp;<strong>PATHSHALA</strong>&nbsp;provides best education<br />
to your little one</p>','status'=>'1','image'=>'demo/15879672101486894009.jpg','created_at' => now() ,'updated_at' => now()  ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
