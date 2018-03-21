<?php

function getAll(){
	$pdo=new PDO('mysql:host=localhost;dbname=stock_list;charset=utf8mb4','root','root');
	$sql='SELECT * FROM fruits';
	$stmt=$pdo->query($sql);
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insertItem($fruit_name,$quantity){
	$pdo=new PDO('mysql:host=localhost;dbname=stock_list;charset=utf8mb4','root','root');
	$stmt=$pdo->prepare('INSERT INTO fruits(fruit_name,quantity) VALUES (:fruit_name,:quantity)');
	$stmt->execute(
		array(
			':fruit_name'=>$fruit_name,
			':quantity'=>$quantity
		)
	);
	$affected_rows = $stmt->rowCount();
	return $affected_rows;

}











