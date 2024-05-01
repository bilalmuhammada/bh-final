<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_for_sale_details', function (Blueprint $table) {
            $table->id();

            $table->foreignId('listing_id')->constrained('listings')->nullable();
            $table->string('business_type')->nullable();
            $table->string('trade_license_type')->nullable();
            $table->string('established_year')->nullable();
            $table->string('lease_term')->nullable();
            $table->string('size_sqm')->nullable();
            $table->string('no_of_employees')->nullable();
            $table->string('reason_for_sale')->nullable();
            $table->boolean('open_for_partnership')->nullable();
            $table->boolean('products_and_services_offered')->nullable();
            $table->string('city_ids')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_for_sale_details');
    }
};
