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
        Schema::create('investors_details', function (Blueprint $table) {
            $table->id();

            $table->foreignId('listing_id')->constrained('listings')->nullable();
            $table->string('investment_amount')->nullable();
            $table->string('open_to_invest')->nullable();
            $table->string('open_for_partnership')->nullable();
            $table->text('interested_business_types')->nullable();
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
        Schema::dropIfExists('investors_details');
    }
};
