<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Theme style -->
    <link rel="stylesheet" href="components/css/login.css">
</head>

<body>
    <div class="container">
        <form action="register.php" method="post" class="register active" autocomplete="off">
            <h2 class="title">Register your account</h2>
            <div class="form-group">
                <label for="name">Full Name</label>
                <div class="input-group">
                    <input type="text" id="fullName" name="fullName" placeholder="Full Name">
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group">
                    <input type="email" id="email" name="email" placeholder="Email address">
                    <i class='bx bx-envelope'></i>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                    <input type="password" pattern=".{8,}" id="password" name="password" placeholder="Your password">
                    <i class='bx bx-lock-alt'></i>
                </div>
                <span class="help-text">At least 8 characters</span>
            </div>
            <div class="form-group">
                <label for="confirm-pass">Confirm password</label>
                <div class="input-group">
                    <input type="password" id="confirm-pass" placeholder="Enter password again">
                    <i class='bx bx-lock-alt'></i>
                </div>
                <span class="help-text">Confirm password must be same with password</span>
            </div>
            <button type="submit" class="btn-submit" name="RegisterButton">Register</button>
            <p>I already have an account. <a href="login.php">Login</a></p>
        </form>
    </div>

    <script src="components/js/register.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

<?php
include('db.php');


if (isset($_POST["RegisterButton"])) {
    $fullname = $_POST["fullName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sqlQueryString = "INSERT INTO  tbl_userdetails (`user_name`, `user_email`, `password`) VALUES ('$fullname ','$email', '$password');";

    // echo $sqlQueryString ;
    // exit;

    if ($MySQLiconn->query($sqlQueryString) === TRUE) {
        echo '<script type="text/javascript">';
        echo 'swal("Succesfully Registered")
                                    .then((value) => {
                                      
                                    });';  //not showing an alert box.
        echo '</script>';
    } else {
        echo '<script type="text/javascript">';
        echo ' swal("Error: "' . $sql . ' "<br>" . $conn->error;")
                                    .then((value) => {
                                      
                                    });';  //not showing an alert box.
        echo '</script>';
    }
}
?>

</html>