<?php
session_start();
if(!$_SESSION['username']){
    header("Location: index.html");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primaryColor: #13182a;
            --secondaryColor: #ff8500;
        }

        body {
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--primaryColor);
            color: var(--secondaryColor);
            font-size: 23px;
            font-family: Arial, Helvetica, sans-serif;
            letter-spacing: 3px;
            padding: 50px;
        }
    </style>
</head>

<body>
    <h1>Thank You For Register</h1>
</body>

</html>