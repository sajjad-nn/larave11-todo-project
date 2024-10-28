<?php

namespace App\Http\Controllers;

use App\Http\Requests\Articlerequest;
use App\Models\Article;
use Illuminate\Http\Request;



class ArticleController extends Controller
{
    public function home(){
        // return '<h1>home page</h1>';
        return view('layout.home',[
      
   
            'articles'=>Article::paginate(5),
        ]);}
    

   public function create(){
    return view('layout.create');

}
public function store(Articlerequest $request){
    $validate_data = $request->validated();
    Article::create([
        'title' => $validate_data['title'],
        'slug' => $validate_data['slug'],
        'number' => $validate_data['number'],
        'email' => $validate_data['email'],
    ]) ;
    return redirect('/admin');
  

 }

 public function edit(Article $article){
    return view('layout.edit', [
        'article' => $article
      ]);
      
 }

 public function update(Articlerequest $request ,Article $article){
    $validate_data = $request->validated();
    $article->update($validate_data);
    return redirect('/admin');

 }
 public function delete(Article $article){
    $article->delete();
    return redirect('/admin');
 }
 
 public function about(){
//    return "about us page";
return view('layout.about');
 }
 public function uploadForm(){
    return view("layout.upload");

 }
 public function upload(Request $request){
    $request->validate([
        'image'=>'required|max:500|min:50|mimes:png,jpg,gif'
    ]);
    $fileName =time().'_'. $request->image->getClientOriginalName();
    $request->image->storeAs('image',$fileName ) ;
    return redirect('/admin') ;

 }
 

}
