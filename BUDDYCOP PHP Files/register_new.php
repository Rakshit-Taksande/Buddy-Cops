<?php
session_start();
	$log_in_buddycop = $_SESSION['log_in_buddycop'];
//	echo $log_in_buddycop;
	$submit = $_SESSION['submit'];
//	echo $submit;
	
if($log_in_buddy!="1") 
	 {
			header("location:http://www.ec-jrc.com/buddycop/buddycop.php"); 			
	 }
    else
	{				

	$servername = "mysql.hostinger.in";
	$username = "u682671774_buddy";
	$password = "buddy_cop_ec";
	$db="u682671774_buddy";

//create connection

	$conn = new mysqli($servername, $username, $password,$db);

		if ($conn->connect_error)
		{
			die("Connection failed: " . $conn->connect_error);
		} 
	
	$read_current_date = date('d-m-Y');
	
/*	$investigation_officer = '';
	
	if(isset($_GET['investigation_officer']))
  	{
  		 echo $investigation_officer = $_GET['investigation_officer'];
  	}			*/
	
//	$submit = $_POST['submit'];
	
//	session_start();
//	$_SESSION['submit'] = $submit;
	
	if($submit == 'Hostel Registeration')
  	{	
?>

<html>
	<head>	
	<body background="img.PNG">
	
	<div style="position: absolute; left:38%; top:48%;">
<img src="pic1.png"  style="width:45%;height:45%;"></div>    

		<title>Hostel Registeration</title>
		<style>
			
		.button
		{
			background-color:#3b5998;
			padding: 8px 32px;
			text-align: center;
			font-size: 16px;
			cursor: pointer;
			color:#ffffff;
		}
		
		
		
		</style>
		<script>
window.onload = function(){zoom(1)}

</script>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script language="javascript" type="text/javascript">
    function dynamicdropdown(listindex)
    {
        switch (listindex)
        {
        case "Zone 1" :	
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Wadi Police Station","Wadi Police Station");
            document.getElementById("police_station").options[2]=new Option("Hingna Police Station","Hingna Police Station");
			document.getElementById("police_station").options[3]=new Option("MIDC Police Station","MIDC Police Station");
            document.getElementById("police_station").options[4]=new Option("Sonegaon Police Station","Sonegaon Police Station");
			document.getElementById("police_station").options[5]=new Option("RP Nagar Police Station","RP Nagar Police Station");
            document.getElementById("police_station").options[6]=new Option("Bajaj Nagar Police Station","Bajaj Nagar Police Station");
            break;
        case "Zone 2" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Sitabuildi Police Station","Sitabuildi Police Station");
            document.getElementById("police_station").options[2]=new Option("Ambazari Police Station","Ambazari Police Station");
			document.getElementById("police_station").options[3]=new Option("Sadar Police Station","Sadar Police Station");
            document.getElementById("police_station").options[4]=new Option("Gittikhadan Police Station","Gittikhadan Police Station");
			document.getElementById("police_station").options[5]=new Option("Mankapur Police Station","Mankapur Police Station");
            document.getElementById("police_station").options[6]=new Option("Dhantoli Police Station","Dhantoli Police Station");
            break;
		case "Zone 3" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Panchpaoli Police Station","Panchpaoli Police Station");
            document.getElementById("police_station").options[2]=new Option("Lakadganj Police Station","Lakadganj Police Station");
			document.getElementById("police_station").options[3]=new Option("Tahsil Police Station","Tahsil Police Station");
            document.getElementById("police_station").options[4]=new Option("Kotwali Police Station","Kotwali Police Station");
			document.getElementById("police_station").options[5]=new Option("Ganeshpeth Police Station","Ganeshpeth Police Station");
            document.getElementById("police_station").options[6]=new Option("Shantinagar Police Station","Shantinagar Police Station");
            break;
		case "Zone 4" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Ajani Police Station","Ajani Police Station");
            document.getElementById("police_station").options[2]=new Option("Imamwada Police Station","Imamwada Police Station");
			document.getElementById("police_station").options[3]=new Option("Sakkardara Police Station","Sakkardara Police Station");
            document.getElementById("police_station").options[4]=new Option("Nandanwan Police Station","Nandanwan Police Station");
			document.getElementById("police_station").options[5]=new Option("Hudkeshwar Police Station","Hudkeshwar Police Station");
            document.getElementById("police_station").options[6]=new Option("","");
            break;
		case "Zone 5" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Kamptee Police Station","Kamptee Police Station");
            document.getElementById("police_station").options[2]=new Option("Jaripatka Police Station","Jaripatka Police Station");
			document.getElementById("police_station").options[3]=new Option("Koradi Police Station","Koradi Police Station");
            document.getElementById("police_station").options[4]=new Option("Juni Kamptee Police Station","Juni Kamptee Police Station");
			document.getElementById("police_station").options[5]=new Option("Kalamana Police Station","Kalamana Police Station");
            document.getElementById("police_station").options[6]=new Option("Yahodhara Police Station","Yahodhara Police Station");
            break;
        }
        return true;
    }
	
	
	
	 
	function success()
	{
		 var n = document.Reg.hostel_name.value;
                          
         if(n.length == 0)
           { 
             alert("Please Enter the Hostel Name");
              document  .Reg.hostel_name.focus();
              return false;
           }
		    var n = document.Reg.hostel_address.value;
                          
         if(n.length == 0)
           { 
             alert("Please Enter the Hostel Address");
              document  .Reg.hostel_address.focus();
              return false;
           }
		    var n = document.Reg.num_girls.value;
                          
         if(n.length == 0)
           { 
             alert("Please Enter the number of Girls in Hostel");
              document  .Reg.num_girls.focus();
              return false;
           }
		    var n = document.Reg.zone.value;
                          
         if(n.length == 0)
           { 
             alert("Please Select Zone");
              document  .Reg.zone.focus();
              return false;
           }
		    var n = document.Reg.police_station.value;
                          
         if(n.length == 0)
           { 
             alert("Please Select Police Station");
              document  .Reg.police_station.focus();
              return false;
           }
		   
		   var n = document.Reg.owner_name.value;
                          
         if(n.length == 0)
           { 
             alert("Please Enter the Owner Name");
              document  .Reg.owner_name.focus();
              return false;
           }
		   
		   var n = document.Reg.CCTV_Camera.value;
                          
         if(n.length == 0)
           { 
             alert("Please Select YES or NO for CCTV / Camera");
              document  .Reg.CCTV_Camera.focus();
              return false;
           }
		   var n = document.Reg.compound_wall.value;
                          
         if(n.length == 0)
           { 
             alert("Please Select YES or NO for Compound Wall");
              document  .Reg.compound_wall.focus();
              return false;
           }
		   var n = document.Reg.sanitation_facility.value;
                          
         if(n.length == 0)
           { 
             alert("Please Select YES or NO for Sanitation Facility");
              document  .Reg.sanitation_facility.focus();
              return false;
           }
//		alert("Data entered successfully");
		return false;
	}	
	
    </script>
		
		
		
		
		


</style>
	</head>
	 <body>
	 <?php include 'header_buddycop.php';?>
	 <center>
	<form name="Reg" action="save_hostel_record.php" method="POST" >
	<p><a href="main.php" color="Black">Back to Home Page</a></p>
	<p><a href="buddycop.php" color="Black">Log Out</a></p>
	<div>
	<table align="left">
	
<!--	 	<tr>
		<td>
		<h3>Complaint ID</h3></td>
		<td><input type="text" name="name" size="8"></td>
		</tr>		-->	
		
		<tr>		
		<td>
		<h3>Date : </h3></td>
		<td><input type="text" name="read_current_date" size="8" value="<?php echo $read_current_date; ?>" readonly ></td>
		</tr>
		
	<!--	<tr>
		<td>
		<h2>Hostel Details</h2>
		</td>
		</tr>		-->
		
		<tr>
		<th>Name of Hostel : </th>
		<td><input type="text" name="hostel_name" size="45" required></td>
		</tr>
		<tr>
		<th>Address : </th>
		<td><input type="text"  name="hostel_address" size="45" required><td>
		</tr>
		<tr>
		<th>Phone : </th>
		<td><input type="text" name="hostel_phone" size="45"></td>
		</tr>
		<tr>
		<th>Number of Girls in Hostel : </th>
		<td><input type="text" name="num_girls" size="10" required></td>
		</tr>		
		
	<!--	<tr>
		<td>
		<h2>Police Station Detail</h2>
		</td>
		</tr>		-->
		
		
		<tr>
		<div class="category_div" id="category_div"><th>Zone : </th>
        <td><select id="zone" name="zone" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required>
        <option value="">Select Zone</option>
        <option value="Zone 1">Zone 1</option>
        <option value="Zone 2">Zone 2</option>
		<option value="Zone 3">Zone 3</option>
        <option value="Zone 4">Zone 4</option>
		<option value="Zone 5">Zone 5</option>
        </select></td>
    </div>
	</tr>
	
	<tr>	
    <div class="sub_category_div" id="sub_category_div"><th>Police Station : </th>
        <td><script type="text/javascript" language="JavaScript">
        document.write('<select name="police_station" id="police_station" required><option value="">Select Police Station</option></select>')
        </script>
        <noscript>
        <select id="police_station" name="police_station" required>
		
<!--            <option value="open">OPEN</option>
            <option value="delivered">DELIVERED</option>	-->
        </select></td>
        </noscript>
    </div>
	</tr>	
		
	<!--	<tr>
	    <td>
		<h2>Owner and Manager Details</h2>
		</td>	
		</tr>		-->
		
		<tr>
		<th>Owner Name:</th>
		<td><input type="text" name="owner_name" size="45" required></td>
		</tr>
		<tr>
		<th>Owner Mobile No:</th>
		<td><input type="text" name="owner_mobile" size="45"></td>
		</tr>
		<tr>
		<th>Manager Name:</th>
		<td><input type="text" name="manager_name" size="45"></td>
		</tr>
		<tr>
		<th>Manager Mobile No:</th>
		<td><input type="text" name="manager_mobile" size="45"></td>
		</tr>
		
	<!--	<tr>
		<td>
		<h2>Remarks</h2></td><td><input type="text" name ="remarks" size="45" >
		</td>
		</tr>		-->
	
	<!--	</table>		-->
		
		
	<!--	<table align ="right">		-->
	<!--	<tr>
		<td>
		</td>
		<td>
			<img src="insert.png"alt="insert" width="300" height="200" align="right">
		</td>
		</tr>		-->
		
		
		
	<!--	<tr>
		<td>
		<h2>Warden and Security Details</h2>
		</td>
		</tr>		-->
		
		<tr>
		<th>Warden Name : </th>
		<td><input type="text" name="warden_name" size="45"></td>
		</tr>
		<tr>
		<th>Warden Mobile No : </th>
		<td><input type="text" name="warden_mobile" size="45"></td>
		</tr>
		<tr>
		<th>Security Name : </th>
		<td><input type="text" name="security_name" size="45"></td>
		</tr>
		<tr>
		<th>Security Mobile No : </th>
		<td><input type="text" name="security_mobile" size="45"></td>
		</tr>
		
<!--		<tr>
		<th hidden>Processed by : </th>
		<td><input type="text" name="status" size="40" readonly hidden></td>
		</tr>		-->
		
	<!--	<tr>
		<td>
		<h2>Features at Hostel</h2>
		</td>
		</tr>		-->
		
		<tr>
		<th>CCTV / Camera : </th>
		<td>		
<!--		<input type="text" name="investigation_officer"size="40">		-->
		<select name="CCTV_Camera" required>
                <option value="">Select YES or NO</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option> 
        </select>
		</td>
		</tr>
		
		<tr>
		<th>Compound Wall : </th>
		<td>		
<!--		<input type="text" name="investigation_officer"size="40">		-->
		<select name="compound_wall" required>
                <option value="">Select YES or NO</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option> 
        </select>
		</td>
		</tr>
		
		<tr>
		<th>Sanitation Facility : </th>
		<td>		
<!--		<input type="text" name="investigation_officer"size="40">		-->
		<select name="sanitation_facility" required>
                <option value="">Select YES or NO</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option> 
        </select>
		</td>
		</tr>
		
		
		
<!--		<tr>
		<th>Email</th>
		<td><input type="text" name="acemail" size="45"></td>
		</tr>		-->
		
		<tr>
		<td>
		</td>
		<td><input type="submit" name="Submit" value="Save New Record" class="button" onclick="success()"></td>
		
		</tr>
						
		</table>
		</div>

		

<!--		<tr>
		<td>
		<br>
		<br>
		<br>
		</td>
		</tr>		-->
		
<div style="position: fixed; right:40; top:55;width:400px;height:580px;line-height:3cm;overflow:scroll;padding:5px">	
	<table border="1">
	
<tr>
<th>
ID 
</th>
<th>
Edit 
</th>
<th>
Name of hostel
</th>
<th>
Address
</th>
<th>
Phone number
</th>
<th>
Number of Girls in hostel
</th>
<th>
Zone
</th>
<th>
Police Station
</th>
<th>
Owner Name
</th>
<th>
Owner Mobile No
</th>
<th>
Manager Name
</th> 
<th>
Manager Mobile No
</th>
<th>
Warden Name 
</th>
<th>
Warden Mobile No 
</th>
<th>
Security Name 
</th>
<th>
Security Mobile No  
</th>
<th>
CCTV / Camera 
</th>
<th>
Compound Wall 
</th>
<th>
Sanitation Facility 
</th>

</tr> 
 <?php
define('HOST','mysql.hostinger.in');
define('USER','u682671774_buddy');
define('PASS','buddy_cop_ec');
define('DB','u682671774_buddy');

 $submit='Save New Record';
 
 $_SESSION['submit'] = $submit;
 
 session_start();
 
 $con = new mysqli(HOST,USER,PASS,DB);
 
 
/*	$ID=$POST['ID'];
	$hostel_name = $_POST['hostel'];
 $hostel_address = $_POST['address'];
 $hostel_phone = $_POST['number'];
 $num_girls = $_POST['nog'];
 $zone = $_POST['zone'];
 $police_station =$_POST['police_station'];
 $owner_name = $_POST['owner_name'];
 $owner_mobile = $_POST['owner_mobile'];
 $manager_name = $_POST['manager_name'];
 $manager_mobile = $_POST['manager_mobile'];
 $warden_name = $_POST['warden_name'];
 $warden_mobile = $_POST['warden_mobile'];
 $security_name = $_POST['security_name'];
 $security_mobile = $_POST['security_mobile'];
 $CCTV_Camera = $_POST['CCTV_Camera'];
 $compound_wall = $_POST['compound_wall'];
 $sanitation_facility = $_POST['sanitation_facility'];	*/

$sql ="SELECT * FROM Hostel_Record ORDER BY ID DESC";
//$result=mysqli_query($sql);

$result = mysqli_query($con,$sql);

$rowcount=mysqli_num_rows($result);
$i=0;
	while($i<$rowcount)
	{
		
		$rows=mysqli_fetch_array ($result);
		
		
		
		
		
		
		//$rows=mysqli_fetch_row ($result);
		
	//$rows=mysqli_fetch_assoc ($result);
	
/*$f1=mysql_result($result,$i,"field1");
$f2=mysql_result($result,$i,"field2");
$f3=mysql_result($result,$i,"field3");
$f4=mysql_result($result,$i,"field4");
	
*/	
	
	
?>	
<tr>
<td><?php echo $rows['ID'];?></td>
<?php
			echo '<td><a href="record_for_update_Hostel.php?ID=' . $rows['ID'] . '" >Edit</a></td>';
?>	
<td><?php echo $rows['hostel_name'];?></td>
<td><?php	echo $rows['hostel_address'];?></td>
<td><?php	echo $rows['hostel_phone'];?></td>
<td>	<?php echo $rows['num_girls'];?></td>
<td>	<?php echo $rows['zone'];?></td>
<td>	<?php echo $rows['police_station'];?></td>
<td>	<?php echo $rows['owner_name'];?></td>
<td>	<?php echo $rows['owner_mobile'];?></td>
<td>	<?php echo $rows['manager_name'];?></td>
<td>	<?php echo $rows['manager_mobile'];?></td>
<td>	<?php echo $rows['warden_name'];?></td>
<td>	<?php echo $rows['warden_mobile'];?></td>
<td>	<?php echo $rows['security_name'];?></td>
<td>	<?php echo $rows['security_mobile'];?></td>
<td>	<?php echo $rows['CCTV_Camera'];?></td>
<td>	<?php echo $rows['compound_wall'];?></td>
<td>	<?php echo $rows['sanitation_facility'];?></td>
		
</tr>
	<?php
	$i++;	
}
?>
</td>
</tr>
</tbody>
</table>
</div>	
		
		</form>
		
		</center>
	</body>
	

</html>

<?php
}
elseif ($submit == 'IO Registeration')
{
?>

<html>
	<head>	
	<body background="img.PNG">
	
	<div style="position: absolute; left:5%; top:60%;">
<img src="pic7.png"  style="width:30%;height:40%;"></div>    



		<title>IO Registeration</title>
		<style>
			
		.button
		{
			background-color:#3b5998;
			padding: 8px 32px;
			text-align: center;
			font-size: 16px;
			cursor: pointer;
			color:#ffffff;
		}
		</style>
		<script>
window.onload = function(){zoom(1)}

</script>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script language="javascript" type="text/javascript">
    function dynamicdropdown(listindex)
    {
        switch (listindex)
        {
        case "Zone 1" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Wadi Police Station","Wadi Police Station");
            document.getElementById("police_station").options[2]=new Option("Hingna Police Station","Hingna Police Station");
			document.getElementById("police_station").options[3]=new Option("MIDC Police Station","MIDC Police Station");
            document.getElementById("police_station").options[4]=new Option("Sonegaon Police Station","Sonegaon Police Station");
			document.getElementById("police_station").options[5]=new Option("RP Nagar Police Station","RP Nagar Police Station");
            document.getElementById("police_station").options[6]=new Option("Bajaj Nagar Police Station","Bajaj Nagar Police Station");
            break;
        case "Zone 2" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Sitabuildi Police Station","Sitabuildi Police Station");
            document.getElementById("police_station").options[2]=new Option("Ambazari Police Station","Ambazari Police Station");
			document.getElementById("police_station").options[3]=new Option("Sadar Police Station","Sadar Police Station");
            document.getElementById("police_station").options[4]=new Option("Gittikhadan Police Station","Gittikhadan Police Station");
			document.getElementById("police_station").options[5]=new Option("Mankapur Police Station","Mankapur Police Station");
            document.getElementById("police_station").options[6]=new Option("Dhantoli Police Station","Dhantoli Police Station");
            break;
		case "Zone 3" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Panchpaoli Police Station","Panchpaoli Police Station");
            document.getElementById("police_station").options[2]=new Option("Lakadganj Police Station","Lakadganj Police Station");
			document.getElementById("police_station").options[3]=new Option("Tahsil Police Station","Tahsil Police Station");
            document.getElementById("police_station").options[4]=new Option("Kotwali Police Station","Kotwali Police Station");
			document.getElementById("police_station").options[5]=new Option("Ganeshpeth Police Station","Ganeshpeth Police Station");
            document.getElementById("police_station").options[6]=new Option("Shantinagar Police Station","Shantinagar Police Station");
            break;
		case "Zone 4" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Ajani Police Station","Ajani Police Station");
            document.getElementById("police_station").options[2]=new Option("Imamwada Police Station","Imamwada Police Station");
			document.getElementById("police_station").options[3]=new Option("Sakkardara Police Station","Sakkardara Police Station");
            document.getElementById("police_station").options[4]=new Option("Nandanwan Police Station","Nandanwan Police Station");
			document.getElementById("police_station").options[5]=new Option("Hudkeshwar Police Station","Hudkeshwar Police Station");
            
            break;
		case "Zone 5" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Kamptee Police Station","Kamptee Police Station");
            document.getElementById("police_station").options[2]=new Option("Jaripatka Police Station","Jaripatka Police Station");
			document.getElementById("police_station").options[3]=new Option("Koradi Police Station","Koradi Police Station");
            document.getElementById("police_station").options[4]=new Option("Juni Kamptee Police Station","Juni Kamptee Police Station");
			document.getElementById("police_station").options[5]=new Option("Kalamana Police Station","Kalamana Police Station");
            document.getElementById("police_station").options[6]=new Option("Yahodhara Police Station","Yahodhara Police Station");
            break;
        }
        return true;
    }
	
	function success()
	{
		 var n = document.Reg.name.value;
                          
         if(n.length == 0)
           { 
             alert("Please Enter the Name ");
              document  .Reg.name.focus();
              return false;
           }
		
		    var n = document.Reg.phone.value;
                          
         if(n.length == 0)
           { 
             alert("Please Enter the Phone number ");
              document  .Reg.phone.focus();
              return false;
           }
		    var n = document.Reg.zone.value;
                          
         if(n.length == 0)
           { 
             alert("Please Select Zone ");
              document  .Reg.zone.focus();
              return false;
           }
		    var n = document.Reg.police_station.value;
                          
         if(n.length == 0)
           { 
             alert("Please Select Police Station ");
              document  .Reg.police_station.focus();
              return false;
           }
//		alert("Data entered successfully");
		return false;
	}	
	
    </script>

</style>
	</head>
	 <body>
	 <?php include 'header_buddycop.php';?>
	 <center>
	<form name="Reg" action="save_IO_record.php" method="POST" >
	<p><a href="main.php">Back to Home Page</a></p>
	<p><a href="buddycop.php">Log Out</a></p>
	<table align="left">
<!--	 	<tr>
		<td>
		<h3>Complaint ID</h3></td>
		<td><input type="text" name="name" size="8"></td>
		</tr>		-->	
		<tr>		
		<td>
		<h3>Date</h3></td>
		<td><input type="text" name="read_current_date" size="8" value="<?php echo $read_current_date; ?>" readonly ></td>
		</tr>
		<tr>
		<td>
		<h2>Inspection Officer Details</h2>
		</td>
		</tr>	
		
		<tr>
		<th>Name : </th>
		<td><input type="text" name="IO_name" size="45" required></td>
		</tr>
		<tr>
		<th>Buckle No : </th>
		<td><input type="text"  name="buckle_no" size="45" ><td>
		</tr>
		<tr>
		<th>Phone : </th>
		<td><input type="text" name="phone" size="45" required></td>
		</tr>
		<tr>
		<th>Email : </th>
		<td><input type="text" name="email" size="45"></td>
		
		<tr>
		<td>
		<h2>Police Station Detail</h2>
		</td>
		</tr>
		
		<tr>
		<div class="category_div" id="category_div"><th>Zone:</th>
        <td><select id="zone" name="zone" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required>
        <option value="">Select Zone</option>
        <option value="Zone 1">Zone 1</option>
        <option value="Zone 2">Zone 2</option>
		<option value="Zone 3">Zone 3</option>
        <option value="Zone 4">Zone 4</option>
		<option value="Zone 5">Zone 5</option>
        </select></td>
    </div>
	</tr>
	
	<tr>	
    <div class="sub_category_div" id="sub_category_div"><th>Police Station:</th>
        <td><script type="text/javascript" language="JavaScript">
        document.write('<select name="police_station" id="police_station" required><option value="">Select Police Station</option></select>')
        </script>
        <noscript>
        <select id="police_station" name="police_station" required>
		
<!--            <option value="open">OPEN</option>
            <option value="delivered">DELIVERED</option>	-->
        </select></td>
        </noscript>
    </div>
	</tr>	
		
		<tr>
		<td>
		</td>
		<td><input type="submit" name="Submit" value="Save IO Details" class="button" onclick="success()"></td>
		
		</tr>
		</table>	

<div style="position: fixed; right:32; top:55;width:400px;height:580px;line-height:3cm;overflow:scroll;padding:5px">
<table border="1">
<tr>
<th>
ID
</th>
<th>
Edit
</th>
<th>
Name
</th>
<th>
Buckle_no
</th>
<th>
Phone
</th> 
<th>
Email-Id
</th>
<th>
Zone
</th>
<th>
Police Station
</th>
</tr> 
 <?php
define('HOST','mysql.hostinger.in');
define('USER','u682671774_buddy');
define('PASS','buddy_cop_ec');
define('DB','u682671774_buddy');
 $submit='Save IO Detials';
 
 $_SESSION['submit'] = $submit;
 
 session_start();
 
 $con = new mysqli(HOST,USER,PASS,DB);
/*$ID=$POST['ID'];
$IO_name = $_POST['name'];
 $buckle_no = $_POST['buckle_no'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $zone = $_POST['zone'];
 $police_station =$_POST['police_station'];*/

$sql ="SELECT * FROM IO_Record ORDER BY ID DESC";
//$result=mysqli_query($sql);

$result = mysqli_query($con,$sql);

$rowcount=mysqli_num_rows($result);
$i=0;
	while($i<$rowcount)
	{
		
		$rows=mysqli_fetch_array ($result);
		
		
		
		
		
		
		//$rows=mysqli_fetch_row ($result);
		
	//$rows=mysqli_fetch_assoc ($result);
	
/*$f1=mysql_result($result,$i,"field1");
$f2=mysql_result($result,$i,"field2");
$f3=mysql_result($result,$i,"field3");
$f4=mysql_result($result,$i,"field4");
	
*/	
	
	
?>	
<tr>
<td><?php	echo $rows['ID'];?></td>
<?php
			echo '<td><a href="record_for_update_IO.php?ID=' . $rows['ID'] . '" >Edit</a></td>';
?>
<td>	
	<?php 
	echo $rows['IO_name'];?>
</td>
<td>
<?php	echo $rows['buckle_no'];?></td>
<td><?php	echo $rows['phone'];?></td>
<td>	<?php echo $rows['email'];?></td>
<td>	<?php echo $rows['zone'];?></td>
<td>	<?php echo $rows['police_station'];?></td>
			
	<?php
	$i++;	
}
?>
</td>
</tr>
</table>
</div>	 








		
	<!--	<table align="left" >
		<tr>
		<td><?php //include 'footer_cyber.php';?></td>
		</tr>		
		</table>		
		
		-->
		</form>
		
		</center>
	</body>
	

</html>



<?php
}
}		
?>
	