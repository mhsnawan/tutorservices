<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseStudentTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_student_teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('course_teacher_id')->unsigned();
            $table->foreign('course_teacher_id')->references('id')->on('course_teachers');
            $table->Integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->Integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students');
            $table->Integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses');
            $table->integer('verified')->default(0);
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
        Schema::dropIfExists('course_student_teachers');
    }
}
