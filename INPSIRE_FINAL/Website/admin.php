<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css" />
    <title>Inspire Fitness</title>
  </head>
  <body>
  <section class="section__container explore__container">
  <h2 class="section__header">INSPIRE FITNESS </h2>
      <div class="login_form">
        <h2>SIGN IN</h2>
      <form action="adminlogin.php" method="post">
    <br> <br>
    <div class="Email">
    <i class="ri-account-circle-fill"></i><span>&nbsp;&nbsp;E-Mail:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <input type="text" class="email" name="email" placeholder="E-Mail" id="emailInput" required = "required" /> <br> <br>
    </div>
    
    <div class="Password">
    <i class="ri-lock-password-fill"></i><span>&nbsp;&nbsp;Password:  &nbsp;</span>
    <input type="password" class="pass" name="pass" placeholder="Password" id="passInput"required = "required"/>
    <br> <br>
    </div>
    
    <div class="login_button">
        <input type="submit" class="log-bot" value="Log In" li class="link"><a href="Website/statuspage.php"></li>
    </div>
    </div>
    </form>
</body>
    <script>
     

const loginForm = document.querySelector(".login-form");
const emailInput = document.getElementById("emailInput");
const passInput = document.getElementById("passInput");
