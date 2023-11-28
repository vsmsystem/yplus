<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('financial_transactions_items', function (Blueprint $table) {
            $table->integer('unit_value')->nullable()->change();
        });
    }

    /**
     * Reverse the migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('financial_transactions_items', function (Blueprint $table) {
            $table->decimal('unit_value', 10, 2)->nullable()->change();
        });
    }
};
