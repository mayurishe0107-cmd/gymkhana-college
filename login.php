<?php
session_start();

/* ADMIN CREDENTIALS */

$correct_username = "gpn123";
$correct_email = "gpnashik@gmail.ac.in";
$correct_password = "gpn1234";

/* LOGIN CHECK */

$message = "";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(
        $username == $correct_username &&
        $email == $correct_email &&
        $password == $correct_password
    ){

        $_SESSION['admin'] = $username;

        header("Location: admin-dashboard.php");
        exit();

    }
    else{

        $message = "Invalid Username, Email or Password";

    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Login</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial;
}

body{
    background:#f4f4f4;
}

/* NAVBAR */

.navbar{
    width:100%;
    background:#111827;
    color:white;
    padding:20px 40px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    font-size:28px;
    font-weight:bold;
}

.admin-btn{
    background:#6c4cff;
    padding:12px 25px;
    border-radius:10px;
}

/* LOGIN CONTAINER */

.container{
    width:100%;
    min-height:90vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:30px;
}

.login-box{
    width:450px;
    background:white;
    padding:40px;
    border-radius:20px;
    box-shadow:0 4px 15px rgba(0,0,0,0.1);
}

.login-box h1{
    text-align:center;
    margin-bottom:30px;
    color:#111827;
}

/* INPUT */

.input-box{
    margin-bottom:20px;
}

.input-box label{
    display:block;
    margin-bottom:8px;
    font-weight:bold;
}

.input-box input{
    width:100%;
    padding:15px;
    border:1px solid #ccc;
    border-radius:10px;
    font-size:16px;
}

.input-box input:focus{
    outline:none;
    border:1px solid #6c4cff;
}

/* BUTTON */

.login-btn{
    width:100%;
    padding:15px;
    background:#6c4cff;
    color:white;
    border:none;
    border-radius:10px;
    font-size:18px;
    cursor:pointer;
    margin-top:10px;
}

/* ERROR */

.error{
    background:#ffebeb;
    color:red;
    padding:12px;
    border-radius:10px;
    margin-bottom:20px;
    text-align:center;
}

/* SUCCESS */

.success{
    background:#e7ffe7;
    color:green;
    padding:12px;
    border-radius:10px;
    margin-bottom:20px;
    text-align:center;
}

/* FOOTER */

.footer{
    text-align:center;
    padding:20px;
    color:#777;
}

</style>

</head>

<body>

<!-- NAVBAR -->

<div class="navbar">

    <div class="logo">
        Gymkhana Portal
    </div>

    <div class="admin-btn">
        Admin Panel
    </div>

</div>

<!-- LOGIN -->

<div class="container">

    <div class="login-box">

        <h1>Admin Login</h1>

        <?php
        if($message != ""){
            echo "<div class='error'>$message</div>";
        }
        ?>

        <form method="POST">

            <!-- USERNAME -->

            <div class="input-box">

                <label>Username</label>

                <input
                    type="text"
                    name="username"
                    placeholder="Enter Username"
                    required
                >

            </div>

            <!-- EMAIL -->

            <div class="input-box">

                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    placeholder="Enter Email"
                    required
                >

            </div>

            <!-- PASSWORD -->

            <div class="input-box">

                <label>Password</label>

                <input
                    type="password"
                    name="password"
                    placeholder="Enter Password"
                    required
                >

            </div>

            <!-- BUTTON -->

            <button class="login-btn" name="login">
                LOGIN
            </button>

        </form>

    </div>

</div>

<div class="footer">

© 2026 Government Polytechnic Nashik

</div>

</body>
</html>