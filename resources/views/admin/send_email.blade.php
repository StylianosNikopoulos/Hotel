<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="admin/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin/css/font.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <link rel="stylesheet" href="admin/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="admin/css/custom.css">
    <link rel="shortcut icon" href="admin/img/favicon.ico">


    <style>
        .container {
            width: 80%; 
            margin: 0 auto; 
            padding-top: 10px; 
        }

        .stylee {
            padding-top: 10px;
        }

        label {
            display: inline-block;
            width: 500px;
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
                <li class="active"><a href="{{ route('bookings') }}"> <i class="fa fa-calendar"></i>Bookings </a></li>
                <li class="active"><a href="{{ route('all_messages') }}"> <i class="fa fa-commenting"></i>Messages </a></li>
      </nav>
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <a class="h5 no-margin-bottom" href="/home">Dashboard</a>
          </div>
        </div>

        <div class="container">
            <h1>You are sending to: {{ $data->name }}</h1>
            <br>
            <form method="POST">
                @csrf
                <div class="stylee">
                    <label>Subject</label>
                    <input type="text" name="title">
                </div>
                <div class="stylee">
                    <label>Body</label>
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="stylee">
                    <label></label>
                    <input class="btn btn-primary" type="submit" value="Send Email">
                </div>
            </form>
        </div>
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