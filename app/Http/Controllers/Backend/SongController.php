<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Song;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\SongRequest;
use Throwable;


class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Song $song)
    {
        $this->song = $song;
    }


    public function index()
    {
        $data = $this->song->getSongs();
        return view('backend.music-index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.music-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SongRequest $request)
    {

        $name = $request->name;
        $image = $request->image;
        $audio = $request->audio;
        $singers = $request->singers;
        $status = $request->status == 'on' ? 1 : 0;

        if($request->hasFile('image') && $request->hasFile('audio')) {
            try{
                $duration = gmdate("i:s",$request->druation);
                $pathImage = $request->file('image')->store('song/images');
                $pathAudio = $request->file('audio')->store('song/audio');
                $idSong = $this->song->saveSong($name, $pathImage, $pathAudio ,$duration,$status);

                foreach ($singers as $key => $value) {
                    $this->song->saveSingerOfSong($idSong,$value);
                }

            }catch(Throwable $error){
                report($error);
                return false;
            }
        }
        return redirect()->route('songs.index')->with('success','Created songs success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
