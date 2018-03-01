<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scoli', function (Blueprint $table) {
            $table->increments('id_scoala');
            $table->string('nume')->nullable(false);
            $table->string('nr_cf')->nullable(false);
            $table->string('adresa')->nullable(false);
            $table->string('contact')->nullable(false);
            $table->string('longitudine');
            $table->string('latitudine');
            $table->text('istoric');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scoli');
    }
}
