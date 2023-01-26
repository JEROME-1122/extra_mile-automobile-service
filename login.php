<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/login.css" type="text/css" rel="stylesheet">
</head>
 <body>
    <form action="includes/login.inc.php" method="post">
     <h1 class="login">Login</h1>
     <input type="text" name="username" placeholder="username.." class="uname"><br>
     <input type="password" name="pwd"  placeholder="password.." class="upwd"><br>
     <input type="submit" name="submit" value="submit"class="usubmit"><br>
     <p>New User? <span><a href="signin.php"> SIGNUP</a></span></p>
    </form>
</body>
</html>