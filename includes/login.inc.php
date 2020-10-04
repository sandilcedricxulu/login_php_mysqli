<?php

  include_once 'connection.inc.php';
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);

if(isset($_POST['submit'])){

  if(empty($username) || empty($password)){
    header("Location: ../login.php?login=empty");
    exit();
  }
  else{
    $sql = "SELECT * FROM login WHERE username = ? ;";
    $stmt = mysqli_stmt_init($conn);

      if(!mysqli_stmt_prepare($stmt,$sql)){
          echo "Error SQL";
          header("Location: ../login.php?login=error");
          exit();
      }
    else{
      mysqli_stmt_bind_param($stmt,"s",$username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $resultCheck = mysqli_num_rows($result);

      if($resultCheck > 0){
          while($row = mysqli_fetch_assoc($result)){
            if(password_verify($password,$row['password']) == true && $username == $row['username']){
              header("Location: ../home.php?login=succes");
              exit();
            }
          }
      }
      else{
        echo "Record Does not exits !!";
        header("Location: ../login.php?login=notexist");
        exit();
      }
    }
  }
}
elseif (isset($_POST['forgot'])) {
echo "bull";
}
else{
  
}
