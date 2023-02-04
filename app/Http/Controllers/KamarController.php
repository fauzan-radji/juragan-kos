<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\TipeKamar;

class KamarController extends Controller
{
  public function index()
  {
    $kamar = Kamar::all();
    return view('kamar.index', compact('kamar'));
  }

  public function create()
  {
    $tipe_kamar = TipeKamar::all();
    return view('kamar.create', compact('tipe_kamar'));
  }

  public function edit(Kamar $kamar)
  {
    // 
  }

  public function store(Request $request)
  {
    Kamar::create([
      'nama' => $request->nama,
      'tipe_kamar_id' => $request->tipe_kamar_id,
      'luas' => $request->luas,
      'harga' => $request->harga,
    ]);

    return redirect('kamar')->with('info', 'Data Kamar berhasil ditambahkan');
  }
}
