<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="components/css/style.css"/>
    <title>Sensor Register</title>
</head>

<body>
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <form action="SensorRegForm.php" method="post" class="form">
                <div class="header">
                    <p>Register a Sensor</p>
                </div>
                <div class="formbold-mb-5">
                    <label for="sensor_type" class="formbold-form-label"> Sensor Type </label>
                    <input type="text" name="sensor_type" id="sensor_type" placeholder="Sensor type" class="formbold-form-input" />
                </div>
                <div class="formbold-mb-5">
                    <label for="sensor_name" class="formbold-form-label"> Sensor Name </label>
                    <input type="text" name="sensor_name" id="sensor_name" placeholder="Sensor name" class="formbold-form-input" />
                </div>
                <div class="formbold-mb-5">
                    <label for="created_by" class="formbold-form-label"> Created By </label>
                    <input type="text" name="created_by" id="created_by" placeholder="Created By" class="formbold-form-input" />
                </div>
                <div class="formbold-mb-5">
                    <label for="created_on" class="formbold-form-label"> Created On </label>
                    <input type="date" name="created_on" id="created_on" placeholder="Created On" class="formbold-form-input" />
                </div>
                <div>
                    <button type="submit" class="formbold-btn" name="SensorRegBtn">Register Sensor</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

<?php
include('db.php');


if (isset($_POST["SensorRegBtn"])) {
    $sensor_type = $_POST["sensor_type"];
    $sensor_name = $_POST["sensor_name"];
    $created_by = $_POST["created_by"];
    $created_on = $_POST["created_on"];

    $sqlQueryString = "INSERT INTO  sensor_details (`sensor_type`, `sensor_name`, `created_by`, `created_on`) VALUES ('$sensor_type', '$sensor_name', '$created_by', '$created_on');";

    // echo $sqlQueryString ;
    // exit;

    if ($MySQLiconn->query($sqlQueryString) === TRUE) {
        echo '<script type="text/javascript">';
        echo 'swal("Sensor added successfully")
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