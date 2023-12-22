<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Medical Care</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Medical Care</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            
            @if(Route::has('login'))

            @auth
            

            <li class="nav-item">
            <a class="nav-link" href="{{route('myappointment')}}" style="background-color: #00D9A5; color:white; border-radius: 5px;">My Appointment</a>
            </li>

            <x-app-layout>
            </x-app-layout>

            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth

            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div align="center" style="padding: 70px;">
        <table>
            <thead>
                <tr style="background-color: white;">
                    <th style="padding: 10px; color: black; font-size: 20px">Doctor Name</th>
                    <th style="padding: 10px; color: black; font-size: 20px">Date</th>
                    <th style="padding: 10px; color: black; font-size: 20px">Message</th>
                    <th style="padding: 10px; color: black; font-size: 20px">Status</th>
                    <th style="padding: 10px; color: black; font-size: 20px">Cancel Appointment</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appoints as $appoint)
                <tr style="background-color: white;" align="center">
                    <td style="padding: 10px; color: black; font-size: 20px">{{$appoint->doctor}}</td>
                    <td style="padding: 10px; color: black; font-size: 20px">{{$appoint->date}}</td>
                    <td style="padding: 10px; color: black; font-size: 20px">{{$appoint->message}}</td>
                    <td style="padding: 10px; color: black; font-size: 20px">{{$appoint->status}}</td>
                    <td style="padding: 10px;"><a href="{{route('cancel', $appoint->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Cancel</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>