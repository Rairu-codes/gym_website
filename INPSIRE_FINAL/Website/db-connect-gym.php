
<?php
$host     = 'localhost';
$username = 'bscsdemouser';
$password = 'lylepogi24';
$dbname   ='gym';

$conn = new mysqli($host, $username, $password, $dbname);
if(!$conn){
    die("Cannot connect to the database.". $conn->error);
}

$dsn = "mysql:host=localhost;dbname=gym";
$dbusername = "root" ;
$dbpassword = "";
try {
$pdo = new PDO($dsn, $dbusername, $dbpassword);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo "Connection failed" . $e->getMessage();
}

?>