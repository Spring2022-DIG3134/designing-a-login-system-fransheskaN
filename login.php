<?php
  include("security.php");
    if(!security_loggedIn()) {
?>
 <html>
  <head>
    <title>Log in</title>
  </head>
  <body>
  <h2>Log in</h2>
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
  <a href='logout.php'>Logout</a>
      <?php
    }
   ?>
   </body>
</html>
<?php
        security_login();
?>