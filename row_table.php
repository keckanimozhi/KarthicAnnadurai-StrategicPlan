<?php

 function method($a){
    return htmlspecialchars($_POST[$a]);
}
session_start();

$catg = method('catg');
$aspects = method('aspects');
$table_count = method('table-count');
$i = method('cr');
$total_col = method("total-col");
$sql_connect = new mysqli("localhost","root") ;
$sql_connect->select_db( "testsql");
$user_name = $_SESSION["user_name"];
$month = $_SESSION["month"];

echo "<br>table count are: ".$table_count;
echo "<br>total columns are selected are: ".$total_col;
echo "<br>total rows are: ".$i;

function dynamicCol($total_cols){
	if($total_cols == 6){
     for($current_row = 1; $current_row<=$i;$current_row++){
       $sql_connect->query("INSERT INTO `field_table_values`(`user`, `month`, `catid`, `aspid`, `fieldid`, `col1_value`, `col2_value`, `col3_value`, `col4_value` , `col5_value`, `col6_value`) VALUES ('".$user_name."','".$month."','".$catg."','".$aspects."','".$table_count."','".method('txtbx1-'.$current_row)."','".method('txtbx2-'.$current_row)."','".method('txtbx3-'.$current_row)."','".method('txtbx4-'.$current_row)."','".method('txtbx5-'.$current_row)."','".method('txtbx6-'.$current_row)."')");
      if($sql_connect->error){
	    die("no inserton on the data base:::::".$sql_connect->error);
       }         
     }
	}
	elseif($total_cols == 5){
     for($current_row = 1; $current_row<=$i;$current_row++){
       $sql_connect->query("INSERT INTO `field_table_values`(`user`, `month`, `catid`, `aspid`, `fieldid`, `col1_value`, `col2_value`, `col3_value`, `col4_value` , `col5_value`) VALUES ('".$user_name."','".$month."','".$catg."','".$aspects."','".$table_count."','".method('txtbx1-'.$current_row)."','".method('txtbx2-'.$current_row)."','".method('txtbx3-'.$current_row)."','".method('txtbx4-'.$current_row)."','".method('txtbx5-'.$current_row)."')");
      if($sql_connect->error){
	    die("no inserton on the data base:::::".$sql_connect->error);
       }         
     }
    }
    else if($total_cols == 4){
     for($current_row = 1; $current_row<=$i;$current_row++){
       $sql_connect->query("INSERT INTO `field_table_values`(`user`, `month`, `catid`, `aspid`, `fieldid`, `col1_value`, `col2_value`, `col3_value`, `col4_value` ) VALUES ('".$user_name."','".$month."','".$catg."','".$aspects."','".$table_count."','".method('txtbx1-'.$current_row)."','".method('txtbx2-'.$current_row)."','".method('txtbx3-'.$current_row)."','".method('txtbx4-'.$current_row)."')");
      if($sql_connect->error){
	    die("no inserton on the data base:::::".$sql_connect->error);
       }         
     }
    }
    elseif ($total_cols == 3) {
     for($current_row = 1; $current_row<=$i;$current_row++){
       $sql_connect->query("INSERT INTO `field_table_values`(`user`, `month`, `catid`, `aspid`, `fieldid`, `col1_value`, `col2_value`, `col3_value`) VALUES ('".$user_name."','".$month."','".$catg."','".$aspects."','".$table_count."','".method('txtbx1-'.$current_row)."','".method('txtbx2-'.$current_row)."','".method('txtbx3-'.$current_row)."')");
      if($sql_connect->error){
	    die("no inserton on the data base:::::".$sql_connect->error);
       }         
     }
    }
    elseif($total_cols == 2){
     for($current_row = 1; $current_row<=$i;$current_row++){
       $sql_connect->query("INSERT INTO `field_table_values`(`user`, `month`, `catid`, `aspid`, `fieldid`, `col1_value`, `col2_value`) VALUES ('".$user_name."','".$month."','".$catg."','".$aspects."','".$table_count."','".method('txtbx1-'.$current_row)."','".method('txtbx2-'.$current_row)."')");
      if($sql_connect->error){
	    die("no inserton on the data base:::::".$sql_connect->error);
       }         
     }
    }


}


