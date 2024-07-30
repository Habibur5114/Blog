<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\post;
use App\Models\cover;
use App\Models\about;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
       $about = about:: all();
        return view('frontend.about',compact('about'));
    }
    public function addabout(){
        return view('category.addabout');
    }

    public function aboutstore(Request $request){

    $originalName = $request->file('image')->getClientOriginalName();
    $extension = $request->file('image')->getClientOriginalExtension();           
    $newFileName = pathinfo($originalName, PATHINFO_FILENAME) . '_' . time() . '.' . $extension;
    $imagePath = $request->file('image')->storeAs('image', $newFileName, 'public');

        about::create([
            'image'=> $newFileName,
            'title' => $request->title,
            'description' => $request->description,
           
        ]); 
    }
   
}
