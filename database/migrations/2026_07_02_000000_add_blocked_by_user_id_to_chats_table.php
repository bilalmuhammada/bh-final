<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('chats', function (Blueprint $table) {
            $table->unsignedBigInteger('blocked_by_user_id')
                ->nullable()
                ->after('is_blocked')
                ->index();
        });
    }

    public function down()
    {
        Schema::table('chats', function (Blueprint $table) {
            $table->dropIndex(['blocked_by_user_id']);
            $table->dropColumn('blocked_by_user_id');
        });
    }
};
