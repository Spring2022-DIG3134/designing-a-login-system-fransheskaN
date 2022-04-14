<?php
  include("security.php");
?>
 <html>
  <head>
    <title>Update your password</title>
  </head>
  <body>
  <?php
  if(security_loggedIn()) {
?>
  <h2>Update your password</h2>
    <form action="update.php" method="POST">
    <label for="username">Username:</label><br>
     <input type="text"  id="username" name="username"><br>
     <label for="password">Password:</label><br>
     <input type="password" id="password" name="password"><br>
     <label for="newpassword">New Password:</label><br>
     <input type="password" id=" newpassword" name="newpassword"><br>
    <button type="submit">Update password</button>
         </form>
         <?php  
    } else {
      ?>  
         <a href='signup.php'>signup</a>
   </body>
</html>
<?php
       security_updatePassword();
?>