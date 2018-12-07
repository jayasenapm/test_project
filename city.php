<?php
include('connect.php');

//CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY
if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];
    $sql = mysql_query ("SELECT IDNO FROM employee WHERE IDNO LIKE '%{$query}%' OR IDNO LIKE '%{$query}%'");
	$array = array();
    while ($row = mysql_fetch_array($sql)) {
        $array[] = array (
            'label' => $row['IDNO'].', '.$row['IDNO'],
            'value' => $row['IDNO'],
        );
    }
    //RETURN JSON ARRAY
    echo json_encode ($array);
}

?>