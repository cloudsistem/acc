<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_files', function(Blueprint $table){
            $table->increments('id');
            $table->string('disk_name',255);
            $table->string('file_name',255);
            $table->string('content_type',255);
            $table->timestamps();
            $table->softDeletes();
        }
        );
        
        Schema::table('system_files', function ($table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('User');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('system_files');
    }
}
