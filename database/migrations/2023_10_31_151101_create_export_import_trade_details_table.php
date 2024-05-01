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
        Schema::create('export_import_trade_details', function (Blueprint $table) {
            $table->id();

            $table->foreignId('listing_id')->constrained('listings')->nullable();
            $table->dateTime('manufactured_year')->nullable();
            $table->string('condition')->nullable();
            $table->string('usage')->nullable();
            $table->string('model')->nullable();
            $table->string('stock_level')->nullable();
            $table->string('stock_unit')->nullable();
            $table->string('source')->nullable();
            $table->string('trade')->nullable();
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
        Schema::dropIfExists('export_import_trade_details');
    }
};
