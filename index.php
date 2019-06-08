<?php

session_start();
require 'func.php';
if (isset($_SESSION['login']))
  {
     if ($_SESSION['login'] == 'yes'){

         echo '<script type="text/javascript">location.href = \'session.php\';</script>';

     }

   }
if (CheckCookie()){

    echo '<script type="text/javascript">location.href = \'session.php\';</script>';
    CookieSessionVariables();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Session with cookies Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Session Sample</h2>
    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
