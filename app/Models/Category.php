<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';


    public function getCategories(){
        return Category::paginate(10);
    }


    public function getAlbumOfTopCategory(){
        $data = Category::with('albums')->limit(4)->get()->sortByDesc(function($view){
            return $view->albums->count();
        });
        return $data;
    }

    public function getAlbumOfCategory($id){
        $data = Category::with('albums')->where('id','=',$id)->get();
        return $data;
    }

    public function albums(){
        return $this->belongsToMany('App\Models\Album','category_album');
    }

    public function saveCategory($name, $status){
        $category = new Category();
        $category->name_category = $name;
        $category->status_category = $status;
        $category->save();
    }
}
