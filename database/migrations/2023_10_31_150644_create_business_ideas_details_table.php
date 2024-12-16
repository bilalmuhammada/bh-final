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
        Schema::create('business_idea_details', function (Blueprint $table) {
            $table->id();

            $table->foreignId('listing_id')->constrained('listings')->nullable();
            $table->string('category_name')->nullable();
            $table->string('subcategory_name')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->string('title')->nullable();
            $table->string('business_modal')->nullable();
            $table->decimal('investment_amount', 15, 2)->nullable();
            $table->string('trade_licence_type')->nullable();
            $table->string('premise_status')->nullable();
            $table->decimal('size_sqm', 10, 2)->nullable();
            $table->string('lease_term')->nullable();
            $table->integer('branches')->nullable();
            $table->integer('no_of_employees')->nullable();
            $table->string('sale_freq')->nullable();
            $table->decimal('expect_sale', 15, 2)->nullable();
            $table->decimal('expect_roi', 5, 2)->nullable();
            $table->string('contract_term')->nullable();
            $table->integer('contract_length')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->text('products_and_services_offered')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('location_name')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_idea_details');
    }
};
