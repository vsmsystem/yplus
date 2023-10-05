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
        Schema::create('financial_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedBigInteger('id_resource')->nullable();
            $table->string('url')->nullable();
            $table->string('cnpj_cpf')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('address')->nullable();
            $table->dateTime('issue_date')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('status_revision')->nullable();
            $table->string('barcode')->nullable();
            $table->string('additional_info')->nullable();
            $table->string('financial_transactionscol')->nullable();
            $table->timestamps();    
            
            // Adicione as chaves estrangeiras
            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('id_resource')
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
        Schema::dropIfExists('financial_transactions');
    }
};
