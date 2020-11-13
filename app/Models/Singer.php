<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    use HasFactory;

    public function getSongOfSingerDemo(){
        $song = Singer::with('songs','albums')->get();
        return $song;
    }
    public function getSingers(){
        $data = Singer::paginate(10);
        return $data;
    }

    public function findSinger($id){
        $data = Singer::findOrFail($id);
        return $data;
    }


    public function getSongOfSinger($data){
        $songs = SingerOfSong::join('songs', 'singer_song.song_id', '=', 'songs.id')
                ->whereIn('singer_song.singer_id', $data)
                ->groupBy('id')
                ->select('songs.*')->get();
       return $songs;
    }

    public function saveSinger($name, $image, $detail, $status){
        $singer = new Singer();
        $singer->name_singer = $name;
        $singer->image_singer = $image;
        $singer->detail_singer = $detail;
        $singer->status_singer = $status;
        $singer->save();
    }


    public function songs(){
        return $this->belongsToMany('App\Models\Song');
    }

    public function albums(){
        return $this->belongsToMany('App\Models\Album','singer_album');
    }

    public function scopeActive($query)
    {
        return $query->where('status_singer', '1');
    }
}
