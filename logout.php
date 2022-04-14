<?php
  include("security.php");
  
?>
<html>
 <head>
    <title>Logged out</title>
  </head>
  <body>
  <?php
  if(security_loggedIn()) {
    security_logout();
?>
  <h2>Youre logged out.</h2>
  <?php  
    } else {
      ?>  
  <h1> log back in? </h1>
  <a href='login.php'>Login</a>
  <h1>Or create a new account </h1>
  <a href='signup.php'>Signup</a>
  <a href='index.php'>Index</a>
  </body>
</html>