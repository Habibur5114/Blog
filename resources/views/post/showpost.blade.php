@extends('backend.master') 
@section('content')
    <main>
    <div class="container-fluid px-4 mt-5"></div>
   

   <table class="table table-bordered ">
       <thead>
         <tr>
           <th>S_No</th>
           <th>image</th>
           <th>category_name</th>
           <th>Title</th>
           <th>Description</th>
         </tr>
       </thead>
       <tbody>
       @foreach($showpost as $key=>$showpostt)
         <tr>
           <td>{{++$key}}</td>
           <td>
           <img style="height:50px" src="{{asset('storage/image/'.$showpostt->image)}}" alt="">
           </td>
           <td>{{$showpostt->category->category_name}}</td>
        
           <td>{{$showpostt->title}}</td>
           <td>{{$showpostt->description}}</td>
           <td>
              
               <a href="" class="btn btn-success mb-2">Edit</a>
               <a href="" class="btn btn-warning">Delete</a>
           </td>
         </tr>
         @endforeach
         
       </tbody>
     </table>
   
   </div>      
    </main>
 @endsection