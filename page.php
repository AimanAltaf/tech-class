<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="Batch7-php";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE Batch (
id INT(6) UNSIGNED AUTO_INCREMENT ,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$sql = "INSERT INTO Batch (id, firstname, lastname, email, reg_date)
VALUES ('2', 'John', 'Doe', 'john@example.com', '')";
if ($conn->query($sql) === TRUE) {
    echo "Table Batch created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
<html>
<head>
<title>Create Page</title>
</head>
<body>
<div close="container">
<h1>Page Result</h1>
<div class="row">
<div class="col"><a href="form.php" class="bt btn-dark">Create Page</a>
</div>
</div>
