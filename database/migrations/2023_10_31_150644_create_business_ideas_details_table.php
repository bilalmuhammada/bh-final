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
            $table->decimal('investment_amount', 9, 2)->default(0);
            $table->string('estimated_sales_in_numbers')->nullable();
            $table->string('estimated_sales_in_letters')->nullable();
            $table->string('trade_licence_type')->nullable();
            $table->string('business_type')->nullable();
            $table->boolean('open_for_partnership')->nullable();
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
        Schema::dropIfExists('business_idea_details');
    }
};
