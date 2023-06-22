<!DOCTYPE html>
<html>
<head>
    <title>verkooporders en inkoopoerders Delete Formulier</title>
</head>
<body>
    <h1>verkooporders en inkoopoerders Delete Formulie</h1>

    <form action="verkooporderinsertt.php" method="POST">
        <label for="customer_id">verkoop en inkoop ID:</label> 
        <input type="text" id="customer_id" name="customer_id" required><br><br>

        <input type="submit" value="Verwijder inkooperder  ">
        <input type="submit" value="Verwijder verkooporder  ">
    </form>
</body>
</html>








<?php 
if(isset($_POST["verwijderen"])){
	include 'verkooporderinsertt.php';
	
	// Maak een object Acteur
	$acteur = new klant;
	
	// Delete Acteur op basis van NR
	$inkooporders->inkooperder($_GET["nr"]);
	echo '<script>alert("inkoop en verkoop verwijderd")</script>';
	echo "<script> location.replace('verkooporderinsertt.php'); </script>";
}
?>