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
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('user_id');
            $table->integer('nisn');
            $table->string('nama');
            $table->enum('jk', ['perempuan', 'laki-laki']);
            $table->string('asal_sekolah');
            $table->string('nomor_handphone');
            $table->string('nomor_ayah');
            $table->string('nomor_ibu');
            $table->string('email');
            $table->string('referensi');
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
        Schema::dropIfExists('ppdbs');
    }
};
