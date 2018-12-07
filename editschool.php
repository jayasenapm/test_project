<?php
include('connect.php');
$sid=$_GET['scholno'];
$distr=$_GET['DISTRICT'];
$zone=$_GET['zone'];
$divi=$_GET['Division'];
$scholn=$_GET['scholname'];
$address=$_GET['address'];
$mid=$_GET['mid'];
$type=$_GET['type'];
$prna=$_GET['cat'];

$sql = "UPDATE school2017 SET DISTRICT = :a,Zone=:b,Division=:c,NAMEOFSCHOOL=:d,ADDRESS=:e,Medum=:f,Type=:g,NATPRO=:h WHERE CENSUSNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $distr);
		$query->bindValue(":b", $zone);
		$query->bindValue(":c", $divi);
		$query->bindValue(":d", $scholn);
		$query->bindValue(":e", $address);
		$query->bindValue(":f", $mid);
		$query->bindValue(":g", $type);
		$query->bindValue(":h", $prna);
		$query->bindValue(":id", $sid);

		$result = $query->execute();
		header("location: Welcome.php?id=134&IDNO=$id");

        
