<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->bigInteger('user_id')->unsigned();
            $table->text('content');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });

      $roll =    DB::table('roles')->insert(['nickname' => 'admin',"name" => 'Admin','created_at' => now() ,'updated_at' => now()  ]);
         


       $user_id =  DB::table('users')->insert(['name' => 'admin',"password" => '$2y$10$YcHPH83H/xtDFOYqIbHrnui4M87BvRi1.XqdqA0OITFiL3alDWgJG',"email" => 'arunsain3@gmail.com',"role_id" => $roll,'created_at' => now() ,'updated_at' => now()  ]);

         DB::table('user_details')->insert(['user_id' => $user_id,"content" => '{"name":"admin","dateOfBirth":"04\/07\/2020","gender":"Female","religion":"Christian","address1":"H\/N 42 Street# 10","address2":"H\/N 42 Street# 10","country":"India","state":"British Columbia","zip":"90890","phone":"1234567890","alternatePhone":"1234567890","email":"arunsain3@gmail.com","degree":["wldwelwemqlmflf"],"university":["Harvard"],"yearPassed":["2005"],"CGPA":["ewf,mwfklefkwf"],"aboutUs":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.","highestDegree":"dwecwecwe","highestUniversity":"Harvard","highestYearPassed":"2006","highestCGPA":"dwecwecwe","image":"demo/n2pahCnpvenCJcyYsDHtU5ZWrIYFPMxgsCCxmw0o.jpeg"}','created_at' => now() ,'updated_at' => now()  ]);

         DB::table('roles')->insert(['nickname' => 'teacher',"name" => 'Teacher','created_at' => now() ,'updated_at' => now()  ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
