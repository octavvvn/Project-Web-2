<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailLayanansTable extends Migration
{
    public function up()
    {
        Schema::create('detail_layanans', function (Blueprint $table) {
            $table->id();
            $table->string('pekerjaan', 100);
            $table->double('biaya');
            $table->foreignId('layanan_id')->constrained('layanans')->onDelete('cascade');
            $table->foreignId('pj_montir_id')->constrained('montirs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_layanans');
    }
}
