<?php
include "../api/db.php";  // adjust path if needed

$sql = "SHOW TABLES";
$result = $conn->query($sql);

if ($result) {
    echo "Connected successfully. Tables in the database:<br>";
    while ($row = $result->fetch_array()) {
        echo $row[0] . "<br>";
    }
} else {
    echo "Error: " . $conn->error;
}
?>