<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
public function todo(){    
    return view("todo.todo",["todos"=>Todo::paginate(3)]);
    
}
public function create(Request $request){
    return view("todo.create",["categories"=>Article::all()]);


}
public function store(Request $request){
    $filename = time() . '_' . $request->image->getClientOriginalName();
    $request->image->storeAs('/images', $filename);
    Todo::create([
        'image' => $filename,
        'title' => $request->title,
        'description' => $request->description,
        'category_id' => $request->category_id,
    ]);

    return redirect()->route('todo');



}
}
