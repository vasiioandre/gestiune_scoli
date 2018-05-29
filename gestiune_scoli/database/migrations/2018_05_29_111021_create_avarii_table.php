<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvariiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avarii', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_avarie');
            $table->integer('id_scoala')->nullable(false)->unsigned();
            $table->dateTime('data_incident');
            $table->double('suma', 12, 2)->nullable(true);
            $table->string('firma');
            $table->string('pdf_receptie')->nullable(true);
            $table->string('pdf_solicitare')->nullable(true);
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
        Schema::dropIfExists('avarii');
    }
}
