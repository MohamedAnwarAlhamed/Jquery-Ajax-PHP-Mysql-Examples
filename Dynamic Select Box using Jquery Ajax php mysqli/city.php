<?php
$mysqli = new mysqli('localhost', 'root', '', 'testingdb');
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
if ($_POST['id']) {
    $id = $_POST['id'];
    $results = $mysqli->query(
        "SELECT * FROM rme_city where contryid='$id' ORDER BY city ASC"
    );
    while ($row = $results->fetch_assoc()) {
        $id = $row['idarea'];
        $data = $row['city'];
        echo '<option value="' . $id . '">' . $data . '</option>';
    }
}
?>
