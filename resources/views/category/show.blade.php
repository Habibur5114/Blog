@extends('backend.master') 
@section('content')
<main>
<div class="container-fluid px-4 mt-5"></div>
   

<table class="table table-bordered ">
    <thead>
      <tr>
        <th>S_No</th>
        <th>Category_Name</th>
        <th>status</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data as $key=>$datat)
      <tr>
        <td>{{++$key}}</td>
        <td>{{$datat->category_name}}</td>
        <td>
            <a href="{{route('categoryedit',$datat->id)}}"class="btn btn-success">Edit</a>
            <a href="{{route('categorydelete',$datat->id)}}"class="btn btn-warning">Delete</a>
           
            
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>

</div>
</main>
@endsection