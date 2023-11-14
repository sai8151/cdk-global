<?php
// Assuming you have a database connection established
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pollution";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user input from the pollution reporting form
$pollutionType = $_POST['pollutionType'];
$description = $_POST['description'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// Insert pollution report into the database
$sql = "INSERT INTO pollution_reports (pollution_type, description, latitude, longitude) VALUES ('$pollutionType', '$description', '$latitude', '$longitude')";

// Check if the query is successful
if ($conn->query($sql) === TRUE) {
    echo "Pollution report submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>