<!DOCTYPE html>
<html>
<head>
	<title>Data transaksi woocommerce</title>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/asset/css/bootstrap.min.css" >


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="{{ url('/home')}}">NouhaShop</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarColor01">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="{{ url('/products')}}">Products</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="{{ url('/orders')}}">Orders</a>
	      </li>
	    </ul>
		<ul class="navbar-nav mr-right" >
			<li class="nav-item active">
	        <a class="nav-link" href="{{url('/logout')}}" type="button">Logout</a>
	      </li>
		</ul>
	  </div>
	</nav>
    @yield('content')
</body>
</html>
