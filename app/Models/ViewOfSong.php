<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewOfSong extends Model
{
    use HasFactory;

    protected $table = "view_song";

    public function saveView($idSong){
        $view = new ViewOfSong();
        $view->song_id = $idSong;
        $view->save();
        return true;
    }
}
