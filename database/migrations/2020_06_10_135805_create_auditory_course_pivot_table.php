<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditoryCoursePivotTable extends Migration
{
    public function up()
    {
        Schema::create('auditory_course', function (Blueprint $table) {
            $table->unsignedInteger('auditory_id');
            $table->foreign('auditory_id')->references('id')->on('auditories')->onDelete('cascade');
            $table->unsignedInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auditory_course_pivot');
    }
}
