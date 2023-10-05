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
        Schema::create('financial_transactions_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_financial_transaction')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->integer('amount')->nullable();
            $table->string('additional_info')->nullable();
            $table->timestamps();

            // Adicione as chaves estrangeiras
            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('id_financial_transaction')
                ->references('id')
                ->on('financial_transactions')
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
        Schema::dropIfExists('financial_transactions_items');
    }
};
