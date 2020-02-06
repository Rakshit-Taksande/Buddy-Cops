

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
		
		
//	error_reporting(0);
	$mysqli = new mysqli("mysql.hostinger.in","u682671774_buddy","buddy_cop_ec","u682671774_buddy");
	
	
	if (!$mysqli) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}


session_start();
$zone = $_SESSION['zone'];
$police_station = $_SESSION['police_station'];
$IO_name = $_SESSION['IO_name'];
$hostel_name = $_SESSION['hostel_name'];


$zone_read = $zone;
$police_station_read = $police_station;
$IO_name_read = $IO_name;
$hostel_name_read = $hostel_name;



$from_date = $_SESSION['from_date'];
$to_date = $_SESSION['to_date'];

$from_date_new = $_SESSION['from_date_new'];
$from_month_new = $_SESSION['from_month_new'];
$from_year_new = $_SESSION['from_year_new'];
$to_date_new = $_SESSION['to_date_new'];
$to_month_new = $_SESSION['to_month_new'];
$to_year_new = $_SESSION['to_year_new'];


/*	
echo $zone;
echo $police_station;
echo $IO_name;
echo $hostel_name;
echo $from_date_new;
echo $from_month_new;
echo $from_year_new;
echo $to_date_new;
echo $to_month_new;
echo $to_year_new;		*/
//echo $statistics_month;
	

$check_from_date_new = $from_date_new;
$check_from_month_new = $from_month_new;
$check_from_year_new = $from_year_new;
$check_to_date_new = $to_date_new;
$check_to_month_new = $to_month_new;
$check_to_year_new = $to_year_new;



/*echo $zone;
echo $police_station;
echo $IO_name;
echo $hostel_name;

echo $check_from_date_new;
echo $check_from_month_new;
echo $check_from_year_new;
echo $check_to_date_new;
echo $check_to_month_new;
echo $check_to_year_new;	*/	


mysqli_query($mysqli, "DELETE FROM Statistics_Table");

mysqli_query($mysqli, "DELETE FROM Statistics_Police_Station");


