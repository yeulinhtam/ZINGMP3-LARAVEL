<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingerOfSong extends Model
{
    use HasFactory;

    protected $table = 'singer_song';

    public function saveSingerOfSong($idSong, $idSinger){
        $sos = new SingerOfSong();
        $sos->song_id = $idSong;
        $sos->singer_id = $idSinger;
        $sos->save();
    }
}
