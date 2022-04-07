<?php
    INCLUDE("database.php");
    include("security.php");
?>

<html>
  <head>
    <title>Sign up</title>
  </head>
  <body>
   <h2> Sign up</h2>
    <form action="signup.php" method="POST">
            
    <label for="username">Username:</label><br>
     <input type="text" id="username" name="username"><br>
     <label for="password">Password:</label><br>
     <input type="password" id="password" name="password"><br>
            
            <button type="submit">Sign up</button>
         </form>
  </body>
</html>
<?php
security_addNewUser();
?>
