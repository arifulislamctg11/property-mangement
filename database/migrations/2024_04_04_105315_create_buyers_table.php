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
        Schema::create('buyers', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('residence_address');
            $table->integer('years_of_residency');
            $table->string('type_of_house');
            $table->string('civil_status');
            $table->date('birthday');
            $table->string('sex');
            $table->string('citizenship');
            $table->string('religion');
            $table->string('tin')->nullable();
            $table->string('highest_education');
            $table->string('telephone_number')->nullable();
            $table->string('mobile_number');
            $table->integer('number_of_dependents');
            $table->string('email_address')->nullable();
            $table->string('facebook_account')->nullable();
            $table->string('co_owner_last_name')->nullable();
            $table->string('co_owner_first_name')->nullable();
            $table->string('co_owner_middle_name')->nullable();
            $table->string('co_owner_residence_address')->nullable();
            $table->integer('co_owner_years_of_residency')->nullable();
            $table->date('co_owner_birthday')->nullable();
            $table->string('co_owner_sex')->nullable();
            $table->string('co_owner_citizenship')->nullable();
            $table->string('co_owner_religion')->nullable();
            $table->string('co_owner_tin')->nullable();
            $table->string('co_owner_highest_education')->nullable();
            $table->string('co_owner_civil_status')->nullable();
            $table->string('co_owner_email_address')->nullable();
            $table->string('co_owner_telephone_number')->nullable();
            $table->string('co_owner_mobile_number')->nullable();
            $table->string('relationship_with_buyer')->nullable();
            $table->string('attorney_last_name')->nullable();
            $table->string('attorney_first_name')->nullable();
            $table->string('attorney_middle_name')->nullable();
            $table->string('attorney_residence_address')->nullable();
            $table->integer('attorney_years_of_residency')->nullable();
            $table->string('attorney_citizenship')->nullable();
            $table->date('attorney_birthday')->nullable();
            $table->string('attorney_sex')->nullable();
            $table->string('attorney_religion')->nullable();
            $table->string('attorney_tin')->nullable();
            $table->string('attorney_email_address')->nullable();
            $table->string('attorney_telephone_number')->nullable();
            $table->string('attorney_mobile_number')->nullable();
            $table->string('attorney_facebook_account')->nullable();
            $table->string('attorney_relationship_with_buyer')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('business_name')->nullable();
            $table->string('business_location')->nullable();
            $table->string('industry')->nullable();
            $table->date('date_employed_established')->nullable();
            $table->string('employment_position')->nullable();
            $table->decimal('annual_income', 10, 2)->nullable();
            $table->string('office_business_phone_number')->nullable();
            $table->string('website')->nullable();
            $table->string('employment_email_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyers');
    }
};
