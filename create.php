<?php 

include "config.php";

$conn = dbconnect(); 

class Database {
  private $servername;
  private $username;
  private $password;
  private $dbname;
  private $conn;

  public function __construct($servername, $username, $password, $dbname) {
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;
      $this->dbname = $dbname;
  }

  public function connect() {
      $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
      if ($this->conn->connect_error) {
          die("Connectie mislukt: " . $this->conn->connect_error);
      }
  }

  public function insertCustomer($klantnaam, $klantemail, $klantadres) {
    $sql = "INSERT INTO klanten (klantnaam, klantemail, klantadres) VALUES ('$klantnaam', '$klantemail', '$klantadres')";

    if ($this->conn->query($sql) === TRUE) {
        echo "Klant geregistreerd!";
    } else {
        echo "klant is toegevoegd: " . $this->conn->error;
    }
}

public function close() {
    $this->conn->close();
}
}

// Gebruik:
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