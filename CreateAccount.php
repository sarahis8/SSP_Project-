


<?php
require_once 'Conn.php';

$name=$_POST['user_name'];
$email=$_POST['user_email'];
$pass=$_POST['user_password'];
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	$sql =  "INSERT INTO users VALUES (null,'$name','$email','$pass')";

if ($conn->query($sql) === TRUE) {
  echo "Account created successfully";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<html><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.jpeg" type="image/gif">
    <title>Create Account</title>
</head>
    <body>


<p><button onclick="load()">Go to Home page</button></p>
        <script src="../project/js/jquery-min.js"></script>
        <script src="../project/js/HomePage.js"></script>

    </body>
</html>