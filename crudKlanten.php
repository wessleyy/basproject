<?php 

#include "klant.php";
require_once 'C:\xampp\htdocs\schoolproject2\Database.php';


$oDb = new Database;


#select statement
#$atest = $oDb->select('klanten', 'klantnaam="Casper de Spook"');

#insert test uitvoeren
unset($_POST['submit']);
$aData = $_POST;

$count = $oDb->insert('klanten', $aData);


var_dump($_POST);

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