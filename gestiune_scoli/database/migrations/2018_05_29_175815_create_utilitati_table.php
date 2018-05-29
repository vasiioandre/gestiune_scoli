<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilitatiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilitati', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_scoala')->nullable(false)->unsigned();
            $table->date('data');
            $table->double('consum_apa', 12, 2)->nullable(true);
            $table->double('consum_caldura', 12, 2)->nullable(true);
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
        Schema::dropIfExists('utilitati');
    }
}
