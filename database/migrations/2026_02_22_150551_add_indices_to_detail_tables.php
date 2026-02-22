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
        $tables = [
            'business_ideas_details',
            'business_for_sale_details',
            'shares_for_sale_details',
            'investors_details',
            'investors_required_details',
            'franchise_opportunities_details',
            'export_import_trade_details',
            'machine_supplies_details',
            'business_rents'
        ];

        foreach ($tables as $tableName) {
            if (Schema::hasTable($tableName)) {
                $indexName = $tableName . '_listing_id_index';
                
                // Use raw query to check for index existence to avoid Doctrine dependency
                $indexes = DB::select("SHOW INDEX FROM {$tableName} WHERE Key_name = ?", [$indexName]);
                
                if (count($indexes) == 0) {
                    Schema::table($tableName, function (Blueprint $table) {
                        $table->index('listing_id');
                    });
                }
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $tables = [
            'business_ideas_details',
            'business_for_sale_details',
            'shares_for_sale_details',
            'investors_details',
            'investors_required_details',
            'franchise_opportunities_details',
            'export_import_trade_details',
            'machine_supplies_details',
            'business_rents'
        ];

        foreach ($tables as $tableName) {
            if (Schema::hasTable($tableName)) {
                $indexName = $tableName . '_listing_id_index';
                $indexes = DB::select("SHOW INDEX FROM {$tableName} WHERE Key_name = ?", [$indexName]);
                
                if (count($indexes) > 0) {
                    Schema::table($tableName, function (Blueprint $table) use ($indexName) {
                        $table->dropIndex($indexName);
                    });
                }
            }
        }
    }
};
