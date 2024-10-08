<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained('cars')->onDelete('cascade'); // Связь с автомобилем
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade'); // Связь с клиентом
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade'); // Связь с сотрудником
            $table->date('sale_date'); // Дата продажи
            $table->decimal('sale_price', 10, 2); // Цена продажи
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
