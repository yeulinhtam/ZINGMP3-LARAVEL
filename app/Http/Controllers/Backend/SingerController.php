<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\SingerRequest;
use App\Models\Singer;
use App\Models\SingerOfSong;
use phpDocumentor\Reflection\DocBlock\Tags\Throws;
use Throwable;

class SingerController extends Controller
{

    public function __construct(Singer $singer)
    {
        $this->singer = $singer;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->singer->getSingers();
        return view('backend.singer-index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.singer-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SingerRequest $request)
    {
        $data = array(
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,
            'status' =>  $request->status == "on" ? 1 : 0
        );

        if($request->hasFile('image')) {
            try{
                $path = $request->file('image')->store('singers/images');
                $this->singer->saveSinger($data['name'],$path,$data['description'],$data['status']);
            }catch(Throwable $error){
                report($error);
                return false;
            }
        }

        return redirect()->route('singers.index')->with('success','Created singer success!');
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

    public function getSongOfSinger(Request $request){
        $data = $request->singerId;
        $songs = $this->singer->getSongOfSinger($data);
        return response()->json(['success' => $songs]);
    }
}
