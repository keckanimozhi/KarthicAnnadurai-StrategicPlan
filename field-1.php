<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function method($a){
    return htmlspecialchars($_POST[$a]);
}
session_start();
 
  $user_remark = method("field-1");
        
 

$aspect_values = method("aspects");
        $catg_values = method("catg");


function user_login_after( $user_remark,$aspect_values,$catg_values){
    if($_SESSION['user_had_login'] == True){
       $connect = new mysqli($_SESSION['HOST_NAME'],"root") ;
       
       $connect->select_db( "testsql");
       global $user_remark,$aspect_values,$catg_values;


         $user_name = $_SESSION["user_name"];
         $month = $_SESSION["month"];
         $year = $_SESSION["year"];
       $stmt = "INSERT INTO `aspectvalue`(`catid`, `aspid`, `user`, `month`,`year`,`f1`) VALUES ('".$catg_values."','".$aspect_values."','".$_SESSION["user_name"]."','".$_SESSION["month"]."','".$_SESSION["year"]."','".$user_remark."') on duplicate key update catid = ".$catg_values.", aspid = ".$aspect_values.", user = '".$user_name."' ,month = '".$month."', year ='".$year."' , f1 = '".$user_remark."';";
      
    
   
    $in = $connect->query($stmt) ;
    if (!$in) {
            echo "<br>if error:" . $connect->errno . "<br>error meaning:" . $connect->error;
        }
    else{
        echo "<h1>SUCCESS</h1>";
    }
        $connect->close();
        
    }  else {
        echo("<br>have to login.");
    } 
}

user_login_after( $user_remark,$aspect_values,$catg_values);//2 field
echo "<br> aspect id::::::".$aspect_values;
echo '<br>'.$user_remark;