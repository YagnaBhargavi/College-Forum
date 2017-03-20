<?php
session_start();
$user = $_SESSION["userid"];
$conn = new mysqli("localhost","root","","forum") or die("connection failed");
	$sql = "INSERT INTO question(question, date, userid)VALUES ('".$_POST['ques']."','2012-7-9', '".$user."')";

	if($conn -> query($sql)){
		header( 'Location: view.php' );
	}
	
?>