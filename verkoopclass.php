<?php
include "database.php";
class Verkooporder extends Database {
    public $conn;
    private $table_name = 'verkooporders';

    public $verkorId;
    public $klantId;
    public $artId;
    public $verkoopdatum;
    public $verkordstatus;

    
    public function setObject($nr, $voornaam, $achternaam){
		//self::$conn = $db;
		$this->nr = $nr;
		$this->voornaam = $voornaam;
		$this->achternaam = $achternaam;
	}



    public function createVerkooporder() {
        
        $query = 'INSERT INTO ' . $this->table_name . ' (verkordId, klantId, artId, verkorddatum, verkordstatus) 
                  VALUES (:verkorId, :klantId, :artId, :verkoopdatum, :verkordstatus)';

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':verkorId', $this->verkorId);
        $stmt->bindParam(':klantId', $this->klantId);
        $stmt->bindParam(':artId', $this->artId);
        $stmt->bindParam(':verkoopdatum', $this->verkoopdatum);
        $stmt->bindParam(':verkordstatus', $this->verkordstatus);
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
 