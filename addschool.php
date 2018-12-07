<?php 
include('connect.php');
$CENSUSNO=$_GET['scholno'];
$DISTRICT=$_GET['DISTRICT'];
$zone=$_GET['zone'];
$Division=$_GET['Division'];
$scholname=$_GET['scholname'];
$address=$_GET['address'];
$mid=$_GET['mid'];
$type=$_GET['type'];
$cat=$_GET['cat'];

$sql = "INSERT INTO school2017 (CENSUSNO,DISTRICT,Zone,Division,NAMEOFSCHOOL,ADDRESS,Medum,Type,NATPRO) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$CENSUSNO,':b'=>$DISTRICT,':c'=>$zone,':d'=>$Division,':e'=>$scholname,':f'=>$address,
	':g'=>$mid,':h'=>$type,':i'=>$cat));
//header("location: Welcome.php?id=8&catid=$cno");


?>