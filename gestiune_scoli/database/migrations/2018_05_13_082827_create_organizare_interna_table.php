<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizareInternaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizare_interna', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_scoala')->nullable(false)->unsigned();
            $table->integer('nr_clase');
            $table->integer('nr_elevi');
            $table->integer('nr_cadre_didactice');
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
        Schema::dropIfExists('organizare_interna');
    }
}
