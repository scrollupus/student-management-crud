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
        <li class="nav-item"><a class="nav-link active" href="#"><i class="fa fa-wrench" aria-hidden="true"></i>Change password</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Signout</a></li>
    </ul>
</div>
</div>
</nav>
<!--Nav-->
<br>
<!--change password-->
<div class="container-fluid">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8 col-12 jumbotron">
<h1 class="display-6">change password</h1>
<hr class="under-line">
<form>
  <div class="form-group">
    <label for="newpass">New password</label>
    <input type="text" class="form-control" id="newpass" aria-describedby="newpassword" placeholder="Enter new password">
  </div>
  <div class="form-group">
    <label for="confirmpass">Re-enter-Password</label>
    <input type="text" class="form-control" id="confirmpass" placeholder="Re-enter password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="col-md-2"></div>
</div>
</div>
<!--change password-->

</body>
</html>
