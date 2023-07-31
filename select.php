<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname ="wtd1";


$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Coonection error".$conn->connect_error);
}


$sql = "SELECT * from product";
$result = $conn->query($sql);


if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo "productid".$row['prodId']."productname"
        .$row['prodName']."Product price".$row['prodPrice']."<br>";
    }
}
    else{
        echo " 0 results";
    }


$conn->close();


?>