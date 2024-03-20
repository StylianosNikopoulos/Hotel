<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="admin/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="admin/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="admin/img/favicon.ico">


<style>
    label{display:inline-block;
    width:200px;
    }
    .stylee{
        padding-top: 30px;

    }
    .center{
        text-align: center;
        padding-top: 30px; 
    }
</style>


</head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
            <div class="list-inline-item logout">                 
                  <x-app-layout>

                  </x-app-layout>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <nav id="sidebar">
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">admin</h1>
          </div>
        </div>
        <span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="/"> <i class="icon-home"></i>Home </a></li>
                <li class="active"><a href="{{ route('create_room') }}"> <i class="fa fa-file"></i>Add Room </a></li>
                <li class="active"><a href="{{ route('view_room') }}"> <i class="fa fa-eye"></i>View Rooms </a></li>


      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
  
        <div class="center">
            <h1 style="font-size:30px; font-weight:bold;">Update Room</h1>
            <form action="{{ route('edit_room',$data->id) }}" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="stylee">
                    <label>Room Title</label>
                    <input type="text" name="title" value="{{ $data->room_title }}">
                </div>
                <div class="stylee">
                    <label>Description</label>
                    <textarea name="description" id="" cols="30" rows="10">{{ $data->description }}"</textarea>
                </div>
                <div class="stylee">
                    <label>Price</label>
                    <input type="number" name="price" value="{{ $data->price }}">
                </div>
                <div class="stylee">
                    <label>Room Type</label>
                    <select name="room_type">
                        <option selected value="{{ $data->room_type }}">{{ $data->room_type }}</option>

                        <option value="regular">Regular</option>
                        <option value="premium">Premium</option>
                        <option value="deluxe">Deluxe</option>
                    </select>
                </div>
                <div class="stylee">
                    <label>Free Coffee</label>
                    <select name="free_coffee">
                        <option selected value="{{ $data->free_coffee }}">{{ $data->free_coffee }}</option>

                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="stylee">
                    <label>Current Image</label>
                    <img width="100" src="/room/{{ $data->image }}" style="margin: auto;">
                </div>

                <div class="stylee">
                    <label>Upload Image</label>
                        <input type="file" name="image">
                </div>
                <div class="stylee">
                    <input class="btn btn-primary" type="submit" value="Update Room">
                </div>
            </form>
        </div>
   
    <!-- JavaScript files-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admin/vendor/chart.js/Chart.min.js"></script>
    <script src="admin/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admin/js/charts-home.js"></script>
    <script src="admin/js/front.js"></script>
  </body>
</html>