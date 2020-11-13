<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Models\SingerOfSong;
use App\Models\SingerOfAlbum;
use App\Models\Song;
use App\Models\Category;
use Throwable;

class AlbumController extends Controller
{

    public function __construct(Album $album)
    {
        $this->album = $album;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->album->getAlbums();
        return view('backend.album-index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.album-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $name = $request->name;
        $categories = $request->categories;
        $singers = $request->singers;
        $songs = $request->songs;
        $image = $request->image;
        $description = $request->description;
        $status = $request->status == 'on' ? 1 : 0;

        if($request->hasFile('image')) {
            try{
                $path = $request->file('image')->store('albums/images');
                $idAlbum = $this->album->saveAlbum($name, $description, $path, $status);

                foreach($singers as $key => $value){
                    $this->album->saveSingerOfAlbum($idAlbum,$value);
                }

                foreach ($categories as $key => $value) {
                    $this->album->saveCategoryOfAlbum($idAlbum,$value);
                }

                foreach ($songs as $key => $value) {
                    $this->album->saveSongOfAlbum($idAlbum,$value);
                }

            }catch(Throwable $error){
                report($error);
                return false;
            }
        }
        return redirect()->route('albums.index')->with('success','Created album success!');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function getListSongOfSinger(Request $request)
    {

        $data = $request->singerId;
        $songs = SingerOfSong::join('songs', 'singer_of_songs.idSong', '=', 'songs.id')
            ->whereIn('singer_of_songs.idSinger', $data)
            ->groupBy('id')
            ->select('songs.*')->get();
        return response()->json(['success' => $songs]);
    }
}
