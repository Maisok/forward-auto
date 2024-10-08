<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('make'); // Марка
            $table->string('model'); // Модель
            $table->year('year'); // Год выпуска
            $table->string('vin')->unique(); // VIN-номер
            $table->string('color'); // Цвет
            $table->integer('mileage'); // Пробег
            $table->decimal('price', 10, 2); // Цена
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
}