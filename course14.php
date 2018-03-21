<?php


require_once('database.php');

// var_dump($_POST);
if ($_POST) {
	$name = $_POST['productName'];
	$price=$_POST['price'];

	insertAItem($name,$price);
}

$all_items = getAllItems();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Our MVC Project 1</title>
</head>
<body>

	<h1>This is a Shopping Cart Using DB</h1>
	<ul>
		<?php
			foreach ($all_items as $item) {
				echo '<li>Name: ' . $item['name'];
				echo '<br>';
				echo 'Price: ' . $item['price'];
				echo '</li>';
			}


		?>
	</ul>

	<form action="" method="POST">
		<label>Name:</label>
		<input type="text" name="productName">
		<label>Price:</label>
		<input type="text" name="price">
		<input type="submit" name="">
	</form>
	<h2>Scrollbar Style</h2>
	<div style="width: 30vw;height:5rem;">
		adasdasdadsdasdasdasdsadasdasdsdasd
		adasdasdadsdasdasdasdsadasdasdsdasd
		adasdasdadsdasdasdasdsadasdasdsdasd
		adasdasdadsdasdasdasdsadasdasdsdasd
		adasdasdadsdasdasdasdsadasdasdsdasd
		adasdasdadsdasdasdasdsadasdasdsdasd
		adasdasdadsdasdasdasdsadasdasdsdasd
		adasdasdadsdasdasdasdsadasdasdsdasd
		adasdasdadsdasdasdasdsadasdasdsdasd
		adasdasdadsdasdasdasdsadasdasdsdasd
	</div>
</body>
</html>



