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
        Schema::create('exhibitors', function (Blueprint $table) {
            $table->id();

            $table->string('exhibitor_name')->nullable();
            $table->string('exhibitor_address')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('email')->nullable();
            $table->string('postal')->nullable();
            $table->string('facebook_name')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('list_days')->nullable();
            $table->string('list_services')->nullable();
            $table->string('list_requests')->nullable();
            $table->string('list_equipments')->nullable();
            $table->string('list_representatives_name')->nullable();
            $table->string('list_representatives_contact_number')->nullable();
            $table->string('payment_gateway')->nullable();
            $table->decimal('payment_amount')->nullable();
            $table->string('payment_receipt')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exhibitors');
    }
};
