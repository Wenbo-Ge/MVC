<?php
require_once('assignment14-database.php');
if ($_POST['add']) {
	$fruitNameInForm=$_POST['fruitName'];
	$fruitQuantityInForm=$_POST['fruitQuantity'];
	insertItem($fruitNameInForm,$fruitQuantityInForm);
	}
		else if ($_POST['delete']) {
			$fruitNameInForm=$_POST['fruitName'];
			deleteItem($fruitNameInForm);
		} 
		// 尝试写一个update的方法，但是失败了
		// else if ($_POST['update']) {
		// 	$fruitNameInForm=$_POST['fruitName'];
		// 	$fruitQuantityInForm=$_POST['fruitQuantity'];
		// 	update($fruitNameInForm,$fruitQuantityInForm);
		// }


$getAll=getAll();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
		.test::-webkit-scrollbar {
    	 width: 10px;
		}
		.test::-webkit-scrollbar-track {
   		 box-shadow: inset 0 0 5px grey; 
   		 border-radius: 10px;
   		 display: none;
		}
		.test::-webkit-scrollbar-thumb {
  		 background: blue; 
   		 border-radius: 10px;
		}
		.test::-webkit-scrollbar-thumb:hover {
   		 background: green; 
		}
		
	</style>

    <title>Assignment 14</title>
  </head>
  <body style="background-color: black;opacity: 0.7">

   	<h1 style="text-align: center; color: white">Assignment 14</h1>
   	<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Fruits Stock</h4>
  <p>This is a case that Booster Juice manager maintain fruits stocks</p>
  <hr>
  <p class="mb-0">Use following form to add, to delete and to update fruits stocks</p>
	</div>

	<form method="POST">
  <div class="form-group row">
    <label for="inputFruitName" class="col-sm-2 col-form-label" style="color:white;">Fruit Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputFruitName" name="fruitName" placeholder="Enter Fruit Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputFruitQuantity" class="col-sm-2 col-form-label" style="color:white;">Quantity</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputFruitQuantity" name="fruitQuantity" placeholder="Enter Fruit Quantity">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="submit" name="add" class="btn btn-primary" value="ADD"></input>
      <input type="submit" name="delete" class="btn btn-primary" value="DELETE"></input>
      <input type="submit" name="update" class="btn btn-primary" value="UPDATE"></input>
    </div>
  </div>
	</form>

<div style="display: flex;">
	<div  style="width: 50vw;color: white;">
	<?php
			echo "<ol>";
			foreach ($getAll as $fruits) {
				echo '<li>'. "Name: " . $fruits['fruit_name'];
				echo "<br>"; 
				echo "Quantity: " . $fruits['quantity'] ;
				echo "</li>";
			}
			echo "</ol>";

		?>
	</div>
		
	<div class="test" style="width: 30vw;height:10rem;overflow: scroll; color: white">
		<h2>Scrollbar Style</h2>
		<p>
			adasdasdadsdasdasdasdsadasdasdsdasdadasd
			asdadsdasdasdasdsadasd
			asdsdasdadasdasdadsdasdasdasdsadasdasdsda
			sdadasdasdadsdasdasda
			sdsadasdasdsdasdadasdasdadsdasdasdasdsada
			sdasdsdasdadasdasdads
			dasdasdasdsadasdasdsdasdadasdasdadsdasdas
			dasdsadasdasdsdasdada
			sdasdadsdasdasdasdsadasdasdsdasdasdasdads
			dasdasdasdsadasdasdsd
			asdadasdasdadsdasdasdasdsadasdasdsdasdada
			sdasdadsdasdasdasdsada
			sdasdsdasdadasdasdadsdasdasdasdsadasdasdsd
			asdadasdasdadsdasdasd
			asdsadasdasdsdasdadasdasdadsdasdasdasdsada
			sdasdsdasdadasdasdads
			dasdasdasdsadasdasdsdasdadasdasdadsdasdasd
			asdsadasdasdsdasdadas
			dasdadsdasdasdasdsadasdasdsdasdadasdasdads
			dasdasdasdsadasdasdsd
			asdasdasdadsdasdasdasdsadasdasdsdasdadasda
			sdadsdasdasdasdsadasd
			asdsdasdadasdasdadsdasdasdasdsadasdasdsdas
			dadasdasdadsdasdasdas
			dsadasdasdsdasdadasdasdadsdasdasdasdsadasd
			asdsdasdadasdasdadsda
			sdasdasdsadasdasdsdasdadasdasdadsdasdasdas
			dsadasdasdsdasdadasda
			sdads
			dasdasdasdsadasdasdsdasdadasdasdadsdasdasd
			asdsadasdasdsdasdadas
			dasdadsdasdasdasdsadasdasdsdasdasdasdadsda
			sdasdasdsadasdasdsdas
			dadasdasdadsdasdasdasdsadasdasdsdasd
		</p>
	</div>	
</div>
	<h3 style="color:white;">Questions</h3>
	<ol style="color:white;">
		<li>如何加入update方法</li>
	</ol>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>