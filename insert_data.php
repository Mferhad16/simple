<?php
// Include the database connection file
require_once 'db_connection.php';

// Insert data into manufactures table
$manufactureQuery = "INSERT INTO manufactures (name) VALUES
('Proton'),
('Honda'),
('Toyota')";

if ($conn->query($manufactureQuery) === TRUE) {
    echo "Manufactures inserted successfully.<br>";
} else {
    echo "Error inserting manufactures: " . $conn->error . "<br>";
}

// Insert data into cars table
$carsQuery = "INSERT INTO cars (name, manufacture_id, date_created) VALUES
('S70', 1, '2024-01-21 13:19:00'),
('Civic', 2, '2024-02-11 13:19:00'),
('Altis', 3, '2024-02-21 09:19:00')";

if ($conn->query($carsQuery) === TRUE) {
    echo "Cars inserted successfully.<br>";
} else {
    echo "Error inserting cars: " . $conn->error . "<br>";
}

$conn->close();
?>