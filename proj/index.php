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

if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['e_mail']) && isset($_POST['password']) && isset($_POST['gender']) && isset($_POST['sport'])){
//if (isset($_POST['gridRadios'])){
//var_dump($_POST['sport']);die();
    $diff = round((time()-strtotime($_POST['inlineFormCustomSelectMonth']."-".$_POST['inlineFormCustomSelectDay']."-".$_POST['inlineFormCustomSelectYear']))/(3600*24*365.25));

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $e_mail = $_POST['e_mail'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $sport = $_POST['sport'];

    $query = "INSERT INTO users (first_name, last_name, email, password, age, gender, sport) VALUES ('$first_name', '$last_name', '$e_mail', '$password', $diff, '$gender', '$sport')";

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
            <div class="form-group row align-items-center">
                <label class="col-sm-2 agecolor" for="inlineFormCustomSelect">Age</label>
                <div class="col-sm-4">
                    <select class="custom-select mr-sm-4" id="inlineFormCustomSelectMonth" name="inlineFormCustomSelectMonth">
                        <option selected>Month</option>
                        <option value="1">January</option>
                        <option value="2">Fabruary</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelectDay" name="inlineFormCustomSelectDay">
                        <option selected>Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>

                    </select>
                </div>
                <div class="col-sm-3">
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelectYear" NAME="inlineFormCustomSelectYear">
                        <option selected>Year</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                    </select>
                </div>
            </div>
<!--            <input type="number" name="age" class="form-control" placeholder="Age" required>-->
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0 agecolor">Gender</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Male" checked>
                            <label class="form-check-label agecolor" for="gridRadios1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Female">
                            <label class="form-check-label agecolor" for="gridRadios2">
                                Female
                            </label>
                        </div>
                    </div>
                </div>
<!--            <input type="text" name="gender" class="form-control" placeholder="Gender" required>-->
                <div class="agecolor">Sport Type</div>
                    <select name="sport" class="custom-select custom-select-lg mb-3">
                    <option selected>Open this select menu</option>
                    <option value="Soccer">Soccer</option>
                    <option value="Basketball">Basketball</option>
                    <option value="Football">Football</option>
                </select>
<!--            <input type="text" name="sport" class="form-control" placeholder="Sport Type" required>-->
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            <a href="login.php" class="btn btn-lg btn-primary btn-block">Login</a>
        </form>
    </div>
</body>


