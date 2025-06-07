<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $Gcashnum = $_POST["gcashnum"];
    $prog = $_POST ["Prog"];
    

    try{
        require_once "db-connect-gym.php";

        $query = "INSERT INTO stat (FullName, Plan, Amount, Num, Program) VALUES
        (?, 'Annual Plan', 10000, ?, ?)";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$name, $Gcashnum, $prog]);

        $stmt = null;
        $pdo = null;

        if (isset($_POST['reg-bot'])) {
            echo "<script>
                if (confirm('Payment Success!')) {
                    window.location.href = 'Annual.php';
                } 
            </script>";
        }
        
        die();

    } catch (PDOException $e){
        die("Query failed: " . $e->getMessage());
    }
}

else{
    header("homein.php");
}
?>