<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname ="wtd1";


$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection not established".$conn->connect_error);
}
$sql ="UPDATE product set prodPrice=50.50 where prodId=2";

if($conn->query($sql) === TRUE){
    echo " data updated succesfully ";
}
else {
    die("Error while updating ".$conn->error);
}
$conn->close();
?>