<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();

            $table->char('iso', 2);
            $table->string('name', 80);
            $table->string('nice_name', 80);
            $table->char('iso3', 3  )->nullable();
            $table->smallinteger('num_code')->nullable();
            $table->integer('phone_code');
            $table->string('currency')->nullable()->default('USD');
            $table->string('file_name_flag')->nullable();

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
        Schema::dropIfExists('countries');
    }
}
