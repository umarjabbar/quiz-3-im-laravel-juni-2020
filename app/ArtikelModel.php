<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArtikelModel {

  protected $fillable = ['judul', 'isi', 'slug', 'tag'];
  
  public static function get_all(){
    $artikel = DB::table('artikel')->get();
    return $artikel;
  }

  public static function create($artikel){

    $new_artikel = DB::table('artikel')->insert([
      'judul' => $artikel['judul'],
      'isi' => $artikel['isi'],
      'slug' => Str::slug($artikel['judul']),
      'tag' => $artikel['tag']
    ]);
    
    return $new_artikel;

  }

  public static function detail($id){
    $detail = DB::table('artikel')
            ->where('id', $id)
            ->first();
    return $detail;
  }

  public static function update($id, $baru){
    $update = DB::table('artikel')
            ->where('id', $id)
            ->update([
              'judul' => $baru['judul'],
              'isi' => $baru['isi'],
              'tag' => $baru['tag']
            ]);
    return $update;
  }

  public static function delete($id){
    $delete = DB::table('artikel')->where('id', $id)->delete();

    return $delete;
  }

}