<!DOCTYPE html>
<html>
<head>
	<title>Pharmacy Managment</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">
	<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
</head>
<body>
<!---------------Navbar----------Start------->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Pharmacy Store</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/')}}">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="{{ url('/create')}}">Create</a></li>
       
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">+92345689323</a></li>
      </ul>
    </div>
  </div>
</nav>

<!---------------Navbar----------End------->

