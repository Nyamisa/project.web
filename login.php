<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Gemaries Customers</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="main">
    <h1>Gemaries Confectionaries</h1>
    <div class="form">
  	<h2>Login</h2>
  
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  		<input type="username" name="username" placeholder="Enter Username Here" >
      <input type="password" name="password" placeholder="Enter Password Here">
      
      <button type="submit" class="btn" name="login_user">Login</button>
    <p class="link">
      Don't have an account?<a href="register.php">Sign up</a>
    </p>
  </form>
</div>
</div>
</div>
</body>
</html>