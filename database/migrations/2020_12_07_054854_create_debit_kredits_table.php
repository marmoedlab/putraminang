<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebitKreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debit_kredits', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal');
            $table->string('pilih');
            $table->string('jumlah');
            $table->string('keterangan');
            $table->string('idPelanggan');
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
        Schema::dropIfExists('debit_kredits');
    }
}
