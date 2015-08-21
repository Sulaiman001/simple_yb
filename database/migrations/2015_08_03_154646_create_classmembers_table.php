<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassmembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classmembers', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('classyear_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('approved');
            $table->timestamps();

            $table->foreign('classyear_id')->references('id')->on('classyears')->onDelete('cascade');
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
        Schema::drop('classmembers');
    }
}
