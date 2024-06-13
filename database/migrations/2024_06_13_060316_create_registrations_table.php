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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable()->charset('utf8mb4')->collation('utf8mb4_bin');
            $table->string('token_access')->nullable()->charset('utf8mb4')->collation('utf8mb4_bin');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('middle_name')->nullable();

            $table->string('job_title')->nullable();
            $table->string('email_address')->nullable();
            $table->string('contact_number')->nullable();

            $table->string('password')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
