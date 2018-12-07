<?php

session_start();
include('connect.php');
$service = $_GET['service'];

$sql = "INSERT INTO service (Service_Name) VALUES (:a)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$service));
header("location: Welcome.php?id=1");





?>