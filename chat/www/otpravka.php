<?php
require 'bd/connect.php';


if (isset($_POST['post'])) {
	$login =htmlspecialchars($_POST['login']);
	$text = htmlspecialchars($_POST['text']); 

	$sql = "INSERT INTO komment (login, text) VALUES ('$login', '$text')";

	$result = mysqli_query($connect, $sql);
	if (!$result) {
		echo "Error!";
	}
	else {
		//header("Location: index.php");
		//exit();
	}
	header("Location: index.php");
}

	$sql = "SELECT * FROM komment";
	$result = mysqli_query($connect, $sql);
	
?>