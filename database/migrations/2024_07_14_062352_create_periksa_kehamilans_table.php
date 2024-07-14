<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('periksa_kehamilans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ibu_hamil_id')->constrained()->onDelete('cascade');
            $table->date('tanggal_periksa');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->string('tensi_darah');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('periksa_kehamilans');
    }
};
