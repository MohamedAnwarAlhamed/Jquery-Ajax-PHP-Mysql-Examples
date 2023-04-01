<?php
$conn = new mysqli('localhost', 'root', '', 'testingdb');
if ($conn->connect_error) {
    die('Error : (' . $conn->connect_errno . ') ' . $conn->connect_error);
}
if ($_POST['id']) {
    $id = mysql_escape_String($_POST['id']);
    $name = mysql_escape_String($_POST['name']);
    $sql = "UPDATE topphpframework SET name = '$name' WHERE id = '$id' ";
    if ($conn->query($sql) === true) {
        echo 'Record updated successfully';
    } else {
        echo 'Error updating record: ' . $conn->error;
    }
}
?>
