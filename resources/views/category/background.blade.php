@extends('backend.master') 
@section('content')
    <main>
         <div class="container-fluid px-4 mt-5">
<div class="col-md-6">
          <form action="{{route('categorycoverstore')}}" method="post" enctype="multipart/form-data" >
           @csrf
            <div>
            <label for="">Title</label>
            <input type="text" name="title" class="form-control mt-2 mb-2" placeholder=" Enter title"  >
            </div>
            <div>
            <label for="">Description</label>
            <input type="text" name="description" class="form-control mt-2 mb-2" placeholder=" Enter Description"  >
            </div>
            <div>
            <label for="">Image</label>
            <input type="file" name="image" class="form-control mt-2 mb-2" placeholder=" Enter image"  >
            </div>
             <button type="submit" class="btn btn-primary">Add cover</button>

        </form>

        </div>              
         </div>       
    </main>
 @endsection