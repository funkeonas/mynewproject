<?php
 session_start();
  $surname = '';
  $other = '';
  $username = '';
  $email = '';
  $password = '';
  $password_2 = '';
  $vehicleType = '';
  $vehicleManu = '';
  $errors = array();
  $db = mysqli_connect('localhost', 'root', '', 'registration');

//REGISTER NEW USER//
  
if(isset($_POST['signup1'])){
    //RECEIVE VALUE FROM FORM
    
 $username = mysqli_real_escape_string($db, $_POST['username']); 
 $email =  mysqli_real_escape_string ($db, $_POST['email']); 
 $password = mysqli_real_escape_string ($db, $_POST['password']);
 $password_2 = mysqli_real_escape_string ($db, $_POST['password_2']);
    
    //CHECK THAT THE FORMS ARE FILLED IN CORRECTLY
      
    if(empty($username)){
        array_push($errors, "username is required");
    }
     if(empty($email)){
        array_push($errors, "email is required");
    }
     if(empty($password)){
        array_push($errors, "password is required");
    }
    if(empty($password_2)){
        array_push($errors, "password is required");
    }
    
     if($password_2 != $password){
        array_push($errors, "password must match");
    }
    
    $user_check_query = "SELECT username, email, FROM rider WHERE username ='$username' OR email ='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    
    if ($user) { //IF USER EXISTS
        if ($user['username'] ===$username){
            array_push ($errors, "username already exists");
        }
        if ($user['email'] ===$email){
            array_push ($errors, "email already exists");
        }
    
     }
        //IF THERE ARE NO ERRORS, ADD INPUT TO OUR DATABASE
    
    if(count($errors==0)){
        $password = md5($password); //md5 IS USED TO ENCRYPT PASSWORD
        $query = "INSERT INTO rider (username, email, password) VALUES ('$username', '$email', '$password')";
        
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "you are now registered, login to proceed";
        header('location: index.php');   
        
    }       
}
//LOG-IN EXISTING USERS
if(isset($_POST['login_rider'])){
    $username =  
        mysqli_real_escape_string($db, $_POST['username']);
    $password = 
        mysqli_real_escape_string($db, $_POST['password']);
    //CHECK THAT THE FORM IS FILLED IN CORRECTLY
      if (empty($username)){
        array_push($errors, "username is required");
          }
      if (empty($password)){
        array_push($errors, "Password is required");
   
           }
        if(count($errors)==0){ //check  if it exist in database
            
            $password = md5($password); //COMPARE ENCRYPTED PASSWORD
            $query =  "SELECT username, password FROM rider WHERE username = '$username' AND password = '$password'";
            $user_info= mysqli_query($db, $query);
            
            if(mysqli_num_rows ($user_info) == 1){
                  $_SESSION['username'] = $username;
                  $_SESSION['success'] = "you are now logged in";
                  header('location: userpage.php');
                  echo $_SESSION;
             } 
            else{
                array_push ($errors, 'please you have to sign up');
            }
    
}
}

//REGISTERING NEW DRIVER
if(isset($_POST['reg_driver'])){
    //RECEIVE VALUE FROM FORM
    
 $surname = mysqli_real_escape_string($db, $_POST['surname']); 
 $other = mysqli_real_escape_string($db, $_POST['other']); 
 $email =  mysqli_real_escape_string ($db, $_POST['email']); 
 $password = mysqli_real_escape_string ($db, $_POST['password']);
 $password_2 = mysqli_real_escape_string ($db, $_POST['password_2']);
 $vehicleType = mysqli_real_escape_string($db, $_POST['vehicleType']); 
 $vehicleManu = mysqli_real_escape_string($db, $_POST['vehicleManu']); 
    
    //CHECK THAT THE FORMS ARE FILLED IN CORRECTLY
      
    if(empty($surname)){
        array_push($errors, "surname is required");
    }
     if(empty($other)){
        array_push($errors, "other is required");
         
     if(empty($vehicleType)){
        array_push($errors, "this is required");
    }
    }
     if(empty($vehicleManu)){
        array_push($errors, "this is required");
    }
     if(empty($password)){
        array_push($errors, "password is required");
    }
    if(empty($password_2)){
        array_push($errors, "password is required");
    }
    
     if($password_2 != $password){
        array_push($errors, "password must match");
    }
    
    $user_check_query = "SELECT surname, email, FROM rider WHERE username ='$surname' OR email ='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    
    if ($user) { //IF USER EXISTS
        if ($user['email'] ===$email){
            array_push ($errors, "email already exists");
        }
        if ($user['phone'] ===$phone){
            array_push ($errors, "phone number already exists");
        }
    
     }
        //IF THERE ARE NO ERRORS, ADD INPUT TO OUR DATABASE
    
    if(count($errors==0)){
        $password = md5($password); //md5 IS USED TO ENCRYPT PASSWORD
        $query = "INSERT INTO driver (surname, other, phone, email, password, vehicleType, vehicleManu ) VALUES ('$surname', '$other', '$phone' '$email', $password' '$vehicleType', '$vehicleManu')";
        
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "you are now registered, login to proceed";
        header('location: index.php');   
        
    }       
}
////LOG-IN EXISTING DRIVER
//if(isset($_POST['login'])){
//    $email =  
//        mysqli_real_escape_string($db, $_POST['email']);
//    $password = 
//        mysqli_real_escape_string($db, $_POST['password']);
//    //CHECK THAT THE FORM IS FILLED IN CORRECTLY
//      if (empty($email)){
//        array_push($errors, "email is required");
//          }
//      if (empty($password)){
//        array_push($errors, "Password is required");
//   
//           }
//        if(count($errors)==0){ //check  if it exist in database
//            
//            $password = md5($password); //COMPARE ENCRYPTED PASSWORD
//            $query =  "SELECT email, password FROM driver WHERE username = '$email' AND password = '$password'";
//            $user_info= mysqli_query($db, $query);
//            
//            if(mysqli_num_rows ($user_info) == 1){
//                  $_SESSION['email'] = $email;
//                  $_SESSION['success'] = "you are now logged in";
//                  header('location: driverpage.php');
//                  echo $_SESSION;
//             } 
//            else{
//                array_push ($errors, 'please you have to sign up');
//            }
//    
//}
//}
   
//logout

if(isset($_GET['logout'])){
    session_destroy();
    unset ($_SESSION['username']);
    header ('location: index.php');
}

?>