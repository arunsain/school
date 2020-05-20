<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_classes', function (Blueprint $table) {
              $table->bigIncrements('id');
             $table->integer('class');
            $table->string('class_section');
            $table->unsignedBigInteger('teacher_id');
            $table->text('description');
            $table->integer('status');
             $table->timestamps();
              $table->foreign('teacher_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_classes');
    }
}
