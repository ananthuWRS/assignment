<?php
session_start();

if(isset($_SESSION["username"]))
{
    if((time() - $_SESSION['last_time']) >15)

{
  
 
 header("location:logout.php");
}




   else{
    echo '<h3>Login Successs , Welcome ' .$_SESSION["username"].'</h3>';
    
?>

      <?php
    include('../config.php');
    $name =$_SESSION["username"];
    $query = "select * from users where user= :name";
    $statement=$conn->prepare($query);
    
    $data=[':name' => $name];
    $statement->execute($data);
     $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
     if($result)
     {
      ?>
       
     
      <?php foreach ($result as $iteam){ ?>
        <html>
          <head><link rel="stylesheet" href="homes.css"></head>
          <body>
        <div class="card">
      <div class="container">
        <h4><b><?php echo $iteam['email'];?> </b></h4> 
        <h4><b><?php echo $iteam['number'];?> </b></h4> 
        <h4><b><?php echo $iteam['user'];?> </b></h4> 
        <h4><b><?php echo $iteam['password'];?> </b></h4> 
      </div>
      </div>
      <div class="clock">
      <iframe src="https://free.timeanddate.com/clock/i8ptu7gw/n54/fn15/fs30/fcfff/tc22d/ftb/bls0/brs0/bts4/btc00b" frameborder="0" width="183" height="41"></iframe>

      </div>
    
    
         
      </body>
         </html>
      
         <?php
        
         
         }  
        
     }
     





   }

}




?>









