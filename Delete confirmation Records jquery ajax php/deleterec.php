<?php
include 'dbcon.php';
if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "delete from updates where msg_id='$id'";
    if ($conn->query($sql) === true) {
        echo 'Record deleted successfully';
    } else {
        echo 'Error deleting record: ' . $conn->error;
    }
}
?>
