<?php
  include("security.php");
?>
 <html>
  <head>
    <title>Welcome</title>
  </head>
  <body>
  <h1>Welcome please choose an option</h1>
      <?php
       if(!security_loggedIn()) {
        ?>
      <a href='signup.php'>Sign up</a>
      <a href='login.php'>Login</a>

<?php  
    } else {
      ?>  
  <a href='update.php'>Update</a>
  <a href='remove.php'>Remove</a>
      <?php
    }
   ?>
   </body>
</html>
<?php
        security_loggedIn();
?>