/*if ($zone == '' and $police_station == '' and $IO_name == '' and $hostel_name == '')
		{
			header("location:http://www.ec-jrc.com/buddycop/main.php"); 
		}			
		else	*/
			
		

         for ($check_from_year_new = $from_year_new; $check_from_year_new <= $check_to_year_new; $check_from_year_new++) 
         {
	       //echo $check_from_year_new;
	       if($check_from_year_new < $to_year_new) 
	       {
		    for ($check_from_month_new = $from_month_new; $check_from_month_new <= 12; $check_from_month_new++) 
		{
	    	//echo $check_from_month_new;
			for ($check_from_date_new = $from_date_new; $check_from_date_new <= 31; $check_from_date_new++) 
			{
				//echo $check_from_date_new;
				
				
				
				
					
				// Database code will be here
				$query = mysqli_query($mysqli, "SELECT Count(*) C1,zone,police_station,hostel_name,IO_name FROM Survey_Record WHERE today_date = '$check_from_date_new' and today_month = '$check_from_month_new' and today_year = '$check_from_year_new' Group by zone,police_station,IO_name,hostel_name order by zone");
				
//				$query = mysqli_query($mysqli, "SELECT Count(*) C1,zone,police_station,IO_name,hostel_name FROM Survey_Record WHERE today_date = '$check_from_date_new' and today_month = '$check_from_month_new' and today_year = '$check_from_year_new' Group by zone,police_station,IO_name,hostel_name order by zone");
			 
				while ($row = mysqli_fetch_array($query))
					{ 
					$Count_Zone = $row['C1'];
					$TEMP_1 = $row['zone'];
					$TEMP_2 = $row['police_station'];
					$TEMP_3 = $row['hostel_name'];
					$TEMP_4 = $row['IO_name'];
//					mysqli_query($mysqli,"INSERT into Statistics_Table (zone,police_station,hostel_name,IO_name) values ('$TEMP_1','$TEMP_2','$TEMP_3','$TEMP_4')");
					mysqli_query($mysqli,"INSERT into Statistics_Table (Count,zone,police_station,hostel_name,IO_name) values ('$Count_Zone','$TEMP_1','$TEMP_2','$TEMP_3','$TEMP_4')");
					
					}
				
				
				
/*				$query = mysqli_query($mysqli, "SELECT Count(*) C1,zone,police_station FROM Survey_Record WHERE today_date = '$check_from_date_new' and today_month = '$check_from_month_new' and today_year = '$check_from_year_new' Group by police_station order by police_station");
				while ($row = mysqli_fetch_array($query))
					{ 
					$Count_Police_Station = $row['C1'];
					$TEMP_1 = $row['zone'];
					$TEMP_2 = $row['police_station'];
//					$TEMP_3 = $row['hostel_name'];
//					$TEMP_4 = $row['IO_name'];
					mysqli_query($mysqli,"INSERT into Statistics_Police_Station (Count,zone,police_station) values ('$Count_Police_Station','$TEMP_1','$TEMP_2')");					
					}		*/
				
				
				
				
				
				
				
				
				
			}	
			$from_date_new = "1";
		}
		$from_month_new = "1";		//Start from January Again
	} 
	else 
	{
		for ($check_from_month_new = $from_month_new; $check_from_month_new <= $check_to_month_new; $check_from_month_new++) 
		{
			//echo $check_from_month_new;
			if($check_from_month_new < $to_month_new) 
			{
				for ($check_from_date_new = $from_date_new; $check_from_date_new <= 31; $check_from_date_new++) 
				{
			//	echo $check_from_date_new;	
				
				
				
				// Database code will be here
				$query = mysqli_query($mysqli, "SELECT Count(*) C1,zone,police_station,hostel_name,IO_name FROM Survey_Record WHERE today_date = '$check_from_date_new' and today_month = '$check_from_month_new' and today_year = '$check_from_year_new' Group by zone,police_station,IO_name,hostel_name order by zone");
				
//				$query = mysqli_query($mysqli, "SELECT Count(*) C1,zone,police_station,IO_name,hostel_name FROM Survey_Record WHERE today_date = '$check_from_date_new' and today_month = '$check_from_month_new' and today_year = '$check_from_year_new' Group by zone,police_station,IO_name,hostel_name order by zone");
			 
				while ($row = mysqli_fetch_array($query))
					{ 
					$Count_Zone = $row['C1'];
					$TEMP_1 = $row['zone'];
					$TEMP_2 = $row['police_station'];
					$TEMP_3 = $row['hostel_name'];
					$TEMP_4 = $row['IO_name'];
//					mysqli_query($mysqli,"INSERT into Statistics_Table (zone,police_station,hostel_name,IO_name) values ('$TEMP_1','$TEMP_2','$TEMP_3','$TEMP_4')");
					mysqli_query($mysqli,"INSERT into Statistics_Table (Count,zone,police_station,hostel_name,IO_name) values ('$Count_Zone','$TEMP_1','$TEMP_2','$TEMP_3','$TEMP_4')");
					
					}
				
			
				
				
				
				
				}
				$from_date_new = "1";
			} 
			else 
			{
				for ($check_from_date_new = $from_date_new; $check_from_date_new <= $check_to_date_new; $check_from_date_new++) 
				{
				//echo $check_from_date_new;	
				
				
				
				// Database code will be here
				$query = mysqli_query($mysqli, "SELECT Count(*) C1,zone,police_station,hostel_name,IO_name FROM Survey_Record WHERE today_date = '$check_from_date_new' and today_month = '$check_from_month_new' and today_year = '$check_from_year_new' Group by zone,police_station,IO_name,hostel_name order by zone");
				
				//				$query = mysqli_query($mysqli, "SELECT Count(*) C1,zone,police_station,IO_name,hostel_name FROM Survey_Record WHERE today_date = '$check_from_date_new' and today_month = '$check_from_month_new' and today_year = '$check_from_year_new' Group by zone,police_station,IO_name,hostel_name order by zone");
			 
				while ($row = mysqli_fetch_array($query))
					{ 
					$Count_Zone = $row['C1'];
					$TEMP_1 = $row['zone'];
					$TEMP_2 = $row['police_station'];
					$TEMP_3 = $row['hostel_name'];
					$TEMP_4 = $row['IO_name'];
//					mysqli_query($mysqli,"INSERT into Statistics_Table (zone,police_station,hostel_name,IO_name) values ('$TEMP_1','$TEMP_2','$TEMP_3','$TEMP_4')");
					mysqli_query($mysqli,"INSERT into Statistics_Table (Count,zone,police_station,hostel_name,IO_name) values ('$Count_Zone','$TEMP_1','$TEMP_2','$TEMP_3','$TEMP_4')");
					
					}
				
				
				
				
				
				
				
				}
			}	
			
		}	
	}		
 }
 

//*********************************************************************************************************************************************
// For Statistics_Zone Table
mysqli_query($mysqli, "DELETE FROM Statistics_Zone");
$query = mysqli_query($mysqli, "SELECT zone, SUM(Count) as Final_Total FROM Statistics_Table GROUP BY zone ORDER BY zone");
					while ($row = mysqli_fetch_array($query))
					{ 
					$TEMP_1 = $row['zone'];
					$TEMP_2 = $row['Final_Total'];
					mysqli_query($mysqli,"INSERT into Statistics_Zone (zone, total) values ('$TEMP_1','$TEMP_2')");
					}
