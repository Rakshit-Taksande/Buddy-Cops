<?php
$servername = "mysql.hostinger.in";
$username = "u682671774_buddy";
$password = "buddy_cop_ec";
$db="u682671774_buddy";

//create connection

	$conn = new mysqli($servername, $username, $password,$db);
	
// Check connection

if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
    } 


	
//getData form client

	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	
	
	session_start();
	$log_in_buddycop = $_SESSION['log_in_buddycop'];

//	echo $log_in_cyber;
	
	
	
	
	
//query for 

    $sql="SELECT * FROM Login_Buddycop WHERE USERNAME = '$user' AND PASSWORD = '$pass' ";
	$run = mysqli_query($conn, $sql) or die(mysqli_error($connection));
	$count = mysqli_num_rows($run);
	
	 if($count==1) 
	 {
			
			session_start();
			$log_in_buddycop = "1";
			$_SESSION['log_in_buddycop'] = $log_in_buddycop;
			header("location:http://www.ec-jrc.com/buddycop/main.php");
	 }
    else
	{
			
			session_start();
			$log_in_buddycop = "0";
			$_SESSION['log_in_buddycop'] = $log_in_buddycop;
            header("location:http://www.ec-jrc.com/buddycop/invalid_buddycop.php");
			
	}
   
	mysqli_close($conn);		
?>





