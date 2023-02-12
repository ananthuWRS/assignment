<?php
session_start();


?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="cover.css">
  <script type="text/javascript" src="arun.js"></script>
</head>
<body>

  <div class="container">
  
    <div class="login form">
      <header>Login</header>

  <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="form2" onsubmit="return  validate()">
      <input type="text" placeholder="Enter the username" name="name" >
      <span id="username1" class="danger"> </span>  
        <input type="password" placeholder="Enter your password" name="pass" >
        <span id="password1" class="danger"> </span>  
        <a href="#">Forgot password?</a>
        <input type="submit" class="button"  name="create"  value="Log In" />
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
        <a href="../Registration/Registration.php">signup</a>
        </span>
      </div>
    </div>
</div>
   
</body>
</html>

