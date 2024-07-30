@extends('backend.master') 
@section('content')
    <main>
         <div class="container-fluid px-4 mt-5">
<div class="col-md-6">
          <form action="{{route('categoryupdate')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <input type="hidden" value="{{$editdata->id}}" name="editdata">
            <label for="">Edit Category Name</label>
            <input type="text" name="category_name" class="form-control mt-2 mb-2" placeholder=" Enter category name" value="{{$editdata->name}}" >
            

             <button type="submit" class="btn btn-primary">Create Category</button>

        </form>

        </div>              
         </div>       
    </main>
 @endsection