<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id(); // مفتاح رئيسي
            
            $table->string('name'); // اسم الشخص المحجوز
            $table->string('phone'); // رقم الهاتف
            
            // ربط الحجز بالقسم من جدول PricingPlans
            $table->foreignId('pricing_plan_id')->constrained()->onDelete('cascade');
            
            $table->timestamps(); // created_at و updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
