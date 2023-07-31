<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname ="wtd1";


$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection not established".$conn->connect_error);
}
$sql ="DELETE FROM product WHERE prodId = 2";
if($conn->query($sql) === TRUE){
    echo "Row deleted succesfully";
}
else {
    die("Error while Deleting ".$conn->error);
}
$conn->close();
?>