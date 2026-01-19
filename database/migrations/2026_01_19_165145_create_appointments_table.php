<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name');          // اسم الشخص
            $table->string('phone');         // رقم الهاتف
            $table->unsignedBigInteger('pricing_plan_id'); // القسم المحجوز
            $table->timestamps();

            $table->foreign('pricing_plan_id')->references('id')->on('pricing_plans')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
