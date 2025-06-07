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
        <li class="inactive"><a href="home.php">Home</a></li>
        <li class="link"><a href="about.php">About</a></li>
        <li class="inactive"><a href="program.php">Program</a></li>
        <li class="inactive"><a href="plan.php">Plan</a></li>
        <li class="inactive"><a href="bmi.php">BMI Calculator</a></li>
      </ul>
      <button class="btn"><li class="link"><a href="signin.php">Sign in</a></li></button>
      <button class="btn"><li class="link"><a href="joinus.php">JOIN  US</a></li></button>
    </nav>

      <section class="section__container join__container">
        <h2 class="section__header">ABOUT INSPIRE FITNESS</h2>
        <p class="section__subheader">
            The premier all-around sports training facility south of Metro Manila, 
            featuring a wide array of premium facilities and world-class equipment. 
            INSPIRE has helped train and produce top tier athletes who have garnered glory for their teams, schools, and even for the country.
        </p>
        <p>
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
        </p>

        <h2 class="section__header">VISION</h2>
        <p class="section__subheader">
            To ignite and nurture the champion spirit.
        </p>
        <p>
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
        </p>

        <h2 class="section__header">MISSION</h2>
        <p class="section__subheader">
            To develop individuals to their full potential
            through the art and science of health, wellness,
            fitness, and high performance.
        </p>
        <p>
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
        </p>

        <h2 class="section__header">WHY JOIN US ?</h2>
        <p class="section__subheader">
          Our diverse membership base creates a friendly and supportive
          atmosphere, where you can make friends and stay motivated.
        </p>
        <div class="join__image">
          <img src="assets/join.png" alt="Join" />
          <div class="join__grid">
            <div class="join__card">
              <span><i class="ri-user-star-fill"></i></span>
              <div class="join__card__content">
                <h4>Personal Trainer</h4>
                <p>Unlock your potential with our expert Personal Trainers.</p>
              </div>
            </div>
            <div class="join__card">
              <span><i class="ri-vidicon-fill"></i></span>
              <div class="join__card__content">
                <h4>Practice Sessions</h4>
                <p>Elevate your fitness with practice sessions.</p>
              </div>
            </div>
            <div class="join__card">
              <span><i class="ri-building-line"></i></span>
              <div class="join__card__content">
                <h4>Good Management</h4>
                <p>Supportive management, for your fitness success.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <p>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
        &nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
    </p>

      <h2 class="section__header">LOCATION</h2>
      <p class="section__subheader">
        Km. 53 Pan-Philippine Highway, Calamba, Laguna,
        Philippines, 4027
      </p>
      

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