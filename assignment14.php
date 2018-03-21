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


$getAll=getAll();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Assignment 14</title>
	<style type="text/css">
		::-webkit-scrollbar {
    	 width: 10px;
		}
		::-webkit-scrollbar-track {
   		 box-shadow: inset 0 0 5px grey; 
   		 border-radius: 10px;
		}
		::-webkit-scrollbar-thumb {
  		 background: red; 
   		 border-radius: 10px;
		}
		::-webkit-scrollbar-thumb:hover {
   		 background: green; 
		}
	</style>
</head>
<body>
	<h1>Fruits Stock</h1>
	<form method="POST">
		<label>Name: </label>
		<input type="text" name="fruitName">
		<label>Quantity: </label>
		<input type="text" name="fruitQuantity">
		<input type="submit" name="add" value="ADD">
		<input type="submit" name="delete" value="DELETE">
	</form>


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
<h2>Scrollbar Style</h2>
	<div style="width: 30vw;height:10rem;overflow: scroll;">
		<p style="background-color: black;color: white">
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
</body>
</html>