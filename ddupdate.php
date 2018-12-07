<?php

session_start();

include('connect.php');

$cno = $_SESSION["CNO"];
$onfiv = $_GET['15'];
$secon= $_GET['secon'];
$scin= $_GET['sci'];
$tech= $_GET['tech'];
$art= $_GET['art'];
$com= $_GET['com'];
$spec= $_GET['spec'];
$sql = "UPDATE student SET onefive = :a,sixleven=:b,ALscin=:c,ALtech=:d,ALArt=:e,ALCom=:f,Speci=:g WHERE SNO =:id";
		$query2 = $db->prepare($sql);
        $query2->bindValue(":a", $onfiv);
		$query2->bindValue(":b", $secon);
		 $query2->bindValue(":c", $scin);
		$query2->bindValue(":d", $tech);
		 $query2->bindValue(":e", $art);
		$query2->bindValue(":f", $com);
		$query2->bindValue(":g", $spec);
		$query2->bindValue(":id", $cno);
		$result2 = $query2->execute();
		header("location: Welcome.php?id=8&catid=$cno");
		
		
		
?>