<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Song;
use App\Models\Singer;
use App\Models\CategoriesOfAlbum;
use App\Models\Category;
use App\Models\SongsOfAlbum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SiteAlbumController extends Controller
{

    public function __construct(Album $album)
    {
        $this->album = $album;
    }

    public function show($id){
        if(gettype($id) != 'array'){
            $id = [$id];
        }
        $suggestion = Song::where('status_song','1')->get();
        return view('frontend.play-album',compact('suggestion'));
    }

    public function get(Request $request){
        $id = $request->id;
        $data = $this->album->findAlbum($id);
        return response()->json(['success' => 'Get data success!','data' => $data]);
    }

    public function fetchDataAlbum(Request $request){

        $id = $request->id;

        $data = Song::join('songs_of_albums','songs.id','=','songs_of_albums.idSong')
                ->where('songs_of_albums.idAlbum','=',$id)
                ->select('songs.*')->get();

        foreach($data as $key => $value){
            $singerNameOfSong = [];
            $singers = Singer::join('singer_of_songs','singer_of_songs.idSinger','=','singers.id')
                            ->select('singers.nameSinger')
                            ->where('singer_of_songs.idSong',$value->id)
                            ->get();
            foreach($singers as $keySinger => $valueSinger){
               array_push($singerNameOfSong,$valueSinger->nameSinger);
            }
            $value->singer_name = $singerNameOfSong;
        }

        return response(json_decode($data));
    }


}

?>
