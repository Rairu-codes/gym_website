<?php require_once('db-connect-gym.php') ?>
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


      <form action="handler.php" method="post">
      <h2 class="section__header">INSPIRE FITNESS </h2>
                <div class="register-form" id="reg">
                    <h2> CREATE AN ACCOUNT </h2>  
                    <div class="name">
                    <span>Full Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <input type="text" class="name" name="name" placeholder="*Full Name" required/>
                    </div>

                    <div class="age">
                    <span>Age: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <input type="text" class="AGEnum" name="agenum" placeholder="Age" required/>
                    </div>

                    <div class="sex">
                    <span>Sex:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <input type="text" class="Sex" name="seX" placeholder="*Sex" required>
                    </div>

                    <div class="Email">
                    <span>E-Mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <input type="text" class="emailR" name="emailR" placeholder="*Email" required>
                    </div>

                    <div class="Password">
                    <span>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <input type="password" class="passR" name="passR" placeholder="*Password" required>
                    </div>

                    <div class="Phone">
                    <span>Telephone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                    <input type="text" class="phonenum" name="phoneNum" placeholder="Phone Number" required/>
                    </div>
                    
                    
                    <br> <br>
                    <div class="login_button">
                        <div><input type="submit" class="reg-bot" name="reg-bot" value="REGISTER" onclick="createduser(event)" /></div>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
            </form>

            <script>
const loginForm = document.querySelector(".login-form");
const registerForm = document.querySelector(".register-form");
const loginButton = document.querySelector(".login");
const registerButton = document.querySelector(".reg");
const clog = document.getElementById("clog");
const creg = document.getElementById("creg");
const agenumInput = document.querySelector(".AGEnum");
const phoneNumInput = document.querySelector(".phonenum");
const nameInput = document.querySelector(".name");
const emailRInput = document.querySelector(".emailR");
const passRInput = document.querySelector(".passR");
const seXInput =document.querySelector(".seX")
const clearFieldsButton = document.getElementById("clearFieldsButton");
const emailInput = document.getElementById("emailInput");
const passInput = document.getElementById("passInput");



function createduser(event) {
    const agenum = document.querySelector(".AGEnum").value;
    const phoneNum =document.querySelector(".phonenum").value;
    const name = document.querySelector(".name").value;
    const emailR = document.querySelector(".emailR").value;
    const passR = document.querySelector(".passR").value;
    const errorContainer = document.getElementById("registration-error");
    errorContainer.innerHTML = ""; // Clear previous error messages

    if (!seX || !name || !emailR || !passR) {
        event.preventDefault(); // Prevent form submission
        errorContainer.textContent = "All fields are required";
    }
}
            </script>




</html>

