<?php
include('db.php');

function redirectToLoginPage(){
    header('Location: index.html');
    exit();
}

function function_alert($message){
    // Display the alert box 
    echo "<script>alert('$message');</script>";
  } 

if(isset($_POST['login'])){
  session_start(); 
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM tbl_login WHERE username = :username AND password = :password";  
  $statement = $pdo->prepare($query);  
  $statement->execute(  
       array(  
            'username'     =>     $username,  
            'password'     =>     $password  
       )  
  );

  $count = $statement->rowCount();  
  if($count > 0)  
  {
       $_SESSION["username"] = $_POST["username"];  
       header("location:dashboard.php?success");  
  }
  else  
  {
      header("location:login.php?err");  
  }
}

if(isset($_POST['add_user'])){
  
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $type = $_POST['role'];
  $fullname = $firstname.' '.$lastname;
  function_alert($fullname);

  $insert_query = "INSERT INTO `tbl_login`(`fullname`, `username`, `password`, `created_at`, `type`) VALUES (:fullname, :username, :password, NOW(), :type)";
  $insert_statement = $pdo->prepare($insert_query);
  $insert_result = $insert_statement->execute(  
    array(  
         'fullname'     =>     $fullname,  
         'username'     =>     $username,
         'password'     =>     $password,
         'type'     =>     $type,
    )  
  );
  if($insert_result) {
    header('location: user.php');
  }

}

?>
