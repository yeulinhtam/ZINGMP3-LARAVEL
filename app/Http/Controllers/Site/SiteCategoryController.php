<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class SiteCategoryController extends Controller
{
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index(){
        $data = $this->category->getAlbumOfTopCategory();
        return view('frontend.album',compact('data'));
    }

    public function get($id){
        $data = $this->category->getAlbumOfCategory($id);
        return view('frontend.album-category',compact('data'));
    }
}
