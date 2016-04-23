<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_course',function(Blueprint $table){            
            $table->boolean('is_active');            
            $table->softDeletes();
            $table->timestamps();
        }
        );
        
        Schema::table('user_course', function ($table) {
            $table->integer('user_id')->unsigned();
            $table->integer('course_id')->unsigned();;
            $table->foreign('user_id')->references('id')->on('User');
            $table->foreign('course_id')->references('id')->on('course');
            $table->primary(['user_id','course_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_course');
    }
}
