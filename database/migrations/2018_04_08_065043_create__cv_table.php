<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cv', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('fullname');
            $table->string('gender')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->date('birthday')->nullable();
            $table->string('Hinh')->nullable();
            $table->string('job_position')->nullable();
            $table->text('information')->nullable();
            $table->text('education')->nullable();
            $table->text('skill')->nullable();
            $table->text('experience')->nullable();
            $table->text('project')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('Cv');
    }
}
