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
    TipeKamar::create([
      'tipe' => 'Keluarga',
      'keterangan' => ''
    ]);

    TipeKamar::create([
      'tipe' => 'Karyawan',
      'keterangan' => ''
    ]);

    TipeKamar::create([
      'tipe' => 'Mahasiswa',
      'keterangan' => ''
    ]);
  }
}
