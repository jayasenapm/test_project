<?php

session_start();

include('connect.php');
$sid= $_GET['subject'];
$cno = $_GET["school"];
$IDNO= $_GET['IDNO'];
$val= $_GET['btn'];
if($val=='change'){
$sql = "UPDATE teachers SET Cno = :a,Subject=:b WHERE IDNO =:id";
		$query2 = $db->prepare($sql);
        $query2->bindValue(":a", $cno);
		$query2->bindValue(":b", $sid);
		$query2->bindValue(":id", $IDNO);
		$result2 = $query2->execute();
		header("location: Welcome.php?id=8&catid=$cno");


}elseif ($val=='reti') {
	$sql = "UPDATE teachers SET Subject=:b,status = :a WHERE IDNO =:id";
		$query2 = $db->prepare($sql);
        $query2->bindValue(":a", 'retired');
		$query2->bindValue(":b", '');
		$query2->bindValue(":id", $IDNO);
		$result2 = $query2->execute();
		header("location: Welcome.php?id=8&catid=$cno");
}elseif ($val=='out') {
	$sql = "UPDATE teachers SET Subject=:b,status = :a WHERE IDNO =:id";
		$query2 = $db->prepare($sql);
        $query2->bindValue(":a", 'transfer out of province');
		$query2->bindValue(":b", '');
		$query2->bindValue(":id", $IDNO);
		$result2 = $query2->execute();
		header("location: Welcome.php?id=8&catid=$cno");
}elseif ($val=='ded') {
	$sql = "UPDATE teachers SET Subject=:b,status = :a WHERE IDNO =:id";
		$query2 = $db->prepare($sql);
        $query2->bindValue(":a", 'Death');
		$query2->bindValue(":b", '');
		$query2->bindValue(":id", $IDNO);
		$result2 = $query2->execute();
		header("location: Welcome.php?id=8&catid=$cno");
}elseif ($val=='terminat') {
	$sql = "UPDATE teachers SET Subject=:b,status = :a WHERE IDNO =:id";
		$query2 = $db->prepare($sql);
        $query2->bindValue(":a", 'Termination of employment');
		$query2->bindValue(":b", '');
		$query2->bindValue(":id", $IDNO);
		$result2 = $query2->execute();
		header("location: Welcome.php?id=8&catid=$cno");
}

		
		
		
?>