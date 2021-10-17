<?php
//Check make sure they got here by hitting Submit button
if (isset($_POST['signup-submit'])) {

  require 'dbConnection.inc.php';

  $username       = $_POST['uid'];
  $email          = $_POST['email'];
  $address        = $_POST['address'];
  $password       = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];
  //Lat and Lon provided by GoogleMaps API
  $latitude   = 39.0001;
  $longitude  = -94.0001;

  //Check for empty fields
  if(empty($username) || empty($email) || empty($address) || empty($password) || empty($passwordRepeat)) {
    header("Location: ../signup.php?error=emptyfields&uid=".$username."&email=".$email."&address=".$address);
    exit();
  }
  //Check for valid email and no special characters in uid
  elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=invalidmailuid&address=".$address);
  }
  //Check for JUST valid email
  elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidmail&uid=".$username."&address=".$address);
    exit();
  }
  //Check for JUST no special characters in uid
  elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=invaliduid&email=".$email."&address=".$address);
    exit();
  }
  //Check for password mismatch
  elseif($password!==$passwordRepeat) {
    header("Location: ../signup.php?error=passwordcheck&uid=".$username."&email=".$email."&address=".$address);
    exit();
  }
  
  //If all good, insert into users table
  else {
    $sql = "INSERT INTO users (uidUsers, emailUsers, addressUsers, pwdUsers, latitude, longitude) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../signup.php?error=sqlerror");
      exit();
    }
    else {
      $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

      mysqli_stmt_bind_param($stmt, "ssssss", $username, $email, $address, $hashedPwd, $latitude, $longitude);
      mysqli_stmt_execute($stmt);
      header("Location: ../signup.php?signup=success");
      exit();
    }
  }
  //Bugproofing
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

} else {
  header("Location: ../signup.php");
  exit();
}