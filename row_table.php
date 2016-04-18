<?php
function createTable($current_row, $total_cols)
{
$string=method1('\'');
$string =$string.method1('<table><tbody>');
echo " table...".$string;
echo " number of rows and columns".$current_row.$total_cols;
for($r=1;$r<=$current_row;$r=$r+1)
  {
$s =method1('<tr>');
		$string = $string. $s;
		for($c=1;$c<=$total_cols;$c=$c+1)
		{
		$s=method1('<td>');
		$string = $string. $s;
		$string = $string. method('txtbx'.$c.'-'.$r);
		$s=method1('</td>');
		$string = $string. $s;
		}
		
		$s =method1('</tr>');
		$string = $string. $s;

	 }
$s =method1('</tbody></table>');
		$string = $string. $s;

$s=method1('\'');
$string =$string.$s;
	
		echo $string;
    return $string;
	 
}

 function method($a){
    return htmlspecialchars($_POST[$a]);
}

function method1($a){
    return htmlspecialchars($a);
}

require('html2fpdf.php');
$pdf=new HTML2FPDF();
$pdf->AddPage();
//session_start();
session_start();
$catg = method('catg');
$aspects = method('aspects');
$table_count = method('table-count');
$i = method('cr');
$total_cols = method("total-col");
$sql_connect = new mysqli("localhost","root") ;
$sql_connect->select_db( "strategicplan");
$user_name = $_SESSION["user_name"];
$month = $_SESSION["month"];
$year=$_SESSION['year'];
echo "<br>table count are: ".$table_count;
echo "<br>total columns are selected are: ".$total_cols;
echo "<br>total rows are: ".$i;
//function dynamicCol($total_cols){
	if($total_cols == 6){
     for($current_row = 1; $current_row<=$i;$current_row++){
       $sql_connect->query("INSERT INTO `field_table_values`(`user`, `month`, `catid`, `aspid`, `fieldid`,`rowid`, `col1_value`, `col2_value`, `col3_value`, `col4_value` , `col5_value`, `col6_value`) VALUES ('".$user_name."','".$month."','".$catg."','".$aspects."','".$table_count."','".$current_row."','".method('txtbx1-'.$current_row)."','".method('txtbx2-'.$current_row)."','".method('txtbx3-'.$current_row)."','".method('txtbx4-'.$current_row)."','".method('txtbx5-'.$current_row)."','".method('txtbx6-'.$current_row)."')");
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
		$stmt1 = "DELETE from `field_table_values` where user='".$user_name."' and month='".$month."' and year='".$year."' and catid='".$catg."' and aspid='".$aspects."' and fieldid='".$table_count."';";
 $d = $sql_connect->query($stmt1) ;  
 if (!$d) {
            echo "<br>if error:" . $sql_connect->errno . "<br>error meaning:" . $sql_connect->error;
        }
		else
		{
			echo "<br>query:" . $stmt1. "<br> st";
			} 

$heading1='<h2> Common Electives</h2> ';
$pdf->WriteHTML("$heading1");
for($current_row = 1; $current_row<=$i;$current_row++){
		 
		   $stmt = "INSERT INTO `field_table_values`(`user`, `month`,`year`, `catid`, `aspid`, `fieldid`,`rowid`, `col1_value`, `col2_value`, `col3_value`, `col4_value`) VALUES ('".$user_name."','".$month."','".$year."','".$catg."','".$aspects."','".$table_count."','".$current_row."','".method('txtbx1-'.$current_row)."','".method('txtbx2-'.$current_row)."','".method('txtbx3-'.$current_row)."','".method('txtbx4-'.$current_row)."') on duplicate key update catid = '".$catg."', aspid = '".$aspects."', user = '".$user_name."' ,month = '".$month."', year ='".$year."' , fieldid='".$table_count."',rowid='".$current_row."',col1_value='".method('txtbx1-'.$current_row)."',col2_value='".method('txtbx2-'.$current_row)."',col3_value='".method('txtbx3-'.$current_row)."',col4_value='".method('txtbx4-'.$current_row)."';";
  
//   echo "  the variable is".'txtbx1-'.$current_row;
 // $_SESSION["'txtbx1-'.$current_row"]=method('txtbx1-'.$current_row);
  $_SESSION["t1"]=method('txtbx1-'.$current_row);
  $_SESSION["t2"]=method('txtbx2-'.$current_row);
  $_SESSION["t3"]=method('txtbx3-'.$current_row);
  $_SESSION["t4"]=method('txtbx4-'.$current_row);
 
 //$t1=method('txtbx1-'.$current_row);
 // $t2=method('txtbx2-'.$current_row);
  // $t3=method('txtbx3-'.$current_row);
   // $t4=method('txtbx4-'.$current_row);
	
	//echo $t1.$t2;
	
//	<td> '. $_SESSION["'txtbx1-'.$current_row"].' </td>
$rowAndColAppend = array();
if($current_row ==1) {


$htmlTable='<table border=1 class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr class="table table-hover table-condensed table-striped table-bordered">
						<th>
							UG / PG                        </th>
						<th>
							Name of the Course                        </th>
						<th>
							Status during this month						</th>
						<th>
							Overall Status						</th>
					</tr>
				</thead>
				
				<tbody>
					<tr class="table table-hover table-condensed table-striped table-bordered">
						<td> '.$_SESSION["t1"].' </td>
						<td> '.$_SESSION["t2"].' </td>
						<td> '.$_SESSION["t3"].' </td>
						<td> '.$_SESSION["t4"].' </td>
												
					</tr>
				
				';
			$pdf->WriteHTML("$htmlTable");
}
else if($current_row == $i){
   $htmlTable =  '<tr class="table table-hover table-condensed table-striped table-bordered">
						<td> '.$_SESSION["t1"].' </td>
						<td> '.$_SESSION["t2"].' </td>
						<td> '.$_SESSION["t3"].' </td>
						<td> '.$_SESSION["t4"].' </td>
												
					</tr>
				 </tbody>
				</table> 
				';
			$pdf->WriteHTML("$htmlTable");
}
else if($current_row > 1 ){
   $htmlTable =  '<tr class="table table-hover table-condensed table-striped table-bordered">
						<td> '.$_SESSION["t1"].' </td>
						<td> '.$_SESSION["t2"].' </td>
						<td> '.$_SESSION["t3"].' </td>
						<td> '.$_SESSION["t4"].' </td>
												
					</tr>
				
				';
			$pdf->WriteHTML("$htmlTable");
}

//$htmlTable='<TABLE border=1>

//						</table>';

//s$pdf->WriteHTML("<br><br><br>$htmlTable");
			
/*	      $_SESSION["'txtbx1-'.$current_row"]=method('txtbx1-'.$current_row);
		  $curvalue =$_SESSION["'txtbx1-'.$current_row"];
		  echo " now the value is".$curvalue;

	    $_SESSION["'txtbx2-'.$current_row"]=method('txtbx2-'.$current_row);
		  $curvalue =$_SESSION["'txtbx2-'.$current_row"];
		  echo " now the value is".$curvalue;

	    $_SESSION["'txtbx3-'.$current_row"]=method('txtbx3-'.$current_row);
		  $curvalue =$_SESSION["'txtbx3-'.$current_row"];
		  echo " now the value is".$curvalue;

		    $_SESSION["'txtbx4-'.$current_row"]=method('txtbx4-'.$current_row);
	  $curvalue =$_SESSION["'txtbx4-'.$current_row"];
		  echo " now the value is".$curvalue;
	
	//     $_SESSION["col1"]=method('txtbx1-'.$current_row);

	*/  
    echo "<br>query:" . $stmt. "<br> st";
   
    $in = $sql_connect->query($stmt) ;
    if (!$in) {
            echo "<br>if error:" . $sql_connect->errno . "<br>error meaning:" . $sql_connect->error;
        }
		else
		{
			echo "<br>query:" . $stmt. "<br> st";
			}
      // $sql_connect->query("INSERT INTO `field_table_values`(`user`, `month`, `catid`, `aspid`, `fieldid`, `col1_value`, `col2_value`, `col3_value`, `col4_value` ) VALUES ('".$user_name."','".$month."','".$catg."','".$aspects."','".$table_count."','".method('txtbx1-'.$current_row)."','".method('txtbx2-'.$current_row)."','".method('txtbx3-'.$current_row)."','".method('txtbx4-'.$current_row)."')");
      //if($sql_connect->error){
	    //die("no inserton on the data base:::::".$sql_connect->error);
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
//}
/*
$currow=$current_row-1;
$htmlTable=createTable($currow, $total_cols);
$pdf->WriteHTML(method1("$htmlTable"));*/
$pdf->Output("sample1.pdf");
?>