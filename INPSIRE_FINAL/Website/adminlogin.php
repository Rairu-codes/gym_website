<?php
session_start();
$email = "";
$pw =  "";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $pw = $_POST['pass'];

    require_once "db-connect-gym.php"; 

    
    $sql = "SELECT * FROM admintable WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();


    $rowCount = $stmt->rowCount();

    if ($rowCount === 1) {
        $user = $stmt->fetch();
        $hashedPassword = $user['Password'];
        if ($pw == $hashedPassword) {          
            $_SESSION['admintable'] = $user['Email'];
            header("location: adminpage.php"); 
            exit();

        } else {
            echo "<script>
            if (confirm('Incorrect Password!')) {
                window.location.href = 'signin.php';
            } else{
                window.location.href = 'Website/handler.php';
            }
            
        </script>";  
        }   

    } else {
        echo "User not found.";
    }
}

?>