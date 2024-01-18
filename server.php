<!-- server.php -->
<?php
// Connect to MySQL database (replace with your database details)
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
