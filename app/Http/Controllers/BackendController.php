<?php

namespace App\Http\Controllers;
use App\Models\category;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function back(){
        return view("backend.index");
    }

    
    

}
