<?php
$servername = "localhost";
$username = "username"; //root
$password = "password"; // ""
//Create connection
$conn = mysqli_connect($servername, $username, $password);
//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$database="5tia";
//Create database
$sql = "CREATE DATABASE $database";
if( mysqli_query($conn,$sql));{
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
?>
