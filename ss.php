<?php
	session_start();
	include('connect.php');
	$name = $_GET['first_name'];
	$subject= $_GET['subject'];
	$birth= $_GET['birthd'];
	$idno= $_GET['IDNO'];
	$appdat= $_GET['appdate'];
	//$address= $_GET['Address'];
	$nowdt= $_GET['nowdate'];
	$othsuj= $_GET['othsubj'];
	$skil= $_GET['skil'];
	
	$cno = $_SESSION["CNO"];
	
	$sql = "INSERT INTO teachers (TeachersName,BirthDay,IDNO,AppDay,PreDate,Subject,othSubject,skills,Cno) VALUES (:a,:b,:c,:e,:f,:g,:h,:i,:j)";
	$q = $db->prepare($sql);
	$q->execute(array(':a'=>$name,':b'=>$birth,':c'=>$idno,':e'=>$appdat,':f'=>$nowdt,':g'=>$subject,':h'=>$othsuj,':i'=>$skil,':j'=>$cno));

	header("location: Welcome.php?id=8&catid=$cno");

?>