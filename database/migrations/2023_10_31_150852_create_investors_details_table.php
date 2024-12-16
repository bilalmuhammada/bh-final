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
            

            $table->string('category_name')->nullable();
            $table->string('subcategory_name')->nullable();

            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('title')->nullable();
            $table->decimal('investment_amount', 15, 2)->nullable();
            $table->string('int_bus_mdl')->nullable(); // Interested business models
            $table->enum('open_to_invest', ['Based Country', 'Inside Country', 'Within Region', 'Worldwide'])->nullable();
            $table->boolean('open_for_partnership')->default(0)->nullable();
            $table->enum('ptn_plan', ['daily', 'weekly', 'monthly', 'yearly'])->nullable(); // Partnership Plan
            $table->enum('communication_pre', ['Call', 'Chat', 'Whatsapp', 'Email'])->nullable(); // Communication Preference
            $table->string('phone', 15)->nullable();
            $table->string('whatsapp', 15)->nullable();
            $table->boolean('show_phone')->default(1)->nullable(); // Show or hide phone
            $table->text('interested_business_types')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('location_name')->nullable();

            // $table->timestamps();

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
        Schema::dropIfExists('investors_details');
    }
};
