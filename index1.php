<?php

  function method($a){
    return $_POST[$a];
  }  
 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

//  const HOST_NAME = "localhost";
  
$input_user_name =  method("UserName");
//$input_user_month = method("Month");
// $input_user_year = method("Year");
$input_user_password = method("Password");

/* (isset($input_user_name)) or die("<p>No user name</p>"); */
//(isset($input_user_password)) or die("<p>No password </p>");


 class Ksql{

    private $mysql_connect;
    private $mysql_select;
    public  $global_user_name;
    public $login_bool = FALSE;
	

    public function __construct() {
        $this->connect();
       
    }
    private function connect(){
         $this->mysql_connect = mysqli_connect("localhost","root","");
		 if ($this->mysql_connect) {
//    echo ("Connection is succeed");
} else {
  //  echo ("Connection is fail");
}
		 
		// mysqli_select_db($link,'login1') or die("Unable to select database");
		 
         mysqli_select_db($this->mysql_connect, 'startegicplan') or die("could not select the database");
 
        if(mysqli_connect_errno()){
        //    echo "<br> fail in connection with the database"+  mysqli_connect_errno();
            exit();
        }
       else {
      //     echo "<br>succes on connection<br>";
       }
    }

   public function checkLogin($user_name, $user_password){

        //  echo $user_name;
         $sql =  "SELECT `user`, `pass` FROM `login` WHERE user='".$user_name."' and pass='".$user_password."'";
      // $sql = "SELECT `name`, `pass` FROM `login` WHERE name=\"jon\" and pass=\"jon\"";
           $this->mysql_select = mysqli_query($this->mysql_connect, $sql) or die("error in selecting the table's content");
          
     
	 $query="SELECT * FROM login";
if($result=mysqli_query($this->mysql_connect,$query))
  {
    //echo "selection succeed\n";
	}
 else {
  //  echo "\nError in selection";
}
		  
		  $num = mysqli_num_rows($result);
//echo "<br>". " number of rows" ."<br>";
		  //echo $num;
		  
$i=0;

while ($i < $num) 
{
$row = mysqli_fetch_row($result);
//echo "user name and password....";
//echo $row[0]; // uname
//echo $row[1]; // password
//echo $user_name;
//echo $user_password;
if ($user_name == $row[0]) 
   {
       if ($user_password == $row[1]) 
	    {
		//   echo "valid user and password";
		 //   $flag=1;
	    	session_start();
	    	$_SESSION["user_name"] = $user_name;
	    	$_SESSION["month"] = method('Month');
	    	echo "<br>".$_SESSION["month"];
		    header('Location:5_3_1.html');
		    exit;
		   }
	//	else
	//	  {
	//	     echo  " incorrect user/password";
	//		 }   
  
  }		 
$i++;
}
//if($flag == 0)
//  {
    // header('Location:index1.php');
	//  echo "invalid login ID.....";
	//   echo "Retype the Credentials.....";
	   echo "<script type='text/javascript'>alert('Invalid Login ID / Password. Retype the Credentials');</script>";
//	  }

   }
 
 }
$check = new Ksql();
$check->checkLogin($input_user_name, $input_user_password);

}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <meta name="description" content="">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  
  
  </head>



  <body bgcolor="F0FFFF">

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="row">
				<div class="col-md-4">				</div>
				<div class="col-md-4">				</div>
				<div class="col-md-4">
					<img alt="KEC Logo" src="images/keclogo1.jpg">				</div>
			</div>
		</div>
		<div class="col-md-4" margin="padding-top:20">
		  
			<h3 class="text-center">
				<div>
					<b><span>KONGU ENGINEERING COLLEGE</span></b>
					
					<div>
						<span>Strategic plan 2015-2016</span>					</div>
					
					<div>
						<span>S</span><span>tatus Report as on
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 	  
			<select name="Month">
                       <option value="January">31st January</option>
                        <option value="February">29th February</option>
                       <option value="March">31st March</option>
                       <option value="April" >30th April</option>
                       <option value="May" >31st May</option>
                       <option value="June" >30th June</option>
                       <option value="July" >31st July</option>
                       <option value="August" >31st August</option>
                       <option value="September" >30th September</option>
                       <option value="October" >31st October</option>
                       <option value="November" >30th November</option>
                       <option value="December" >31st December</option>
                     </select>
        </form>
			     </span>					</div>
				</div>
			</h3>
		</div>
		<div class="col-md-4">
			<div class="row">
				<div class="col-md-4">
					<img alt="KEC Logo" src="images/keclogo2.jpg">				</div>
				<div class="col-md-4">				</div>
				<div class="col-md-4">				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">		</div>
		<div class="col-md-4">
			<h3>
				LOGIN			</h3>
		<!--	<form role="form" action="http://localhost/login.php" method="POST">   
			<form name="form" action="http://localhost/5_3_1.html" method="POST">   -->
			
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 			 
			
			
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						User Name:					</label>
					<input type="text" class="form-control" id="exampleInputEmail1" name="UserName" >
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Password:					</label>
					<input type="password" class="form-control" id="exampleInputPassword1" name="Password">
				</div>
				
                
				
				<button type="submit" class="btn btn-default">
					Login				</button>
			</form>
		</div>
		<div class="col-md-4">		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>