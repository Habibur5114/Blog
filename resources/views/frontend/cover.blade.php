

<div class="main-banner header-text">

 
  


      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
        @foreach ($cover as $covers)
          <div class="item">
          <img style="height:300px" src="{{asset('storage/image/'.$covers->image)}}" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>{{$covers->title}}</span>
                </div>
                <a href="post-details.html"><h4>{{$covers->description}}</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 12, 2020</a></li>
                  <li><a href="#">12 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      
    </div> 