<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnInScoliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scoli', function($t) {
            $t->renameColumn('contact', 'telefon');
        });

        Schema::table('scoli', function (Blueprint $table) {
            $table->string('email')->nullable();
        });

        Schema::table('scoli', function (Blueprint $table) {
            $table->string('facebook')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stnk', function($t) {
            $t->renameColumn('telefon', 'contact');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('email');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('facebook');
        });
    }
}
