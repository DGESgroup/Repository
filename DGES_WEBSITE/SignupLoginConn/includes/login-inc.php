<?php

session_start();

if (isset($_POST['submit'])) {
  include 'db-inc.php';

  $email = mysqli_real_escape_string($conn, $_POST['user']);
  $pwd = mysqli_real_escape_string($conn, $_POST['password']);

  // error handlers
  // check if input are Empty
  if (empty($email) || empty($pwd)) {
    header("Location: ../index.php?login=empty");
    exit();
  } else {
    // check if username exit inside the db
    //Make login possible with username or email.
    $sql ="SELECT * FROM users WHERE user_email = '$email' ";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck < 1) {

      header("Location: ../index.php?login=error");
      exit();
    } else {
      if ($row = mysqli_fetch_assoc($result)) {
        // De-hashed the password
        $hashedpwdcheck = password_verify($pwd, $row['user_password']);
        if ($hashedpwdcheck == false) {
          header("Location: ../index.php?login=error");
          exit();
        } elseif ($hashedpwdcheck == true) {
          // log in the user in a specific page in the site
          $_SESSION['u_email'] = $row['user_email'];
          $_SESSION['u_first'] = $row['user_first'];
          $_SESSION['u_last'] = $row['user_last'];

          header("Location: ../index.php?login=success");
          exit();
        }
      }
    }
  }
} else {
  header("Location: ../index.php?login=error");
  exit();
}
