@extends('frontend.index')

@section('blog')
<div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                    <img style="height:400px" src="{{asset('storage/image/'.$postdetailss->image)}}" alt="">
                    </div>
                    <div class="down-content">
                      <span>Lifestyle</span>
                      <a href="post-details.html"><h4>{{ $postdetailss->title}}</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">May 12, 2020</a></li>
                        <li><a href="#">10 Comments</a></li>
                      </ul>
                      <p>{{ $postdetailss-> description}}</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Best Templates</a>,</li>
                              <li><a href="#">TemplateMo</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
           
               @include('frontend.comment') 

 @endsection