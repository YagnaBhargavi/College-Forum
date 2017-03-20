<html>
<body>
<?php
$qid = $_GET['qid'];
$conn = new mysqli("localhost","root","","forum") or die("connection failed");
$sql = "select * from answer where qid='".$qid."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$i = 1;
	while($row = $result->fetch_assoc()) {
		echo "<h3>".$i."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['answer']."&nbsp;&nbsp;&nbsp;&nbsp;--".$row['userid']."<br></h3>";
		$i ++;
	}
}
?>
<h3>Post Your Answer </h3>
<form action = "ansSub.php" method = "post">
<input type = "hidden" name = "qid" value = "<?php echo $qid?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<textarea rows = '9' cols = '60' name = 'ans'></textarea><br>
<input type = "submit" value = "submit">
</form>
</body>
</html>