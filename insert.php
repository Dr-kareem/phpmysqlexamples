<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="wtd1";

//create connection 
$conn = new mysqli($servername,$username,$password,$dbname);

//verify connection 
if($conn->connect_error){
    die("Error in connection ");
}

$sql = "INSERT INTO product(prodId, prodName,prodPrice)
VALUES (001,'pen',10.50);";

if($conn->query($sql)=== TRUE){
    echo "New record created in product table";
}
else {
    echo "Error ".$sql."<br>".$conn->error;
}

$conn->close();
?>
