<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type',100);
            $table->string('category',100);
            $table->integer('status')->comment('0: inactive , 1:active');
            $table->timestamps();
        });

$cat =    DB::table('news_categories')->insert(['type' => 'news',"category" => 'news','status'=>1 ,'created_at' => now() ,'updated_at' => now()  ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_categories');
    }
}
