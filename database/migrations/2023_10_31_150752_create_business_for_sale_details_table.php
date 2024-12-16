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

            $table->string('category_name')->nullable();
            $table->string('subcategory_name')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('title')->nullable();
            $table->string('price')->nullable();
            $table->string('sale_revenue')->nullable();
            $table->string('branches')->nullable();
            $table->string('business_type')->nullable();
            $table->string('trade_license_type')->nullable();
            $table->string('established_year')->nullable();


            $table->string('lease_term')->nullable();
            $table->string('squrft')->nullable();
            $table->string('no_of_employees')->nullable();
            $table->string('reason_sale')->nullable();
            $table->string('premise_status')->nullable();

            $table->string('least_amt')->nullable();
            $table->string('invt_value')->nullable();
            $table->string('selling_fin')->nullable();
            $table->string('supt_traning')->nullable();

            $table->string('posted_by')->nullable();
            $table->string('website')->nullable();

            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->text('products_and_services_offered')->nullable();
            $table->text('description')->nullable();

            $table->string('country')->nullable();
            $table->text('location_name')->nullable();
           
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
