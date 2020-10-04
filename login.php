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
        <h1>Login</h1>
      </header>
      <hr>
      <div class="signup-container">
        <div class="back-color">
          <form class="form-group" action="includes/login.inc.php" method="POST">
              <label><h3 style="color:#ffffff;">Username:</h3></label><hr>
              <input type="text" name="username" placeholder="enter username" class="form-control"><br>
              <label><h3 style="color:#ffffff;">Password:</h3></label><hr>
              <input type="text" name="password" placeholder="enter password" class="form-control"><br>
              <button type="submit" name="submit" class="btn btn-md btn-outline-primary">Login</button><br><br>
              <button type="submit" name="forgot" class="btn btn-md btn-outline-primary">Forgot Password</button><hr>
          </form>
        </div>
      </div>
  </div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>
</body>
