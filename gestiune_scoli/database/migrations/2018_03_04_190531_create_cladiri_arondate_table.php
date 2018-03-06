<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCladiriArondateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cladiri_arondate', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_cladire');
            $table->integer('id_scoala')->nullable(false)->unsigned();
            $table->text('nume')->nullable('false');
            $table->text('adresa')->nullable('false');
            $table->text('nr_cf')->nullable('false');
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
        Schema::dropIfExists('cladiri_arondate');
    }
}
