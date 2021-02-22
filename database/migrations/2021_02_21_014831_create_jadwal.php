<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_murid');
            $table->unsignedBigInteger('id_guru')->nullable();
            $table->unsignedBigInteger('id_mapel')->nullable();
            $table->unsignedBigInteger('id_soal')->nullable();
            $table->date('tanggal');
            $table->string('sesi');
            $table->string('materi')->nullable();
            $table->integer('status');
            $table->foreign('id_murid')
            ->references('id')->on('murid');

            $table->foreign('id_guru')
            ->references('id')->on('guru');

            $table->foreign('id_mapel')
            ->references('id')->on('mapel');

            $table->foreign('id_soal')
            ->references('id')->on('soal');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
