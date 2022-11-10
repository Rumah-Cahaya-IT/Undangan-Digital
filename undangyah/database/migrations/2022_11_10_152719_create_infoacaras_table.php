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
        Schema::create('infoacaras', function (Blueprint $table) {
            $table->id();
            $table->string('zona');
            $table->string('status_akad');
            $table->string('tanggal_akad');
            $table->string('waktu_akad');
            $table->string('alamat_akad');
            $table->string('status_resepsi');
            $table->string('tanggal_resepsi');
            $table->string('waktu_resepsi');
            $table->string('alamat_resepsi');
            $table->unsignedBigInteger('users_id');
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
        Schema::dropIfExists('infoacaras');
    }
};
