<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMontirsTable extends Migration
{
    public function up()
    {
        Schema::create('montirs', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->string('nama');
            $table->char('gender', 1);
            $table->date('tgl_lahir');
            $table->string('tmp_lahir');
            $table->string('keahlian');
            $table->foreignId('kategori_montir_id')->constrained('kategori_montirs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('montirs');
    }
}
