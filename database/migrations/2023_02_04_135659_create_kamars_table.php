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
    Schema::create('kamar', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('tipe_kamar_id');
      $table->string('nama');
      $table->double('luas');
      $table->double('harga');
      $table->timestamps();

      $table->foreign('tipe_kamar_id')->references('id')->on('tipe_kamar')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('kamar');
  }
};
