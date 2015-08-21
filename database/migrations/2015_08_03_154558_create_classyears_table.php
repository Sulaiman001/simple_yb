<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassyearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classyears', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('class_name')->unique();
            $table->integer('num_of_members');
            $table->string('bk_cover_pic');
            $table->string('bk_music_file');
            $table->string('privacy_mode');
            $table->string('settings');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('classyears');
    }
}
