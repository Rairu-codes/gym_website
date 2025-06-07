<?php
session_start();
$search = "";
$edit =  "";


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $search = $_GET['search'];
    $edits = $_GET['edits'];

    require_once "db-connect-gym.php"; 

$sql = "UPDATE stat SET Program='$edits'WHERE FullName=$search";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

}

?>