<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarioNoticia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_noticia', function (Blueprint $table) {
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id', 'fk_usuarionoticia_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('noticia_id');
            $table->foreign('noticia_id', 'fk_usuarionoticia_noticia')->references('id')->on('noticia')->onDelete('restrict')->onUpdate('restrict');
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_noticia');
    }
}
