<!DOCTYPE HTML>
<html>
  <head>
    <base href="/public">

    @include('home.css')
  </head>
  <body>
    
    <header>
        @include('home.header')
    </header>
    

    <section class="site-hero overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <span class="custom-caption text-uppercase text-white d-block  mb-3">Welcome To 5 <span class="fa fa-star text-primary"></span>   Hotel</span>
            <h1 class="heading">A Best Place To Stay</h1>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>


   

    @include('home.checkAvailability')

    <section class="section d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row justify-content-center"> 
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="room">
                        <img src="room/{{ $room->image }}" alt="Free website template" class="img-fluid mb-3" style="height: 300px; width:800px;">
                        <div class="p-3 text-center room-info">
                            <h2>{{ $room->room_title }}</h2>
                            <p>{{  $room->description  }}</p>
                            <p>Free Coffee : {{  $room->free_coffee }}</p>
                            <p>Room Type : {{  $room->room_type  }}</p>

                            <span class="text-uppercase letter-spacing-1">Price:  {{ $room->price }}$ / per night</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    @include('home.footer')
    
   
  </body>
</html>