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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('reference_number')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->decimal('amount', 9, 2)->nullable();
            $table->date('payment_date')->nullable();
            $table->enum('status', ['active', 'inactive', 'approved', 'rejected', 'pending'])->default('pending');
            $table->foreignId('country_id')->nullable()->constrained('countries');
            $table->foreignId('deleted_by')->nullable()->constrained('users');
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
        Schema::dropIfExists('payments');
    }
};
