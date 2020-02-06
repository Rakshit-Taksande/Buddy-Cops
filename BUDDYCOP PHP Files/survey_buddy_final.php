    <?php



 $hostname = "mysql.hostinger.in";


$username = "u682671774_buddy";


$password = "buddy_cop_ec";


$dbname = "u682671774_buddy";





 
 $con = mysqli_connect($hostname,$username,$password,$dbname);
	

       $st1 = $_POST['Zone']; 
	   $st2 = $_POST['Police_Station']; 
	   $st3 = $_POST['IO']; 
	   $st4 = $_POST['Hostel']; 
	   $st5 = $_POST['Visited_to']; 
	   $st6 = $_POST['Present_Girls']; 
	   
	   $st7 = $_POST['Complaint']; 
	   $st8 = $_POST['CCTV']; 
	   $st9 = $_POST['Visitor_Register']; 
	   $st10 = $_POST['Com_Wall']; 
	   
	   
	   
	   $st11 = $_POST['read_current_time']; 
	  
	   $st12 = $_POST['read_current_date']; 
	   
	   $st13 = $_POST['Latitude'];
	   
	   $st14 = $_POST['Longitude'];
	   
	   $today_date = $_POST['today_date'];
	   $today_month = $_POST['today_month'];
	   $today_year = $_POST['today_year'];
	   
	   $image=$_POST['image'];
	   
	//	$time_now=mktime(date('h')+5,date('i')+36,date('s'));
	//	$st6 = date('H:i:s', $time_now);
	   
	//	$st7 = date('d-m-Y');
 

 
  $photo_name = $_POST['photo_name'];

  
  
  
  
  // singlebyte strings
$today_date_new = substr($today_date, 0, 1);
	if($today_date_new == "0") 
	{
		$today_date_new = substr($today_date, 1, 1);
	} else {
		$today_date_new = substr($today_date, 0, 2);
	}	

$today_date = $today_date_new;	
	
	
$today_month_new = substr($today_month, 0, 1);
	if($today_month_new == "0") 
	{
		$today_month_new = substr($today_month, 1, 1);
	} else {
		$today_month_new = substr($today_month, 0, 2);
	}
  
$today_month = $today_month_new;	  
  

 $path = "uploads/$photo_name.png";
 
 
              $actualpath = "http://ec-jrc.com/buddycop/$path";
			  
			  
    
           $Sql_Query = "insert into Survey_Record (hostel_name,visited_to,present_girls,IO_name,zone,police_station,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date,read_current_time,today_date,today_month,today_year,photo,photo_name,image) values ('$st4','$st5','$st6','$st3','$st1','$st2','$st7','$st8','$st9','$st10','$st13','$st14','$st12','$st11','$today_date','$today_month','$today_year','$actualpath','$photo_name','$image')";

          //$q="insert into Survey_Police values ('$RowID','0','$st1','$st2','$st3','$st4','$st5','$st6','$st7','$st8','$st9','$st10','$st11','$st12','-','-',$date1,$month,$year)";
              


			  if(mysqli_query($con,$Sql_Query))
{
 
 
echo 'Data Inserted Successfully';
 
					 
					 
					 
					 file_put_contents($path,base64_decode($image));
                       $r["re"]="Record inserted successfully";
                      // $r['0']="Record inserted successfully";
                  
                        print(json_encode($r));
				

 }

 else
{
 

 echo 'Try Again';
 


 }
 
mysqli_close($con);


?>
                 
             