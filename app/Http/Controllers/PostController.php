<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
   public function create(){
    return view('post.create');
   }

   public function insert(Request $request){
    DB::table('posts')->insert([
        'title'=>$request->title,
        'body'=>$request->body,
    ]);
    return redirect()->route('post.posts');
   }

   public function posts(){
      $posts=DB::table('posts')->get();
      return view('post.allposts',compact('posts'));
   }

   public function edit($id){
      $post=DB::table('posts')->where('id',$id)->first();
      return view('post.edit',compact('post'));
   }

   public function update(Request $request ,$id){
      DB::table('posts')->where('id',$id)->update([
         'title'=>$request->title,
         'body'=>$request->body,
      ]);
      return redirect()->route('post.posts');
   }

   public function delete($id){
      DB::table('posts')->where('id',$id)->delete();
      return redirect()->back();
   }

   public function deleteAll(){
      DB::table('posts')->delete();
      return redirect()->back();
   }

   public function deleteAllTruncate(){
      DB::table('posts')->truncate();
      return redirect()->back();
   }
}