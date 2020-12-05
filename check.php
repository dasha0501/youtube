<?php
	$con = mysqli_connect("127.0.0.1", "root", "", "urok38"); 
	$text = 'SELECT * FROM users WHERE name = "'.$_GET["name"].'" and password = "'.$_GET["pass"].'"';
	

	$query = mysqli_query($con, $text);
	$query->num_rows;
	$stroka = $query->fetch_assoc();


	if ($query->num_rows==1) {
		header("location: home.php?id=" . $stroka['id']);
	}
	if ($query->num_rows==0) {
		header("location: index.php");
	}
?>


	
