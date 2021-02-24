<?php

include '../components/header.php'; ?>
<link rel="stylesheet" href="../css/stylerl.css" />

<div class="container">
  <div class="link-container">
    <a id="firstA" onclick="changeForm(0)" href="#">Login</a>
    <a onclick="changeForm(1)" href="#">Register</a>
  </div>
  <form id="mainForm" action="../businessLogic/loginVerify.php" method="post" onsubmit="return validate()">
    <div class="login forms form-style">
      <label for="">Username:</label>
      <input type="text" name='username' class="input" placeholder="username..." />
      <label for="">Password:</label>
      <input type="password" name='password' class="input" placeholder="password..." />
      <input id="submit" type="submit" name='login-btn' class="input submit" value="Login" />
    </div>
    <div class="register forms hidden">
      <label for="">Name:</label>
      <input type="text" class="input" name="register-username" placeholder="username..." />
      <label for="">Lastname:</label>
      <input type="text" class="input" name="register-lastname" placeholder="last name..." />
      <label for="">Email:</label>
      <input type="text" class="input" name="register-email" placeholder="example@gmail.com..." />
      <label for="">Password:</label>
      <input type="password" class="input" name="register-password" placeholder="password..." />
      <input id="submitRegister" name="register-btn" type="submit" class="input submit" value="Register" />
    </div>
  </form>
</div>

</body>
<script src="../js/main.js"></script>
</html>