@extends('layouts.app')

@section('title', 'Tambah Kamar')

@section('header', 'Tambah Kamar')

@section('content')
  <div class="card">
    <div class="card-body">
      <form action="{{ route('kamar') }}" method="post">
        @csrf

        <div class="form-group">
          <label for="nama">Nama</label>
          <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama Kamar">
        </div>

        <div class="form-group">
          <label for="luas">Luas</label>
          <input class="form-control" id="luas" name="luas" type="number" step="0.1" placeholder="Dalam satuan M2">
        </div>

        <div class="form-group">
          <label for="harga">Harga</label>
          <input class="form-control" id="harga" name="harga" type="number" step="0.1" placeholder="Harga">
        </div>

        <div class="form-group">
          <label for="tipe_kamar_id">Tipe Kamar</label>
          <select class="form-control" id="tipe_kamar_id" name="tipe_kamar_id">
            @foreach ($tipe_kamar as $tipe)
              <option value="{{ $tipe->id }}">{{ $tipe->tipe }}</option>
            @endforeach
          </select>
        </div>

        <button class="btn btn-primary" type="submit">Simpan</button>
      </form>
    </div>
  </div>
@endsection
