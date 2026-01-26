<?php
session_start();
$username=trim($_POST['username'] ?? '');
$password=trim($_POST['password'] ?? '');


 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($username === 'admin' && $password === 'password') {
        $_SESSION['flash'] = 'Login successful';
        $_SESSION['username'] = $username;
          header('Location: privado.php');
       exit;
    } else {
               $_SESSION['flash'] = 'Login failed';
           }
    

 }  else {
   header('Location: login.php');
   exit;
 }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Login</h1>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>