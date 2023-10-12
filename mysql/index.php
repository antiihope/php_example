<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_learn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data
$sql = "INSERT INTO corp (users) VALUES ('John'), ('Jane'), ('Bob')";
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully<br>";
} else {
    echo "Error inserting data: " . $conn->error . "<br>";
}

// Retrieve data
$sql = "SELECT * FROM corp";
$result = $conn->query($sql);

// Check for errors
if (!$result) {
    die("Query failed: " . $conn->error);
}

// Output results
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["users"] . "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
