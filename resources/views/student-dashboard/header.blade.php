<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
</head>
<body>
<!--Nav-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
<div class="container-fluid">
    <a href="#"><h3 class="navbar-brand"><i class="fa fa-home" aria-hidden="true"></i>Home</h3></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
    	<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-book" aria-hidden="true"></i>Academic</a></li>
    	<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>Fees details</a></li>
    	<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Personal details</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-wrench" aria-hidden="true"></i>Change password</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Signout</a></li>
    </ul>
</div>
</div>
</nav>
<!--Nav-->
<br>
<!--Card-->
<div class="container-fluid">
<div class="row">
<div class="col-12 col-md-4">
<div class="card">
<img src="..." class="card-img-top" alt="...">
<div class="card-body">
<h3 class="card-title">Vasanth saravanan</h3>
<p class="card-text">
	<h4>E1165078</h4>
	<h4>CSE A - section</h4><br>
</p>
</div>
</div>
</div>
<div class="col-md-2"></div>
<div class="col-md-5 col-12 containerx text-center jumbotron my-2">
	<h3>Do you want learn new technologies?</h3>
	<div class="input-group">
  <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
    <option selected>select course</option>
    <option value="1">Java</option>
    <option value="2">Java script</option>
    <option value="3">Python</option>
  </select>
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button">get</button>
  </div>
</div>
</div>
</div>
</div>
<!--Card-->
<br>

</body>
</html>
