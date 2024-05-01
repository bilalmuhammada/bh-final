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

            $table->foreignId('listing_id')->constrained('listings')->nullable();
            $table->string('required_investment')->nullable();
            $table->string('business_type')->nullable();
            $table->string('reason_for_investment')->nullable();
            $table->string('established_year')->nullable();
            $table->string('trade_licence_type')->nullable();
            $table->string('lease_term')->nullable();
            $table->string('open_for_partnership')->nullable();
            $table->string('size_sqm')->nullable();
            $table->string('no_of_employees')->nullable();
            $table->text('products_and_services_offered')->nullable();
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
        Schema::dropIfExists('investors_required_details');
    }
};
