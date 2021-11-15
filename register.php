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
  	<h2>Register</h2>	

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
      <input type="text" name="fullname" placeholder="Enter Full Name Here" value="<?php echo $fullname; ?>">
  	  <input type="text" name="username"  placeholder="Enter Username Here" value="<?php echo $username; ?>">
      <input type="text" name="number"  placeholder="Enter Phone Number Here" value="<?php echo $number; ?>">
      <input type="email" name="email"  placeholder="Enter Email Here" value="<?php echo $email; ?>">
      <input type="text" name="location"  placeholder="Enter Location Here" value="<?php echo $location; ?>">
      <input type="password"  placeholder="Enter Password Here"name="password_1">
      <input type="password"  placeholder="Enter Confirm Password Here" name="password_2">

      <button type="submit" class="btn" name="reg_user">Register</button>
    <p class="link">
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
</div>
</div>
  </body>
</html>