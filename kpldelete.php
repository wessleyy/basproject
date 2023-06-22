<!DOCTYPE html>
<html>
<head>
    <title>Klanten, leveranciers en producten verwijderen</title>
</head>
<body>
    <h1>Klanten, leveranciers en producten verwijderen </h1>

    <form action="verkooporderinsertt.php" method="POST">
        <label for="customer_id">Klanten, leveranciers en producten  ID:</label> 
        <input type="text" id="customer_id" name="customer_id" required><br><br>

        <input type="submit" value="Verwijder leverancier  ">
        <input type="submit" value="Verwijder klant  ">
        <input type="submit" value="Verwijder product  ">
        
    </form>
</body>
</html>








<?php 
if(isset($_POST["verwijderen"])){
	include 'verkooporderinsertt.php';
	
	// Maak een object Acteur
	$klanten  = new Klant ;
	
	// Delete Acteur op basis van NR
	$levid->klant($_GET["nr"]);
	echo '<script>alert("Klanten, leveranciers en producten verwijderd")</script>';
	echo "<script> location.replace('verkooporderinsertt.php'); </script>";
}
?> 