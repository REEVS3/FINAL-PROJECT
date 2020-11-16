<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LabStudentMark extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_student_mark', function (Blueprint $table) {
            $table->primary(['lab_id','student_id']);

            $table->foreignId('lab_id');
            $table->foreign('lab_id')->references('id')->on('labs');

            $table->foreignId('student_id');
            $table->foreign('student_id')->references('id')->on('students');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
