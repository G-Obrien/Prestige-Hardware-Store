<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
    <title>Prestige signin-page</title>
    <script defer src="js/modal.js"></script>
</head>
<body>

<div class="modal" id="modal">
<div class="header">
    <div><h2>Prestige - Login</h2></div>
    <button data-close-btn class="close-btn"><a href="index.php">&times;</a></button>
</div>
<div class="modal-body">
<form  method="post" action="signup-dbh.php" class="log-form">
<br>
Username or Email <br>
<input type="text" name="usernamef"><br>
Password <br>
<input type="password" name="usernamef"><br><br>
<a href="index.php"><input type="button" value="LOGIN" class="log-btn"></a>
<br><br>
Don't have Account? - <a href="signup.php">Sign Up &#8594;</a> 
</form>
</div>

</div>
<div class="active" id="overlay"></div>
</body>
</html>