<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFotografiiReparatii extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotografii_reparatii', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_fotografie');
            $table->integer('id_reparatie')->nullable(false)->unsigned();
            $table->string('nume_fotografie');
            $table->timestamps();

            $table->foreign('id_reparatie')
                ->references('id_reparatie')->on('reparatii')
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
        Schema::dropIfExists('fotografii_reparatii');
    }
}
