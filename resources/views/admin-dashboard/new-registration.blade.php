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
        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-wrench" aria-hidden="true"></i>Change password</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Signout</a></li>
    </ul>
</div>
</div>
</nav>
<!--Nav-->
<br>
<!--new registration-->
<div class="container-fluid">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8 col-12 jumbotron">
<h1 class="display-6 text-center">Add new student</h1>
<hr class="under-line">
<form>
    <h3 class="display-6 text-center">Personal details</h3>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="student-name" placeholder="Enter student name">
  </div>
  <div class="form-group">
    <label for="dob">Date of birth</label>
    <input type="text" class="form-control" id="dob" placeholder="Enter date of birth">
  </div>
  <div class="form-group">
    <label for="roll-no">Roll number</label>
    <input type="text" class="form-control" id="roll-no" placeholder="Enter roll-number">
  </div>
  <div class="form-group">
    <label for="dept">Department</label>
    <input type="text" class="form-control" id="dept" placeholder="Enter department">
  </div>
  <div class="form-group">
    <label for="section">Section</label>
    <input type="text" class="form-control" id="section" placeholder="Enter section">
  </div>
  <div class="form-group">
    <label for="phone">Phone number</label>
    <input type="text" class="form-control" id="phone" placeholder="Enter phone-number">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="f-name">Father name</label>
    <input type="text" class="form-control" id="f-name" placeholder="Enter father name">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" placeholder="Door no,street name,city">
  </div>


  <h3 class="display-6 text-center">Fees details</h3>

  <div class="form-group">
    <label for="book-fee">Book fee</label>
    <input type="text" class="form-control" id="book-fee" placeholder="Enter book fee">
  </div>
  <div class="form-group">
    <label for="teaching-fee">Teaching fee</label>
    <input type="text" class="form-control" id="teaching-fee" placeholder="Enter teaching fee">
  </div>
  <div class="form-group">
    <label for="breakage-fee">Breakage fee</label>
    <input type="text" class="form-control" id="breakage-fee" placeholder="Enter Breakage fee">
  </div>


  <button type="submit" class="btn btn-warning">Submit</button>

</form>
</div>
<div class="col-md-2"></div>
</div>
</div>
<!--new registration-->


</body>
</html>
