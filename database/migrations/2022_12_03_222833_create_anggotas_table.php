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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name',100);
            $table->string('nik',100);
            $table->bigInteger('kelamin_id')->unsigned();
            $table->string('tempat_lahir',100);
            $table->string('tanggal_lahir',100,null);
            $table->bigInteger('agama_id')->unsigned();
            $table->bigInteger('pendidikan_id')->unsigned();
            $table->bigInteger('pekerjaan_id')->unsigned();
            $table->bigInteger('darah_id')->unsigned();
            $table->bigInteger('perkawinan_id')->unsigned();
            $table->bigInteger('hubungan_id')->unsigned();
            $table->string('suku',100,null);
            $table->bigInteger('kewarganegaraan_id')->unsigned();
            $table->string('nama_ayah',100,null);
            $table->string('nama_ibu',100,null);
            $table->bigInteger('kk_id')->unsigned();
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
        Schema::dropIfExists('anggotas');
    }
};
