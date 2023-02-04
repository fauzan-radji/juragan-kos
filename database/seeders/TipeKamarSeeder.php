<?php

namespace Database\Seeders;

use App\Models\TipeKamar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipeKamarSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    TipeKamar::created([
      'tipe' => 'Keluarga',
      'keterangan' => ''
    ]);

    TipeKamar::created([
      'tipe' => 'Karyawan',
      'keterangan' => ''
    ]);

    TipeKamar::created([
      'tipe' => 'Mahasiswa',
      'keterangan' => ''
    ]);
  }
}
