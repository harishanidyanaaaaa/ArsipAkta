<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_notaris');
            $table->unsignedBigInteger('id_klien');
            $table->string('jenis_akta');
            $table->string('role');
            $table->date('tgl_pembuatan');
            $table->text('deskripsi');
            $table->timestamps();

            $table->foreign('id_notaris')->references('id')->on('users');
            $table->foreign('id_klien')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akta');
    }
};
