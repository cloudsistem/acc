<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_project',function(Blueprint $table){
            $table->increments('id');           
            $table->double('hours_min',4,2);
            $table->timestamps();
            $table->softDeletes();
        }
        );
        
        Schema::table('course_project', function ($table) {
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('course');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('course_project');
    }
}
