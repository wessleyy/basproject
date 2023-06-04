<?php 

include "config.php";

$sql = "SELECT * FROM klanten";

$result = $db;

?>

<!DOCTYPE html>

<html>

<head>

    <title>View customer Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>users</h2>

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th>First Name</th>

        <th>Last Name</th>

        <th>Email</th>

        <th>Gender</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

    <?php  

    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "boodschappenservice";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM klanten";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data for each row
    while ($row = $result->fetch_assoc()) {
        // Access column values using $row['column_name']
        echo "Column 1: " . $row['column1'] . "<br>";
        echo "Column 2: " . $row['column2'] . "<br>";
        // ...                         
    }
} else {
    echo "No records found";
}
$conn->close();
?>   

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['firstname']; ?></td>

                    <td><?php echo $row['lastname']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['gender']; ?></td>

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       

            

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>

