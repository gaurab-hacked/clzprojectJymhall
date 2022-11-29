<?php
session_start();
$name = $_POST["name"];
$address = $_POST["address"];
$email = $_POST['email'];
$phnumber = $_POST['phnumber'];


// to send the backend
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'gymhall';

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO `registation` (`name`, `address`, `email`, `phnumber`) VALUES ('$name', '$address', '$email', '$phnumber')";
if ($conn->query($sql) === TRUE) {
    $_SESSION["username"] = $name;
    header("Location: thankYou.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
