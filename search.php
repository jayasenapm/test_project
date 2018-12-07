<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("test",$con);
    $query=mysql_query("select * from employee where IDNO LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['IDNO'];
    }
    echo json_encode($array);
?>
