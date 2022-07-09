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
        Schema::create('tb_pisos', function (Blueprint $table) {
            $table->id();
            $table->string('desc_piso');
            $table->foreignId('id_edificio')->references('id')->on('tb_edificios');
            $table->string('usuario_creacion');
            $table->string('usuario_modificacion');
            $table->boolean('activo')->default(true);
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
        Schema::dropIfExists('tb_pisos');
    }
};
