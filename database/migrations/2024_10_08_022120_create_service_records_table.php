<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('service_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained('cars')->onDelete('cascade'); // Связь с автомобилем
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade'); // Связь с услугой
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade'); // Связь с клиентом
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade'); // Связь с персоналом
            $table->date('service_date'); // Дата предоставления услуги
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_records');
    }
}