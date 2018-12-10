<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('day_from')->nullable();
            $table->string('day_to')->nullable();
            $table->string('time_from')->nullable();
            $table->string('time_to')->nullable();
            $table->string('hourly_charges')->nullable();
            $table->string('daily_charges')->nullable();
            $table->string('weekly_charges')->nullable();
            $table->string('monthly_charges')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
