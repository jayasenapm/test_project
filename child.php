<?php
	session_start();
	include('connect.php');
	$name = $_GET['name'];
	$bno= $_GET['bNO'];
	$birth= $_GET['birth'];
	$idno= $_GET['IDNO'];
	$ins= $_GET['isns'];
	
	
	$ID = $_GET['ID'];;
	
	$sql = "INSERT INTO child (CNAME,BNO,BD,CIDNO,Insti,IDNO) VALUES (:a,:b,:c,:e,:f,:g)";
	$q = $db->prepare($sql);
	$q->execute(array(':a'=>$name,':b'=>$bno,':c'=>$birth,':e'=>$idno,':f'=>$ins,':g'=>$ID));

	header("location: Welcome.php?id=11&IDNO=$ID");

?>