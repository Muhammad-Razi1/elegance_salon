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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name')->required();
            $table->bigInteger('contact')->required();
            $table->string('work_schedule')->required();
            $table->float('commission_rates')->required();
            $table->string('tasks')->nullable();
            $table->date('shifts')->required();
            $table->unsignedBigInteger('services');
            $table->foreign('services')->references('id')->on('services');
            $table->integer('salary')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
