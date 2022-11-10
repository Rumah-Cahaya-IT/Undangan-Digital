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
        Schema::create('ceritas', function (Blueprint $table) {
            $table->id();
            $table->string('status_cerita');
            $table->string('cerita');
            $table->string('status_lamaran');
            $table->string('lamaran');
            $table->string('status_nikah');
            $table->string('nikah');
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
        Schema::dropIfExists('ceritas');
    }
};
