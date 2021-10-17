<?php
  require 'header.php';
?>

<main id="mainSignUp">

  <h1>Signup</h1>

  <!-- Check for signup error/success -->
  <?php
    if(isset($_GET['error'])) {
      if($_GET['error']==='emptyfields') {
        echo '<p>Fill in all fields!</p>';
      }
      elseif($_GET['error']==='invalidmailuid') {
        echo '<p>Invalid username and e-mail!</p>';
      }
      elseif($_GET['error']==='invalidmail') {
        echo '<p>Invalid e-mail!</p>';
      }
      elseif($_GET['error']==='invaliduid') {
        echo '<p>Invalid username! No special characters allowed.</p>';
      }
      elseif($_GET['error']==='passwordcheck') {
        echo '<p>Your passwords do not match!</p>';
      }
      elseif($_GET['error']==='invalidmailuid') {
        echo '<p>Username is already taken!</p>';
      }
    }
    elseif(isset($_GET['signup']) && $_GET['signup']==='success') {
      echo '<p>Signup successful!</p>';
    }
  ?>
  <!-- Form for signup -->
  <form action="includes/signup.inc.php" method="POST" id="signUpForm">
    <!--More better done below <?php
      if(isset($_GET['uid'])){
        echo '<input type="text" name="uid" placeholder="Username" value='.$_GET['uid'].'>';
      }
      else {
        echo '<input type="text" name="uid" placeholder="Username">';
      }
    ?> -->
    <?php
      echo '<input type="text" name="uid" placeholder="Username" value='.( ( isset($_GET['uid'] ) ) ? $_GET['uid'] : "" ).'>';
      echo '<input type="text" name="email" placeholder="E-mail" value='.((isset($_GET['email'])) ? $_GET['email'] : "").'>';
      echo '<input type="text" name="address" placeholder="Street Address" value='.((isset($_GET['address'])) ? $_GET['address'] : "").'>';
    ?>
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwd-repeat" placeholder="Confirm Password">
    <button type="submit" name="signup-submit">Sign Up</button>
  </form>

</main>
  
</body>
</html>