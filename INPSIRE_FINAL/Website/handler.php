<?php   require_once "db-connect-gym.php";
$servername = "localhost";
$username = "bscsdemouser";
$password = "lylepogi24";
$dbname = "gym";

$conn = new mysqli($servername, $username, $password, $dbname);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $agenum = $_POST["agenum"];
    $phoneNum = $_POST["phoneNum"];
    $name = $_POST["name"];
    $Sex = $_POST["seX"];   
    $emailR = $_POST["emailR"];
    $passR = $_POST["passR"];

    function isEmailExists($emailR, $conn) {
        $stmt = $conn->prepare("SELECT * FROM createduser WHERE Email = ?");
        $stmt->bind_param("s", $emailR);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
    
        return $num_rows > 0;
    }

    if (isEmailExists($emailR, $conn)) {
        echo  "<script>
        if (confirm('Email Already Exists!')) {
            window.location.href = 'joinus.php';
        } else{
            window.location.href = 'Website/handler.php';
        }
    </script>";
    }else{
            $sql ="INSERT INTO createduser (Age, PhoneNumber, FullName, Sex, Email, Pass) VALUES
    ('$agenum', '$phoneNum', '$name', '$Sex' , '$emailR', '$passR' )";
    if ($conn->query($sql) === TRUE) {
        echo  "<script>
        if (confirm('You have Successfully Registered!')) {
            window.location.href = 'signin.php';
        } else{
            window.location.href = 'Website/handler.php';
        }
    </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
        }   
}
?>