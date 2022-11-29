<?php
session_start();
$email = $_POST["email"];
$password = $_POST["password"];
echo $email;

if($email == 'admin@gmail.com' && $password == 'admin'){
    $_SESSION["admin"] = $email;
    header("Location: admin.php");
}
else{
    header("Location: index.html");
}

?>