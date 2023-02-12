<?php
session_start();

if(isset($_SESSION["username"]))
{
    if((time() - $_SESSION['last_time']) >60)

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
      <iframe src="https://free.timeanddate.com/countdown/i8pv3n5r/n1896/cf111/cm0/cu4/ct0/cs0/ca0/cr1/ss0/cac000/cpc000/pc66c/tc66c/fs100/szw320/szh135/tatTime%20left%20to%20Event%20in/tac000/tptTime%20since%20Event%20started%20in/tpc000/mac000/mpc000/iso2023-02-12T08:43:00" allowtransparency="true" frameborder="0" width="320" height="135"></iframe>


      </div>
    
    
         
      </body>
         </html>
      
         <?php
        
         
         }  
        
     }
     





   }

}




?>









