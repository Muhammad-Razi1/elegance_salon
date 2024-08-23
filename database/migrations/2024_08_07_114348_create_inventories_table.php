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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->required();
            $table->string('product_description')->required();
            $table->integer('product_price')->required();
            $table->string('product_image')->required();
            $table->integer('product_quantity')->default(500);
            $table->string('supplier')->required();
            $table->bigInteger('supplier_contact')->required();
            $table->integer('product_cost')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
