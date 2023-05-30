<html><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.jpeg" type="image/gif">
    <title>Delete Account</title>
</head>
    <body>

<?php
require_once 'Conn.php';
$email=$_POST['email'];
$name=$_POST['username'];
$pass=$_POST['password'];
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM users WHERE u_email = ? AND u_name = ? AND u_password = ?";
$result = $conn->prepare($sql); 
$result->bind_param("sss", $email, $name, $pass);
$result->execute();

    if ($result->affected_rows > 0) {
        echo "Account deleted successfully.";
    } else {
        echo "Invalid username or password.";
    }

    $result->close();
    $conn->close();

?>
        <p><button onclick="load()">Go to Home page</button></p>
        <script src="../project/js/jquery-min.js"></script>
        <script src="../project/js/HomePage.js"></script>

    </body>
</html>

