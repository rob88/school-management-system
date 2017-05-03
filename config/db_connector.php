<?php
// used to connect to the database
$host = "localhost"; //Host and Server 
$db_name = "school_management-db"; // database name
$username = "root"; // username for accessing school_management-db
$password = "";// password for accessing school_management-db
 
/////////////////////////////////////////////////////////////////////////////////
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
//////////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
/////////////////////////////////////////////////////////////////
?>