<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyTasksTable extends Migration
{
    public function up()
    {
        Schema::create('daily_tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plan_id');
            $table->integer('day');
            $table->string('workouts');
            $table->string('meal_plans');
            $table->string('coaching');
            $table->string('customer_support');
            $table->timestamps();
            $table->foreign('plan_id')->references('id')->on('pricing_plans')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('daily_tasks');
    }
}
