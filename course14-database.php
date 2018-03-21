<?php


function getAllItems (){
	$pdo = new PDO('mysql:host=localhost;dbname=shopping_cart;charset=utf8mb4', 'root', 'root');
	$sql = "SELECT * FROM items";
	$stmt = $pdo->query($sql);
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $results;
}

function insertAItem($name,$price){
	$pdo = new PDO('mysql:host=localhost;dbname=shopping_cart;charset=utf8mb4', 'root', 'root');
	$stmt = $pdo->prepare('INSERT INTO items(name,price) VALUES (:name,:price)');
	//pdo 用：占位符检查
	//防止sql注入
	$stmt->execute(
		array(
			':name' =>$name,
			':price'=>$price
		)
	);
	$affected_rows = $stmt->rowCount();

	return $affected_rows;
	echo "Added ". $affected_rows .'item.';
}


// $pdo = new PDO('mysql:host=localhost;dbname=shopping_cart;charset=utf8mb4', 'root', 'root');
// var_dump($pdo);

// $sql = "SELECT * FROM items";
//create a PDO statement object from connection object
//$pdo object run query function and this function return a statement object
// $stmt = $pdo->query($sql);

// exceute and get  all results
// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($results);
