 
    @include('frontend.head')

    <!-- Header -->
    @include('frontend.navbar')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>about us</h4>
                <h2>more about us!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->


    <section class="about-us">
      <div class="container">
      	
        <div class="row">
          <div class="col-lg-12">
            @foreach ($about as $aboutt)
            <img style="height:500px"  src="{{asset('storage/image/'.$aboutt->image)}}" alt="">
            <h2 style="text-right">{{$aboutt->title}}</h2>
            <p>{{$aboutt->description}}</p>
            @endforeach
            
          </div>
        </div>
    
      </div>
    </section>

    
   @include('frontend.footer')

    @include('frontend.script')