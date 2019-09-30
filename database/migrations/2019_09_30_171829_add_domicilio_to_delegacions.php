<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDomicilioToDelegacions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('delegacions', function (Blueprint $table) {
            $table->string('calle')->nullable()->after('deleg');
            $table->string('numero_ext')->nullable()->after('calle');
            $table->string('colonia')->nullable()->after('numero_ext');
            $table->string('cp')->nullable()->after('colonia');
            $table->string('ciudad')->nullable()->after('cp');
            $table->string('municipio')->nullable()->after('ciudad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('delegacions', function (Blueprint $table) {
            $table->dropColumn('calle');
            $table->dropColumn('numero_ext');
            $table->dropColumn('colonia');
            $table->dropColumn('cp');
            $table->dropColumn('ciudad');
            $table->dropColumn('municipio');
        });
    }
}
