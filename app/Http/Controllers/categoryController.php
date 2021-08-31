<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use App\Components\Recursive;

class categoryController extends Controller
{
    // private $category;

    public function __construct(Category $category){
        $this->category = $category;
    }

    // hiện list danh mục
    public function create(){
        // lấy tất cả danh mục 
        $data = $this->category->all();
        $recursive = new Recursive($data);
        $htmlOption = $recursive->categoryRecursive();
        return view('backend.pages.category.add', compact('htmlOption'));
    }

    // thêm danh mục
    public function add(Request $request){
        $slug = str_slug($request->nameCategory);
        $this->category->create([
            'name' => $request->nameCategory,
            'parent_id' => $request->parent_idCategory,
            'slug' => $slug
        ]);
    }
}
