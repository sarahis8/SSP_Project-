<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.jpeg" type="image/gif">
    <title>Status</title>
</head>
<body>
<?php
require_once 'Conn.php';
$email=$_POST['userEmail'];
$pass=$_POST['userPassword'];

$conn = new mysqli($servername, $username, $password, $db_name);
$sql = "SELECT * FROM users";
$result = $conn->query($sql);



while($row = $result->fetch_assoc()) {
    
    if($email == $row["u_email"] && $pass == $row["u_password"] ){
        echo"Reserved Succesfully";
    }
    // else 
    // echo "Email or password are incorrect"; 
    }


    
$conn->close();
?> 


<hr>

        <p><button onclick="load()">Go to Home page</button></p>
        <script src="../project/js/jquery-min.js"></script>
        <script src="../project/js/HomePage.js"></script>


</body>
</html>



