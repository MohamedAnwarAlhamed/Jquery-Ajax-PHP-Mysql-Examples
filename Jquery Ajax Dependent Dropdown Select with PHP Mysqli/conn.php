<?php
$conn = mysqli_connect('localhost', 'root', '', 'testingdb');
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>
