@extends('backend.master') 
@section('content')
    <main>
         <div class="container-fluid px-4 mt-5">
            <h1>Create post</h1>
<div class="col-md-6">
          <form action="{{route('addpoststore')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div>
            <label for="">Category Name</label>
            <select class="form-select mt-3 mb-2"aria-label="Default select example" name="category_id" id="category_id">  
            @foreach($postcategory as $postcategorys)
                 
            <option value="{{$postcategorys->id}}">{{$postcategorys->category_name}}</option> 
            @endforeach           
            </select>
            </div>

            <div>
            <label for="">image</label>
            <input type="file" name="image" class="form-control mt-3 mb-2">
            </div>
            <div>
            <label for="">Title</label>
            <input type="text" name="title" class="form-control mt-3 mb-2">
            </div>
            <div>
            <label for="">Description</label>
            <textarea name="description" id="description" class="form-control mt-3 mb-2" cols="" rows=""></textarea>
            </div> <br>
             <button type="submit" class="btn btn-primary">Add_Post</button>

        </form>

        </div>              
         </div>       
    </main>
 @endsection