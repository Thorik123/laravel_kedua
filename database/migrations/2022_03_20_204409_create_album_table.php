<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album', function (Blueprint $table) {
            $table->integer('id_album');
            $table->string('jdl_album',100);
            $table->string('album_seo',100);
            $table->text('keterangan');
            $table->string('gbr_album',100);
            $table->enum('aktif', ['Y', 'N']);
            $table->integer('hits_album');
            $table->date('tgl_posting');
            $table->time('jam');
            $table->string('hari',20);
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
        Schema::dropIfExists('album');
    }
}
