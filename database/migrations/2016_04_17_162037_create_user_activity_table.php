<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_activity',function(Blueprint $table){           
            $table->softDeletes();
            $table->timestamps();
        }
        );
        
        Schema::table('user_activity', function ($table) {
            $table->integer('system_files_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('activity_id')->unsigned();
            
            $table->primary(['system_files_id','user_id','activity_id']);
            
            $table->foreign('system_files_id')->references('id')->on('system_files');
            $table->foreign('user_id')->references('id')->on('User');
            $table->foreign('activity_id')->references('id')->on('activity');
            
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_activity');
    }
}
