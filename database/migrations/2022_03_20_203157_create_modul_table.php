<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modul', function (Blueprint $table) {
            $table->integer('id_modul');
            $table->string('nama_modul',50);
            $table->string('username',50);
            $table->string('link',100);
            $table->text('static_content');
            $table->string('gambar',100);
            $table->enum('publish', ['Y', 'N']);
            $table->enum('status', ['user', 'admin']);
            $table->enum('aktif', ['Y', 'N']);
            $table->integer('urutan');
            $table->string('link_seo',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modul');
    }
}
