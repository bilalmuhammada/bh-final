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
        Schema::create('franchise_opportunities_details', function (Blueprint $table) {
            $table->id();

            $table->foreignId('listing_id')->constrained('listings')->nullable();
            $table->string('category_name')->nullable();
            $table->string('subcategory_name')->nullable();
            $table->string('title')->nullable();
            $table->decimal('franchise_fee', 10, 2)->nullable(); // Franchise Fee
            $table->enum('franchise_fee_term', ['Annual', 'Monthly', 'Daily'])->nullable(); // Fee Term
            $table->string('business_type')->nullable();
            $table->enum('trade_licence_type', ['e-commerce', 'freezone', 'freelance', 'mainland', 'offshore', 'online', 'private'])->nullable(); // Trade Licence
            $table->year('established_year')->nullable();
            $table->integer('no_of_branches')->nullable();
            $table->integer('no_of_employees')->nullable();
            $table->enum('premise_status', ['own', 'rent', 'not_reg'])->nullable(); // Premise Status
            $table->integer('squrft')->nullable(); // Premise Size Sq.Ft
            $table->enum('lease_term', ['Daily', 'Monthly', 'Yearly', 'Lifetime'])->nullable(); // Lease Term
            $table->enum('contract_period', ['daily', 'weekly', 'monthly', 'yearly'])->nullable(); // Contract Period
            $table->string('finance_term')->nullable();
            $table->enum('posted_by', ['Agent', 'Broker', 'Owner', 'Staff'])->nullable();
            $table->string('reason_financing')->nullable();
            $table->string('website')->nullable();
            $table->string('instagram')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->text('products_and_services_offered')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('location_name')->nullable();
        
            
            // Foreign key constraints
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

            
           

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
        Schema::dropIfExists('franchise_opportunities_details');
    }
};
