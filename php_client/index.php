<?php require_once('./skeleton-api-client.php'); ?>

<form id="skeleton_login" method="post">

  <label for="login_email">
    Your email: 
    <input required type="email" name="login_email" id="login_email">
  </label>

  <br>

  <label for="login_pass">
    Your password: 
    <input required type="password" name="login_pass" id="login_pass">
  </label>
  
  <br>

  <input type="submit" value="Login">

</form>