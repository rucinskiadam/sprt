<?php

function accestosite(){
	if(!isset($_SESSION['login']) && !isset($_SESSION['password'])){
		header("Location: index.php"); 
	}
}

function mysql_connector(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "turka";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
  return $conn;
}

?>