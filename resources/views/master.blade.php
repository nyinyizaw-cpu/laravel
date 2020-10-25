<!DOCTYPE html>
<html>
<head>
	<title>art gallery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
     <link rel="stylesheet" type="text/css" href="{{asset('mytemplateassets/style.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('mytemplateassets/fontawesome-web/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('mytemplateassets/bootstrap/css/bootstrap.min.css')}}">
	<script type="text/javascript" src="{{asset('mytemplateassets/bootstrap/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('mytemplateassets/bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light py-4 fixed-top menu">
		<div class="container">
			<a href="" class="navbar-brand">Art Gallery</a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#mynav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mynav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="{{route('homepage')}}" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="gallery.html" class="nav-link">Gallery</a></li>
					<li class="nav-item"><a href="{{route('aboutpage')}}" class="nav-link">About</a></li>
					<li class="nav-item"><a href="{{route('contactpage')}}" class="nav-link">Contact</a></li>
					<li class="nav-item"><a href="checkout.php" class="nav-link" id="count">
						<span class="p1 fa-stack has-badge" id="item_count" data-count="0">
							<i class="p3 fa fa-shopping-cart fa-stack-1x xfa-inverse"></i>
						</span>
					</a></li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')
  <!-- footer -->

<div class="contact bg-dark my-5">
		<div class="container py-5 text-center text-light">
			<h2>Contact Us</h2>
			<div class="container my-2 py-2">
				<div class="row">
					<div class="col-md-4">
						<span>
							<i class="far fa-clock"></i>
							<i>9:00 AM</i><br>
							<i class="far fa-clock"></i>
							<i>5:00 PM</i>
						</span>
					</div>
					<div class="col-md-4">
						<span>
							<i class="fas fa-mobile"></i>
							<i>+959 444555111</i><br>
							<i class="fas fa-mobile"></i>
							<i>02-40152123</i>
						</span>
					</div>
					<div class="col-md-4">
						<span>
							<i class="fas fa-map-marker-alt"></i>
							<i>115 Street,Bet 50x41</i><br>
							<i>Aung Pin Lae</i><br>
							<i>Mandalay</i>
						</span>
					</div>

					 
				</div>
				
			</div>
			
		</div>
</div>

<footer class="bg-dark mt-2 pt-2 my-2 py-2 ">
		<div class="container img-fab">
			<div class="row">
				<div class="col-md-6 text-left">
					<p>All Right Reserved &copy; Design By NYI</p>
				</div>
				<div class="col-md-6 text-right">
					<i class="fab fa-facebook-square fa-2x"></i>
					<i class="fab fa-twitter-square fa-2x"></i>
					<i class="fab fa-instagram-square fa-2x"></i>
				</div>
			</div>
		</div>
	</footer>



	
</body>
</html>