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
    
          <section class="section__container explore__container">
          <button class="btn"><li class="link"><a href="homein.php">Home</a></li></button>
          <h2 class="section__header">INSPIRE FITNESS </h2>
               <div class="bmi_calculator">
               <h1>INSPIRE FITNESS PAYMENT</h1>
               <form action="status.php" method="post" id="quiz-form">             
               <div class="balance">
              <p>YOUR BALANCE IS: ₱1000</p>
              </div>
              
              
              <div class="name">
              <span>Client Name:    &nbsp;&nbsp;&nbsp; </span>
              <input type="text" class="name" name="name" placeholder="Name" required = "required" /> <br> <br>
    
              <span>Program:        &nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
              <input type="text" class="program" name="program" placeholder="Program" required = "required" /> <br> <br>

              <span>Gcash Number: </span>
              <input type="text" class="Gcashnum" name="gcashnum" pattern="[0-9]{11}" placeholder="Gcash Number" required = "required"/>
              <br><br>
            

           
              </div>
          
              <div class="login_button">
                        <div><input type="submit" class="reg-bot" name="reg-bot" value="Pay" onclick="payments(event)" /></div>
                          
                        </form>
                        <script>     

const paymentForm = document.querySelector(".payment-form");
const CNInput = document.querySelector(".name");
const GNInput = document.querySelector(".Gcashnum");
const PMInput =document.querySelector(".prog");

function payments(event) {
    const name = document.querySelector(".name").value;
    const gcashnum =document.querySelector(".Gcashnum").value;
    const Prog =document.querySelector(".prog");
    errorContainer.innerHTML = ""; // Clear previous error messages

    if (!name || !gcashnum || !Prog) {
        event.preventDefault(); // Prevent form submission
        errorContainer.textContent = "All fields are required";
    }
}
            </script>



</body>
</html>
