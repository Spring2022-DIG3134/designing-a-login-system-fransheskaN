<?php
  include("security.php");
   ?>
 <html>
  <head>
    <title>Log in</title>
  </head>
  <?php
  if(!security_loggedIn()) {
?>
  <body>
  <h2>Log in</h2>
  <h3>(Click login twice)<h3>
    <form action="login.php" method="POST">
    <label for="username">Username:</label><br>
     <input type="text"  id="username" name="username"><br>
     <label for="password">Password:</label><br>
     <input type="password" id="password" name="password"><br>
    <button type="submit">Log in</button>
         </form>
<?php  
    } else {
      ?>  
  <h2>Welcome</h2>
  <a href='index.php'>Index</a>
      <?php
      
    }
    security_login();
   ?>
   </body>
</html>
