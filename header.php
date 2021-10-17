<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OoIHaveThat!</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>

  <aside id="left-aside">

  </aside>

  <header>
    <a href="index.php"><button id="home">Home</button></a>
    <a href="sandbox.php"><button id="sandbox">Sandbox</button></a>
    <button id="rentATool">RENT a TOOL</button>
    <?php
      if (isset($_SESSION['userId'])) {
        echo '
          <form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">Logout</button>
          </form>';
      }
      else {
        echo '
          <button id="login" type="submit" name="login-submit">Login</button>
          <a href="signup.php"><button id="signUp">Sign Up</button></a>';
      }
    ?>
  </header>
  
  <aside id="right-aside">
    Adds Adds Adds Adds Adds Adds Adds Adds Adds Adds Adds Adds 
    Adds Adds Adds Adds Adds Adds Adds Adds Adds Adds Adds Adds 
    Adds Adds Adds Adds Adds Adds Adds Adds Adds Adds Adds Adds 
    Adds Adds Adds Adds Adds Adds Adds Adds Adds Adds Adds Adds 
    Adds Adds Adds Adds Adds Adds Adds Adds Adds Adds Adds Adds 
  </aside>