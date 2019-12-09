<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 20);
            $table->string('username', 20);
            $table->string('password', 30);
            $table->date('tgl_lahir');
            $table->text('alamat')->nullable();
            $table->string('kecamatan', 30);
            $table->string('telpon', 14);
            $table->string('email', 100);
            $table->text('foto')->nullable();
            // $table->string('name')->default('');
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
        Schema::dropIfExists('siswa');
    }
}
