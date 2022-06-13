<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatagajicpnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datagajicpns', function (Blueprint $table) {
            $table->id();
            $table->string('namaunit');
            $table->string('tahun');
            $table->string('jenisgaji');
            $table->decimal('gapok',18,2)->default(0);
            $table->decimal('tkel',18,2)->default(0);
            $table->decimal('tjab',18,2)->default(0);
            $table->decimal('tfung',18,2)->default(0);
            $table->decimal('tumum',18,2)->default(0);
            $table->decimal('tberas',18,2)->default(0);
            $table->decimal('tpph',18,2)->default(0);
            $table->decimal('pembulatan',18,2)->default(0);
            $table->decimal('bpjs',18,2)->default(0);
            $table->decimal('jkk',18,2)->default(0);
            $table->decimal('jkm',18,2)->default(0);
            $table->decimal('tapera',18,2)->default(0);
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
        Schema::dropIfExists('datagajicpns');
    }
}
