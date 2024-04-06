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
        Schema::create('brokers', function (Blueprint $table) {
            $table->id();
            $table->string('realty_name');
            $table->string('lead_broker');
            $table->string('office_address')->nullable();
            $table->string('telephone_number')->nullable();
            $table->string('mobile_number');
            $table->string('email_address');
            $table->string('website')->nullable();
            $table->integer('years_in_operation')->nullable();
            $table->string('real_estate_license_number');
            $table->date('valid_from')->nullable();
            $table->date('valid_until')->nullable();
            $table->string('place_issued')->nullable();
            $table->string('authorized_representative')->nullable();
            $table->string('designation')->nullable();
            $table->string('tin_number')->nullable();
            $table->string('admin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brokers');
    }
};
