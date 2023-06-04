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

