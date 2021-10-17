<?php
  require 'header.php';

  $password = 'Wters33!';
  $hash     = password_hash($password, PASSWORD_DEFAULT);
  echo $hash;
?>

  <footer></footer>
  
  <script src="app.js"></script>
</body>
</html>