<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "travel";

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

extract($_GET);

$sql = "INSERT INTO user (username,lastname,dob,email,contact,gender,password) VALUES ('$username','$lastname','$dob','$email','$contact','$gender','$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("Location: signup.php?msg=failed");
}

$conn->close();
?>