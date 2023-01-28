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
            $table->foreign('kelamin_id')->references('id')->on('kelamins')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->string('tempat_lahir',100);
            $table->string('tanggal_lahir',100,null);

            $table->bigInteger('agama_id')->unsigned()->nullable();
            $table->foreign('agama_id')->references('id')->on('agamas')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->bigInteger('pendidikan_id')->unsigned();
            $table->foreign('pendidikan_id')->references('id')->on('pendidikans')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->bigInteger('pekerjaan_id')->unsigned();
            $table->foreign('pekerjaan_id')->references('id')->on('pekerjaans')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->bigInteger('darah_id')->unsigned();
            $table->foreign('darah_id')->references('id')->on('darahs')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->bigInteger('perkawinan_id')->unsigned();
            $table->foreign('perkawinan_id')->references('id')->on('perkawinans')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->bigInteger('hubungan_id')->unsigned();
            $table->foreign('hubungan_id')->references('id')->on('hubungans')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->string('suku',100,null);

            $table->bigInteger('kewarganegaraan_id')->unsigned();
            $table->foreign('kewarganegaraan_id')->references('id')->on('kewarganegaraans')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->string('nama_ayah',100,null);
            $table->string('nama_ibu',100,null);

            $table->uuid('kk_id');
            $table->foreign('kk_id')->references('id')->on('keluargas')->onUpdate('cascade')
            ->onDelete('cascade');

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
