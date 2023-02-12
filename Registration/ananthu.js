
function validateForm() {

  let user= document.forms["form1"]["name"].value;
  let email= document.forms["form1"]["email"].value;
  let phone= document.forms["form1"]["number"].value;
  let username= document.forms["form1"]["user"].value;
  let password= document.forms["form1"]["pass"].value;
  let confirm= document.forms["form1"]["confirm"].value;
 let uppercase = preg_match('@[A-Z]@',$_SESSION['password']);
 let lowercase = preg_match('@[a-z]@', $_SESSION['password']);
  let number    = preg_match('@[0-9]@', $_SESSION['password']);
  let specialChars = preg_match('@[^\w]@', $_SESSION['password']);

     if(user == "") {
      document.getElementById('name1').innerHTML =" **  please enter the value";
      return false;

    }
    else if(!isNaN(user)){
      document.getElementById('name1').innerHTML =" * only character are allowed";
      return false;
    }
    else  if (email =="" ){
      document.getElementById('email1').innerHTML =" * email field is empty";
      return false;
    }
     else if (phone ==""){
      document.getElementById('number1').innerHTML =" * number field is empty";
      return false;
    }
    
   else if((username == "")){
      document.getElementById('user1').innerHTML =" * username is  required";
      return false;
    }
    else if((password == "")){
      document.getElementById('password1').innerHTML =" * password is  required";
      return false;
    }
    else if((!uppercase) || (!lowercase) || (!number) || (!specialChars) ){
      document.getElementById('password1').innerHTML =" * password is  required";
      return false;
    }
    if (password != confirm){
      document.getElementById('confirm1').innerHTML =" *Password are not matching";
      return false;
    }
  }
