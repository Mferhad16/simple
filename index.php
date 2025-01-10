<?php
require_once 'db_connection.php';

$sql = "SELECT 
            cars.id, 
            cars.name AS model_name, 
            DATE_FORMAT(cars.date_created, '%d %b %Y %h:%i %p') AS formatted_date, 
            manufactures.name AS manufacture 
        FROM 
            cars 
        JOIN 
            manufactures 
        ON 
            cars.manufacture_id = manufactures.id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Model Name</th>
                <th>Date Created</th>
                <th>Manufacture</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["model_name"] . "</td>
                <td>" . $row["formatted_date"] . "</td>
                <td>" . $row["manufacture"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}

$conn->close();
?>