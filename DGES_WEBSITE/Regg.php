<?php
$servername = "127.0.0.1:3312";
$database = "dges";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";


$firstname2=$_POST['first_name'];
$lastname2=$_POST['last_name'];
$phonenumber2=$_POST['phone_number'];
$username2=$_POST['username'];
$initialpassword2=$_POST['initial_password'];
$confirmpassword2=$_POST['confirm_password'];


$sql = "INSERT INTO student(first_name, last_name, phone_number, username, initial_password, confirm_password) VALUES ('$firstname2', '$lastname2', '$phonenumber2', '$username2', '$initialpassword2', '$confirmpassword2')";


if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>
