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
    <h2>Make Order</h2>  

  <form method="post" action="order.php">
    <?php include('errors.php'); ?>
      <input type="text" name="username" placeholder="Enter Username Here" value="<?php echo $username; ?>">
      <input type="text" name="coconut" placeholder="Number of Coconut Cakes" value="<?php echo $coconut; ?>">
      <input type="text" name="vanilla" placeholder="Number of vanilla Cakes" value="<?php echo $vanilla; ?>">
      <input type="text" name="heart" placeholder="Number of heart Cakes" value="<?php echo $heart; ?>">
      <input type="date" name="date" placeholder="select date Here" value="<?php echo $date; ?>">

      <button type="submit" class="btn" name="order_user">Make Order</button>
  </form>
</div>
</div>
  </body>
</html>