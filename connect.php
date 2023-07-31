<?php
$servername ="localhost";
$username ="root";
$password ="";

//creating connection 
$conn = new mysqli($servername,$username,$password);

//Verify connection 
if($conn->connect_error){
    die("Coonection error".$conn->connect_error);
}


//create a database
$sql = "CREATE DATABASE wtd4";
if($conn->query($sql)===TRUE){
    echo "Database is created with name wtd4";
}
else{
    echo "Error".$conn->error;
}

$conn->close();

?>