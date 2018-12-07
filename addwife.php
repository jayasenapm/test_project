<?php
	session_start();
	include('connect.php');
	$name = $_GET['name'];
	$bno= $_GET['bNO'];
	$birth= $_GET['birth'];
	$idno= $_GET['IDNO'];
	$ins= $_GET['isns'];
	
	
	$ID = $_GET['ID'];;
	
	$sql = "INSERT INTO wife (IDNO,Name,BNO,BD,WIDNO,Institut) VALUES (:a,:b,:c,:e,:f,:g)";
	$q = $db->prepare($sql);
	$q->execute(array(':a'=>$ID,':b'=>$name,':c'=>$bno,':e'=>$birth,':f'=>$idno,':g'=>$ins));

	header("location: Welcome.php?id=11&IDNO=$ID");

?>