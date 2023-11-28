<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TornarIdGroupNullableEmMercadoTable extends Migration
{
    public function up()
    {
        Schema::table('mercado', function (Blueprint $table) {
            $table->unsignedBigInteger('id_group')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('mercado', function (Blueprint $table) {
            // Se precisar reverter, pode adicionar o código aqui
        });
    }
}
