<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateLabStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('lab_id')->unsigned();
            $table->foreign('lab_id')->references('id')->on('labs');
            $table->foreignId('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students');
            $table->integer('question_1');
            $table->integer('question_2');
            $table->integer('question_3');
     

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lab_student');
    }
}
