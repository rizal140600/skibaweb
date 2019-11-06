<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_sekolah');
            $table->string('status');
            $table->text('alamat');
            $table->integer('telepon_fax');
            $table->string('website_email');
            $table->string('kepala_sekolah');
            $table->integer('nomer_sekolah');
            $table->integer('npsn');
            $table->string('no_sk_pendirian');
            $table->string('tgl_sk_pendirian');
            $table->string('no_penyelenggaraan');
            $table->string('penyelenggara');
            $table->text('akreditasi');
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
        Schema::dropIfExists('identitas');
    }
}
