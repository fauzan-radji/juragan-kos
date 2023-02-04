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
    Schema::create('coba', function (Blueprint $table) {
      $table->id();
      $table->integer('umur');
      $table->string('nama_lengkap');
      $table->double('tinggi_badan');
      $table->double('berat_badan');
      $table->text('alamat');
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
    Schema::dropIfExists('coba');
  }
};
