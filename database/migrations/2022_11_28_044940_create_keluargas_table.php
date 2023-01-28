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
        Schema::create('keluargas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name',100);
            $table->string('alamat',100);
            $table->string('asal_jemaat',100);

            $table->bigInteger('rayon_id')->unsigned();
            $table->foreign('rayon_id')->references('id')->on('rayons')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->string('provinsi',100);
            $table->string('kabupaten',100);
            $table->string('distrik',100,null);
            $table->string('kelurahan',100,null);
            $table->string('rt', 100);
            $table->string('pos',20,null);
            $table->string('hp',20,null);
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
        Schema::dropIfExists('keluargas');
    }
};
