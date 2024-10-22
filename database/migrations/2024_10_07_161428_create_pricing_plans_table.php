<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('pricing_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->string('workouts');
            $table->string('meal_plans')->nullable();
            $table->string('coaching')->nullable();
            $table->string('customer_support')->nullable();
            $table->timestamps();
        });
    }
   
    public function down(): void
    {
        Schema::dropIfExists('pricing_plans');
    }
};
