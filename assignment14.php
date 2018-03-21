<?php
require_once('assignment14-database.php');
if ($_POST) {
	$fruitNameInForm=$_POST['fruitName'];
	$fruitQuantityInForm=$_POST['fruitQuantity'];
	insertItem($fruitNameInForm,$fruitQuantityInForm);
}

$getAll=getAll();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Assignment 14</title>
</head>
<body>
	<h1>Fruits Stock</h1>
	<form method="POST">
		<label>Name: </label>
		<input type="text" name="fruitName">
		<label>Quantity: </label>
		<input type="text" name="fruitQuantity">
		<input type="submit" name="">
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

</body>
</html>