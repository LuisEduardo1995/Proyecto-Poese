<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarioPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_persona', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id', 'fk_usuariopersona_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('persona_id');
            $table->foreign('persona_id', 'fk_usuariopersona_persona')->references('id')->on('persona')->onDelete('restrict')->onUpdate('restrict');
            $table->string('pertenece', 10);
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
        Schema::dropIfExists('usuario_persona');
    }
}
