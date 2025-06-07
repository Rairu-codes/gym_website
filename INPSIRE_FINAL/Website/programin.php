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
        <li class="inactive"><a href="homein.php">Home</a></li>
        <li class="inactive"><a href="aboutin.php">About</a></li>
        <li class="link"><a href="programin.php">Program</a></li>
        <li class="inactive"><a href="planin.php">Plan</a></li>
        <li class="inactive"><a href="bmiin.php">BMI Calculator</a></li>
        <li class="inactive"><a href="statuspage.php">Status</a></li>
      </ul>
      <button class="btn"><li class="link"><a href="home.php">Log Out</a></li></button>
    </nav>

    <section class="section__container explore__container">
        <div class="explore__header">
          <h2 class="section__header">OUR PROGRAM OFFERINGS</h2>
          <div class="explore__nav">
           
          </div>
        </div>
        <div class="explore__grid">
          <div class="explore__card">
            <span><i class="ri-boxing-fill"></i></span>
            <h4>Strength</h4>
            <p>
                Embrace the essence of strength in its physical, mental, and emotional dimensions.
            </p>
            <a href="#">Join Now <i class="ri-arrow-right-line"></i></a>
          </div>
          <div class="explore__card">
            <span><i class="ri-heart-pulse-fill"></i></span>
            <h4>Physical Fitness</h4>
            <p>
              It encompasses a range of activities that improve health, strength,
              flexibility, and overall well-being.
            </p>
            <a href="#">Join Now <i class="ri-arrow-right-line"></i></a>
          </div>
          <div class="explore__card">
            <span><i class="ri-run-line"></i></span>
            <h4>Lose Fat</h4>
            <p>
              Through a combination of workout routines and expert guidance, we'll
              empower you to reach your goals.
            </p>
            <a href="#">Join Now <i class="ri-arrow-right-line"></i></a>
          </div>
          <div class="explore__card">
            <span><i class="ri-shopping-basket-fill"></i></span>
            <h4>Weight Gain</h4>
            <p>
              Designed for individuals, our program offers an effective approach
              to gaining weight in a sustainable manner.
            </p>
            <a href="#">Join Now <i class="ri-arrow-right-line"></i></a>
          </div>
        </div>
      </section>

         

    <section class="section__container class__container">
        <div class="class__image">
          <span class="bg__blur"></span>
          <img src="assets/inspiregym.jpg" alt="class" class="class__img-1" />
          <img src="assets/inspiregym2.jpg" alt="class" class="class__img-2" />
        </div>
        <div class="class__content">
          <h2 class="section__header">THE CLASS YOU WILL GET HERE</h2>
          <p>
            Led by our team of expert and motivational instructors, "The Class You
            Will Get Here" is a high-energy, results-driven session that combines
            a perfect blend of cardio, strength training, and functional
            exercises. Each class is carefully curated to keep you engaged and
            challenged, ensuring you never hit a plateau in your fitness
            endeavors.
          </p>
        </div>
      </section>

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