@extends('layouts.master')

@section('title', 'Membuat artikel baru')

@section('content')
<div class="card">
  <div class="card-header bg-dark text-white"><h3>Tambahkan Artikel Baru</h3></div>
  <div class="card-body">
    <form method="POST" action="{{ url('/artikel') }}">
    @csrf
      <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Beri judul" name="judul">
        @error('judul')
        <div class="invalid-feedback">Judul harus diisi!</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="isi">Isi artikel</label>
        <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" placeholder="tulis artikel anda disini" rows="10" name="isi"></textarea>
      </div>
        @error('isi')
          <div class="invalid-feedback">Ini juga jangan dikosongin sih:3</div>
        @enderror
      <div class="form-group">
        <label for="tag">tag</label>
        <small id="emailHelp" class="form-text text-success">*pisahkan dengan tanda spasi pada tiap tagnya. contoh: koding olahraga kesehatan dll</small>
        <input type="text" class="form-control" id="tag" placeholder="tambahkan tag" name="tag">
      </div>
      <div class="text-right">
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </form>
  </div>
</div>
@endsection