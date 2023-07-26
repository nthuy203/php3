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
        Schema::create('bill', function (Blueprint $table) {
            $table->id();
//            $table->dateTime('check_in');
//            $table->dateTime('check_out');
//            $table->integer('id_phong');
//            $table->integer('customers_id');
//            $table->integer('services');
//            $table->integer('total_price');
//            $table->integer('status');
//            $table->integer('payments');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill');
    }
};