//*********************************************************************************************************************************************
// For Statistics_Police_Station Table
mysqli_query($mysqli, "DELETE FROM Statistics_Police_Station");
$query = mysqli_query($mysqli, "SELECT zone, police_station, SUM(Count) as Final_Total FROM Statistics_Table GROUP BY police_station ORDER BY police_station");
					while ($row = mysqli_fetch_array($query))
					{ 
					$TEMP_1 = $row['zone'];
					$TEMP_2 = $row['police_station'];
					$TEMP_3 = $row['Final_Total'];
					mysqli_query($mysqli,"INSERT into Statistics_Police_Station (zone, police_station, Count) values ('$TEMP_1','$TEMP_2','$TEMP_3')");
					}
//*********************************************************************************************************************************************
// For Statistics_IO Table
mysqli_query($mysqli, "DELETE FROM Statistics_IO");
$query = mysqli_query($mysqli, "SELECT zone, police_station,IO_name, SUM(Count) as Final_Total FROM Statistics_Table GROUP BY zone,police_station,IO_name ORDER BY IO_name");
					while ($row = mysqli_fetch_array($query))
					{ 
					$TEMP_1 = $row['zone'];
					$TEMP_2 = $row['police_station'];
					$TEMP_3 = $row['Final_Total'];
					$TEMP_4 = $row['IO_name'];
					mysqli_query($mysqli,"INSERT into Statistics_IO (zone, police_station, Count, IO_name) values ('$TEMP_1','$TEMP_2','$TEMP_3','$TEMP_4')");
					}
//*********************************************************************************************************************************************
// For Statistics_Hostel Table
mysqli_query($mysqli, "DELETE FROM Statistics_hostel_name");
$query = mysqli_query($mysqli, "SELECT zone, police_station, IO_name, hostel_name, SUM(Count) as Final_Total FROM `Statistics_Table` GROUP BY zone,police_station,IO_name,hostel_name ORDER BY police_station");
					while ($row = mysqli_fetch_array($query))
					{ 
					$TEMP_1 = $row['zone'];
					$TEMP_2 = $row['police_station'];
					$TEMP_3 = $row['Final_Total'];
					$TEMP_4 = $row['IO_name'];
					$TEMP_5 = $row['hostel_name'];
					mysqli_query($mysqli,"INSERT into Statistics_hostel_name (zone, police_station, Count, IO_name, hostel_name) values ('$TEMP_1','$TEMP_2','$TEMP_3','$TEMP_4','$TEMP_5')");
					}
//*********************************************************************************************************************************************
 
 
 

 
 $query = mysqli_query($mysqli, "SELECT * FROM Statistics_Table");
	if (!$query) {
    die ('SQL Error: ' . mysqli_error($mysqli));
				} 		
 //--- HTML Code -------
 ?>
 <html>
<head>



    <title>JRC's contribution to Digital India Campaign</title>
    <style type="text/css">
	
	
	body { 
    background-image: url('img.PNG');
    background-repeat: no-repeat;
    background-attachment: fixed;
 
}
	
	
	
	
	
	
        body {
            font-size: 15px;
            
            font-family: "segoe-ui", "open-sans", tahoma, arial;
            padding: 0;
            margin: 0;
        }
        table {
            margin: auto;
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size: 12px;
        }
 
        h1 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 25px;
        }
		
		 h2 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 15px;
        }
 
 
        table td {
            transition: all .5s;
        }
         
        /* Table */
        .data-table {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 537px;
        }
 
        .data-table th, 
        .data-table td {
            border: 1px solid #e1edff;
            padding: 7px 17px;
        }
        .data-table caption {
            margin: 7px;
        }
 
        /* Table Header */
        .data-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }
 
        /* Table Body */
		
		
        .data-table tbody td:first-child,
        .data-table tbody td:nth-child(4),
        .data-table tbody td:last-child {
           
        }
 
        .data-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }
 
        /* Table Footer */
        .data-table tfoot th {
            background-color: #e5f5ff;
           
        }
        .data-table tfoot th:first-child {
          
        }
        .data-table tbody td:empty
        {
            background-color: #ffcccc;
        }
		
		tr.rowX td {
         background-color: #436789;
    }

    </style>
	<script>
	function myFunction() {
    window.print();	
	}
	</script>
	
</head>
<body>

