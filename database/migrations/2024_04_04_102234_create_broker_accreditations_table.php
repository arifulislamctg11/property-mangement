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
        Schema::create('broker_accreditations', function (Blueprint $table) {
            $table->id();
            $table->string('realty_name');
            $table->string('lead_broker');
            $table->string('office_address');
            $table->string('telephone_no')->nullable();
            $table->string('mobile_no');
            $table->string('email_address');
            $table->string('website')->nullable();
            $table->integer('years_in_operation');
            $table->string('real_estate_license_no');
            $table->date('valid_from');
            $table->date('valid_until');
            $table->string('place_issued');
            $table->string('authorized_representative');
            $table->string('designation');
            $table->string('tin_no')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('broker_accreditations');
    }
};
