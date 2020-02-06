<?php
//db details
$dbHost = 'mysql.hostinger.in';
$dbUsername = 'u682671774_buddy';
$dbPassword = 'buddy_cop_ec';
$dbName = 'u682671774_buddy';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>