<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SongsOfAlbum;
use App\Models\SingerOfAlbum;
use App\Models\Singer;
use Illuminate\Support\Facades\DB;

class Album extends Model
{
    use HasFactory;

    protected $table = 'albums';


    public function getAlbumOfTopCategory(){
        $data = Album::with(['categories' => function ($query) {
                         $query->count('category_album.category_id');
                         $query->groupBy('category_id');
                    },'singers'])->get();

        return $data;
    }

    public function getAlbums(){
       $data = Album::with('songs','singers','categories')->get();
       return $data;
    }

    public function findAlbum($id){
        $data = Album::with('songs.singers')->where('id',$id)->get();
        return $data;
    }


    public function saveAlbum($name, $detail, $image, $status){
        $album = new Album();
        $album->name_album = $name;
        $album->detail_album = $detail;
        $album->image_album = $image;
        $album->status_album = $status;
        $album->save();
        return $album->id;
    }

    public function saveCategoryOfAlbum($idAlbum, $idCategory){
        $coa = new CategoriesOfAlbum();
        $coa->album_id = $idAlbum;
        $coa->category_id = $idCategory;
        $coa->save();
    }

    public function saveSongOfAlbum($idAlbum, $idSong){
        $soa = new SongsOfAlbum();
        $soa->album_id = $idAlbum;
        $soa->song_id = $idSong;
        $soa->save();
    }

    public function saveSingerOfAlbum($idAlbum, $idSinger){
        $soa = new SingerOfAlbum();
        $soa->album_id = $idAlbum;
        $soa->singer_id = $idSinger;
        $soa->save();
    }



    public function songs(){
        return $this->belongsToMany('App\Models\Song');
    }

    public function singers(){
        return $this->belongsToMany('App\Models\Singer','singer_album');
    }

    public function categories(){
        return $this->belongsToMany('App\Models\Category','category_album');
    }



}
