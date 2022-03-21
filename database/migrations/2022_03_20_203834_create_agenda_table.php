<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->integer('id_agenda');
            $table->string('tema',100);
            $table->string('tema_seo',100);
            $table->text('isi_agenda');
            $table->string('tempat',100);
            $table->string('pengirim',100);
            $table->string('gambar',100);
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->date('tgl_posting');
            $table->string('jam',50);
            $table->integer('dibaca');
            $table->string('username',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda');
    }
}
