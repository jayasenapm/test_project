<?php
	session_start();
	include('connect.php');
	$now = $_GET['now'];
	$bno1= $_GET['birth'];
	$bno= date("Y-m-d", strtotime($bno1));
	$ins= $_GET['ins'];
	
	
	$ID = $_GET['ID'];;
	
	$sql = "INSERT INTO work (Now,WDATE,INS,IDNO) VALUES (:a,:b,:c,:e)";
	$q = $db->prepare($sql);
	$q->execute(array(':a'=>$now,':b'=>$bno,':c'=>$ins,':e'=>$ID));

	header("location: Welcome.php?id=11&IDNO=$ID");

?>