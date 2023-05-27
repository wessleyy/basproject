<?php 

include "klant.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boodschappenservice";

$database = new Database($servername, $username, $password, $dbname);
$database->connect();

$klantnaam = "jan";
$klantemail = "palemal@boo";
$klantadres = "spijkenisse";

$database->insertCustomer($klantnaam, $klantemail, $klantadres);

$database->close();

?>

<!DOCTYPE html>

<html>

<body>

<h2>klant aanmaken</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Personal information:</legend>

    volledige naam:<br>

    <input type="text" name="klantnaam">

    <br>

    klant Email:<br>

    <input type="email" name="klantemail">

    <br>

    klant adres:<br>

    <input type="text" name="klantadres">

    <br>

    klantpostcode<br>

    <input type="text" name="klantpostcode">

    <br>

    klant woonplaats:<br>

    <input type="text" name="klantwoonplaats">


    <br><br>
    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>