<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="style.css" />
    <title>Inspire Fitness</title>
  </head>
  <body>
    <nav>
      <div class="nav__logo">
        <a href="#"><img src="assets/logo.png" alt="logo" /></a>
      </div>
      <ul class="nav__links">
        <li class="link"><a href="home.php">Home</a></li>
        <li class="inactive"><a href="about.php">About</a></li>
        <li class="inactive"><a href="program.php">Program</a></li>
        <li class="inactive"><a href="plan.php">Plan</a></li>
        <li class="inactive"><a href="bmi.php">BMI Calculator</a></li>
      </ul>
      <button class="btn"><li class="link"><a href="signin.php">Sign in</a></li></button>
      <button class="btn"><li class="link"><a href="joinus.php">JOIN  US</a></li></button>
    </div>
    </nav>

    <header class="section__container header__container">
      <div class="header__content">
        <span class="bg__blur"></span>
        <span class="bg__blur header__blur"></span>
        <h4>HIGH-PERFORMANCE GYM</h4>
        <h1><span>JOIN US</span> BECOME A MEMBER</h1>
        <p>
        Unleash your full potential and set out on a path to becoming a more confident, fit, and powerful version of yourself. 
        Join us now to see the incredible changes your body is capable of!
        </p>
      </div>
      <div class="header__image">
      <img src="assets/inspire.jpg" alt="class" class="class__img-1" />
      <img src="assets/inspiregym.jpg" alt="class" class="class__img-1" />
          <img src="assets/inspiregym2.jpg" alt="class" class="class__img-2" />
      </div>
    </header>


    <footer class="section__container footer__container">
        <span class="bg__blur"></span>
        <span class="bg__blur footer__blur"></span>
        <div class="footer__col">
          <div class="footer__logo"><img src="assets/logo.png" alt="logo" /></div>
          <p>
            Take the first step towards a healthier, stronger you with our
            unbeatable pricing plans. Let's sweat, achieve, and conquer together!
          </p>
          <div class="footer__socials">
            <a href="#"><i class="ri-facebook-fill"></i></a>
            <a href="#"><i class="ri-instagram-line"></i></a>
            <a href="#"><i class="ri-twitter-fill"></i></a>
          </div>
        </div>
      </footer>
      <div class="footer__bar">
        <p><centre>Copyright © 2023 ANBC. All rights reserved.</p></centre>
      </div>

    </body>
    
    <?php
$servername = "localhost";
$username = "bscsdemouser";
$password = "lylepogi24";

//Create connection
$conn = new mysqli($servername, $username, $password);

// check connection
if ($conn->connect_error){
    die ("Connection Failed: " . $conn->connect_error);

}

?>

</html>