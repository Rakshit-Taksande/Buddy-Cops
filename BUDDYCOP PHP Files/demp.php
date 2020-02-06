<html>
<title>Demo|Lisenme</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">
<link type="text/css" rel="stylesheet" href="style.css"/>    
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
    <script src="jquery.min.js"></script>
    
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
    
    
.select-boxes{width: 280px;text-align: center;}
select {
    background-color: #F5F5F5;
    border: 1px double #15a6c7;
    color: #1d93d1;
    font-family: Georgia;
    font-weight: bold;
    font-size: 14px;
    height: 39px;
    padding: 7px 8px;
    width: 250px;
    outline: none;
    margin: 10px 0 10px 0;
}
select option{
    font-family: Georgia;
    font-size: 14px;
}

</style>
    <script type="text/javascript">
$(document).ready(function(){
    $('#zone').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'fetch.php',
                data:'ID'+countryID,
                success:function(html){
                    $('#police_station').html(html);
                    $('#IO_name').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#police_station').html('<option value="">Select country first</option>');
            $('#IO_name').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#police_station').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'fetch.php',
                data:'ID'+stateID,
                success:function(html){
                    $('#IO_name').html(html);
                }
            }); 
        }else{
            $('#IO_name').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>
      
    
<body>

<!-- Navigation bar with social media icons -->
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->


  <!-- Header -->
  
  <!-- Image header -->
 

  <!-- Grid -->
          <div class="select-boxes">
    <?php
    //Include database configuration file
    include('dbConfig.php');
    
    //Get all country data
    $query = $db->query("SELECT * FROM IO_Record");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
    <select name="zone" id="zone" >
        <option value="">Select Country</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['ID'].'">'.$row['zone'].'</option>';
            }
        }else{
            echo '<option value="">Country not available</option>';
        }
        ?>
    </select>
    
    <select name="police_station" id="police_station">
        <option value="">Select country first</option>
    </select>
    
    <select name="IO_name" id="IO_name">
        <option value="">Select state first</option>
    </select>
    </div>

          
            
      
      
    

  


</body>
</html> 