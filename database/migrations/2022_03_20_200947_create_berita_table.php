<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->integer('id_berita');
            $table->integer('id_kategori');
            $table->string('username',30);
            $table->string('judul',100);
            $table->string('sub_judul',100);
            $table->string('youtube',100);
            $table->string('judul_seo',100);
            $table->enum('headline', ['Y', 'N']);
            $table->enum('aktif', ['Y', 'N']);
            $table->enum('utama', ['Y', 'N']);
            $table->text('isi_berita');
            $table->text('keterangan_gambar');
            $table->string('hari',20);
            $table->date('tanggal');
            $table->time('jam');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita');
    }
}
