@extends('frontend.index')

@section('blog')
@foreach ($blogpage as $blogpagee)
<div class="col-lg-6">


                  
 
  
 
                  <div class="blog-post">
                    <div class="blog-thumb">
                    <img style="height:200px" src="{{asset('storage/image/'.$blogpagee->image)}}" alt="">
                    </div>
                    <div class="down-content">
                      <span>Lifestyle</span>
                      <a href="post-details.html"><h4>{{$blogpagee->title}}</h4></a>
                      
                     
                      <p>{{Str::limit($blogpagee->description, 50)}}</p>
                      <a href="{{route('postdetails',$blogpagee->id)}}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
                  
                </div>
                @endforeach

 
                 
      <div class="d-flex justify-content-center">
      {{ $blogpage->links() }}
    </div>
           
@endsection

                 
               