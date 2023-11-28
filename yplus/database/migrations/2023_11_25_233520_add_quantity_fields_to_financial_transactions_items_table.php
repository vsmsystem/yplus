<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Executa a migração.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('financial_transactions_items', function (Blueprint $table) {
            $table->integer('quantity')->nullable()->after('additional_info');
            $table->string('quantity_type')->nullable()->after('quantity');
            $table->decimal('unit_value', 10, 2)->nullable()->after('quantity_type');
        });
    }

    /**
     * Reverte a migração.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('financial_transactions_items', function (Blueprint $table) {
            $table->dropColumn(['quantity', 'quantity_type', 'unit_value']);
        });
    }
};
