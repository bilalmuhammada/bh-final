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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('plan_id')->nullable()->constrained('plans');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->decimal('price', 9 , 0)->nullable()->default(0);
            $table->decimal('amount_paid', 9 , 0)->nullable()->default(0);
            $table->decimal('discount', 9 , 0)->nullable()->default(0);
            $table->string('currency')->nullable();
            $table->boolean('is_active')->nullable()->default(1);
            $table->date('activated_at')->nullable();
            $table->string('status')->nullable()->default('active');
            $table->string('period')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('next_payment_date')->nullable();

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
        Schema::dropIfExists('subscriptions');
    }
};
