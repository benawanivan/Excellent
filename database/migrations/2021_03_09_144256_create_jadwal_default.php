<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalDefault extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_default', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_murid');
            $table->string('hari');
            $table->string('sesi');
            $table->date('tgl_mulai');
            $table->date('tgl_akhir');
            $table->foreign('id_murid')
            ->references('id')->on('murid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_default');
    }
}
