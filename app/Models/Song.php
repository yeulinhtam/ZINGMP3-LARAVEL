<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SingerOfSong;
use Illuminate\Support\Carbon;

class Song extends Model
{
    use HasFactory;


    public function getTableSong(){
        $data = Song::with(['views' => function ($query) {
                    $time = Carbon::now('Asia/Ho_Chi_Minh')->subDay(30);
                    $query->where('created_at','>',$time);
                    },'singers'])->get()->sortByDesc(function($view){
                    return $view->views->count();
                });

        return $data;
    }

    public function getSuggestion($id){
        $data = Song::with('views','singers')->whereNotIn('id',$id)->get()->sortByDesc(function($view){
            return $view->views->count();
        });
        return $data;
    }


    public function getSongs(){
        $data = Song::all();
        return $data;
    }

    public function findSong($id){
        $data = Song::findOrFail($id);
        return $data;
    }


    public function saveViewOfSong($idSong){
        $view = new ViewOfSong();
        $view->song_id = $idSong;
        $view->save();
        return true;
    }


    public function saveSong($name, $image, $audio, $druation, $status){
        $song = new Song();
        $song->name_song = $name;
        $song->image_song = $image;
        $song->audio_song = $audio;
        $song->druation_song = $druation;
        $song->status_song = $status;
        $song->save();
        return $song->id;
    }

    public function saveSingerOfSong($idSong, $idSinger){
        $sos = new SingerOfSong();
        $sos->song_id = $idSong;
        $sos->singer_id = $idSinger;
        $sos->save();
        return true;
    }


    public function views(){
        return $this->hasMany('App\Models\ViewOfSong');
    }

    public function singers(){
        return $this->belongsToMany('App\Models\Singer');
    }

    public function albums(){
        return $this->belongsToMany('App\Models\Album');
    }

}


