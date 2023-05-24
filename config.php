<?php
$servername = "localhost";
$username = "root";
$password = "";


function dbconnect(){

    $servername = "localhost";
    $dbname ="boodschappenservice";
    $username = "root";
    $password = "";

if(isset($conn)){
    return $conn;
}else{
try {
  $conn = new PDO("mysql:host=$servername;dbname=boodschappenservice", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} 
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
return $conn;
}
}




























?>