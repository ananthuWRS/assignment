
    <?php
    session_start();
    include('../config.php');
  if(isset($_POST['name']) && isset($_POST['email'])){
    

     $_SESSION['name']      =($_POST['name']);
     $_SESSION['number']   =($_POST['number']);
     $_SESSION['email']     =($_POST['email']);
     $_SESSION['user']      =($_POST['user']);
     $_SESSION['password']  =($_POST['pass']);
     $_SESSION['confirm']   =($_POST['confirm']);
      $uppercase = preg_match('@[A-Z]@',$_SESSION['password']);
      $lowercase = preg_match('@[a-z]@', $_SESSION['password']);
      $number    = preg_match('@[0-9]@', $_SESSION['password']);
      $specialChars = preg_match('@[^\w]@', $_SESSION['password']);
       $numbers     =preg_match('/^[0-9]{10}+$/',   $_SESSION['number'] );
     if(empty($_SESSION['name'])){
        header("Location:Registration.php ? error=name is required");
     }
     elseif(empty($_SESSION['number'])){
      header("Location:Registration.php ? error=phone number is required");
    }
    elseif(!$numbers){
      header("Location:Registration.php ? error= Enter valid phone number");
    }
   
    elseif(empty($_SESSION['email'])){
      header("Location:Registration.php ? error=email is required");
   }
 
   
   elseif(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($_SESSION['password']) < 8){
        header("Location:Registration.php ? error=Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.");

      }
      elseif(empty($_SESSION['user'])){
        header("Location:Registration.php ? error=username is required");
     }
     elseif(strlen($_SESSION['user'])<5){
      header("Location:Registration.php ? error=username length is short");
     }
     elseif(($_SESSION['password']) != $_SESSION['confirm'] ){
      header("Location:Registration.php ? error=password does not match");
   }
      
  
   
      
     else{
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $number = $_SESSION['number'];
    $user = $_SESSION['user'];
    $password = $_SESSION['password'];

        $sql = "insert into users (name,email,number,user,password) VALUES (?,?,?,?,?)";
        $stmtinsert = $conn->prepare($sql);
        $result = $stmtinsert->execute([$name,$email,$number,$user,$password]);
        if($result){
      
         header('Location:../Login/Login.php ? sucess=Registration sucessful');
        
        }


      

         else{
        header("Location:Registration.php ? error=password is not match");
      } 
    }
  }
    
    
    ?>


