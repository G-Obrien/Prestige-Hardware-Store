<?php
require_once('manage/configuration.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="manage/adminCSS/admin.css">
    <link rel="stylesheet" type="text/css" href="manage/adminCSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="manage/adminCSS/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.2/css/boxicons.min.css">
   
    <title>Prestige ug</title>
</head>

<body>
    <form method="post" action="signup.php" class="signup-form" novalidate>
       
        <?php include('manage/control.php'); ?>
        <div class="content-row">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="white" for="firstName">First name</label>
                        <input type="text" name="fname" class="form-control" id="firstName" value="<?php echo $fname; ?>" required>
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="white" for="lastName">Last name</label>
                        <input type="text" name="lname" class="form-control" id="lastName" value="<?php echo $lname; ?>" required>
                        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="uname" class="text-black">Username </label>
                        <input type="text" class="form-control" id="uname" name="username" placeholder="Username" value="<?php echo $username; ?>" required>
                        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group ">
                        <label for="email" class="text-black">Email </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $email; ?>" required>
                        
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="white">Password</label>
                        <input type="password" name="pass1" class="form-control" value="<?php echo $pass1; ?>" required>
                        
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="white">Confirm password</label>
                        <input type="password" name="pass2" class="form-control" value="<?php echo $pass2; ?>" required>
                        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="place" class="white f-left">Address</label>
                        <input type="text" name="place" class="form-control" id="address" placeholder="My Place" required>
                        
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="country" class="white">Region</label>
                        <select class="custom-select d-block w-100" name="country" id="country" required>
                            <option>Northern Uganda</option>
                            <option>Eastern Uganda</option>
                            <option>Central Region</option>
                            <option>Western Uganda</option>
                        </select>
                       
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="state" class="white">District </label>
                        <select class="custom-select d-block w-100" name="district" id="state" required>
                            <option>Arua</option>
                            <option>Gulu</option>
                            <option>Kampala</option>
                            <option>Lira</option>
                            <option>Masaka</option>
                            <option>Mbarara</option>
                            <option>Jinja</option>
                            <option>Soroti</option>
                        </select>
                      
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="serialno" class="white">Serial Code</label>
                    <input type="text" class="form-control" id="zip" name="serialno" placeholder="eg. b201">
                   
                </div>

            </div><br>

            <center>
                <button class="btn-reg" name="register_user" type="submit">Sign up</button><br>

                <small>Already have an Account?</small> <a href="login.php" class="color-link btn clr-bg rounded-pill font-size-20">Log In Now</a>
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
</body>

</html>