@extends('backend.master') 
@section('content')
    <main>
         <div class="container-fluid px-4 mt-5">
<div class="col-md-6">
          <form action="{{route('categorystore')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <label for="">Category Name</label>
            <input type="text" name="category_name" class="form-control mt-2 mb-2" placeholder=" Enter category name"  >
            

             <button type="submit" class="btn btn-primary">Create Category</button>

        </form>

        </div>              
         </div>       
    </main>
 @endsection