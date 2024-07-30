<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(){
        $postcategory=category::latest()->get();
        
        return view('post.addpost',compact('postcategory'));
    }

    public function poststore(Request $request){
    // echo '<pre>';
    // print_r($request-> all());
    // die;
    $originalName = $request->file('image')->getClientOriginalName();
    $extension = $request->file('image')->getClientOriginalExtension();           
    $newFileName = pathinfo($originalName, PATHINFO_FILENAME) . '_' . time() . '.' . $extension;
    $imagePath = $request->file('image')->storeAs('image', $newFileName, 'public');
    post::create([
        'category_id' => $request->category_id,
         'image'=> $newFileName,
        'title' => $request->title,
        'description' => $request->description,
        
        
       
    ]);
    
    }

    public function showpost(){
        $showpost =post:: all();
        return view('post.showpost',compact('showpost'));
    }


} 
