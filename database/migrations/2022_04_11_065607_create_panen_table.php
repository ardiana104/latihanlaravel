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
        Schema::create('panen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('productID');
            $table->foreignId('id_kelompok_tani');
            $table->foreignId('user_id');
            $table->date('perkiraanPanenDate');
            $table->double('perkiraanPanenJumlah');
            $table->date('PanenDate');
            $table->double('PanenJumlah');
            $table->string('satuan');
            
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
        Schema::dropIfExists('panen');
    }
};
