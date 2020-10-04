<?php

  include_once 'connection.inc.php';

$first_name = mysqli_real_escape_string($conn,$_POST['f_name']);
$last_name = mysqli_real_escape_string($conn,$_POST['l_name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

if(isset($_POST['submit'])){

  if(empty($first_name) || empty($last_name) ||  empty($email) ||  empty($username) ||  empty($password)){
    header("Location: ../index.php?signup=empty");
    exit();
  }
  else{
    if(!preg_match("/^[a-zA-Z]*$/",$first_name) || !preg_match("/^[a-zA-Z]*$/",$last_name)){
      header("Location: ../index.php?signup=char");
      exit();
    }
    else{
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../index.php?signup=email");
        exit();
      }
      else{
        //check if this user already exists on our db or not!!
        $sql = "SELECT * FROM login WHERE username = ? ;";
        $stmt = mysqli_stmt_init($conn);

        //checking if sql statement is prepared or note
        if(!mysqli_stmt_prepare($stmt,$sql)){
          echo "SQL ERROR !!";
          exit();
        }
        else{
          //bind statement
          mysqli_stmt_bind_param($stmt,"s",$username);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $resultCheck = mysqli_num_rows($result);

          if($resultCheck > 0){
            echo "This Person Already exist";
            header("Location: ../index.php?signup=exists");
            exit();
          }
          else{
            $sql = "INSERT INTO login(firstname,lastname,email,username,password) VALUES(?,?,?,?,?);";
            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt,$sql)){
              echo "SQL ERROR !!";
              exit();
            }
            else{
              $hashed_pswd = password_hash($password,PASSWORD_DEFAULT);
              mysqli_stmt_bind_param($stmt,"sssss",$first_name,$last_name,$email,$username,$hashed_pswd);
              mysqli_stmt_execute($stmt);
              echo "Record Inserted";
              header("Location: ../login.php?signup=success");
            }
          }
        }

      }
    }
  }
}
else{
  header("Location: ../index.php?signup=error");
  exit();
}
