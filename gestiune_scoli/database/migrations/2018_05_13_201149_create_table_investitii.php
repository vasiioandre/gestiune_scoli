<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInvestitii extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investitii', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_investitie');
            $table->integer('id_scoala')->nullable(false)->unsigned();
            $table->integer('anul_finalizarii')->nullable;
            $table->text('detalii');
            $table->double('suma_investita', 12, 2)->nullable(true);
            $table->string('firma');
            $table->string('pdf_autorizatie')->nullable(true);
            $table->string('pdf_proiect')->nullable(true);
            $table->string('pdf_receptie')->nullable(true);
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
        Schema::dropIfExists('investitii');
    }
}
