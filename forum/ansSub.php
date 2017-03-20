<?php
session_start();
$id = $_POST['qid'];
$qid = (int)$id;
echo $qid;
$answer = $_POST['ans'];
echo $text;
$date = '2017-00-09';
$userid  = $_SESSION["userid"];
$conn = new mysqli("localhost","root","","forum") or die("connection failed");
$stmt = $conn->prepare("insert into answer(qid,answer,date,userid) values (?,?,?,?)");
$stmt->bind_param("isss", $qid,$answer,$date,$userid);
$stmt->execute();
$stmt->close();
$result = $conn->query($sql);
header( 'Location: select.html' );
?>