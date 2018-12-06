<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->Integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses');
            $table->Integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title');
            $table->string('area');
            $table->string('city');
            $table->string('class');
            $table->Integer('fee')->unsigned();
            $table->string('type');
            $table->string('day_from');
            $table->string('day_to');
            $table->string('time_from');
            $table->string('time_to');
            $table->string('description');
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
        Schema::dropIfExists('course_teachers');
    }
}
