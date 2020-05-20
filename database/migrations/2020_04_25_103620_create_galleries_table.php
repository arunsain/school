<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('image',300);
             $table->string('thumbnail_image',300);
            $table->timestamps();
        });

        $data = [
    ['image'=>'/demo/1587976010orginal.jpg', 'thumbnail_image'=>'/demo/1587976010orginal.jpg','created_at' => now() ,'updated_at' => now() ],
    ['image'=>'/demo/1587976002orginal.jpg', 'thumbnail_image'=> '/demo/1587976002orginal.jpg','created_at' => now() ,'updated_at' => now()],
     ['image'=>'/demo/1587976018orginal.jpg', 'thumbnail_image'=> '/demo/1587976018orginal.jpg','created_at' => now() ,'updated_at' => now()],
    ['image'=>'/demo/1587976026orginal.jpeg', 'thumbnail_image'=>'/demo/1587976026orginal.jpeg','created_at' => now() ,'updated_at' => now()],
    //...
];

                 DB::table('galleries')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}
