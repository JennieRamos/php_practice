<!DOCTYPE html>
<html>
<body>


<?php
//my first script
echo "My first PHP script!";
?>

<br>

<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

?>
<br>
<!---
<?php
// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
-->
</body>
</html>

