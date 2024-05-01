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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_allowed_phone')->default(0);
            $table->boolean('is_allowed_documents')->default(0);
            $table->foreignId('role_id')->nullable()->constrained('roles');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('country_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('password');
            $table->string('gender')->nullable();
            $table->string('level')->nullable();
            $table->decimal('rating', 9, 2)->nullable();
            $table->foreignId('nationality_id')->nullable()->constrained('countries');
            $table->foreignId('country_id')->nullable()->constrained('countries');
            $table->foreignId('city_id')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->date('dob')->nullable();
            $table->boolean('weekly_newsletter')->nullable();
            $table->boolean('offers_and_bargains')->nullable();
            $table->string('password_reset_code')->nullable();
            $table->string('phone_verification_code')->nullable();
            $table->string('email_verification_code')->nullable();
            $table->timestamp('email_verified_at')->nullable();

            $table->string('google_id')->nullable();
            $table->string('stripe_customer_id')->nullable();
            $table->string('customer_card_id')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
