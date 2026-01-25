<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username=trim($_POST['username'])??'';
    $password=trim($_POST['password'])??'';
    if ($username!=''&&$password!='') {
if ($username=='admin'&&$password=='1234') {
    $_SESSION['usuario']=$username;
    header('Location: privada.php');
    exit();//siempre exit porque si no sigue ejecutando el codigo
} else {
    echo "Invalid username or password.";

}

    } else {
        # code...
    }
    
} else {
    # code...
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
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>