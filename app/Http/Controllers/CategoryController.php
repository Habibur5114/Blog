<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\post;
use App\Models\cover;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        $categories=category::all();
        return view('category.create');
        
    }
    public function show(){
        $data=Category::all();
        return view('category.show',compact('data'));
        
    }
    public function delete($id){
        Category::findOrFail($id)->delete();
    
    }
    public function edit($id){
        $editdata = category::find($id);
        return view('category.edit',compact('editdata'));
    }
    public function update(request $request)
    {
        
        $editdata=$request->editdata;
             
             category::findOrFail($editdata)->update([
                
                 'category_name' => $request->category_name,
              
             ]);

         
    }
  

   
public function store(Request $request)
{

    // echo '<pre>';
    // print_r($request-> all());
    // die;
    Category::create([
        'category_name' => $request->category_name,
        
        
       
    ]);
}


public function cover(){
   
    return view ('category.background');
  }


  public function coverstore(Request $request){

    $originalName = $request->file('image')->getClientOriginalName();
    $extension = $request->file('image')->getClientOriginalExtension();           
    $newFileName = pathinfo($originalName, PATHINFO_FILENAME) . '_' . time() . '.' . $extension;
    $imagePath = $request->file('image')->storeAs('image', $newFileName, 'public');


    Cover::create([
        'title' => $request->title,
        'description' => $request->description,
        'image'=> $newFileName,
    ]); 
    
  }

  
  public function addabout(){
    return view('category.addabout');
   }
    
}
