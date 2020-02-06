<?php
//Include database configuration file
include('dbConfig.php');

if(isset($_POST["ID"]) && !empty($_POST["ID"])){
    //Get all state data
    $query = $db->query("SELECT * FROM police_station WHERE ID = ".$_POST['ID']." ORDER BY police_station ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select state</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['ID'].'">'.$row['police_station'].'</option>';
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}

if(isset($_POST["ID"]) && !empty($_POST["ID"])){
    //Get all city data
    $query = $db->query("SELECT * FROM IO_name WHERE ID = ".$_POST['ID']." ORDER BY IO_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select IO_name</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['ID'].'">'.$row['IO_name'].'</option>';
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}
?>