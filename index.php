<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
</head>
<body>
  <div class="full-container">
      <header class="main-header">
        <h1>Sign Up</h1>
      </header>
      <hr>
      <div class="signup-container">
        <div class="back-color">
          <form class="form-group" action="includes/signup.inc.php" method="POST">
              <input type="text" name="f_name" placeholder="enter name" class="form-control"><br>
              <input type="text" name="l_name" placeholder="enter surname" class="form-control"><br>
              <input type="email" name="email" placeholder="enter e-mail" class="form-control"><br>
              <input type="text" name="username" placeholder="enter username" class="form-control"><br>
              <input type="text" name="password" placeholder="enter password" class="form-control"><br>
              <button type="submit" name="submit" class="btn btn-md btn-outline-primary">Sign-Up</button>
          </form>
        </div>
      </div>
  </div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
  </html>
</body>
