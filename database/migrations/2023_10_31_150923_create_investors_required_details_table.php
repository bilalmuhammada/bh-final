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
        Schema::create('investors_required_details', function (Blueprint $table) {
            $table->id();

              // Hidden inputs
              $table->decimal('latitude', 10, 7)->nullable();
              $table->decimal('longitude', 10, 7)->nullable();
  
              // Form inputs
              
               $table->string('category_name')->nullable();
             $table->string('subcategory_name')->nullable();
              $table->string('title')->nullable();
              $table->decimal('required_investment', 15, 2)->nullable();
              $table->decimal('sales_revenue', 15, 2)->nullable();
              $table->string('business_model')->nullable();
              $table->enum('trade_licence_type', ['e-commerce', 'freezone', 'freelance', 'mainland', 'offshore', 'online', 'private'])->nullable();
              $table->year('established_year')->nullable();
              $table->integer('branches')->unsigned()->nullable();
              $table->integer('employees')->unsigned()->nullable();
              $table->enum('premise_status', ['Owned', 'Rented', 'Not Registered'])->nullable();
              $table->decimal('size_sqm', 10, 2)->nullable();
              $table->enum('lease_term', ['daily', 'monthly', 'yearly', 'lifetime'])->nullable();
              $table->decimal('least_amt', 15, 2)->nullable();
              $table->enum('contract_term', ['daily', 'weekly', 'monthly', 'yearly'])->nullable();
              $table->enum('contract_period', ['daily', 'weekly', 'monthly', 'yearly'])->nullable();
              $table->decimal('expected_roi', 5, 2)->nullable(); // ROI in percentage
              $table->enum('posted_by', ['Agent', 'Broker', 'Owner', 'Staff'])->nullable();
              $table->text('reason_investment')->nullable();
              $table->string('website')->nullable();
              $table->string('instagram')->nullable();
              $table->string('phone', 15)->nullable();
              $table->string('whatsapp', 15)->nullable();
              $table->text('products_and_services_offered')->nullable();
              $table->text('description')->nullable();
  
              // Country, city, and location fields
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
        Schema::dropIfExists('investors_required_details');
    }
};
