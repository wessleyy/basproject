<?php

include "Database.php";

class Klant extends Database {
    public $conn;
    private $table_name = 'klanten';

    public $klantId;
    public $klantNaam;
    public $klantEmail;
    public $klantadres;

    
    public function dropDownklant($row_selected = -1){
	
		// Haal alle acteurs op uit de database mbv de method getActeurs()
		$lijst = $this->getKlanten();
		
		echo "<label for='klanten'>Choose a klant:</label>";
		echo "<select name='acteurnr'>";
		foreach ($lijst as $row){
			if($row_selected == $row["Id"]){
				echo "<option value='$row[Id]' selected='selected'> $row[klantnaam] $row[klantemai]</option>\n";
			} else {
				echo "<option value='$row[Id]'> $row[klantnaam] $row[klantemail]</option>\n";
			}
		}
		echo "</select>";
	}
    public function getKlanten(){
		// query: is een prepare en execute in 1 zonder placeholders
		$lijst = $this->conn->query("select * from 	klanten")->fetchAll();
		return $lijst;
	}

    public function createKlant() {
        $query = 'INSERT INTO ' . $this->table_name . ' (klantNaam, klantEmail, klantadres) 
                  VALUES (:klantNaam, :klantEmail, :klantadres)';

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':klantNaam', $this->klantNaam);
        $stmt->bindParam(':klantEmail', $this->klantEmail);
        $stmt->bindParam(':klantadres', $this->klantadres);

        if ($stmt->execute()) {    return true;
        }

        return false;
    }
}
?>