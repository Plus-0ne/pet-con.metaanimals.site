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
        Schema::create('exhibitors_config', function (Blueprint $table) {
            $table->id();

            $table->decimal('registration_fee', total: 8, places: 2)->default(0.00);
            $table->string('registration_start')->nullable();
            $table->string('registration_end')->nullable();
            $table->integer('no_of_booth_representatives')->default(0);
            $table->integer('payment_gcash_number')->nullable();
            $table->integer('payment_gcash_name')->nullable();
            $table->integer('payment_gcash_qr')->nullable();
            $table->integer('payment_bank_bdo_number')->nullable();
            $table->integer('payment_bank_bdo_name')->nullable();
            $table->integer('payment_bank_bpi_number')->nullable();
            $table->integer('payment_bank_bpi_name')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exhibitors_config');
    }
};
