<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbDashboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_dashboard', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_institusi');
            $table->string('mulai_pendaftaran');
            $table->string('akhir_pendaftaran');
            $table->string('mulai_rekap');
            $table->string('akhir_rekap');
            $table->string('mulai_analisis');
            $table->string('akhir_analisis');
            $table->string('mulai_pengumuman');
            $table->string('akhir_pengumuman');
            $table->string('nama_institusi');
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
        Schema::dropIfExists('tb_dashboard');
    }
}
