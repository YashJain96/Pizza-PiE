<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2 {
  position: relative;
  opacity: 0.9;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("./img/pizzaparallax2.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("./img/pizzaparallax.jpg");
  min-height: 400px;
}

.caption, .caption1 {
  position: fixed;
  left: 0;
  top: 0%;
  width: 100%;
  text-align: center;
  color: #000;
}
.caption2{
  /*position:fixed;*/
  padding-top: 25%;
  /*top: 50%;*/
  left: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border, .caption1 span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 5px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2 {
        background-attachment: scroll;
    }
}
</style>
</head>
<body>


    <!-- <span class="border">PizzaPie</span> -->
<div class="bgimg-1">
  <div class="caption">
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float: right;">Resister Here!</button>

    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float: right;">Login Here!</button>

    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float: right;">Veg</button>
  </div>
  <div class="caption2">
      <span style="font-size:60px">Pizza Pie</span><br>
      <span style="font-size:30px">...You Must Try...</span>
  </div>
</div>

<div style="color: #777;background-image: url(./img/pizzaparallax.jpg);text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center; color: white;">Veg Pizzas</h3>
  <button style="width: 250px;float: right; background: #cc0052;">Veg Pizza</button>
  
  <?php
    include("functions/veg.php");
  ?>

</div>

<div style="color: #777;background-image: url(./img/pizzaparallax2.jpg);text-align:center;padding:50px 80px;text-align: justify; ">
  <h3 style="text-align:center; color: white">Non-Veg Pizzas</h3>
  <button style="width: 250px;float: right; background: #cc0052;">Non-Veg Pizza</button>
  
  <?php
    include("functions/nonveg.php");
  ?>

</div>


<div class="footer" style="background: grey; text-align: center;">
  <span style="color: white; font-size: 24px;">Copyright &copy; 2017 | PizzaPie</span>
</div>

</body>
</html>