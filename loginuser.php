<?php
$servername = "localhost";
$dbname = "travel";

// Create connection
$conn = new mysqli($servername,"root","", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
extract($_GET);


$sql = "SELECT email,username,lastname,contact from user where email='$email' AND password='$password' ";

$result = $conn->query($sql);

if ($result) {
    if($result->num_rows>0){
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION["email"] = $row['email'];
        $_SESSION["username"] = $row['username'];
        $_SESSION["lastname"] = $row['lastname'];
        $_SESSION["contact"] = $row['contact'];
       
        header('Location: home.php');
        exit();
    }
    else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        header('Location: login.php?msg=failed1');
        exit();
    }
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
    header('Location: login.php?msg=failed2');
    exit();
}

$conn->close();
?>

