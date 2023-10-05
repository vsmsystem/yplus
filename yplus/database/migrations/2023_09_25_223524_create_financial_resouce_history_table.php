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
        Schema::create('financial_resouce_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_financial_resource')->nullable();
            $table->string('operation')->nullable();
            $table->string('log')->nullable();
            $table->timestamps();

            // Adicione as chaves estrangeiras
            $table->foreign('id_financial_resource')
                ->references('id')
                ->on('financial_resources')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financial_resouce_history');
    }
};
