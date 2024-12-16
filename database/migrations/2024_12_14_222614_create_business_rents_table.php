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
        Schema::create('business_rents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('listing_id')->constrained('listings')->nullable();
            $table->string('category_name')->nullable();
            $table->string('subcategory_name')->nullable();
            $table->string('title')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->tinyInteger('business_status')->comment('1=Operating, 0=Closed, 2=Temporary Closed')->nullable();
            $table->year('established_year')->nullable();
            $table->integer('branches')->nullable();
            $table->integer('no_of_employees')->nullable();
            $table->string('premise_status')->comment('own, rent, not_reg')->nullable();
            $table->integer('squrft')->nullable()->comment('Premise Size in Sq.Ft');
            $table->string('lease_term')->comment('daily, monthly, yearly, lifetime')->nullable();
            $table->decimal('least_amt', 15, 2)->nullable()->comment('Lease Amount');
            $table->decimal('invt_value', 15, 2)->nullable()->comment('Inventory Value');
            $table->string('selling_fin')->nullable()->comment('Seller Financing');
            $table->string('supt_traning')->nullable()->comment('Support & Training');
            $table->tinyInteger('posted_by')->comment('1=Agent, 0=Broker, 2=Owner, 3=Staff')->nullable();
            $table->text('reason_sale')->nullable();
            $table->string('website')->nullable();
            $table->string('instagram')->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('whatsapp', 15)->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('location_name')->nullable();

            // Foreign keys
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
        Schema::dropIfExists('business_rents');
    }
};
