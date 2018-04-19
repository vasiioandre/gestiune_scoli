<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReparatiiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparatii', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_reparatie');
            $table->integer('id_scoala')->nullable(false)->unsigned();
            $table->integer('anul_finalizarii');
            $table->text('detalii');
            $table->double('suma_investita', 12, 2);
            $table->text('firma');
            $table->timestamps();

            $table->foreign('id_scoala')
                ->references('id_scoala')->on('scoli')
                ->onDelete('cascade');
        });
    }






    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reparatii');
    }
}
