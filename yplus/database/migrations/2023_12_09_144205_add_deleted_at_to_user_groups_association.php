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
        Schema::table('user_groups_association', function (Blueprint $table) {
            //
            $table->softDeletes(); // Adiciona o campo deleted_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_groups_association', function (Blueprint $table) {
            //
            $table->dropSoftDeletes(); // Remove o campo deleted_at
        });
    }
};
