<?php include('define/rutas_absolutas.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: auto;
  }
  .carousel-control-prev-icon:before{ margin-left:30px; position:relative;content:'Anterior'}
  .carousel-control-next-icon:before{right:100px; position:relative;content:'Siguiente'}
  /*.carousel-caption{width:50%; opacity:.7; background-color:white; height: 350px; }*/
  .carousel-caption{width: 50%; 
   height: 100%; 
   /*background-color: rgb(255,255,255,0.3);*/
   background-color: rgb(255,255,255,1);
   -webkit-transform: skew(-10deg); 
   -moz-transform: skew(-10deg); 
   -o-transform: skew(-10deg); opacity:.7 postion:absolute; margin-left: 45%;top:0}
  .carousel-caption h3, p{color: black;}
  .intcarousel{border: 1px solid red; width: 70%; left: 5%;position:relative; height: 600px;}
  </style>
</head>
<body>
<div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <div class="intcarousel">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
        </div>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="imgs/2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="imgs/3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

      <?php  include('javas.php'); ?>
      <!--<script>
        var myCarousel = document.querySelector('#demo')
        var carousel = new bootstrap.Carousel(myCarousel, {
          interval: 2000,
          pause: FALSE,
          //wrap: false
        })
      </script>-->
</body>
</html>