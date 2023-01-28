<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="components/css/style.css"/>
    <title>Device Issue</title>
</head>

<body>
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <form action="" method="POST" class="form">
                <div class="header">
                    <p>Issue a Device</p>
                </div>
                <div class="formbold-mb-5">
                    <label for="device_id" class="formbold-form-label">
                        Device Id
                    </label>
                    <input type="text" name="device_id" id="device_id" placeholder="Device Id" class="formbold-form-input" />
                </div>
                <div class="formbold-mb-5">
                    <label for="customer_id" class="formbold-form-label">
                        Customer Id
                    </label>
                    <input type="text" name="customer_id" id="customer_id" placeholder="Customer id" class="formbold-form-input" />
                </div>
                <div class="formbold-mb-5">
                    <label for="location" class="formbold-form-label"> Location </label>
                    <input type="text" name="inatall_location" id="location" placeholder="Location" class="formbold-form-input" />
                </div>

                <div>
                    <button class="formbold-btn">Issue Device</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>