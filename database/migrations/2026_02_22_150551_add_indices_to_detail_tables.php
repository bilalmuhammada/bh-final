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

        foreach ($tables as $table) {
            if (Schema::hasTable($table)) {
                Schema::table($table, function (Blueprint $table) {
                    // Check if index already exists to prevent errors
                    $sm = Schema::getConnection()->getDoctrineSchemaManager();
                    $indexesFound = $sm->listTableIndexes($table);
                    if (!array_key_exists($table . '_listing_id_index', $indexesFound)) {
                        $table->index('listing_id');
                    }
                });
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

        foreach ($tables as $table) {
            if (Schema::hasTable($table)) {
                Schema::table($table, function (Blueprint $table) {
                    $table->dropIndex(['listing_id']);
                });
            }
        }
    }
};
