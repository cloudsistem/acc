<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function(Blueprint $table){
            $table->increments('id');           
            $table->string('email',100)->unique();
            $table->string('password',60);
            $table->string('username',45)->unique();
            $table->softDeletes();
            $table->timestamps();      
        }
        );
        
        Schema::table('account', function ($table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('account');
    }
}
