@extends('layouts.app')

@section('title', 'Kamar')

@section('header', 'Manajemen Kamar')

@section('content')
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Kamar</h6>
      <a class="btn btn-primary" href="{{ route('kamar.create') }}">Tambah Data</a>
    </div>
    <div class="card-body">
      @if (session()->has('info'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          {{ session('info') }}
          <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
        </div>
      @endif

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Luas</th>
              <th>Harga</th>
              <th>Tipe</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Luas</th>
              <th>Harga</th>
              <th>Tipe</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($kamar as $k)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $k->nama }}</td>
                <td>{{ $k->luas }}</td>
                <td>{{ $k->harga }}</td>
                <td>{{ $k->tipe_kamar_id }}</td>
                <td>
                  <a class="btn btn-sm btn-primary" href="{{ route('kamar.edit', $k->id) }}">Edit</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
