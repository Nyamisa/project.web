//  MAKE ORDER-->
if (isset($_POST['order'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $coconut = mysqli_real_escape_string($db, $_POST['coconut']);
  $vanilla = mysqli_real_escape_string($db, $_POST['vanilla']);
  $heart = mysqli_real_escape_string($db, $_POST['heart']);
  $date = mysqli_real_escape_string($db, $_POST['date']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "username is required"); }
  if (empty($coconut)) { array_push($errors, "coconut is required"); }
  if (empty($vanilla)) { array_push($errors, "vanilla is required"); }
  if (empty($heart)) { array_push($errors, "heart is required"); }
  if (empty($date)) { array_push($errors, "date is required"); }

    $query = "INSERT INTO order (username, coconut, vanilla, heart, date) 
          VALUES('$username','$coconut','$vanilla','$heart','$date')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Your order was successful";
    header('location: index.php');
  }