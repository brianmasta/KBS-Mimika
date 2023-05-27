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
        Schema::create('strukturals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 225);
            $table->string('jabatan', 225);
            $table->string('sosial_media', 225);
            $table->string('foto', 225);
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
        Schema::dropIfExists('strukturals');
    }
};
