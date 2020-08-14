<!doctype html>
<html>
<head>
  <style>
  .carousel.slide{
    margin-top: 50px;
  }
  </style>
</head>
<body>

  <!-- div for slide-->

  <div class="carousel slide" data-ride="carousel" id="cur">
  <!-- list for indicators-->

  <ol class="carousel-indicators">
  <li data-target="#cur" data-slide-to="0" class="active"></li>
  <li data-target="#cur" data-slide-to="1" ></li>
  <li data-target="#cur" data-slide-to="2" ></li>
  <li data-target="#cur" data-slide-to="3" ></li>
  </ol>
  <!-- list for indicators-->

  <!--comment for slide-->

  <div class="carousel-inner">
  <div class="item active">
  <img src="image/img1.jpg" alt="image" style="height:300px; width:100%"></img>
  <div class="carousel-caption">
  <h3> India</h3>
  <p> india! india! india!</p>
  </div>
  </div>

  <div class="item">
  <img src="image/img2.jpg" alt="image" style="height:300px ; width:100%"></img>
  <div class="carousel-caption">
  <h3> New york</h3>
  <p>New york New york New york </p>
  </div>
  </div>

  <div class="item">
  <img src="image/img3.jpg" alt="image" style="height:300px ; width:100%"></img>
  <div class="carousel-caption">
  <h3> London</h3>
  <p> London London London</p>
  </div>
  </div>

  <div class="item">
  <img src="image/img2.jpg" alt="image" style="height:300px; width:100%"></img>
  <div class="carousel-caption">
  <h3> America</h3>
  <p> America America America</p>
  </div>
  </div>

  </div>
  <!--comment for slide-->
  <!--left and right controls-->
  <a class="left carousel-control" href="#cur" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">prev</span>
    </a>
    <a class="right carousel-control" href="#cur" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>

    </a>
  <!--left and right controls-->

  </div>
  <!-- div for slide-->

</body>
</html>
