<?php
include 'dbcon.php';
if (isset($_POST['checkbox_value'])) {
    for ($count = 0; $count < count($_POST['checkbox_value']); $count++) {
        $sql =
            "DELETE FROM employee WHERE id = '" .
            $_POST['checkbox_value'][$count] .
            "'";
        $conn->query($sql);
    }
    echo 'Records Succefully Deleted';
}
?>
