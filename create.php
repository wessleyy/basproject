<?php 

include "config.php";
$conn = dbconnect(); 


  if (isset($_POST['submit'])) {

    $klantnaam = $_POST['klantnaam'];

    $klantemail = $_POST['klantemail'];

    $klantadres = $_POST['klantadres'];

    $klantpostcode = $_POST['klantpostcode'];

    $klantwoonplaats = $_POST['klantwoonplaats'];

    $sql = "INSERT INTO `klanten`(`klantnaam`, `klantemail`, `klantadres`, `klantpostcode`, `klantwoonplaats`) VALUES ('$klantnaam','$klantemail','$klantadres','$klantpostcode','$klantwoonplaats')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 
                                                                                                                                        	    

    

  }

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