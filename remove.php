<?php
// get correct file path
$fileName = $_GET['name'];
$ID = $_GET['id'];
$filePath = 'uploads/'.$fileName;
// remove file if it exists
if ( file_exists($filePath) ) {
	unlink($filePath);
header("location: wiev.php?id=$ID");
}
?>