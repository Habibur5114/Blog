<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\post;
use App\Models\cover;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){

        $categories=category::all();
        $cover = cover:: all();
        $latestPost = Post::latest()->take(4)->get();
       
      return view('frontend.contact', compact('categories','latestPost','cover'));
       
    }
    public function showcontact(){
        $contact = contact::all();
        return view ('category.contact', compact('contact'));
    }

    public function contactstore(Request $request){
        //   echo '<pre>';
        //   print_r($request->all());
        //   die;

        contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            
        ]); 
    }
}
