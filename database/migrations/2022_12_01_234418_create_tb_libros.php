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
        Schema::create('tb_libros', function (Blueprint $table) {
            $table->bigIncrements('idLibro');
            $table->integer('ISBN');
            $table->string('Titulo');
            $table->unsignedBigInteger('id_autor');
            $table->string('numPag');
            $table->string('Editorial');
            $table->string('Correo');
            $table->timestamps();
            $table->foreign('id_autor')->references('idAutor')->on('tb_autores')->onDelete('cascade');


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_libros');
    }
};
