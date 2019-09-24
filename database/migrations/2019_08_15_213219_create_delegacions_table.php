<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDelegacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delegacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomenclatura_id')->unsigned();
            $table->integer('numero');
            $table->string('sede', 180);
            $table->unsignedInteger('nivel_id');
            $table->integer('region_id')->unsigned();            
            $table->string('deleg')->unique();
            $table->datetime('p_inicial');
            $table->datetime('p_final');            
            $table->softDeletes();
            
            $table->foreign('nomenclatura_id')->references('id')->on('nomenclaturas');
            $table->foreign('region_id')->references('id')->on('regions');
            $table->foreign('nivel_id')->references('id')->on('nivels');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delegacions');
    }
}
