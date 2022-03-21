<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHalamanstatisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halamanstatis', function (Blueprint $table) {
            $table->integer('id_halaman');
            $table->string('judul',100);
            $table->string('judul_seo',100);
            $table->text('isi_halaman');
            $table->date('tgl_posting');
            $table->string('gambar',100);
            $table->string('username',50);
            $table->integer('dibaca');
            $table->time('jam');
            $table->string('hari');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('halamanstatis');
    }
}
