<!doctype html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  html{
    scroll-behavior: smooth;
  }
  body{
    background: url("background.jpeg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  </style>
</head>
<body>
<?php include 'nav.php'?>
<?php include 'slider.php'?>
<?php include 'aboutus.php'?>
<?php include 'services.php'?>
<?php include 'contact.php'?>
<?php include 'gallery.php'?>
<?php include 'footer.php'?>


<div class="modal fade" role="dialog" id="signup">
  <div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4>Sign up</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<div class="modal-body">
  <form>
    <div class="form-group">
<label for="fname">First Name: </label>
<input type="text" class="form-control" id="fname" name="fname" placeholder="first name">
</div>

<div class="form-group">
<label for="lname">Last Name: </label>
<input type="text" class="form-control" id="lname" name="lname" placeholder="last name">
</div>

<div class="form-group">
<label for="email">Email: </label>
<input type="email" class="form-control" id="email" name="email" placeholder="Email">
</div>

<div class="form-group">
<label for="mob">Mob:</label>
<input type="number" class="form-control" id="mob" name="mob" placeholder="Moblie">
</div>

<div class="form-group">
<label for="pass">Password:</label>
<input type="password" class="form-control" id="pass" name="pass" placeholder="password">
</div>

<div class="form-group">
<label for="pass">Confirm Password:</label>
<input type="password" class="form-control" id="pass" name="pass" placeholder="password">
</div>
<button type="submit" class="btn btn-info">Sign Up</button>
</form>

</div>
</div>
</div>
</div>

<div class="modal fade" role="dialog" id="signin">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Sign in</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
<form>
  <div class="form-group">
<label for="email">Email:</label>
<input type="email" class="form-control" id="email" name="email" placeholder="Email">
  </div>
  <div class="form-group">
<label for="pass">Password:</label>
<input type="password"  class="form-control" id="pass" name="pass" placeholder="Password">
  </div>
  <input type="checkbox">Keep me login<br>
  <button type="submit" class="btn btn-info">Sign in</button>
</form>      </div>
    </div>
  </div>
</div>

</body>
</html>
