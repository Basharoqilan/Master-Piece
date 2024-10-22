<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodyWeightPlannersTable extends Migration
{
    public function up()
    {
        Schema::create('body_weight_planners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('age');
            $table->string('gender');
            $table->integer('height');
            $table->integer('current_weight');
            $table->integer('target_weight');
            $table->string('activity_level');
            $table->date('start_date');
            $table->date('target_date');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('body_weight_planners');
    }
}
