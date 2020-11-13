<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SongsOfAlbum extends Model
{
    use HasFactory;

    protected $table = 'album_song';
}
