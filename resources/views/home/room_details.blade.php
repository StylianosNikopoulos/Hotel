<!DOCTYPE HTML>
<html>
  <head>
    <base href="/public">
    @include('home.css')
    <style>
      label {
        display: inline-block;
        width: 200px;
      }
      input {
        width: 100%;
      }
      .message {
    background-color: #00ff7b; /* Background color */
    color: #333; /* Text color */
    padding: 10px 20px; /* Padding */
    border-radius: 5px; /* Rounded corners */
    margin-bottom: 20px; /* Bottom margin */
    border: 1px solid #ccc; /* Border */
      }
      

      
  header {
  top: 0;
  left: 0;
  width: 100%;
  background-color: white; 
  z-index: 1000; 
  height: 70px; 
  border-bottom: 3px solid #ccc; 
}

header a {
  padding: 30px; 
  color: black;
  font-weight: bold; 
  font-size: 40px; 
  font-style: italic; 


}




    </style>
<header >
  <a href="/">Hotel</a>
</header>

 




  <body>
    <section class="section d-flex justify-content-center align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8" data-aos="fade-up">
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
      <div class="col-md-4">
        <h1 style="font-size: 40px">Book Room</h1>

        @if(session()->has('message'))
        <div class="message">
          {{ session()->get('message') }}
        </div>
        @endif
       
       
        @if($errors)
        @foreach($errors->all() as $errors)
        <li style="color: red">
          {{ $errors }}
          @endforeach
        </li>
        @endif
        <br>
        <form action="{{ route('add_booking',$room->id) }}" method="POST">
          @csrf 
          <div>
            <label>Name</label>
            <input type="text" name="name" 
            @if(Auth::id()) 
            value="{{ Auth::user()->name }}">
            @endif
          </div>
          <div>
            <label>Email</label>
            <input type="text" name="email"
            @if(Auth::id()) 
            value="{{ Auth::user()->email }}">
            @endif
          </div>
          <div>
            <label>Phone</label>
            <input type="number" name="phone">
          </div>
          <div>
            <label>Check In</label>
            <input type="date" name="startDate" id="startDate">
          </div>
          <div>
            <label>Check Out</label>
            <input type="date" name="endDate" id="endDate">
          </div>
          <br>
          <div>
            <input type="submit" class="btn btn-primary" value="Book Room">
          </div>
        </form>
      </div>
    </section>
    @include('home.footer')
    <script type="text/javascript">
      $(function(){
        var dtToday = new Date();
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
          month = '0' + month.toString();
        if(day < 10)
          day = '0' + day.toString();
        var maxDate = year + '-' + month + '-' + day;
        $('#startDate').attr('min', maxDate);
        $('#endDate').attr('min', maxDate);
      });
    </script> 
  </body>
</html>