<?php //include 'header_cyber.php';?>
 <center>

	<h1>BuddyCop Statistics from <?php echo $from_date ?> to <?php echo $to_date ?><strong>&nbsp;</strong> 
	<p align="Right"><input type= "submit" value="Print this page" name ="Print" onclick="this.style.visibility= 'hidden';myFunction()" class="button"></p>		
	</h1>
    <h2>Nagpur</h2>
	<table class="data-table">
	
	
	
	
		<label class="title"><?php //echo $row['$read_offence'];  ?> 


		<?php
		if ($zone_read == '' and $police_station_read == '' and $IO_name_read == '' and $hostel_name_read == '')
//		elseif ($zone != '')
		{
		
		 $zone = 'Zone 1';			
		$query = mysqli_query($mysqli, "SELECT total FROM Statistics_Zone WHERE zone = '$zone' ");
		while ($row = mysqli_fetch_array($query))
        { 		  
		   $zone_count = $row['total'];
		}
		?>
		
        <thead>
            <tr>
                <th>Zone 1</th>
                <th><?php echo $zone_count ?></th>				
            </tr>
        </thead>
        
		<tbody>
		<tr>
        <?php
		$query = mysqli_query($mysqli, "SELECT * FROM Statistics_Police_Station WHERE zone = 'Zone 1' ");
        while ($row = mysqli_fetch_array($query))
        { 
		$TEMP_PS = $row['police_station'];
		?>
       <!-- <tr class="rowx">  -->
        <td bgcolor="#ffe4b5"align="left"><?php echo $row['police_station']; ?></td>
        <td bgcolor="#ffe4b5"><?php echo $row['Count']; ?></td>  </tr>
		
			<?php
			$query_PS = mysqli_query($mysqli, "SELECT * FROM Statistics_IO WHERE police_station = '$TEMP_PS' AND zone='Zone 1' ");
			while ($row_1 = mysqli_fetch_array($query_PS))
			{ 
			$TEMP_IO = $row_1['IO_name'];
			?>
			<tr>
			<td bgcolor="#ffe4e1" align="center"><?php echo $row_1['IO_name']; ?></td>
			<td bgcolor="#ffe4e1"><?php echo $row_1['Count']; ?></td>  	</tr>	
			
				<?php
//				$query_IO = mysqli_query($mysqli, "SELECT * FROM Statistics_hostel_name WHERE police_station = '$TEMP_PS' ");
				$query_IO = mysqli_query($mysqli, "SELECT * FROM Statistics_hostel_name WHERE IO_name = '$TEMP_IO' AND police_station='$TEMP_PS' AND zone='Zone 1' ");
				while ($row_2 = mysqli_fetch_array($query_IO))
				{ 
//				$TEMP_IO = $row['IO_name'];
				?>
				<tr>
				<td bgcolor="#f5fffa" align="right" ><?php echo $row_2['hostel_name']; ?></td>
				<td bgcolor="#f5fffa"><?php echo $row_2['Count']; ?></td>  </tr>		  
				<?php }?>
			
			<?php }?>  
        
		<?php }?>
		
		
		
		
		
		
		
		<?php
		 $zone = 'Zone 2';			
		$query = mysqli_query($mysqli, "SELECT total FROM Statistics_Zone WHERE zone = '$zone' ");
		while ($row = mysqli_fetch_array($query))
        { 		  
		   $zone_count = $row['total'];
		}
		?>
		
        <thead>
            <tr>
                <th>Zone 2</th>
                <th><?php echo $zone_count ?></th>				
            </tr>
        </thead>
        <tbody>
		
        <?php
		$query = mysqli_query($mysqli, "SELECT * FROM Statistics_Police_Station WHERE zone = 'Zone 2' ");
        while ($row = mysqli_fetch_array($query))
        { 
		$TEMP_PS = $row['police_station'];
		?>
        <tr>
        <td bgcolor="#ffe4b5" align="left"><?php echo $row['police_station']; ?></td>
        <td bgcolor="#ffe4b5"><?php echo $row['Count']; ?></td>  
		
			<?php
			$query_PS = mysqli_query($mysqli, "SELECT * FROM Statistics_IO WHERE police_station = '$TEMP_PS' AND zone='Zone 2' ");
			while ($row_1 = mysqli_fetch_array($query_PS))
			{ 
			$TEMP_IO = $row_1['IO_name'];
			?>
			<tr>
			<td bgcolor="#ffe4e1" align="center"><?php echo $row_1['IO_name']; ?></td>
			<td bgcolor="#ffe4e1" ><?php echo $row_1['Count']; ?></td>  		
			
				<?php
//				$query_IO = mysqli_query($mysqli, "SELECT * FROM Statistics_hostel_name WHERE police_station = '$TEMP_PS' ");
				$query_IO = mysqli_query($mysqli, "SELECT * FROM Statistics_hostel_name WHERE IO_name = '$TEMP_IO' AND police_station='$TEMP_PS' AND zone='Zone 2' ");
				while ($row_2 = mysqli_fetch_array($query_IO))
				{ 
//				$TEMP_IO = $row['IO_name'];
				?>
				<tr>
				<td bgcolor="#f5fffa" align="right"><?php echo $row_2['hostel_name']; ?></td>
				<td bgcolor="#f5fffa"><?php echo $row_2['Count']; ?></td>  		  
				<?php }?>
			
			<?php }?>  
        
		<?php }?>
		
		
		
		
		
		<?php
		 $zone = 'Zone 3';			
		$query = mysqli_query($mysqli, "SELECT total FROM Statistics_Zone WHERE zone = '$zone' ");
		while ($row = mysqli_fetch_array($query))
        { 		  
		   $zone_count = $row['total'];
		}
		?>
		
        <thead>
            <tr>
                <th>Zone 3</th>
                <th><?php echo $zone_count ?></th>				
            </tr>
        </thead>
        <tbody>
		
        <?php
		$query = mysqli_query($mysqli, "SELECT * FROM Statistics_Police_Station WHERE zone = 'Zone 3' ");
        while ($row = mysqli_fetch_array($query))
        { 
		$TEMP_PS = $row['police_station'];
		?>
        <tr>
        <td bgcolor="#ffe4b5" align="left"><?php echo $row['police_station']; ?></td>
        <td bgcolor="#ffe4b5"><?php echo $row['Count']; ?></td>  
		
			<?php
			$query_PS = mysqli_query($mysqli, "SELECT * FROM Statistics_IO WHERE police_station = '$TEMP_PS' AND zone='Zone 3' ");
			while ($row_1 = mysqli_fetch_array($query_PS))
			{ 
			$TEMP_IO = $row_1['IO_name'];
			?>
			<tr>
			<td bgcolor="#ffe4e1" align="center"><?php echo $row_1['IO_name']; ?></td>
			<td bgcolor="#ffe4e1"><?php echo $row_1['Count']; ?></td>  		
			
				<?php
//				$query_IO = mysqli_query($mysqli, "SELECT * FROM Statistics_hostel_name WHERE police_station = '$TEMP_PS' ");
				$query_IO = mysqli_query($mysqli, "SELECT * FROM Statistics_hostel_name WHERE IO_name = '$TEMP_IO' AND police_station='$TEMP_PS' AND zone='Zone 3' ");
				while ($row_2 = mysqli_fetch_array($query_IO))
				{ 
//				$TEMP_IO = $row['IO_name'];
				?>
				<tr>
				<td bgcolor="#f5fffa"align="right"><?php echo $row_2['hostel_name']; ?></td>
				<td bgcolor="#f5fffa"><?php echo $row_2['Count']; ?></td>  		  
				<?php }?>
			
			<?php }?>  
        
		<?php }?>
		
		
		
		<?php
		 $zone = 'Zone 4';			
		$query = mysqli_query($mysqli, "SELECT total FROM Statistics_Zone WHERE zone = '$zone' ");
		while ($row = mysqli_fetch_array($query))
        { 		  
		   $zone_count = $row['total'];
		}
		?>
		
        <thead>
            <tr>
                <th>Zone 4</th>
                <th><?php echo $zone_count ?></th>				
            </tr>
        </thead>
        <tbody>
		
        <?php
		$query = mysqli_query($mysqli, "SELECT * FROM Statistics_Police_Station WHERE zone = 'Zone 4' ");
        while ($row = mysqli_fetch_array($query))
        { 
		$TEMP_PS = $row['police_station'];
		?>
        <tr>
        <td bgcolor="#ffe4b5" align="left"><?php echo $row['police_station']; ?></td>
        <td bgcolor="#ffe4b5"><?php echo $row['Count']; ?></td>  
		
			<?php
			$query_PS = mysqli_query($mysqli, "SELECT * FROM Statistics_IO WHERE police_station = '$TEMP_PS' AND zone='Zone 4' ");
			while ($row_1 = mysqli_fetch_array($query_PS))
			{ 
			$TEMP_IO = $row_1['IO_name'];
			?>
			<tr>
			<td bgcolor="#ffe4e1"align="center"><?php echo $row_1['IO_name']; ?></td>
			<td bgcolor="#ffe4e1"><?php echo $row_1['Count']; ?></td>  		
			
				<?php
//				$query_IO = mysqli_query($mysqli, "SELECT * FROM Statistics_hostel_name WHERE police_station = '$TEMP_PS' ");
				$query_IO = mysqli_query($mysqli, "SELECT * FROM Statistics_hostel_name WHERE IO_name = '$TEMP_IO' AND police_station='$TEMP_PS' AND zone='Zone 4' ");
				while ($row_2 = mysqli_fetch_array($query_IO))
				{ 
//				$TEMP_IO = $row['IO_name'];
				?>
				<tr>
				<td bgcolor="#f5fffa" align="right"><?php echo $row_2['hostel_name']; ?></td>
				<td bgcolor="#f5fffa"><?php echo $row_2['Count']; ?></td>  		  
				<?php }?>
			
			<?php }?>  
        
		<?php }?>
		
		
		
		
		<?php
		 $zone = 'Zone 5';			
		$query = mysqli_query($mysqli, "SELECT total FROM Statistics_Zone WHERE zone = '$zone' ");
		while ($row = mysqli_fetch_array($query))
        { 		  
		   $zone_count = $row['total'];
		}
		?>
		
        <thead>
            <tr>
                <th>Zone 5</th>
                <th><?php echo $zone_count ?></th>				
            </tr>
        </thead>
        <tbody>
		
        <?php
		$query = mysqli_query($mysqli, "SELECT * FROM Statistics_Police_Station WHERE zone = 'Zone 5' ");
        while ($row = mysqli_fetch_array($query))
        { 
		$TEMP_PS = $row['police_station'];
		?>
        <tr>
        <td bgcolor="#ffe4b5" align="left"><?php echo $row['police_station']; ?></td>
        <td bgcolor="#ffe4b5"><?php echo $row['Count']; ?></td>  
		
			<?php
			$query_PS = mysqli_query($mysqli, "SELECT * FROM Statistics_IO WHERE police_station = '$TEMP_PS' AND zone='Zone 5' ");
			while ($row_1 = mysqli_fetch_array($query_PS))
			{ 
			$TEMP_IO = $row_1['IO_name'];
			?>
			<tr>
			<td bgcolor="#ffe4e1" align="center"><?php echo $row_1['IO_name']; ?></td>
			<td bgcolor="#ffe4e1"><?php echo $row_1['Count']; ?></td>  		
			
				<?php
//				$query_IO = mysqli_query($mysqli, "SELECT * FROM Statistics_hostel_name WHERE police_station = '$TEMP_PS' ");
				$query_IO = mysqli_query($mysqli, "SELECT * FROM Statistics_hostel_name WHERE IO_name = '$TEMP_IO' AND police_station='$TEMP_PS' AND zone='Zone 5' ");
				while ($row_2 = mysqli_fetch_array($query_IO))
				{ 
//				$TEMP_IO = $row['IO_name'];
				?>
				<tr>
				<td bgcolor="#f5fffa" align="right"><?php echo $row_2['hostel_name']; ?></td>
				<td bgcolor="#f5fffa"><?php echo $row_2['Count']; ?></td>  		  
				<?php }?>
			
			<?php }?>  
        
		<?php }?>
		
		
		
		
			  
<?php 
//--- HTML Code -------

}	elseif ($zone_read != '' and $police_station_read == '' and $IO_name_read == '' and $hostel_name_read == '')
//		elseif ($zone != '')
		{
		
		 $zone = $zone_read;			
		$query = mysqli_query($mysqli, "SELECT total FROM Statistics_Zone WHERE zone = '$zone' ");
		while ($row = mysqli_fetch_array($query))
        { 		  
		   $zone_count = $row['total'];
		}
		?>
		
        <thead>
            <tr>
                <th><?php echo $zone ?></th>
                <th><?php echo $zone_count ?></th>				
            </tr>
        </thead>
        
		<tbody>
		<tr>
        <?php
		$query = mysqli_query($mysqli, "SELECT * FROM Statistics_Police_Station WHERE zone = '$zone' ");
        while ($row = mysqli_fetch_array($query))
        { 
		$TEMP_PS = $row['police_station'];
		?>
       <!-- <tr class="rowx">  -->
        <td bgcolor="#ffe4b5" align="center"><?php echo $row['police_station']; ?></td>
        <td bgcolor="#ffe4b5"><?php echo $row['Count']; ?></td>  </tr>
		
			<?php
			$query_PS = mysqli_query($mysqli, "SELECT * FROM Statistics_IO WHERE police_station = '$TEMP_PS' AND zone='$zone' ");
			while ($row_1 = mysqli_fetch_array($query_PS))
			{ 
			$TEMP_IO = $row_1['IO_name'];
			?>
			<tr>
			<td bgcolor="#ffe4e1" align="center"><?php echo $row_1['IO_name']; ?></td>
			<td bgcolor="#ffe4e1"><?php echo $row_1['Count']; ?></td>  	</tr>	
			
				<?php
//				$query_IO = mysqli_query($mysqli, "SELECT * FROM Statistics_hostel_name WHERE police_station = '$TEMP_PS' ");
				$query_IO = mysqli_query($mysqli, "SELECT * FROM Statistics_hostel_name WHERE IO_name = '$TEMP_IO' AND police_station='$TEMP_PS' AND zone='$zone' ");
				while ($row_2 = mysqli_fetch_array($query_IO))
				{ 
//				$TEMP_IO = $row['IO_name'];
				?>
				<tr>
				<td bgcolor="#f5fffa" align="right"><?php echo $row_2['hostel_name']; ?></td>
				<td bgcolor="#f5fffa"><?php echo $row_2['Count']; ?></td>  </tr>		  
				<?php }?>
			
			<?php }?>  
        
		<?php }?>
		
		
		
		
		
		
		
<?php 
}	elseif ($zone_read != '' and $police_station_read != '' and $IO_name_read == '' and $hostel_name_read == '')	

