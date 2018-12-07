<?php

include('connect.php');
$bno = $_POST['bno'];
$mno = $_POST['mno'];
$wop = $_POST['wop'];
$dateLetter1= $_POST['dateLetter'];
$dateLetter = date("Y-m-d", strtotime($dateLetter1));
$myplace = $_POST['myplace'];
$date1exammust1 = $_POST['date1exammust'];
$date1exammust = date("Y-m-d", strtotime($date1exammust1));
$date2exammust1 = $_POST['date2exammust'];
$date2exammust = date("Y-m-d", strtotime($date2exammust1));
$date3exam1 = $_POST['date3exam'];
$date3exam = date("Y-m-d", strtotime($date3exam1));
$date3exammust1 = $_POST['date3exammust'];
$date3exammust = date("Y-m-d", strtotime($date3exammust1));
$tissrvicelet = $_POST['tissrvicelet'];
$tissrviceletdate1 = $_POST['tissrviceletdate'];
$tissrviceletdate = date("Y-m-d", strtotime($tissrviceletdate1));
$traning = $_POST['traning'];
$cos = $_POST['cos'];



$fname = $_POST['fname'];
$nname = $_POST['name'];
$fnameE = $_POST['fnameE'];
$nameE = $_POST['nameE'];
$ID = $_POST['ID'];
$Address = $_POST['Address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$birth = $_POST['birth'];

$bir = date("Y-m-d", strtotime($birth));
$formfieldradio = $_POST['form-field-radio'];
$nation = $_POST['nation'];
$reli = $_POST['reli'];
$formfieldradio1 = $_POST['form-field-radio1'];
$hiqual = $_POST['hiqual'];
$hiprof = $_POST['hiprof'];
$firstapp = $_POST['firstapp'];
$datefirst = $_POST['datefirst'];
$datefirst = date("Y-m-d", strtotime($datefirst));
$appNo = $_POST['appNo'];
$preserv = $_POST['preserv'];
$datenow = $_POST['datenow'];
$datenow = date("Y-m-d", strtotime($datenow));
//$datenow = $_POST['datenow'];
$nowgrade = $_POST['nowgrade'];
$subject = $_POST['subject'];
$appstat = $_POST['appstat'];
$newgrade = $_POST['newgrade'];
$datenow1 = $_POST['datenow1'];
$datenow1 = date("Y-m-d", strtotime($datenow1));
$datethatplace = $_POST['myplace'];
$datethatplace = date("Y-m-d", strtotime($datethatplace));
$date1exam = $_POST['date1exam'];
$date1exam = date("Y-m-d", strtotime($date1exam));
$date2exam = $_POST['date2exam'];
$date2exam= date("Y-m-d", strtotime($date2exam));
$service = $_POST['service'];
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$name     = $_FILES['file']['name'];
	$tmpName  = $_FILES['file']['tmp_name'];
	$error    = $_FILES['file']['error'];
	$size     = $_FILES['file']['size'];
    $ext	  = strtolower(pathinfo($name, PATHINFO_EXTENSION));
  
	switch ($error) {
		case UPLOAD_ERR_OK:
			$valid = true;
			//validate file extensions
			if ( !in_array($ext, array('jpg','jpeg','png','gif')) ) {
				$valid = false;
				$response = 'Invalid file extension.';
			}
			//validate file size
			if ( $size/1024/1024 > 2 ) {
				$valid = false;
				$response = 'File size is exceeding maximum allowed size.';
			}
			//upload file
			if ($valid) {
				$targetPath =  dirname( __FILE__ ) . DIRECTORY_SEPARATOR. 'uploads' . DIRECTORY_SEPARATOR. $name;
				move_uploaded_file($tmpName,$targetPath);

			

				
				//header( 'Location: index.php' ) ;
				//exit;
			}
			break;
		case UPLOAD_ERR_INI_SIZE:
			$response = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';
			break;
		case UPLOAD_ERR_PARTIAL:
			$response = 'The uploaded file was only partially uploaded.';
			break;
		case UPLOAD_ERR_NO_FILE:
			$response = 'No file was uploaded.';
			break;
		case UPLOAD_ERR_NO_TMP_DIR:
			$response = 'Missing a temporary folder. Introduced in PHP 4.3.10 and PHP 5.0.3.';
			break;
		case UPLOAD_ERR_CANT_WRITE:
			$response = 'Failed to write file to disk. Introduced in PHP 5.1.0.';
			break;
		default:
			$response = 'Unknown error';
		break;
	}

	//echo $response;
}

$sql = "INSERT INTO employee (IDNO,NameinfullSi,NameWiInSh,NameinfullEn,NameWiInEn,Address,MobilNo
,email,Birth,gender,Natanality,Religan,states,hiqualifi,hiProf,statofEpointment,
fistDate,appNo,presentser,appservice,Subject,appoiStat,
Nowgrade,ThatData,newDate,fistexam,SecontExam,nowDate,Image,service,bno,mno,wop,dateLetter,myplace,date1exammust,date2exammust,date3exam,ate3exammust,tissrvicelet,tissrviceletdate,traning,cos) 
VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l,:m,:n,:nn,:o,:p,:q,:r,:t,:u,:v,:w,:x,:y,:z,:zz,:ff,:img,:serv,:bno,:mno,
:wop,:dateLetter,:myplace,:date1exammust,:date2exammust,:date3exam,:ate3exammust,:tissrvicelet,:tissrviceletdate,:traning,:cos)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$ID,':b'=>$fname,':c'=>$nname,':d'=>$fnameE,':e'=>$nameE,
':f'=>$Address,':g'=>$phone,':h'=>$email,':i'=>$bir,':j'=>$formfieldradio,':k'=>$nation,':l'=>$reli,':m'=>$formfieldradio1,
':n'=>$hiqual,':nn'=>$hiprof,':o'=>$firstapp,':p'=>$datefirst,':q'=>$appNo,':r'=>$preserv,':t'=>$nowgrade,
':u'=>$subject,':v'=>$appstat,':w'=>$newgrade,':x'=>$datenow1,':y'=>$datethatplace,':z'=>$date1exam,':zz'=>$date2exam,
':ff'=>$datenow,':img'=>$name,':serv'=>$service,
':bno'=>$bno,':mno'=>$mno,':wop'=>$wop,':dateLetter'=>$dateLetter,':myplace'=>$myplace,
':date1exammust'=>$date1exammust,
':date2exammust'=>$date2exammust,':date3exam'=>$date3exam,':ate3exammust'=>$date3exammust,
':tissrvicelet'=>$tissrvicelet,':tissrviceletdate'=>$tissrviceletdate,':traning'=>$traning,':cos'=>$cos));
header("location: Welcome.php?id=11&IDNO=$ID");
exit;



?>