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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('rank')->nullable();
            $table->decimal('price', 9 , 2)->nullable();
            $table->string('currency')->nullable()->default('AED');
            $table->string('period')->nullable();
            $table->string('auto_refresh_times')->nullable();
            $table->string('allowed_images')->nullable();
            $table->string('featured_days')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('plans');
    }
};
