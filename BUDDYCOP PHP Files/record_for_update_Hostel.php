<?php
session_start();
	$log_in_buddycop = $_SESSION['log_in_buddycop'];
//	echo $log_in_cyber;
	
	if($log_in_buddycop!="1") 
	 {
			header("location:http://www.ec-jrc.com/buddycop/buddycop.php"); 		
	 }
    else
	{		

	$read_current_date = date('d-m-Y');
	
	
	
	
	
/*	$sel_update='';
if(isset($_GET['sel_update']))
	{
    	$sel_update=$_GET['sel_update'];
    }
if(isset($_GET['status']))
	{
    	$status = $_GET['status'];
    }		*/
	
	?>

<html>
	<head>	
		<title>Hostel Registeration Update</title>
		<style>
		body {
    background-color: peachpuff;
			}
			
		.button
		{
			background-color:#ABA7A6;
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
		
				
<?php
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
//query

session_start();

$ID = $_REQUEST['ID'];
$_SESSION['ID'] = $_REQUEST[ID];

//echo $ID;




if ($ID == "") {
	
header("location:http://www.ec-jrc.com/buddycop/main.php"); 	
} else {	



//if ($submit == "Verify Complaints") {
	?>
		<form action="update_record_Hostel.php" method="POST">
		<center>
		<p><a href="main.php">Back to Home Page</a></p>
		<p><a href="buddycop.php">Log Out</a></p>
<!--		<p><font size="10" color="blue"><strong>Record of <?php //echo $sel_date ?></strong></font></p>		-->
		</center>
		
 <!--        <table border="1">
			<tr bgcolor="#b8d1f3">
              <th>Id</th>
              <th>Name</th>
			  <th>Longitude</th>
			  <th>Name</th>
			  <th>Address</th>
			  <th>Reason</th>
			  <th>Time</th>
			  <th>Date</th>
			  <th>Number Plate</th>
			  <th>Edit</th>
			 
			</tr>			-->
            
<?php
	$sql="SELECT hostel_name,hostel_address,hostel_phone,num_girls,zone,police_station,owner_name,owner_mobile,manager_name,manager_mobile,warden_name,warden_mobile,security_name,security_mobile,CCTV_Camera,compound_wall,sanitation_facility,read_current_date FROM Hostel_Record WHERE ID = '$ID'";
		 
	
	
    $result= mysqli_query($conn, $sql);
    If(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
           { ?>
	   
	   
	   
	   <table align="left">
	 	<tr>
		<td>
		<h3>ID : </h3></td>
		<td><input type="text" name="ID" size="8" value="<?php echo $ID; ?>" readonly ></td>
		</tr>		
		<tr>		
		<td>
		<h3>Last Updated Date : </h3></td>
		<td><input type="text" name="read_current_date" size="8" value="<?php echo $row['read_current_date']; ?>" readonly ></td>
		</tr>
		<tr>
		<th>Name of Hostel : </th>
		<td><input type="text" name="hostel_name" size="45" value="<?php echo $row['hostel_name']; ?>" required></td>
		</tr>
		<tr>
		<th>Address : </th>
		<td><input type="text"  name="hostel_address" size="45" value="<?php echo $row['hostel_address']; ?>" required><td>
		</tr>
		<tr>
		<th>Phone : </th>
		<td><input type="text" name="hostel_phone" size="45" value="<?php echo $row['hostel_phone']; ?>" ></td>
		</tr>
		<tr>
		<th>Number of Girls in Hostel : </th>
		<td><input type="text" name="num_girls" size="10" value="<?php echo $row['num_girls']; ?>" required></td>
		</tr>		
		
	<!--	<tr>
		<td>
		<h2>Police Station Detail</h2>
		</td>
		</tr>		-->
		
		
		<tr>
		<div class="category_div" id="category_div"><th>Zone : </th>
        <td><select id="zone" name="zone" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required>
        <option value="<?php echo $row['zone']; ?>"><?php echo $row['zone']; ?></option>
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
        document.write('<select name="police_station" id="police_station" required><option value="<?php echo $row['police_station']; ?>"><?php echo $row['police_station']; ?></option></select>')
        </script>
        <noscript>
        <select id="police_station" name="police_station"  value="<?php echo $row['police_station']; ?>" required>
		
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
		<td><input type="text" name="owner_name" size="45" value="<?php echo $row['owner_name']; ?>" required></td>
		</tr>
		<tr>
		<th>Owner Mobile No:</th>
		<td><input type="text" name="owner_mobile" size="45" value="<?php echo $row['owner_mobile']; ?>" ></td>
		</tr>
		<tr>
		<th>Manager Name:</th>
		<td><input type="text" name="manager_name" size="45" value="<?php echo $row['manager_name']; ?>" ></td>
		</tr>
		<tr>
		<th>Manager Mobile No:</th>
		<td><input type="text" name="manager_mobile" size="45" value="<?php echo $row['manager_mobile']; ?>" ></td>
		</tr>
				
		<tr>
		<th>Warden Name : </th>
		<td><input type="text" name="warden_name" size="45" value="<?php echo $row['warden_name']; ?>"></td>
		</tr>
		<tr>
		<th>Warden Mobile No : </th>
		<td><input type="text" name="warden_mobile" size="45" value="<?php echo $row['warden_mobile']; ?>"></td>
		</tr>
		<tr>
		<th>Security Name : </th>
		<td><input type="text" name="security_name" size="45" value="<?php echo $row['security_name']; ?>"></td>
		</tr>
		<tr>
		<th>Security Mobile No : </th>
		<td><input type="text" name="security_mobile" size="45" value="<?php echo $row['security_mobile']; ?>"></td>
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
                <option value="<?php echo $row['CCTV_Camera']; ?>"><?php echo $row['CCTV_Camera']; ?></option>
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
                <option value="<?php echo $row['compound_wall']; ?>"><?php echo $row['compound_wall']; ?></option>
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
                <option value="<?php echo $row['sanitation_facility']; ?>"><?php echo $row['sanitation_facility']; ?></option>
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
		<td><input type="submit" name="Submit" value="Update Record" class="button" onclick="success()"></td>
		
		</tr>
		</table>	
		
<!--		<table align="center" >
		
		<?php //include 'footer_cyber.php';?>
		</table>		-->
	   
	   </form>
		
		</center>
	</body>
	

</html>

	   
	   
	   
	   
 <!--           <tr>   
			
			<td><input type="text" name="ID" value="<?php //echo $row['id']; ?>" readonly size="5"></td> 
			<td><input type="text" name="LATITUDE" value="<?php //echo $row['f1']; ?>" readonly size="20"></td> 
			<td><input type="text" name="LONGITUDE" value="<?php //echo $row['f2']; ?>" readonly size="20"></td> 
			<td><input type="text" name="NAME" value="<?php //echo $row['OWNER']; ?>" readonly></td>
			<td><input type="text" name="ADDERSS" value="<?php //echo $row['ADDRESS']; ?>" readonly></td>
			<td><input type="text" name="REASON" value="<?php //echo $row['Reason']; ?>" readonly></td>
			<td><input type="text" name="s_TIME" value="<?php //echo $row['S_Time']; ?>" readonly size="10"></td>
			<td><input type="text" name="S_DATE" value="<?php //echo $row['S_Date']; ?>" readonly size="10"></td>
            <td><input type="text" name="NO_PLATE" value="<?php //echo $row['Number_Plate']; ?>" readonly size="10"></td>		-->	
			<!--	<td><input type="submit" name="submit" value="Link"></td>	-->		
			
						
<?php
//echo '<td><a href="photo.php?id=' . $row['id'] . '&Reason=' . $row['Reason'] . '&f1=' . $row['f1'] . '&f2=' . $row['f2'] . '&S_Time=' . $row['S_Time'] . '&S_Date=' . $row['S_Date'] . '&Number_Plate=' . $row['Number_Plate'] . '" >Edit</a></td>';

//	echo  '<td><a href="Print_sssi.php?ID=' . $row['id'] . '&REASON=' . $row['Reason'] . '&LATITUDE=' .$row['f1'] .'&LONGITUDE='.$row['f2'].
//      '&NAME='.$row['Reason'] .'&ADDERSS='. $row['f4'] .'&s_TIME'. $row['S_Time'] . '&S_DATE' . $row['S_Date'] . '&NO_PLATE' . $row['Number_Plate'] . '" >Print</a></td></tr>';
	  
		   }
		
	}
	else
	{
		echo "Sorry..";
	}
mysqli_close($conn);




//------ " Else Code Start " ------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%---------------------------------------------------
/*		} elseif ($submit == "Print" && $sel_reason == "") {
	header("location:http://www.trafficop.16mb.com/search_sssi.php"); 
} elseif ($submit == "Print" && $sel_reason != "") {
	session_start();
	$_SESSION['sd'] = $sd;	
	$_SESSION['sel_reason'] = $sel_reason;			
	header("location:http://www.trafficop.16mb.com/Print_Selection.php"); 
}		*/

}
?>
             
<?php
}		
?>

	







