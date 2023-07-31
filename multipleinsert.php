<?php

$conn = new mysqli("localhost","root","","wtd1");

if($conn->connect_error===TRUE){
    die("Connection error".$conn->connect_error);
}

$sql = "INSERT INTO product(prodId, prodName,prodPrice)
VALUES (002,'book',15.50);";

$sql .= "INSERT INTO product(prodId, prodName,prodPrice)
VALUES (003,'eraser',5.00);";

$sql .= "INSERT INTO product(prodId, prodName,prodPrice)
VALUES (004,'sharpner',5.50)";

if($conn->multi_query($sql)=== TRUE){
    echo "New record were created";
}
else{
    echo "Error while creating records".$conn->error;
}

$conn->close();
?>