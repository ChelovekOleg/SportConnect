<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Sports Connect</title>
</head>
<body>
<?php
session_start();
//require('connect.php');
$connection = mysqli_connect('localhost','root','');
$select_db = mysqli_select_db($connection, 'sport');

if (isset($_POST['e_mail']) and isset($_POST['password'])){
    $e_mail = $_POST['e_mail'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$e_mail' and password= '$password'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1){
        $_SESSION['e_mail'] = $_POST['e_mail'];
        header('Location: home.php' );
    }else {
//        $fmsg = "Error";
        $alert = "Your Email or Password is incorrect ";
    }
}
//?>

<div class="container">
    <form class="form-signin" method="POST" action="login.php">
        <h2>LogIn</h2>

        <img src="gymlogo.png" alt="Avatar" class="avatar">
        <input type="email" name="e_mail" class="form-control" placeholder="Email" required>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">LogIn</button>
        <a href="index.php" class="btn btn-lg btn-primary btn-block">Registration</a>
    </form>
</div>

    <div class="alert alert-danger" role="alert" <?php echo isset($alert) ? "" : "hidden"; ?>' > <?php echo isset($alert) ? $alert : ""; ?> </div>

</body>


