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
        Schema::create('petfashion', function (Blueprint $table) {
            $table->id();

            $table->string('uuid')->nullable();
            $table->string('fur_parents')->nullable();
            $table->string('fur_babies')->nullable();
            $table->string('pet_breed')->nullable();
            $table->string('pet_age')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('payment_gateway')->nullable();
            $table->decimal('payment_amount', total: 8, places: 2)->nullable();
            $table->string('payment_receipt')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petfashion');
    }
};
