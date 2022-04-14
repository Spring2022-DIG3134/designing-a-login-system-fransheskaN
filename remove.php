<?php
  include("security.php");
?>

 <html>
  <head>
    <title>Delete your account</title>
  </head>
  <body>
  <h2>Delete your account</h2>
  <?php
  if(security_loggedIn()) {
?>
    <form action="remove.php" method="POST">
    <label for="username">Username:</label><br>
     <input type="text"  id="username" name="username"><br>
     <label for="password">Password:</label><br>
     <input type="password" id="password" name="password"><br>
    <button type="submit">Log in</button>
    
         </form>
         <?php  
    } else {
      ?>  
         <a href='signup.php'>signup</a>

   </body>
</html>
<?php
        security_deleteUser();
        security_logout();
?>