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
//require('connect.php');
$connection = mysqli_connect('localhost','root','');
$select_db = mysqli_select_db($connection, 'sport');

if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['e_mail']) && isset($_POST['password']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['sport'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $e_mail = $_POST['e_mail'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $sport = $_POST['sport'];

    $query = "INSERT INTO users (first_name, last_name, email, password, age, gender, sport) VALUES ('$first_name', '$last_name', '$e_mail', '$password', $age, '$gender', '$sport')";
//
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection) . mysqli_errno($connection));
//    var_dump("INSERT INTO users (first_name, last_name, e_mail, password, age, gender, sport) VALUES ('$first_name', '$last_name', '$e_mail', '$password', '$age', '$gender', '$sport')");
//    die();
    if($result){
        $smsg = "Successful registration";
    } else{
        $fsmsg = "Error";
    }
}
?>

    <div class="container">
        <form class="form-signin" method="POST">
            <h2>Registration</h2>
            <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php }?>
            <?php if(isset($fsmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?> </div><?php }?>


            <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
            <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
            <input type="email" name="e_mail" class="form-control" placeholder="Email" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <div class="form-row align-items-center">
                <label class="mr-lg-1" for="inlineFormCustomSelect">Age</label>
                <div class="col-auto my-1">
                    <select class="custom-select mr-sm-4" id="inlineFormCustomSelect">
                        <option selected>Month</option>
                        <option value="1">January</option>
                        <option value="2">Fabruary</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                    </select>
                </div>
                <div class="col-auto my-1">
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="col-auto my-1">
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Year</option>
                        <option value="1">1995</option>
                        <option value="2">1996</option>
                        <option value="3">1997</option>
                    </select>
                </div>
            </div>
<!--            <input type="number" name="age" class="form-control" placeholder="Age" required>-->
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Female
                            </label>
                        </div>
                    </div>
                </div>
<!--            <input type="text" name="gender" class="form-control" placeholder="Gender" required>-->
                <div>Sport Type</div>
                    <select class="custom-select custom-select-lg mb-3">
                    <option selected>Open this select menu</option>
                    <option value="1">Soccer</option>
                    <option value="2">Basketball</option>
                    <option value="3">Football</option>
                </select>
<!--            <input type="text" name="sport" class="form-control" placeholder="Sport Type" required>-->
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            <a href="login.php" class="btn btn-lg btn-primary btn-block">Login</a>
        </form>
    </div>
</body>


