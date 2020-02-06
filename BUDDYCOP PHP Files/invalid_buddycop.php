<?php
session_start();
$log_in_buddycop = "0";
$_SESSION['log_in_buddycop'] = $log_in_buddycop;
//echo $log_in_cyber;
?>
<html>
	<head>
	<body background="img.PNG">
		<title>Login</title>
		<style>
		
		.button
		{
			background-color:#3b5998;
			padding: 8px 32px;
			text-align: center;
			font-size: 20px;
			cursor: pointer;
			color:#ffffff;
		}
		</style>
	</head>
	<?php //include 'header_cyber.php';?>
	<body>	
	
	<center>
<!--	<h1>Buddy Cops</h1>		-->
	
<!-- <h1 style="font-family:Fenwick;font-size:350%;color:Red;">BUDDY COPS</h1><br> -->

<div style="position: absolute; left:33%; top:1%;">
<img src="BUDDY COP.png" alt="buddylogo" style="width:40%;height:32%;"></div>   
	
	
	
	
		<table height="500" width="800" align="center"> 
			<tr>
				<td align="center">
				
				<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>
				<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>
				<!--	<h3><b>Login</b></h3> -->
				<h2 class="text">Invalid username or password...</h2>
					<form  method="POST" action="loginPost_buddycop.php">
					<table>
						<tr>
						<tr>
							<td><b>Username:</b>&nbsp;</td>
							<td><input type="text" name="username" required autofocus></td>
						</tr></tr>
						<tr>
							<td><b>Password:</b></td> 
							<td><input type="password" name="password" required></td>
						</tr>
					</table>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="button" name="submit" value="Login" style="font-size:20px;height:45%;width:19%" >
				</form>
				</td>
			</tr>
			
		</table>
		</center>
	<?php include 'footer_buddycop.php';?>
	</body>
</html>
