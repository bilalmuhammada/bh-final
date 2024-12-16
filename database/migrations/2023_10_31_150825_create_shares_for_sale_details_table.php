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
        Schema::create('shares_for_sale_details', function (Blueprint $table) {
            $table->id();


            $table->foreignId('listing_id')->constrained('listings')->nullable();

            
            $table->string('category_name')->nullable();
            $table->string('subcategory_name')->nullable();
            $table->string('title')->nullable();
            $table->decimal('share_price', 15, 2)->nullable();
            $table->decimal('share_amount', 15, 2)->nullable(); // Share percentage
            $table->string('business_modal')->nullable();
            $table->decimal('sale_revenue', 15, 2)->nullable();
            $table->string('trade_licence')->nullable();
            $table->year('established_year')->nullable();
            $table->integer('branches')->nullable();
            $table->integer('no_of_employees')->nullable();
            $table->string('premise_status')->nullable();
            $table->decimal('size_sqm', 10, 2)->nullable();
            $table->string('lease_term')->nullable();
            $table->decimal('lease_amount', 15, 2)->nullable();
            $table->decimal('selling_fin', 15, 2)->nullable();
            $table->text('reason_sale')->nullable();
            $table->string('posted_by')->nullable();
            $table->string('website')->nullable();
            $table->string('instagram')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->text('products_and_services_offered')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('country_id')->constrained()->onDelete('cascade');
            $table->foreignId('city_id')->constrained()->onDelete('cascade');
            $table->string('location_name')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->timestamps(); // created_at and updated_at

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shares_for_sale_details');
    }
};
