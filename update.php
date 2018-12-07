
<?php
include('connect.php');
$id=$_GET['IDNO'];
$fname=$_GET['fname'];
$no=$_GET['no'];
if($no==1){
	
$sql = "UPDATE employee SET NameinfullSi = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
} 
  if($no==2){
	
$sql = "UPDATE employee SET IDNO = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$fname");

        
}        
if($no==3){
	
$sql = "UPDATE employee SET MobilNo = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
} 		
if($no==4){
	
$sql = "UPDATE employee SET email = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
} 
if($no==5){
	
$sql = "UPDATE employee SET email = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
} 	

if($no==6){
	
$sql = "UPDATE employee SET Birth = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}

if($no==7){
	
$sql = "UPDATE employee SET gender = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}	
if($no==8){
	
$sql = "UPDATE employee SET Natanality = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}	
if($no==9){
	
$sql = "UPDATE employee SET Religan = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}
if($no==10){
	
$sql = "UPDATE employee SET fistDate = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}		
if($no==11){
	
$sql = "UPDATE employee SET appNo = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}	
if($no==12){
	
$sql = "UPDATE employee SET Address = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}	
if($no==13){
	
$sql = "UPDATE employee SET states = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}
if($no==14){
	
$sql = "UPDATE employee SET states = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}			

if($no==15){
	
$sql = "UPDATE employee SET hiqualifi = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}		
if($no==16){
	
$sql = "UPDATE employee SET hiProf = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}	
if($no==17){
	
$sql = "UPDATE employee SET statofEpointment = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}	
if($no==18){
	
$sql = "UPDATE employee SET presentser = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}

if($no==19){
	
$sql = "UPDATE employee SET nowDate = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}	
if($no==20){
	
$sql = "UPDATE employee SET appservice = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}		
	if($no==21){
	
$sql = "UPDATE employee SET Subject = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}
if($no==22){
	
$sql = "UPDATE employee SET appoiStat = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}			
if($no==23){
	
$sql = "UPDATE employee SET Nowgrade = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}			

if($no==24){
	
$sql = "UPDATE employee SET ThatData = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}
if($no==25){
	
$sql = "UPDATE employee SET newDate = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}

if($no==26){
	
$sql = "UPDATE employee SET fistexam = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}
if($no==27){
	
$sql = "UPDATE employee SET SecontExam = :a WHERE IDNO =:id";
		$query = $db->prepare($sql);
        $query->bindValue(":a", $fname);
        $query->bindValue(":id", $id);
		$result = $query->execute();
		header("location: Welcome.php?id=4&IDNO=$id");

        
}

						
?>