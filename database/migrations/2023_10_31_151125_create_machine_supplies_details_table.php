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
        Schema::create('machine_supplies_details', function (Blueprint $table) {
            $table->id();

            $table->foreignId('listing_id')->constrained('listings')->nullable();
           
            $table->string('category_name')->nullable();
            $table->string('subcategory_name')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->string('title')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('price_term')->nullable();
            $table->string('business_model')->nullable();
            $table->string('trade_licence_type')->nullable();
            $table->year('established_year')->nullable();
            $table->integer('branches')->nullable();
            $table->integer('no_of_employees')->nullable();
            $table->string('premise_status')->nullable();
            $table->decimal('squrft', 10, 2)->nullable();
            $table->string('lease_term')->nullable();
            $table->integer('stock_level')->nullable();
            $table->string('stock_unit')->nullable();
            $table->string('condition')->nullable();
            $table->boolean('seller_financing')->nullable();
            $table->string('export')->nullable();
            $table->string('posted_by')->nullable();
            $table->text('reason_sale')->nullable();
            $table->string('website')->nullable();
            $table->string('instagram')->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('whatsapp', 15)->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('location_name')->nullable();
            $table->timestamps();

            // Foreign keys
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
        Schema::dropIfExists('machine_supplies_details');
    }
};
