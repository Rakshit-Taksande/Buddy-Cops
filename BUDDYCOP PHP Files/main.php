<?php





	session_start();
	$log_in_buddycop = $_SESSION['log_in_buddycop'];
	//echo $log_in_cyber;
	
	if($log_in_buddycop!="1") 
	 {
			header("location:http://www.ec-jrc.com/buddycop/buddycop.php"); 		
	 }
    else
	{	

			$servername = "mysql.hostinger.in";
			$username = "u682671774_buddy";
			$password = "buddy_cop_ec";
			$db="u682671774_buddy";
	
?>				
	

<html>
	<head>
	<body background="img.PNG">
	<script type = "text/javascript">
	function MyFun()
	{
		alert("hello");
		return false;
	}
	</script>
		<title>Buddy Cop</title>
		<style>
		
			
		.button
		{
			background-color:#3b5998;
			padding: 5px 24px;
			text-align: center;
			font-size: 15px;
			cursor: pointer;
			color:#ffffff;
	

	    }
		
	<!--	.button1
		{
			background-color:#3b5998;
			padding: 8px 32px;
			font-size: 16px;
			color:#ffffff;
			position:absolute;
			left:31%;
			top:60%;
			margin:auto;
		}
		.button2
		{
			background-color:#3b5998;
			padding: 8px 32px;
			font-size: 16px;
			color:#ffffff;
			position:absolute;
			left:33%;
			top:70%;
			margin:auto;
		}
		.button3
		{
			background-color:#3b5998;
			padding: 8px 32px;
			font-size: 16px;
			color:#ffffff;
			position:absolute;
			left:55%;
			top:90%;
			margin:auto;
		}                    -->
		</style>
		

		
		<script>
window.onload = function(){zoom(1)}


/*	function zoom(zm) {
img=document.getElementById("pic")
wid=img.width
ht=img.height
img.style.width=(wid*zm)+"px"
img.style.height=(ht*zm)+"px"
img.style.marginLeft = -(img.width/2) + "px";

}		*/

</script>




<script language="javascript" type="text/javascript">
    function dynamicdropdown(listindex)
    {
        switch (listindex)
        {
        case "Zone 1" :
        document.getElementById("police_station").options[0]=new Option("Select Police","");    
       <?php
		$conn = new mysqli($servername, $username, $password,$db);
		$query = mysqli_query($conn, "SELECT police_station FROM IO_Record WHERE zone = 'Zone 1' Group by police_station order by police_station");
			
			$num_rows = mysqli_num_rows($query);

			$i = 0;
			$TEMP_1 = Array();
			$query = mysqli_query($conn, "SELECT police_station FROM IO_Record WHERE zone = 'Zone 1' Group by police_station order by police_station");
			
			while ($row = mysqli_fetch_array($query))
					{ 
					$TEMP_1[] = $row['police_station'];															
					}										
					for ($i =0; $i < $num_rows; $i++)
					{
						$TEMP_2 = $TEMP_1[$i];
						?>
						var counter = "<?php echo $i; ?>";
						var value = "<?php echo $TEMP_2; ?>";
						var count = parseInt(counter) + 1;
					document.getElementById("police_station").options[count]=new Option(value,value);												
						<?php
					}							
		?>
			
            break;
        case "Zone 2" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            <?php
		$conn = new mysqli($servername, $username, $password,$db);
		$query = mysqli_query($conn, "SELECT police_station FROM IO_Record WHERE zone = 'Zone 2' Group by police_station order by police_station");
			
			$num_rows = mysqli_num_rows($query);

			$i = 0;
			$TEMP_1 = Array();
			$query = mysqli_query($conn, "SELECT police_station FROM IO_Record WHERE zone = 'Zone 2' Group by police_station order by police_station");
			
			while ($row = mysqli_fetch_array($query))
					{ 
					$TEMP_1[] = $row['police_station'];															
					}										
					for ($i =0; $i < $num_rows; $i++)
					{
						$TEMP_2 = $TEMP_1[$i];
						?>
						var counter = "<?php echo $i; ?>";
						var value = "<?php echo $TEMP_2; ?>";
						var count = parseInt(counter) + 1;
					document.getElementById("police_station").options[count]=new Option(value,value);												
						<?php
					}							
		?>
            break;
		case "Zone 3" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            <?php
		$conn = new mysqli($servername, $username, $password,$db);
		$query = mysqli_query($conn, "SELECT police_station FROM IO_Record WHERE zone = 'Zone 3' Group by police_station order by police_station");
			
			$num_rows = mysqli_num_rows($query);

			$i = 0;
			$TEMP_1 = Array();
			$query = mysqli_query($conn, "SELECT police_station FROM IO_Record WHERE zone = 'Zone 3' Group by police_station order by police_station");
			
			while ($row = mysqli_fetch_array($query))
					{ 
					$TEMP_1[] = $row['police_station'];															
					}										
					for ($i =0; $i < $num_rows; $i++)
					{
						$TEMP_2 = $TEMP_1[$i];
						?>
						var counter = "<?php echo $i; ?>";
						var value = "<?php echo $TEMP_2; ?>";
						var count = parseInt(counter) + 1;
					document.getElementById("police_station").options[count]=new Option(value,value);												
						<?php
					}							
		?>
		document.getElementById("police_station").options[5]=new Option("","");
		document.getElementById("police_station").options[6]=new Option("","");
            break;
		case "Zone 4" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            <?php
		$conn = new mysqli($servername, $username, $password,$db);
		$query = mysqli_query($conn, "SELECT police_station FROM IO_Record WHERE zone = 'Zone 4' Group by police_station order by police_station");
			
			$num_rows = mysqli_num_rows($query);

			$i = 0;
			$TEMP_1 = Array();
			$query = mysqli_query($conn, "SELECT police_station FROM IO_Record WHERE zone = 'Zone 4' Group by police_station order by police_station");
			
			while ($row = mysqli_fetch_array($query))
					{ 
					$TEMP_1[] = $row['police_station'];															
					}										
					for ($i =0; $i < $num_rows; $i++)
					{
						$TEMP_2 = $TEMP_1[$i];
						?>
						var counter = "<?php echo $i; ?>";
						var value = "<?php echo $TEMP_2; ?>";
						var count = parseInt(counter) + 1;
					document.getElementById("police_station").options[count]=new Option(value,value);												
						<?php
					}							
		?>
		document.getElementById("police_station").options[6]=new Option("","");
            break;
		case "Zone 5" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            <?php
		$conn = new mysqli($servername, $username, $password,$db);
		$query = mysqli_query($conn, "SELECT police_station FROM IO_Record WHERE zone = 'Zone 5' Group by police_station order by police_station");
			
			$num_rows = mysqli_num_rows($query);

			$i = 0;
			$TEMP_1 = Array();
			$query = mysqli_query($conn, "SELECT police_station FROM IO_Record WHERE zone = 'Zone 5' Group by police_station order by police_station");
			
			while ($row = mysqli_fetch_array($query))
					{ 
					$TEMP_1[] = $row['police_station'];															
					}										
					for ($i =0; $i < $num_rows; $i++)
					{
						$TEMP_2 = $TEMP_1[$i];
						?>
						var counter = "<?php echo $i; ?>";
						var value = "<?php echo $TEMP_2; ?>";
						var count = parseInt(counter) + 1;
					document.getElementById("police_station").options[count]=new Option(value,value);												
						<?php
					}							
		?>
		document.getElementById("police_station").options[4]=new Option("","");
		document.getElementById("police_station").options[5]=new Option("","");
		document.getElementById("police_station").options[6]=new Option("","");
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


	</head>
	<body text="Black">
		<?php //include 'header_buddycop.php';?>
<center>
<p><a href="buddycop.php"style="font-size:150%;color:blue;">Log Out</a></p>
<!--	<img src="c3_logo.png"alt="insert" width="800" height="100"><br><br>	-->
<!--<h1 style="font-family:Fenwick;">Buddy Cop</h1><br>	-->
<!--	<a href="register.php">   Register New Complaint        </a><br><br>	-->


<!-- <h1 style="font-family:Fenwick;font-size:350%;color:Red;top:0">BUDDY COPS</h1>-->

<div style="position: absolute; left:30%; top:5%;">
<img src="BUDDY COP.png" alt="buddylogo" style="width:40%;height:32%;"></div>   

<div style="position: absolute; right:75%; top:20%;">
<img src="pic2.png"  style="width:68%;height:50%;"></div>   

<div style="position: absolute; left:75%; top:20%;">
<img src="pic3.png"  style="width:60%;height:55%;"></div>   
		

		
							<form method="POST" action="register.php" >
							<table align="center" cellspacing="10">
							
							<tr>
							<td align="left">
							<input type="submit" class="button" name="submit" value="Hostel Registeration" style="font-size:15px;height:40%;width:90%"></td>
							<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>
					
						

		<div class="category_div" id="category_div">
     <td><select id="zone" name="zone" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" style="font-size:15px;height:40%;width:90%" >
        <option value="">Select Zone</option>
        <option value="Zone 1">Zone 1</option>
        <option value="Zone 2">Zone 2</option>
		<option value="Zone 3">Zone 3</option>
        <option value="Zone 4">Zone 4</option>
		<option value="Zone 5">Zone 5</option>
        </select></td>
    </div>
	</tr>
	
	  <br>
							   <br>
							   <br>
							 
	


	  
							   <tr>
							   <td>
							   <input type="submit" class="button" name="submit" value="IO Registeration" style="font-size:15px;height:40%;width:90%"></td>
							<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>
							
							 
	                         			
                         
    <div class="sub_category_div" id="sub_category_div">
        <td><script type="text/javascript" language="JavaScript">
        document.write('<select name="police_station" id="police_station" style="font-size:15px;height:40%;width:90%" ><option value="">Select Police Station</option></select>')
        </script>
        <noscript>
        <select id="police_station" name="police_station" style="font-size:15px;height:40%;width:90%">
			
<!--            <option value="open">OPEN</option>
            <option value="delivered">DELIVERED</option>	-->
        </select></td>
        </noscript>
    </div>
	</tr>	
	      </select>
		                       </td>
		                       </tr>
							   
							   <br>
							   <br>
							   <br>
									
									<tr>
									<td>
									<input type="submit" class="button" name="submit" value="All Records" style="font-size:15px;height:40%;width:90%"></td>
							<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>


	<?php
	
	$servername = "mysql.hostinger.in";
	$username = "u682671774_buddy";
	$password = "buddy_cop_ec";
	$db="u682671774_buddy";

//create connection

	$con = new mysqli($servername, $username, $password,$db);

?>


<td>

<?php 
$sql ="SELECT IO_name FROM IO_Record";
//$result=mysqli_query($sql);

$result2 = mysqli_query($con,$sql);

echo "<select name='IO_name' style='font-size:15px;height:40%;width:90%'>";
?>
 <option value="">Select IO Name</option>
 <?php
while ($row = mysqli_fetch_array($result2))
	{  ?>
 
  <option><?php echo $row["IO_name"]; ?></option>
  <?php
	}
echo "</select>";
?>

</td>
</tr>
		
		
							
	                         
							
							<tr>
							<td>
							<!--Select option for Printing   -->
<!--		<input type="text" name="investigation_officer"size="40">		-->
							<select name="Print_List" style="font-size:15px;height:70%;width:90%">
							<option value="">Select option for Printing</option>
							<option value="Hostel List">Hostel List</option>
							<option value="IO List">IO List</option> 
							</select>
							</td>
							<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>
							
<td>
						
<?php

$sql ="SELECT hostel_name FROM Hostel_Record";
//$result=mysqli_query($sql);

$result1 = mysqli_query($con,$sql);

echo "<select name='hostel_name' style='font-size:15px;height:40%;width:90%'>";

?>
 <option value="">Select Hostel Name</option>
 <?php
while ($row = mysqli_fetch_array($result1))
	{  ?>
 
  <option><?php echo $row["hostel_name"]; ?></option>
  <?php
	}
echo "</select>";
?>
</td>
</tr>
			             <tr>
						   <td>
					      <input type="submit" class="button" name="submit" value="Print Selected List" style="font-size:15px;height:40%;width:90%"></td>
							<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>
							<td>
							<input type="submit" class="button" name="submit" value="Print Record" style="font-size:15px;height:40%;width:90%">
							</td></tr>
							
	
							
							</form>
							
							
							
							
						<tr>
				             <td>	
							 <b>Select Date: From </b>
				<!--		           <form method="POST" action="search.php" >		-->
							
								<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
			
							
							
							<input type="date" name="from_date"/ style="font-size:15px;height:40%;width:90%"></td>
								<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>
		
							<td><b>To</b>
							<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>
		
						
							<input type="date" name="to_date"/ style="font-size:15px;height:40%;width:90%"></td>
							<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>
							</tr>
							
							<tr>
                            
							<td>	
							<input type="submit" class="button" name="submit" value="Excel Report"style="font-size:15px;height:40%;width:90%"></td>
							<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>
							
							
							<td>							
							<input type="submit" class="button" name="submit" value="Statistics"style="font-size:15px;height:40%;width:90%"></td>
							<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>

							
							</tr>
							
							
				<!--				</form>		-->
							</table>
							
						
								
							
<?php include 'footer_buddycop.php';?>
</center>

</body>

</html>

<?php
	
$zone ='';
$police_station = '';
$IO_name = '';
$hostel_name = '';
	
$sel_date='';
$from_date='';
$to_date='';

if(isset($_GET['zone']))
	{
    	$zone=$_GET['zone'];
    }	
if(isset($_GET['police_station']))
	{
    	$police_station=$_GET['police_station'];
    }	

if(isset($_GET['IO_name']))
	{
    	$IO_name=$_GET['IO_name'];
    }	

if(isset($_GET['hostel_name']))
	{
    	$hostel_name=$_GET['hostel_name'];
    }	
	

if(isset($_GET['sel_date']))
	{
    	$sel_date=$_GET['sel_date'];
    }	
if(isset($_GET['from_date']))
	{
    	$from_date=$_GET['from_date'];
    }
if(isset($_GET['to_date']))
	{
    	$to_date=$_GET['to_date'];
    }	
	
?>	
<?php
}			
?>