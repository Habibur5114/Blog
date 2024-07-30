@extends('frontend.index')


@section('blog')

<div class="col-lg-12">
                  <div class="blog-post">
                  @foreach($blog as  $blogg)
                    <div class="blog-thumb">
                      <!-- <img src="{{asset('frontend/assets/images/blog-post-01.jpg')}}" alt=""> -->
                      <img style="height:400px" src="{{asset('storage/image/'.$blogg->image)}}" alt="">
                    </div>
                    <div class="down-content">
                     
                      <a href="post-details.html"><h4>{{$blogg->title}}</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">May 31, 2020</a></li>
                        <li><a href="#">12 Comments</a></li>
                      </ul>
                      <p>{{Str::limit($blogg->description, 30)}}</p>
                      <a href="{{route('postdetails',$blogg->id)}}" class="btn btn-primary">Read More</a>

                      
                    </div>
                    @endforeach
                    </div>
                </div>
          {{$blog->links()}}
        
          @endsection