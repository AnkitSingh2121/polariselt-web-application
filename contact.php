<!doctype html>
<html>
<head>


<style>
.custom1{
  padding: 10px;
  background: tomato;
}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button{
  -webkit-appearance:none;
}
</style>

</head>
<body>
<div class="container-fluid custom1" id="contact">
<center><h4 class="heading">CONTACT US</h4></center>
</div>
<div class="container-fluid">
<div class="row">

<div class="col-sm-6 col-md-6 col-xs-12"><br><br><br>
<img src="image/contactus.png" class="img-responsive"></img>
</div>

<div class="col-sm-6 col-md-6 col-xs-12">
  <form>

    <div class="form-group">
    <label for="Name">Name:</label>
<input type="text" class="form-control" placeholder="enter your name" id="name" name="name">
</div>

<div class="form-group">
  <label for="Email">Email:</label>
  <input type="email" class="form-control" placeholder="enter your Email" id="email" name="email">
</div>

<div class="form-group">
<label for="mob">Mobile:</label>
<input type="number" class="form-control" id="mob" placeholder="enter your mobile " name="mob">
</div>

<div class="form-group">
  <label for="Query">Query</label>
  <textarea class="form-control" type="text" id="que" name="Query" rows="4"></textarea>
</div>
<center><button type="submit"class="btn btn-info" >Send</button></center>

  </form>
</div>
</div>
</div>
</body>
</html>
