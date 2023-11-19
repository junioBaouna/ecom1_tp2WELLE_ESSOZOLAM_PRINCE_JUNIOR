<?php
require_once('../functions/crud.php');
$server = 'localhost';
$userName = "root";
$pwd = "";
$db = "ecom1_tp2";
// connection vers la base de données
$conn = mysqli_connect($server, $userName, $pwd, $db);
if ($conn) {
    echo "Connected to the $db database successfully";
    global $conn;
    session_start();
    $_SESSION['connexion']= $conn;
} else {
    echo "Error : Not connected to the $db database";
}

?>