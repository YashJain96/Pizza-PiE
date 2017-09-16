<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">

  <style>
    /*Card View Style Starting*/
*{
    box-sizing: border-box;
}
.cardView{
  display: table;
  width: 100%;

}
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 20%;
    height: 400px;
    display: block;
    float: left;
    margin: auto;
    margin: 10px 16px;
    border-radius: 5px;
    background: #f3f3f3;
    display: table-cell;
    overflow: hidden;
    padding-right: 16px;
}

@media only screen and (max-width: 600px){
  .card{
    display: block;
    width: 100%;
  }
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
    align-content: center;
}

.container {
    padding: 2px 16px;
}

#ingredients{
  color: green;
  font-size: 18px;
}
/*Card View Style ending

</style>

</head>
<body>

	<div id="id02" class="cardView">

    <div class="card card-1">
      <img src="./img/vegextra.jpg" alt="vegextra">
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float: right;">Order Here!</button>

      <div class="container">
        <h4><b>Veg Extravaganza</b></h4> 
        <p><span id="ingredients">Ingredients:</span><br>Black Olives, Onion, Crisp Capsicum, Mushroom, FreshTomato, Golden Corn, Jalapeno & Extra Cheese.</p> 
      </div>
    </div>

    <div class="card card-2">
      <img src="./img/Cloud9.jpg" alt="Cloud9">
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float: right;">Order Here!</button>

      <div class="container">
        <h4><b>Cloud 9</b></h4> 
        <p><span id="ingredients">Ingredients: </span><br>Onion, Tomato, Babycorn, Paneer, Crisp Capsicum & Jalapeno</p> 
      </div>
    </div>
 
    <div class="card card-3">
      <img src="./img/ChefsVegWonderMain9.jpg" alt="Avatar">
      <div style="float: right;">
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float: right;">Order Here!</button><br>
      </div>
      <div class="container">

        <h4><b>Chef's Veg Wonder</b></h4> 
       <p><span id="ingredients">Ingredients: </span><br>Mushroom, Jalepeno, Babycorn, Crisp Capsicum, Paneer & Red Paprika</p>
      </div>
    </div>

    <div class="card card-4">
      <img src="./img/peppypaneer.jpg" alt="Avatar">
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float: right;">Order Here!</button>
      <div class="container">
        <h4><b>Peppy Paneer</b></h4> 
        <p><span id="ingredients">Ingredients: </span><br>Paneer, Crisp Capsicum & Red Paprika</p> 
      </div>
    </div>

</div>


</body>
</html>