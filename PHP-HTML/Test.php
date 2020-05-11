<?php

$servername = "localhost:3306";
$username = "root";
$password = "Moyleen22";
$dbname = "products";



 $ID = $_POST['ID']; ;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT id,name,price FROM products where id=$ID" ;
$result = $conn->query($sql);
if ($result->num_rows >0) {
 while($row[] = $result->fetch_assoc()) {
 $tem = $row;
 $json = json_encode($tem);
 }
} else {
 echo "No Results Found.";
}
 echo $json;
$conn->close();

?>