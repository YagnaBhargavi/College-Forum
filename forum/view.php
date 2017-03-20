<html>
<?php
$conn = new mysqli("localhost","root","","forum") or die("connection failed");
$sql = "select * from question";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $i = 1;
	while($row = $result->fetch_assoc()) {
		?>
		<h3>
		
		<?php
		echo $i."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["question"]." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --".$row['userid']."<br>";
		$i ++;
		?>
		<a href="answer.php?qid=<?php echo $row['qid']; ?>"> Answer </a>
		
		<?php
	}
   
} else {
    echo $sql;
	}
	 $conn->close();

?>