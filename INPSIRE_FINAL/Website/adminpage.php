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
      <ul class="nav__links">
        <li class="link"><a href="homein.php">Home</a></li>
        <li class="inactive"><a href="aboutin.php">About</a></li>
        <li class="inactive"><a href="programin.php">Program</a></li>
        <li class="inactive"><a href="planin.php">Plan</a></li>
        <li class="inactive"><a href="bmiin.php">BMI Calculator</a></li>
        <li class="link"><a href="adminpage.php">Accounts</a></li>
      </ul>
      <button class="btn"><li class="link"><a href="home.php">Log Out</a></li></button>
        </div>
    </nav>
          <section class="section__container ">             
      </div>
<!-- HTML Form for Search -->
<div class= "table">
<form method="POST" action="">
    <div class="search">
    <input type="text" class="search" name="search"placeholder="Search Full Name">
    </div>
    <div class="srch">
    <input type="submit" value="Submit">
</form>
</body>
  </html>
 

<?php
// Database connection details
$servername = "localhost";
$username = "bscsdemouser";
$password = "lylepogi24";
$dbname = "gym";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT FullName, Plan, Amount, Num, Program FROM stat";
$result = $conn->query($sql);
// Check if the query was successful
if ($result->num_rows > 0) {
    // Output data of each row
    echo "<span class= 'table';> <table border='1'> </span>"; 
    echo "<span class= 'table;><tr><th>FullName</th><th>Plan</th><th>Amount</th><th>Num</th></tr><th>Program</th></span";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["FullName"] . "</td><td>" . $row["Plan"] . "</td><td>" . $row["Amount"] . "</td><td>" . $row["Num"] . "</td><td>" . $row["Program"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<span class='table';>0 results</span>";
}
if(isset($_POST['search'])){
    $search = $_POST['search'];
    // Query to fetch data from the users table based on the search term
    $sql = "SELECT FullName, Plan, Amount, Num, Program FROM stat WHERE FullName LIKE '%$search%'";
    $result = $conn->query($sql);
  
    // Check if the query was successful
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<span class= 'table';><table border='1'></span>";
        echo "<span class= 'table';><tr><th>FullName</th><th>Plan</th><th>Amount</th><th>Num</th><th>Program</th></tr></span>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["FullName"] . "</td><td>" . $row["Plan"] . "</td><td>" . $row["Amount"] . "</td><td>" . $row["Num"] . "</td><td>" . $row["Program"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<span class='table';>0 results</span>";
    }   
  } 


  
// Close the database connection
$conn->close();
?>


</div>

  
