<?php
include "klantclass.php";

$klant = new Klant;

if(isset($_POST["insert"]) && $_POST["insert"] == "Create sale"){
	
    include "verkoopclass.php";

    $verkooporder = new verkooporder;
    //$acteur->setObject(0, $_POST['voornaam'], $_POST['achternaam']);
    //$acteur->insertActeur();
    $verkooporder->klantId = $_POST["klantId"];
    $verkooporder->artId = $_POST["artId"];
    $verkooporder->verkoopdatum = $_POST["verkoopdatum"];
    $verkooporder->verkordstatus = $_POST["verkordstatus"];




    $verkooporder->createVerkooporder();
        
    echo "<script>alert('Acteur: $_POST[voornaam] $_POST[achternaam] is toegevoegd')</script>";
    echo "<script> location.replace('index.php'); </script>";
        
} 

 ?>


<!DOCTYPE html>
<html>
<head>
    <title>Create Sale</title>
</head>
<body>
    <h2>Create Sale</h2>
    <form action="verkooporderinsertt.php" method="POST">
        <label for="verkorId">Verkor ID:</label>
        <input type="text" name="verkorId" required><br><br>

        <label for="klantId">Klant ID:</label>
        <input type="text" name="klantId" required><br><br>
        <?php
        $klant->dropDownklant(-1);


         ?>

        <label for="artId">Art ID:</label>
        <input type="text" name="artId" required><br><br>

        <label for="verkoopdatum">verkoopdatum:</label>
        <input type="date" name="verkoopdatum" required><br><br>


        <label for="verkordstatus">Verkord Status:</label>
        <input type="text" name="verkordstatus" required><br><br>

        <input type='submit' name='insert' value='Create sale'>
    </form>
</body>
</html>




 