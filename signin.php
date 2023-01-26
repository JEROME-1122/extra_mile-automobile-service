<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="css/signin.css" type="text/css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <form action="includes/signin.inc.php" method="post">
     <h1>Sign up</h1>
     <input type="text" name="username" placeholder="username.." id="username"><br>
     <input type="password" name="pwd"  placeholder="password.." id="pwd"><br>
     <input type="password" name="confirmPwd" placeholder="confirm-password" id="confirmPwd"><br>
     <input type="text" name="email" placeholder="Email.." id="email"><br>
     <input type="submit" name="submit" value="submit" id="submit"><br>
     <p>Already User? <span><a href="login.php"> LOGIN</a></span></p>
    </form>


    
    
</body>
</html>