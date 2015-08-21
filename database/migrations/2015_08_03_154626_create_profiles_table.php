<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('dob');
            $table->string('hobbies');
            $table->string('most_memorable');
            $table->string('most_embarrassing');
            $table->string('future_plans');
            $table->string('best_food');
            $table->string('best_colour');
            $table->string('favourite_friends');
            $table->string('favourite_places');
            $table->string('parting_words');
            $table->string('gender');
            $table->string('religion');
            $table->string('music');
            $table->string('bkg_pic');
            $table->integer('user_id')->unsigned();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function($table){
            $table->dropForeign('profiles_user_id_foreign');
        });

        Schema::drop('profiles');
    }
}
