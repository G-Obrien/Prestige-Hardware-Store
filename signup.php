<?php
require_once('control/configurations.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.2/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link rel="icon" href="assets/presti.png">
    <title>PrestigeSignUp</title>
</head>

<body>
<main class="repair-form">
    <form method="post" action="signup.php" class="needs-validation form-signup" novalidate>
        <center>
            <h1 class="h3 mb-3 font-weight-normal">Register and Account</h1>
        </center>
        <?php include('control/errors.php'); ?>
        <div class="">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="white" for="firstName">First name</label>
                        <input type="text" name="fname" class="form-control" id="firstName" value="<?php echo $fname; ?>" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="white" for="lastName">Last name</label>
                        <input type="text" name="lname" class="form-control" id="lastName" value="<?php echo $lname; ?>" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="uname" class="text-black">Username </label>
                        <input type="text" class="form-control" id="uname" name="username" placeholder="Username" value="<?php echo $username; ?>" required>
                        <div class="invalid-feedback">
                            Valid username is required.
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group ">
                        <label for="email" class="text-black">Email </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $email; ?>" required>
                        <div class="invalid-feedbackk">
                            Valid last Email is required.
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="white">Password</label>
                        <input type="password" name="pass1" class="form-control" value="<?php echo $pass1; ?>" required>
                        <div class="invalid-feedback">
                            Please enter valid Password.
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="white">Confirm password</label>
                        <input type="password" name="pass2" class="form-control" value="<?php echo $pass2; ?>" required>
                        <div class="invalid-feedback">
                            Enter valid Password.
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="address" class="white f-left">Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Nakaawa Division" value="<?php echo $address; ?>" required>
                        <div class="invalid-feedback">
                            Enter your Home address.
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="country" class="white">Region in Uganda</label>
                        <select class="custom-select d-block w-100" name="country" id="country" required>
                            <option>Northern</option>
                            <option>Central</option>
                            <option>Eastern</option>
                            <option>Western</option>
                        </select>
                        <div class="invalid-feedback">
                            Please chose your Region from the country.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="state" class="white">Major District in the Region. </label>
                        <select class="custom-select d-block w-100" name="district" id="state" required>
                            <option>Masaka</option>
                            <option>Kampala</option>
                            <option>Jinja</option>
                            <option>Lira</option>
                            <option>Soroti</option>
                            <option>Gulu</option>
                            <option>Arua</option>
                            <option>Mbarara</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a nearby District.
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="zip" class="white"> Key Code/Zip</label>
                    <input type="text" class="form-control" id="zip" name="zip" placeholder="" value="<?php echo $zip; ?>" required>
                    <div class="invalid-feedback">
                        Enter your Code.
                    </div>
                </div>

            </div><br>

            <center>
                <button class="btn btn-lg btn-warning btn-block col-md-6 rounded-pill" name="register_user" type="submit">Register</button><br>

                <small>Already have a/c?</small> <a href="signin.php" class="color-link btn clr-bg rounded-pill font-size-20">Log In Now</a>
            </center>

        </div>
    </form>
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <script src="assets/scripts/jquery.min.js"></script>
    <script src="assets/scripts/popper.min.js"></script>
</main>

</body>

</html>