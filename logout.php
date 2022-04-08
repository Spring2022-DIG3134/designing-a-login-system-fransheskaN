<?php
  include("security.php");
  security_logout();
?>
 <head>
    <title>Logged out</title>
  </head>
  <body>
  <h2>Youre logged out.</h2>
  <h1> log back in? </h1>
  <a href='login.php'>Login</a>
  <h1>Or create a new account </h1>
  <a href='signup.php'>Signup</a>
  </body>
</html>