<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
  use HasFactory;

  protected $fillable = ['nama', 'tipe_kamar_id', 'luas', 'harga'];
  protected $table = 'kamar';
}
