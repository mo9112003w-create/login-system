<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pricing_plans', function (Blueprint $table) {
            $table->id();
            $table->string('title');            // اسم الباقة
            $table->string('icon');             // أيقونة FontAwesome
            $table->decimal('price', 8, 2);     // السعر
            $table->string('feature1');
            $table->string('feature2');
            $table->string('feature3');
            $table->string('feature4');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pricing_plans');
    }
};

