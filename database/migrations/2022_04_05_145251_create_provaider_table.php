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
        Schema::create('provaider', function (Blueprint $table) {
            $table->id();
            $table->string('Nama Provaider');
            $table->text('Nomer');
            $table->text('HargaPaket');
            $table->text('Aksi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provaider');
    }
};
