@extends('backend.master') 
@section('content')
<main>
<div class="container-fluid px-4 mt-5"></div>
   

<table class="table table-bordered ">
    <thead>
      <tr>
        <th>S_No</th>
        <th>Name</th>
        <th>Email</th>
        <th>subject</th>
        <th>message</th>
      </tr>
    </thead>
    <tbody>
    @foreach($contact as $key=>$contactt)
      <tr>
        <td>{{++$key}}</td>
        <td>{{$contactt->name}}</td>
        <td>{{$contactt->email}}</td>
        <td>{{$contactt->subject}}</td>
        <td>{{$contactt->message}}</td>
        
      </tr>
      @endforeach
      
    </tbody>
  </table>

</div>
</main>
@endsection