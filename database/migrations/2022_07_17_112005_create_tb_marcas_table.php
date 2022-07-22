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
        Schema::create('tb_marcas', function (Blueprint $table) {
            $table->id();
            $table->string('desc_marca')->unique();
            $table->foreignId('id_usuario_creacion')->references('id')->on('users');
            $table->foreignId('id_usuario_modificacion')->references('id')->on('users');
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
        Schema::dropIfExists('tb_marcas');
    }
};
