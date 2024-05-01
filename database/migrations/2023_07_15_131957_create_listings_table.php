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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained('categories');
            $table->foreignId('subcategory_id')->nullable()->constrained('subcategories');
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->decimal('price', 9, 2)->nullable();
            $table->text('description')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->text('location_name')->nullable();
            $table->string('reference_number')->nullable();
            $table->enum('status', ['active', 'inactive', 'approved', 'rejected', 'pending', 'draft'])->default('pending');
            $table->boolean('agree_to_terms_and_conditions')->default(0);
            $table->boolean('hide_phone')->default(0);
            $table->boolean('is_featured')->default(0);
            $table->boolean('is_verified')->default(1);
            $table->boolean('is_premium')->default(0);
            $table->boolean('is_popular')->default(0);
            $table->foreignId('country_id')->nullable()->constrained('countries');
            $table->foreignId('city_id')->nullable();
            $table->foreignId('acted_by')->nullable()->constrained('users');
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('deleted_by')->nullable()->constrained('users');
            $table->json('approved_requests')->nullable();
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
        Schema::dropIfExists('listings');
    }
};
