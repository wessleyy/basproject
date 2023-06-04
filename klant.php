<?php 

include "config.php";

$conn = dbconnect(); 

class klant {
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
      

  public function insertklant($klantnaam, $klantemail, $klantadres, $klantpostcode ="", $klantwoonplaats = "") {
    $sql = "INSERT INTO klanten (klantnaam, klantemail, klantadres, klantpostcode) VALUES ('$klantnaam', '$klantemail', '$klantadres', $klantpostcode',$klantwoonplaats)'";

    if ($this->conn->execute($sql) === TRUE) {
        echo "Klant geregistreerd!";
    } else {
        echo "klant is toegevoegd: " . $this->conn->error;
    }
}

public function close() {
    $this->conn->close();
}
}

