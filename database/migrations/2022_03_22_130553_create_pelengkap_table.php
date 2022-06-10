<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelengkapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelengkap', function (Blueprint $table) {
            $table->id();
            $table->string('namaunit');
            $table->string('tahun');
            $table->decimal('tambahantpp',18,2)->default(0);
            $table->decimal('tpg',18,2)->default(0);
            $table->decimal('tamsilguru',18,2)->default(0);
            $table->decimal('insentif',18,2)->default(0);
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
        Schema::dropIfExists('pelengkap');
    }
}
