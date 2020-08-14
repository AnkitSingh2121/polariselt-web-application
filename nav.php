<!doctype html>
<html>
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

#customvav{
  background-color: #f0f0f0;

}
#customvav ul li :hover{
color:#fff;
  border-radius: 5px;
  box-shadow:  0 0 5px #33ffff,
               0 0 10px #66ffff;

  background: #1b1b1b;
}

#customvav ul li a:hover{
text-decoration: none;
 color:#fff;
}

.logo{
  height: 40px;
  width: 100px;
  margin-top: -10px;
}

</style>

</head>
<body data-spy="scroll" data-target=".nav" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top" id="customvav">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php"><img src="image/images.png" class="img-responsive logo"></img></a>
</div>

<div class="collapse navbar-collapse" id="mynavbar">
<ul class="nav navbar-nav">
<li><a href="index.php" style="color:#000">Home</a></li>
<li><a href="#aboutus" style="color:#000">About Us</a></li>
<li><a href="#services" style="color:#000">Services</a></li>
<li><a href="#contact" style="color:#000">Contact Us</a></li>
<li><a href="#gallery" style="color:#000">Gallery</a></li>
</ul>

<ul class="nav navbar-nav navbar-right">
<li><button type="button" class="btn btn-info " data-toggle="modal" data-target="#signin" style="margin-top:10px;">Sign In</button>&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><button type="button" class="btn btn-info" data-toggle="modal" data-target="#signup" style="margin-top:10px;">Sign Up</button></li>
</ul>

</div>
</div>
</nav>
</body>
</html>
