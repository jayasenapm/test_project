<?php
	session_start();
	include('connect.php');
	$onfiv = $_GET['15'];
	$secon= $_GET['secon'];
	$scin= $_GET['sci'];
	$tech= $_GET['tech'];
	$art= $_GET['art'];
	$com= $_GET['com'];
	$spec= $_GET['spec'];
	
	
	$cno = $_SESSION["CNO"];
	
	$sql = "INSERT INTO student (SNO,onefive,sixleven,ALscin,ALtech,ALArt,ALCom,Speci) VALUES (:a,:b,:c,:e,:f,:g,:h,:i)";
	$q = $db->prepare($sql);
	$q->execute(array(':a'=>$cno,':b'=>$onfiv,':c'=>$secon,':e'=>$scin,':f'=>$tech,':g'=>$art,':h'=>$com,':i'=>$spec));

	header("location: Welcome.php?id=8&catid=$cno");

?>