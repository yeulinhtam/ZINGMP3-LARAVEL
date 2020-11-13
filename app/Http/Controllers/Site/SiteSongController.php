<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Song;
use Illuminate\Http\Request;
use Throwable;
use Illuminate\Support\Carbon;

class SiteSongController extends Controller
{
    public function __construct(Song $song)
    {
        $this->song = $song;
    }

    public function show($id){
        if(gettype($id) != 'array'){
            $id = [$id];
        }
        $suggestion = $this->song->getSuggestion([$id]);
        return view('frontend.play-music',compact('suggestion'));
    }

    public function search(Request $request){
        $keyword = $request->input("keyword");
        $songs = Song::where('name_song', 'LIKE', "%$keyword%")->get();
        return view('frontend.search',compact('songs','keyword'));
    }

    public function searchByName(Request $request){
        $keyword = $request->input('keyword');
        $songs = Song::select('name_song')->where('name_song', 'LIKE', "%$keyword%")->get();
        return response(json_decode($songs));
    }


    public function get(Request $request){
        $id = $request->id;
        $data = $this->song->findSong($id);
        return response($data);
    }

    public function post(Request $request){
        $id = $request->id;
        try{
            $this->song->saveViewOfSong($id);
            return response(['success'=>'post data success!']);
        }catch(Throwable $error){
            report($error);
            return response(['error'=>$error]);
        }
    }
}
