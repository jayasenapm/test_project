<?php

session_start();
include('connect.php');
$suid = $_GET['suid'];
$subject2 = $_GET['subject2'];
$subjectno = $_GET['subjectno'];
$sql = "INSERT INTO subject_2 (suid2,suName2,SUID) VALUES (:aa,:a,:b)";
$q = $db->prepare($sql);
$q->execute(array(':aa'=>$subjectno,':a'=>$subject2,'b'=>$suid));
header("location: Welcome.php?id=9&catid=$cno");





?>