@extends('layouts.master')

@section('title', 'Detail artikel')

@section('content')

<div class="card">
  <div class="card-body">
    <h2>Judul : {{ $artikel->judul }}</h2>
    <span class="font-italic">Slug : {{ $artikel->slug }}</span>
    <p>{{ $artikel->isi }}</p>
    <?php 
    $kalimat = $artikel->tag;
    $panjang = str_word_count($kalimat);
    $kata = explode(" " , $kalimat);
    for($i = 0; $i < $panjang; $i++):
    ?>
      <a href="#" class="btn btn-info btn-sm">{{$kata[$i]}}</a>
    <?php 
      endfor;
    ?>
  </div>
</div>

@endsection