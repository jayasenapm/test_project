<?php
session_start();
include('connect.php');
$fname = $_GET['fname'];
$name = $_GET['name'];
$fnameE = $_GET['fnameE'];
$nameE = $_GET['nameE'];
$ID = $_GET['ID'];
$Address = $_GET['Address'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$birth = $_GET['birth'];
$bir = date("Y-m-d", strtotime($birth));
$formfieldradio = $_GET['form-field-radio'];
$nation = $_GET['nation'];
$reli = $_GET['reli'];
$formfieldradio1 = $_GET['form-field-radio1'];
$hiqual = $_GET['hiqual'];
$hiprof = $_GET['hiprof'];
$firstapp = $_GET['firstapp'];
$datefirst = $_GET['datefirst'];
$appNo = $_GET['appNo'];
$preserv = $_GET['preserv'];
$datenow = $_GET['datenow'];
$datenow = $_GET['datenow'];
$nowgrade = $_GET['nowgrade'];
$subject = $_GET['subject'];
$appstat = $_GET['appstat'];
$newgrade = $_GET['newgrade'];
$datenow1 = $_GET['datenow1'];
$datethatplace = $_GET['datethatplace'];
$date1exam = $_GET['date1exam'];
$date2exam = $_GET['date2exam'];
$service = $_GET['service'];

/*
$sql = "INSERT INTO master (IDNO,NameinfullSi,NameWiInSh,NameinfullEn,NameWiInEn,Address,MobilNo
,email,Birth,gender,Natanality,Religan,states,hiqualifi,hiProf,statofEpointment,
fistDate,appNo,presentser,nowDate,appservice,Subject,appoiStat,
Nowgrade,ThatData,fistexam,SecontExam) 
VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l,:m,:n,:nn,:o,:p,:q,:r,:s,:t,:u,:v,:w,:x,:y,:z,:zz)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$ID,':b'=>$fname,':c'=>$name,':d'=>$fnameE,':e'=>$nameE,
':f'=>$Address,':g'=>$phone,':h'=>$email,':i'=>$birth,':j'=>$formfieldradio,':k'=>$nation,':l'=>$reli,':m'=>$formfieldradio1,
':n'=>$hiqual,':nn'=>$hiprof,':o'=>$firstapp,':p'=>$datefirst,':q'=>$appNo,':r'=>$preserv,'s:'=>$datenow,':t'=>$nowgrade,
':u'=>1,':v'=>2,':w'=>3,':x'=>41,':y'=>$datethatplace,':z'=>$date1exam,':zz'=>$date2exam));
header("location: bying.php?id=$w&invoice=$a");
*/
move_uploaded_file($_FILES["im"]["tmp_name"],"uploads/" . $_FILES["im"]["name"]);			
$img=$_FILES["image"]["name"];




$sql = "INSERT INTO employee (IDNO,NameinfullSi,NameWiInSh,NameinfullEn,NameWiInEn,Address,MobilNo
,email,Birth,gender,Natanality,Religan,states,hiqualifi,hiProf,statofEpointment,
fistDate,appNo,presentser,appservice,Subject,appoiStat,
Nowgrade,ThatData,newDate,fistexam,SecontExam,nowDate,Image,service) 
VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l,:m,:n,:nn,:o,:p,:q,:r,:t,:u,:v,:w,:x,:y,:z,:zz,:ff,:img,:serv)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$ID,':b'=>$fname,':c'=>$name,':d'=>$fnameE,':e'=>$nameE,
':f'=>$Address,':g'=>$phone,':h'=>$email,':i'=>$bir,':j'=>$formfieldradio,':k'=>$nation,':l'=>$reli,':m'=>$formfieldradio1,
':n'=>$hiqual,':nn'=>$hiprof,':o'=>$firstapp,':p'=>$datefirst,':q'=>$appNo,':r'=>$preserv,':t'=>$nowgrade,
':u'=>$subject,':v'=>$appstat,':w'=>$newgrade,':x'=>$datenow1,':y'=>$datethatplace,':z'=>$date1exam,':zz'=>$date2exam,':ff'=>$datenow,':img'=>$img,':serv'=>$service));
//header("location: wiev.php?id=$ID&birth=jayasena");
//header("location: wiev.php?id=$ID");
echo $service;

?>