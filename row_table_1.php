<?php

 function method($a){
    return htmlspecialchars($_POST[$a]);
}
session_start();

$catg = method('catg');
$aspects = method('aspects');
$table_count = method('table-count');
$current_row = 2;//method('crow');
$sql_connect = new mysqli("localhost","root") ;
$sql_connect->select_db( "testsql");
$user_name = $_SESSION["user_name"];
$month = $_SESSION["month"];

for($i = 0; $i<$current_row;$i++){
  $sql_connect->query("INSERT INTO `field_table_values`(`user`, `month`, `catid`, `aspid`, `fieldid`, `col1_value`, `col2_value`, `col3_value`) VALUES ('".$user_name."','".$month."','".$catg."','".$aspects."','".$table_count."','".method('txtbx1-'.$current_row)."','".method('txtbx2-'.$current_row)."','".method('txtbx3-'.$current_row)."')");
}

if()