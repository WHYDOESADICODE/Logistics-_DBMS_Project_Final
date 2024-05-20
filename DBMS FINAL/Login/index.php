<?php 
include("connection.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a6ba84593c.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <i class="fa-solid fa-right-to-bracket fa-2xl"></i>
            <h1>Login</h1>
            <form action="login.php" method="POST"> <!-- Corrected action attribute and method -->
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-user" style="color: #d07016;"></i>
                        <input type="text" placeholder="Email Address" name="user">
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-lock" style="color: #d07016;"></i>
                        <input type="password" placeholder="Password" name="Pass">
                    </div>
                    <a href="#"> Forgot Password</a>
                </div>
                <div class="btn-field">
                    <button type="submit" name="submit">Login</button> <!-- Changed type to "submit" -->
                </div>
            </form>
        </div>
    </div>
</body>
</html>
