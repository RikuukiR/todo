<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('category', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        $category = $request->only(['name']);
        Category::create($category);

        return redirect('/categories')->with('message', 'カテゴリを作成しました');
    }
}



// public function store(TodoRequest $request)
//     {
//         $todo = $request->only(['content']);
//         Todo::create($todo);
//         return redirect('/')->with('message', 'Todoを作成しました');
//     }

//     public function update(TodoRequest $request)
//     {
//         $todo = $request->only(['content']);
//         Todo::find($request->id)->update($todo);

//         return redirect('/')->with('message', 'Todoを更新しました');
//     }

//     public function destroy(Request $request)
//     {
//         Todo::find($request->id)->delete();

//         return redirect('/')->with('message', 'Todoを削除しました');
//     }