//		elseif ($zone != '')
		{

		$zone = $zone_read;	
        $police_station= $police_station_read;		
		$query = mysqli_query($mysqli, "SELECT Count FROM Statistics_Police_Station WHERE zone = '$zone' AND police_station='$police_station' ");
		while ($row = mysqli_fetch_array($query))
        { 		  
		   $zone_count = $row['Count'];
		}
		?>
		
        <thead>
            <tr>
                <th><?php echo $zone ?></th>
                <th><?php echo $zone_count ?></th>				
            </tr>
        </thead>
        
		<tbody>
		<tr>
        <?php
		$query = mysqli_query($mysqli, "SELECT * FROM Statistics_Police_Station WHERE zone = '$zone' AND police_station='$police_station' ");
        while ($row = mysqli_fetch_array($query))
        { 
		$TEMP_PS = $row['police_station'];
		?>
       <!-- <tr class="rowx">  -->
        <td bgcolor="#ffe4b5" align="left"><?php echo $row['police_station']; ?></td>
      <td bgcolor="#ffe4b5"><?php echo $row['Count']; ?></td>  </tr>
		
			<?php
			$query_PS = mysqli_query($mysqli, "SELECT * FROM Statistics_IO WHERE police_station = '$TEMP_PS' AND zone='$zone' ");
			while ($row_1 = mysqli_fetch_array($query_PS))
			{ 
			$TEMP_IO = $row_1['IO_name'];
			?>
			<tr>
			<td bgcolor="#ffe4e1" align="center"><?php echo $row_1['IO_name']; ?></td>
			<td bgcolor="#ffe4e1"><?php echo $row_1['Count']; ?></td>  	</tr>	
			
				<?php
//				$query_IO = mysqli_query($mysqli, "SELECT * FROM Statistics_hostel_name WHERE police_station = '$TEMP_PS' ");
				$query_IO = mysqli_query($mysqli, "SELECT * FROM Statistics_hostel_name WHERE IO_name = '$TEMP_IO' AND police_station='$TEMP_PS' AND zone='$zone' ");
				while ($row_2 = mysqli_fetch_array($query_IO))
				{ 
//				$TEMP_IO = $row['IO_name'];
				?>
				<tr>
				<td bgcolor="#f5fffa"align="right" ><?php echo $row_2['hostel_name']; ?></td>
				<td bgcolor="#f5fffa"><?php echo $row_2['Count']; ?></td>  </tr>		  
				<?php }?>
			
			<?php }?>  
        
		<?php }?>

		
		
<?php	
 
}	elseif ($zone_read != '' and $police_station_read != '' and $IO_name_read != '' and $hostel_name_read == '')
//		elseif ($zone != '')
		{

		$zone = $zone_read;	
        $police_station= $police_station_read;
		$IO_name = $IO_name_read;
		$query = mysqli_query($mysqli, "SELECT Count FROM Statistics_IO WHERE zone = '$zone' AND police_station = '$police_station' AND IO_name = '$IO_name'");
		while ($row = mysqli_fetch_array($query))
        { 		  
		   $zone_count = $row['Count'];
		}
		?>
		
        <thead>
            <tr>
                <th><?php echo $zone ?></th>
                <th><?php echo $zone_count ?></th>				
            </tr>
        </thead>
        
		<tbody>
	<!--	<tr>  -->
        <?php /*
		$query = mysqli_query($mysqli, "SELECT * FROM Statistics_Police_Station WHERE zone = '$zone' AND police_station='$police_station' ");
        while ($row = mysqli_fetch_array($query))
        { 
		$TEMP_PS = $row['police_station'];
		*/?>
       <!-- <tr class="rowx">  -->
	   
	   <!--
        <td bgcolor="#ffe4b5"><?php//echo $row['police_station']; ?></td>
        <td><?php //echo $row['Count']; ?></td>  </tr> -->
		
			<?php 
			$query_PS = mysqli_query($mysqli, "SELECT * FROM Statistics_IO WHERE police_station = '$police_station' AND zone='$zone' AND IO_name='$IO_name' ");
			while ($row_1 = mysqli_fetch_array($query_PS))
			{ 
			$TEMP_IO = $row_1['IO_name'];
			?>
			<tr>
			<td bgcolor="#ffe4e1" align="center"><?php echo $row_1['IO_name']; ?></td>
			<td bgcolor="#ffe4e1"><?php echo $row_1['Count']; ?></td>  	</tr>	
			
				<?php
//				$query_IO = mysqli_query($mysqli, "SELECT * FROM Statistics_hostel_name WHERE police_station = '$TEMP_PS' ");
				$query_IO = mysqli_query($mysqli, "SELECT * FROM Statistics_hostel_name WHERE IO_name = '$TEMP_IO' AND police_station='$police_station' AND zone='$zone' ");
				while ($row_2 = mysqli_fetch_array($query_IO))
				{ 
//				$TEMP_IO = $row['IO_name'];
				?>
				<tr>
				<td bgcolor="#f5fffa" align="right"><?php echo $row_2['hostel_name']; ?></td>
				<td bgcolor="#f5fffa"><?php echo $row_2['Count']; ?></td>  </tr>		  
				<?php }?>
			
			<?php }?>  
        
		<?php//}?>

		
		
<?php	
 
		

 
}	elseif ($zone_read != '' and $police_station_read != '' and $IO_name_read != '' and $hostel_name_read != '')
//		elseif ($zone != '')
		{
		$zone = $zone_read;	
        $police_station= $police_station_read;
		$IO_name = $IO_name_read;
		$hostel_name=$hostel_name_read;
		$query = mysqli_query($mysqli, "SELECT Count FROM Statistics_hostel_name WHERE zone = '$zone' AND police_station = '$police_station' AND IO_name = '$IO_name' AND hostel_name='$hostel_name'");
		while ($row = mysqli_fetch_array($query))
        { 		  
		   $zone_count = $row['Count'];
		}
		?>
		
        <thead>
            <tr>
                <th><?php echo $zone ?></th>
                <th><?php echo $zone_count ?></th>				
            </tr>
        </thead>
        
		<tbody>
	<!--	<tr>  -->
        <?php /*
		$query = mysqli_query($mysqli, "SELECT * FROM Statistics_Police_Station WHERE zone = '$zone' AND police_station='$police_station' ");
        while ($row = mysqli_fetch_array($query))
        { 
		$TEMP_PS = $row['police_station'];
		*/?>
       <!-- <tr class="rowx">  -->
	   
	   <!--
        <td bgcolor="#ffe4b5"><?php//echo $row['police_station']; ?></td>
       <td bgcolor="#ffe4b5"><?php //echo $row['Count']; ?></td>  </tr> -->
		
			<?php /*
			$query_PS = mysqli_query($mysqli, "SELECT * FROM Statistics_IO WHERE police_station = '$police_station' AND zone='$zone' AND IO_name='$IO_name' ");
			while ($row_1 = mysqli_fetch_array($query_PS))
			{ 
			$TEMP_IO = $row_1['IO_name'];
			*/?>
			<!--- <tr>
			<td bgcolor="#ffe4e1"><?php //echo $row_1['IO_name']; ?></td>
			<td bgcolor="#ffe4e1"><?php //echo $row_1['Count']; ?></td>  	</tr>	--->
			
				<?php
//				$query_IO = mysqli_query($mysqli, "SELECT * FROM Statistics_hostel_name WHERE police_station = '$TEMP_PS' ");
				$query_IO = mysqli_query($mysqli, "SELECT * FROM Statistics_hostel_name WHERE IO_name = '$IO_name' AND police_station='$police_station' AND zone='$zone' AND hostel_name='$hostel_name' ");
				while ($row_2 = mysqli_fetch_array($query_IO))
				{ 
//				$TEMP_IO = $row['IO_name'];
				?>
				<tr>
				<td bgcolor="#f5fffa" align="right"><?php echo $row_2['hostel_name']; ?></td>
				<td bgcolor="#f5fffa"><?php echo $row_2['Count']; ?></td>  </tr>		  
				<?php }?>
			
			<?php //}?>  
        
		<?php//}?>

		
		
<?php	
 
		
 
}			

?>
		
		
		
		
		
		
		
		
		
		
        </tbody>


	<body>
</html>	

 



<?php
}	
?>





