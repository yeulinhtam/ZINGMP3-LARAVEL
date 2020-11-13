<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Song;

class SiteHomeController extends Controller
{
    public function index(){
        $song = new Song();
        $table = $song->getTableSong();
        return view('frontend.home',compact('table'));
    }

}
