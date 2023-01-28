<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="components/css/style.css"/>
    <title>Device Register</title>
</head>

<body>
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <form action="DeviceRegForm.php" method="post" class="form">
                <div class="header">
                    <b><p>Register a Device</p></b>
                </div>
                <div class="formbold-mb-5">
                    <label for="device_name" class="formbold-form-label">
                        Device Name
                    </label>
                    <input type="text" name="device_name" id="device_name" placeholder="Device Name" class="formbold-form-input" />
                </div>
                <div class="formbold-mb-5">
                    <label for="device_code" class="formbold-form-label">
                        Device Code
                    </label>
                    <input type="text" name="device_code" id="device_code" placeholder="Device Code" class="formbold-form-input" />
                </div>
                <div class="formbold-mb-5">
                    <label for="batch_no" class="formbold-form-label">
                        Batch Number
                    </label>
                    <input type="text" name="batch_no" id="batch_no" placeholder="Batch no" class="formbold-form-input" />
                </div>
                <div class="formbold-mb-5">
                    <label for="created_by" class="formbold-form-label">
                        Created By
                    </label>
                    <input type="text" name="created_by" id="created_by" placeholder="Created By" class="formbold-form-input" />
                </div>
                <div class="formbold-mb-5">
                    <label for="created_on" class="formbold-form-label">
                        Created On
                    </label>
                    <input type="date" name="created_on" id="created_on" placeholder="Created On" class="formbold-form-input" />
                </div>

                <div>
                    <button type="submit" class="formbold-btn" name="DeviceRegBtn">Register Device</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

<?php
include('db.php');


if (isset($_POST["DeviceRegBtn"])) {
    $device_name = $_POST["device_name"];
    $device_code = $_POST["device_code"];
    $batch_no = $_POST["batch_no"];
    $created_by = $_POST["created_by"];
    $created_on = $_POST["created_on"];

    $sqlQueryString = "INSERT INTO  device_master (`device_code`, `device_name`, `batch_no`, `created_by`, `created_on`) VALUES ('$device_code', '$device_name', '$batch_no', '$created_by', '$created_on');";

    // echo $sqlQueryString ;
    // exit;

    if ($MySQLiconn->query($sqlQueryString) === TRUE) {
        echo '<script type="text/javascript">';
        echo 'swal("New device added successfully")
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