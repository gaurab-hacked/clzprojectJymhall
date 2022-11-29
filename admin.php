<?php
session_start();
if(!$_SESSION['admin']){
    header("Location: login.php");
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymhall";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sn, name, address, email, phnumber FROM registation";
$result = $conn->query($sql);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        table{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        table, tr, th, td{
            border: 2px solid black;
            border-collapse: collapse;
        }
        th, td{
            height: 50px;
        }
    </style>
</head>

<body>
    <table style="width: 100%;">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td> <?php echo  $row["sn"] ?></td>
                        <td> <?php echo  $row["name"] ?></td>
                        <td> <?php echo  $row["address"] ?></td>
                        <td> <?php echo  $row["email"] ?></td>
                        <td> <?php echo  $row["phnumber"] ?></td>
                    </tr>
            <?php
                    // echo "id: " . $row["sn"] . " - Name: " . $row["name"] . " " . $row["address"] . "<br>";
                }
            } else {
                echo "0 results";
            }
            // echo $result->fetch_assoc();
            // $conn->close();
            ?>
        </tbody>
        </tbody>
    </table>
    <a href="index.php">Go Home</a>
</body>

</html>