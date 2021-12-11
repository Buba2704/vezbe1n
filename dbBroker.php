<?php

$host = "localhost";
$db = "kolokvijumi";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $db); // Konekcija ka bazi
if($conn->connect_errno){ // Vraca error code(broj) koji se vezuje za greske na bazi
exit("Neuspesna konekcija: greska> ".$conn->connect_error.", err kod>".$conn->connect_err);


}




?>