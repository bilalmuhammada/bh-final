<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listings', function (Blueprint $table) {
            $tableName = 'listings';
            
            // Check for index existence using raw SQL to avoid Doctrine dependency
            $cityIndex = DB::select("SHOW INDEX FROM {$tableName} WHERE Key_name = 'listings_city_id_index'");
            if (count($cityIndex) == 0) {
                $table->index('city_id', 'listings_city_id_index');
            }
            
            $createdAtIndex = DB::select("SHOW INDEX FROM {$tableName} WHERE Key_name = 'listings_created_at_index'");
            if (count($createdAtIndex) == 0) {
                $table->index('created_at', 'listings_created_at_index');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->dropIndex('listings_city_id_index');
            $table->dropIndex('listings_created_at_index');
        });
    }
};
