<?php

session_start();
include('connect.php');
$subject = $_GET['sname'];

$sql = "INSERT INTO subject (SuName) VALUES (:a)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$subject));
header("location: Welcome.php?id=9&catid=$cno");





?>