<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\post;
use App\Models\cover;
use App\Models\comment;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function front(){
      $blog = post::orderBy('created_at', 'desc')->paginate(2);
      $categories=category::all();
      $cover = cover:: all();
      $latestPost = Post::latest()->take(4)->get();
    
    return view('frontend.master', compact('blog','categories','latestPost','cover'));
   }

   public function postdetails($id){
      $postdetailss= post::find($id);
      $categories=category::all();
      $latestPost = Post::latest()->take(4)->get();
      $showpost = post::find($id);
      $cover = cover:: all();
      return view('frontend.detailspost',compact('cover','postdetailss','categories','latestPost','showpost'));
   }

   public function blog(){
      $categories=category::all();
      $latestPost = Post::latest()->take(4)->get();
      $cover = cover:: all();
      //$blogpage = post::all();
      $blogpage = post::orderBy('created_at', 'desc')->paginate(4);
      return view ('frontend.blog',compact('categories','latestPost','blogpage','cover'));
    }
   


    public function categorywisepost($id){
      $blog = post::where('category_id',$id)->orderBy('created_at', 'desc')->paginate(10);
      $categories=category::all();
      $cover = cover:: all();
      $latestPost = Post::latest()->take(4)->get();
    
    return view('frontend.master', compact('blog','categories','latestPost','cover'));
    }
    

}