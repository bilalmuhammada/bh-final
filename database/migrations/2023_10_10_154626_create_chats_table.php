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
        Schema::create('chats', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->enum('status', ['requested', 'accepted', 'rejected'])->default('requested');
            $table->foreignId('first_user_id')->constrained('users');
            $table->foreignId('second_user_id')->constrained('users');
            $table->foreignId('initiated_by')->constrained('users');


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
        Schema::dropIfExists('chats');
    }
};
