<?php

session_start();
include('connect.php');
$subject = $_GET['suno'];
$cno = $_GET['cno'];
$quan = $_GET['quan'];

$sql = "INSERT INTO status (suid,anumatha,cNo) VALUES (:a,:b,:c)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$subject,':b'=>$quan,':c'=>$cno));
header("location: Welcome.php?id=8&catid=$cno");





?>