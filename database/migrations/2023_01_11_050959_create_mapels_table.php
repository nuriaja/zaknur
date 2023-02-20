<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapels', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nama_mapel_id')->unsigned();
            $table->foreign('nama_mapel_id')->nullable()->references('id')->on('nama_mapels')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->bigInteger('kelas_id')->unsigned();
            $table->foreign('kelas_id')->nullable()->references('id')->on('kelas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->bigInteger('hari_id')->unsigned();
            $table->foreign('hari_id')->nullable()->references('id')->on('hari')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('mapels');
    }
};
