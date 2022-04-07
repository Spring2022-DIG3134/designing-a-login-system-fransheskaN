<?php
  include("security.php");
  security_validate();
  include("account.php")
?>

<html>
  <head>
    <title>Log in</title>
    <style>td{background-color:#f2f2f2;color:grey;padding:30px;}tr{border:1px solid #ddd; }table{border-collapse: collapse;}</style>
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
  </body>
</html>
<?php
security_login();
?>