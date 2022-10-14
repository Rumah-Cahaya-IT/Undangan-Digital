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
        Schema::create('mempelaiwanita', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('nama');
            $table->string('panggilan');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('mempelaiwanita');
    }
};
