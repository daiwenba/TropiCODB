<?php
$servername = "125.217.95.69";
$username = "root"; // Change as per your database configuration
$password = "ZCJ123456"; // Change as per your database configuration
$dbname = "devonDB"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If filter options are requested
if (isset($_POST['filter_column'])) {
    $column = $_POST['filter_column'];
    $query = "SELECT DISTINCT $column FROM Elaeis_guineensis_Metabolome_sample_information";
    $result = $conn->query($query);

    $options = [];
    while ($row = $result->fetch_assoc()) {
        $options[] = $row[$column];
    }

    echo json_encode($options);
    exit;
}

// If table data is requested
$tissue = $_POST['tissue'] ?? '';
$stage = $_POST['stage'] ?? '';

$query = "SELECT * FROM Elaeis_guineensis_Metabolome_sample_information WHERE 1=1";

if ($tissue) {
    $query .= " AND tissue = '" . $conn->real_escape_string($tissue) . "'";
}

if ($stage) {
    $query .= " AND stage = '" . $conn->real_escape_string($stage) . "'";
}

$result = $conn->query($query);
$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode(['data' => $data]);

$conn->close();
