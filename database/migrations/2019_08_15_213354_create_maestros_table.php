<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestros', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('delegacion_id')->unsigned();
            $table->unsignedInteger('secretaria_id')->unsigned();

            $table->string('nombre',180);
            $table->string('ap_paterno',180);
            $table->string('ap_materno',180);
            $table->string('rfc',180);
            

            $table->unsignedInteger('genero_id')->unsigned();
            $table->unsignedInteger('estudio_id')->unsigned();
            $table->unsignedInteger('situacion_id')->unsigned();
            $table->string('email')->unique();
            $table->string('telefono')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('seccion')->nullable()->default('56');
            $table->string('estado')->nullable()->default('VERACRUZ');
            $table->string('imagen')->default('avatar.png');
            $table->softDeletes();

            $table->unsignedInteger('user_id')->unsigned();
            $table->foreign('delegacion_id')->references('id')->on('delegacions');
            $table->foreign('estudio_id')->references('id')->on('estudios');
            $table->foreign('situacion_id')->references('id')->on('situacions');
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maestros');
    }
}
