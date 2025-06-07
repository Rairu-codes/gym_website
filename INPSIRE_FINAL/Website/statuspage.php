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
        <li class="inactive"><a href="programin.php">Program</a></li>
        <li class="inactive"><a href="planin.php">Plan</a></li>
        <li class="inactive"><a href="bmiin.php">BMI Calculator</a></li>
        <li class="link"><a href="statuspage.php">Status</a></li>
      </ul>
      <button class="btn"><li class="link"><a href="home.php">Log Out</a></li></button>

        </div>
    </nav>

          <section class="section__container ">
               
      </div>
          
    </body>

    <?php
$servername = "localhost";
$username = "bscsdemouser";
$password = "lylepogi24";
$dbname = "gym";


$conn = new mysqli($servername, $username,$password,$dbname);
if ($conn->connect_error){
    die ("Connection Failed: " . $conn->connect_error);
}

if(isset($_GET['search'])){
  $search = $_GET['search'];
  // Query to fetch data from the users table based on the search term
  $sql = "SELECT FullName, Plan, Num, Program FROM stat WHERE FullName LIKE '%$search%'";
  $result = $conn->query($sql);

  // Check if the query was successful
  if ($result->num_rows > 0) {
      // Output data of each row
      echo "<table border='1'>";
      echo "<tr><th>FullName</th><th>Plan</th><th>Num</th><th>Program</th></tr>";
      while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["FullName"] . "</td><td>" . $row["Plan"] . "</td><td>" . $row["Num"] . "</td> <td>" . $row["Program"] . "</td></tr>";
      }
      echo "</table>";
  } else {
      echo "0 results";
  }
}
$conn->close();
?>
 <!-- HTML Form for Search -->
 <form method="GET" action="">
    <label for="search">Search:</label>
    <input type="text" id="search" name="search"placeholder="Full Name">
    <input type="submit" value="Submit">
</form>
  </html>

 