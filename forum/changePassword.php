<html>
<head>
<script>
function other() {
	var name = document.getElementById("ppp").value;
	  document.getElementById("oname").href ="changePassword.php?hello=true&npassword="+name;
}
</script>
</head>
<body>
	<h4>NewPassword</h4><input type = "password" id = "ppp" name = "password">
	
	<a id = "oname" onclick ="other();" >upadte</a> 
	
	
<?php
session_start();
$faculty = $_SESSION["userid"];

if (isset($_GET['hello'])) {
   
$npassword = $_GET['npassword'];
echo $npassword;
$conn = new mysqli("localhost", "root", "", "forum");
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
$sql = "UPDATE user SET password = '".$npassword."' WHERE userid = '".$faculty."'";
if ($conn->query($sql) === TRUE) {
    header( 'Location: select.html' );
} else {
   header( 'Location: changePassword.php' );
}

$conn->close();	
}
?>

</body>
</html>
