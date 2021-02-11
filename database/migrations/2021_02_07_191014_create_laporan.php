<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();            
            $table->string('judul'); 
            $table->string('file'); 
            $table->integer('minggu_ke'); 
            $table->integer('bulan'); 
            $table->unsignedBigInteger('id_murid'); 
            $table->date('tgl_upload');
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
        Schema::dropIfExists('laporan');
    }
}
