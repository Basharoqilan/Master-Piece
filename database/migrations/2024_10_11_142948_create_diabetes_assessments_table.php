<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('diabetes_assessments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('age_group');
            $table->integer('gender');
            $table->integer('descent');
            $table->integer('birthplace');
            $table->integer('parental_diabetes');
            $table->integer('blood_glucose');
            $table->integer('blood_pressure_medication');
            $table->integer('smoking');
            $table->integer('vegetable_intake');
            $table->integer('physical_activity');
            $table->integer('waist_measurement');
            $table->integer('total_score');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('diabetes_assessments');
    }
};
