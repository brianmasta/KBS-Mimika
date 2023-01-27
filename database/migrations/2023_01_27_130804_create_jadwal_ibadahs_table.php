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
        Schema::create('jadwal_ibadahs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('date',100);
            $table->string('keluarga',100);
            $table->string('alamat',100);
            $table->string('liturgi',100);
            $table->string('firman',100);
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
        Schema::dropIfExists('jadwal_ibadahs');
    }
};
