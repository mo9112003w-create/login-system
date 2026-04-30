<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
public function up(): void
{
    Schema::create('operations', function (Blueprint $table) {
        $table->id();
        $table->string('name');       // اسم العملية
        $table->string('image');      // الصورة
        $table->decimal('price', 10, 2); // السعر
        $table->timestamps();
    });
}
};
