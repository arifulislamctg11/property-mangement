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
        Schema::create('sales_receipts', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            // $table->string('lot_no');
            $table->string('property_id');
            // $table->string('lot_area');
            // $table->string('floor_area');
            $table->string('buyer_id');
            // $table->string('address');
            $table->string('amount');
            $table->string('type');
            $table->string('month');
            $table->timestamps();
        });
    }


    // 'project_name',
    // 'lot_no.',
    // 'block_no.',
    // 'lot_area',
    // 'floor_area',
    // 'buyer',
    // 'address',
    // 'amount',
    // 'type',
    // 'month',

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_receipts');
    }
};
