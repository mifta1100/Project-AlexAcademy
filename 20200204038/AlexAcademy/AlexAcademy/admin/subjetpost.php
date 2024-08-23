<?php
// Establish a database connection
$servername = "localhost";  // Change this to your database server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "alvi";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$videoLink = $_POST['video'];
$videoLink2 = $_POST['inorgranic_video'];

// Insert data into the "video" table
$sql = "INSERT INTO video (organic) VALUES ('$videoLink')";
$sql2 = "INSERT INTO video (inorganic) VALUES ('$videoLink2')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
