<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 => 'IDNO', 
	1 => 'NameinfullSi',
	2 => 'NameWiInSh',
	3 => 'NameinfullEn',
	4 => 'NameWiInEn',
	5 => 'Address',
	6 => 'MobilNo',
	7 => 'email',
	8=>'Birth',
	9 => 'gender',
	10 => 'Natanality',
	11 => 'Religan',
	12 => 'states',
	13 => 'hiqualifi',
	14 => 'hiProf',
	15 => 'service',
	16=>'statofEpointment',
	17=>'fistDate',
	18 => 'appNo', 
	19 => 'presentser',
	20 => 'nowDate',
	21=> 'appservice',
	22 => 'Subject',
	23 => 'appoiStat',
	24 => 'Nowgrade',
	25=>'ThatData',
	26 => 'newDate',
	27 => 'fistexam',
	28 => 'SecontExam',
);




// getting total number records without any search
$sql = "SELECT IDNO";
$sql.=" FROM employee";
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT IDNO, NameinfullSi,NameWiInSh, NameinfullEn, NameWiInEn, Address, MobilNo, email,Birth,
gender,Natanality,Religan,states,hiqualifi,hiProf,service,statofEpointment,fistDate,statofEpointment,fistDate,
appNo,presentser,nowDate,appservice,Subject,appoiStat,Nowgrade,ThatData,newDate,fistexam,SecontExam ";
$sql.=" FROM employee WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( IDNO LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" OR NameinfullSi LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR NameWiInSh LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR NameinfullEn LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR NameWiInEn LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR Address LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR MobilNo LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR email LIKE '".$requestData['search']['value']."%' )";
	//$sql.=" OR Birth LIKE '".$requestData['search']['value']."%' )";
	$sql.=" OR gender LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR Natanality LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR Religan LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR states LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR hiqualifi LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR hiProf LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR service LIKE '".$requestData['search']['value']."%' ";
	//$sql.=" OR statofEpointment LIKE '".$requestData['search']['value']."%' )";
	//$sql.=" OR fistDate LIKE '".$requestData['search']['value']."%' )";
	
	
	
	
}
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
	

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["IDNO"];
	$nestedData[] = $row["NameinfullSi"];
	$nestedData[] = $row["NameWiInSh"];
	$nestedData[] = $row["NameinfullEn"];
	$nestedData[] = $row["NameWiInEn"];
	$nestedData[] = $row["Address"];
	$nestedData[] = $row["MobilNo"];
	$nestedData[] = $row["email"];
	$nestedData[] = $row["Birth"];
	$nestedData[] = $row["gender"];
	$nestedData[] = $row["Natanality"];
	$nestedData[] = $row["Religan"];
	$nestedData[] = $row["states"];
	$nestedData[] = $row["hiqualifi"];
	$nestedData[] = $row["hiProf"];
	$nestedData[] = $row["service"];
	$nestedData[] = $row["statofEpointment"];
	$nestedData[] = $row["fistDate"];
	$nestedData[] = $row["statofEpointment"];
	$nestedData[] = $row["fistDate"];
	$nestedData[] = $row["appNo"];
	$nestedData[] = $row["presentser"];
	$nestedData[] = $row["nowDate"];
	$nestedData[] = $row["appservice"];
	$nestedData[] = $row["Subject"];
	$nestedData[] = $row["appoiStat"];
	$nestedData[] = $row["Nowgrade"];
	$nestedData[] = $row["ThatData"];
	$nestedData[] = $row["newDate"];
	$nestedData[] = $row["fistexam"];
	$nestedData[] = $row["SecontExam"];

	$data[] = $nestedData;
}

$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
