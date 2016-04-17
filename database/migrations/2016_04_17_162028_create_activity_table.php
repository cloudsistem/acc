<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity',function(Blueprint $table){
            $table->increments('id');
            $table->string('title',100);
            $table->text('description');
            $table->double('hours',4,2);
            $table->double('hours_max',4,2);                      
            $table->timestamps();
            $table->softDeletes();            
        }
        );
        
        
        Schema::table('activity', function ($table) {
            $table->integer('score_id')->unsigned();
            $table->integer('activity_group_id')->unsigned();
            $table->integer('course_id')->unsigned(); 
            
            $table->foreign('score_id')->references('id')->on('score');
            $table->foreign('activity_group_id')->references('id')->on('activity_group');
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
        Schema::drop('activity');
    }
}
