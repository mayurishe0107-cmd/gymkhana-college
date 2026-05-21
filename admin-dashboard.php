<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>

<style>

body{
font-family:Arial;
background:#f4f4f4;
padding:50px;
}

.box{
background:white;
padding:40px;
border-radius:20px;
text-align:center;
box-shadow:0 4px 15px rgba(0,0,0,0.1);
}

h1{
margin-bottom:20px;
}

a{
display:inline-block;
margin-top:20px;
padding:12px 25px;
background:#6c4cff;
color:white;
text-decoration:none;
border-radius:10px;
}

</style>

</head>

<body>

<div class="box">

<h1>
Welcome to Gymkhana Admin Dashboard
</h1>

<p>
You have successfully logged into the system.
</p>

<a href="logout.php">
Logout
</a>

</div>

</body>
</html>