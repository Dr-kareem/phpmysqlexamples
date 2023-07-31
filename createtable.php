<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname ="wtd1";


$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection not established".$conn->connect_error);
}
$sql ="CREATE TABLE product (
    prodId int,
    prodName varchar(255),
    prodPrice float)";

if($conn->query($sql) === TRUE){
    echo " order table created successfully ";
}
else {
    die("Error Creating file".$conn->error);
}
$conn->close();
?>