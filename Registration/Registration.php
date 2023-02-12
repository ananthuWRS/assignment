<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    
    <title>Login & Signup Form</title>
    <link rel="stylesheet" href="Register.css" />
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
    <script type="text/javascript" src="ananthu.js"></script>


  </head>
  <body>

    <section class="wrapper">
      <div class="form signup">
        <header>Signup</header>
   
        <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post" name="form1" onsubmit="return  startTimer()">
        <input type="text" placeholder="Full name" id="name" >
        <span id="name1" class="danger"> </span>  
      
          <input type="email" placeholder="Email address"  name="email" >
          <span id="email1" class="danger"> </span>
         
          <input type="text" placeholder="Phone Number" name="number"   > 
          <span id="number1" class="danger"> </span>
          <input type="text" placeholder="Username"  name="user"  >
          <span id="user1" class="danger"> </span>


     
          <input type="Password" placeholder="Password" name="pass"  />
          <span id="password1" class="danger"> </span>

        <input type="password" placeholder="Confirm password"  name="confirm" />
        <span id="confirm1" class="danger"> </span>

        <!-- <div class="g-recaptcha" data-sitekey="6Lc5EXMkAAAAACE-MozggecPlNF4yseqsG6a_0so"></div> -->
          <input type="submit" name="create"  value="Signup" />
        </form>
      </div>

      <div id="ten-countdown"></div>
    
        <script src="js/index.js"></script>

     
      </section>
  </body>
  </html>