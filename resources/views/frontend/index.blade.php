@include('frontend.head')
    <!-- Header -->
    
    @include('frontend.navbar')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    @include('frontend.cover')
    <!-- Banner Ends Here -->


    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">

                @yield('blog')
           
              </div>
            </div>
          </div>    
          @include('frontend.right')    
          
        </div>
      </div>
    </section>

    @include('frontend.footer')
    @include('frontend.script')
    

    