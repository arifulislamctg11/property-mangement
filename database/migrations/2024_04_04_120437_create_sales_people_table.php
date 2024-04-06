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
        Schema::create('sales_people', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('home_address')->nullable();
            $table->string('gender');
            $table->string('civil_status');
            $table->string('citizenship')->nullable();
            $table->string('mobile_number');
            $table->date('birthdate')->nullable();
            $table->string('email_address')->nullable();
            $table->string('facebook_account')->nullable();
            $table->string('highest_education')->nullable();
            $table->string('tin_number')->nullable();
            $table->string('unit_sales_manager')->nullable();
            $table->string('realty_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_people');
    }
};
