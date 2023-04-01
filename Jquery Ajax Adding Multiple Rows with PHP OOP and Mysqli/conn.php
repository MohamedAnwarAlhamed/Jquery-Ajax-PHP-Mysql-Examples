<?php
$conn = new mysqli('localhost', 'root', '', 'testingdb');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
