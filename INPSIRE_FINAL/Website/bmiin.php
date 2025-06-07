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
  <?php
          $Height="";
          $Weight="";
          $BMIIndex="";
          $Message="";
          $ErrorW="";
          $ErrorH= "";
          $BMI="";
       

         if ($_SERVER["REQUEST_METHOD"] == "POST") {
                 $Height=$_POST['Height'];
                 $Weight=$_POST['Weight'];
                 $BMIIndex=$_POST['BMI'];
 
                 if(!is_numeric($Height)) {
                  $ErrorH = "*Invalid Height Format!"; // Display an exception message when entering invalid character/
              }
  
               if(!is_numeric($Weight)) {
                  $ErrorW = "*Invalid Weight Format!" ;// Display an exception message when entering invalid character
              }
              else if(!is_numeric($Height)) {
                  $ErrorH = "*Invalid Height Format!"; // Display an exception message when both field entered an invalid character/
              }
                else{
                  $BMIIndex=($Weight/($Height*$Height));
                         /*Set Message*/
                         if ($BMIIndex < 18.5) {
                                 $Message="<span class='under';> Underweight, The preferred program for you are Weight Gain and Physical Fitness. </span>";
                         } else if ($BMIIndex <= 24.9) {
                                 $Message="<span class='normal';>Normal, The preferred program for you are Strength and Physical Fitness.</span>";
                         } else if ($BMIIndex <= 29.9) {
                                 $Message="<span class='over';>Overweight, The preferred program for you are Fat loss and Physical Fitness.</span>";
                         } else {
                                 $Message="<span class='error';>Obese, The preferred program for you are Fat loss and Physical Fitness.</span>";
                         }
                 }
         } 
         ?>
    <nav>
      <div class="nav__logo">
        <a href="#"><img src="assets/logo.png" alt="logo" /></a>
      </div>
      <ul class="nav__links">
        <li class="inactive"><a href="homein.php">Home</a></li>
        <li class="inactive"><a href="aboutin.php">About</a></li>
        <li class="inactive"><a href="programin.php">Program</a></li>
        <li class="inactive"><a href="planin.php">Plan</a></li>
        <li class="link"><a href="bmiin.php">BMI Calculator</a></li>
        <li class="inactive"><a href="statuspage.php">Status</a></li>
      </ul>
      <button class="btn"><li class="link"><a href="home.php">Log Out</a></li></button>

        </div>
    </nav>

          <section class="section__container ">
               <div class="bmi_calculator">
               <h2>CHECK YOUR BMI</h2>
               <form action="" method="post" id="quiz-form">
          <div class="height">
              <span>Enter your Height: &nbsp;</span>
              <input type="float" name="Height"  placeholder="Meters" id="Height" required = "required" value="<?php echo $Height; ?>"/>
              <?php if ($ErrorH && !is_numeric($Height)){
                    ?>  <span class="error"><?php echo $ErrorH; ?></span>  <!-- display error -->
                <?php } ?>
         
          <div class="weight">
              <span>Enter your Weight:&nbsp;</span>
              <input type="float" name="Weight"  placeholder="Kilograms" id="Weight" required = "required" value="<?php echo $Weight; ?>"/>
              <?php if ($ErrorW && !is_numeric($Weight)){
                    ?>  <span class="error"><?php echo $ErrorW; ?></span>  <!-- display error -->
                <?php } ?>
          
          <div class="submit">
              <input type="submit" name="BMI" value="CALCULATE">
              <input type="reset" value="CLEAR">
          </div>

          <?php if ($BMIIndex !== "") { ?>
          <h4>YOUR BMI IS:   <?php echo $BMIIndex; ?></h4>
          <h4>YOU ARE: <?php echo $Message; ?></h4>
          <?php } ?>
          </div>
          </form>
          </body>
         
          <footer class="section__container footer__container">
        <span class="bg__blur"></span>
        <span class="bg__blur footer__blur"></span>
      </footer>
      <div class="footer__bar">
        <p><centre>Copyright © 2023 ANBC. All rights reserved.</p></centre>
        </section>
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