<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$servername = "localhost:3306";
$username = "root";
$password = "Moyleen22";
$dbname = "products";
$conn = mysqli_connect($servername, $username, $password, $dbname);
 

 

 if($_SERVER["REQUEST_METHOD"]=="POST")
 { // Fetching variables of the form which travels in URL
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$description = $_POST['description'];

	$sql = "UPDATE  products SET id='$id',name='$name',price='$price',Description='$description' WHERE id='$id'";

	 if (mysqli_query($conn, $sql)) {
        echo "New product has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }


// Close connection
	mysqli_close($conn);

	header("refresh:2; url=Update.html");

}
?>