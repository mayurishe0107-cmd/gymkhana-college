<?php

session_start();
include 'config.php';

if(isset($_POST['login'])){

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM admins
WHERE username='$username'
AND email='$email'
AND password='$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

$_SESSION['admin'] = $username;

header("Location: admin-dashboard.php");

}
else{

echo "<script>alert('Invalid Login');</script>";

}

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
</head>

<body>

<form method="POST">

<input type="text" name="username" placeholder="Username">

<input type="email" name="email" placeholder="Email">

<input type="password" name="password" placeholder="Password">

<button name="login">
Login
</button>

</form>

</body>
</html>