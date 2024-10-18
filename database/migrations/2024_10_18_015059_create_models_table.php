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
        Schema::create('models', function (Blueprint $table) {
            $table->id();
            $table->string('model'); // Модель
            $table->year('year'); // Год выпуска
            $table->string('vin')->unique(); // VIN-номер
            $table->string('color'); // Цвет
            $table->integer('mileage'); // Пробег
            $table->decimal('price', 10, 2); // Цена
            $table->foreignId('car_id')->constrained('cars')->onDelete('cascade'); // Связь с маркой
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('models');
    }
};
