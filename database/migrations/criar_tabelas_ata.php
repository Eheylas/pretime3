<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaAtas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_ata')->unsigned();
            $table->integer('periodo_letivo')->unsigned();
            $table->string('situacao');
            $table->string('data')->nullable();//mudado
            $table->string('titulo_ata');
            $table->string('pontos_discutidos')->nullable();//mudado
            $table->string('cancelar_motivo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atas');
    }
}
