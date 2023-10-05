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
        Schema::create('financial_resources', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user_holder')->nullable();
            $table->unsignedBigInteger('id_user_joint')->nullable();
            $table->string('resounce_type')->nullable();
            $table->integer('balance')->nullable();
            $table->timestamps();

            // Adicione as chaves estrangeiras
            $table->foreign('id_user_joint')
                ->references('id')
                ->on('users')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('id_user_holder')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('financial_resources');
    }
};
