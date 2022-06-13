<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePph13thrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pph13thr', function (Blueprint $table) {
            $table->id();
            $table->string('namaunit');
            $table->string('tahunanggaran');
            $table->decimal('nilaipphlalu', 18,2)->default(0);
            $table->integer('pengali');
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
        Schema::dropIfExists('pph13thr');
    }
}
