<section class="section">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading" data-aos="fade-up">Rooms &amp; Suites</h2>
        </div>
      </div>
      
      <div class="row">
        @foreach($room as $rooms)

        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a  class="room">
            <figure class="img-wrap">
              <img src="room/{{ $rooms->image }}" alt="Free website template" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>{{ $rooms->room_title }}</h2>
              <p>{{  Str::limit($rooms->description,50)  }}</p>
              <span class="text-uppercase letter-spacing-1">{{ $rooms->price }}$ / per night</span>
              <a class="btn btn-primary" href="{{ route('room_details',$rooms->id) }}">Room Details</a>
            </div>
          </a>
        </div>
      @endforeach
       


      </div>
    </div>
  </section>