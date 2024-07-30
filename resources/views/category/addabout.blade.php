@extends('backend.master') 
@section('content')
    <main>
         <div class="container-fluid px-4 mt-5">
<div class="col-md-6">
          <form action="{{route('aboutstore')}}" method="post" enctype="multipart/form-data" >
           @csrf
           <div>
            <label for="">Image</label>
            <input type="file" name="image" class="form-control mt-2 mb-2" placeholder=" Enter image"  >
            </div>
            <div>
            <label for="">Title</label>
            <input type="text" name="title" class="form-control mt-2 mb-2" placeholder=" Enter title"  >
            </div>
            <div>
            <label for="">Description</label>
            
            <textarea name="description" class="form-control mt-2 mb-2">

            </textarea>

            </div>
            
             <button type="submit" class="btn btn-primary">Add cover</button>

        </form>

        </div>              
         </div>       
    </main>
 @endsection