<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Elegance Salon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,600,700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><span class="flaticon-scissors-in-a-hair-salon-badge"></span>Elegance Salon</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item {{Request::is('/') ? 'active' : ''}}"><a href="/" class="nav-link">Home</a></li>
	        	<li class="nav-item {{Request::is('services') ? 'active' : ''}}"><a href="/services" class="nav-link">Services</a></li>
            <li class="nav-item {{Request::is('shop') ? 'active' : ''}}"><a href="/shop" class="nav-link">Shop</a></li>
              <li class="nav-item {{Request::is('booknow') ? 'active' : ''}}"><a href="/booknow" class="nav-link">Book Now</a></li>
              @if (Route::has('login'))
                    @auth
                    <form method="POST" action="{{ route('logout') }}" x-data>
    @csrf

    <!-- Replace the x-dropdown-link with a button -->
    <button type="submit" class="btn btn-primary btn-outline-primary px-4 py-2 mt-3">
        {{ __('Log Out') }}
    </button>
</form>

                    @else
                    <li class=""><a href="{{ route('login') }}" class=" btn btn-primary btn-outline-primary px-4 py-2 mt-3">Log in</a></li>

                        @if (Route::has('register'))
                        <li class=""><a href="{{ route('register') }}" class="btn btn-primary btn-outline-primary px-4 py-2 mt-3 mx-1">Register</a></li>
                        @endif
                    @endauth
            @endif
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
