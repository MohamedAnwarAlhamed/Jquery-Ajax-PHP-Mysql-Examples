<?php
$connect = mysqli_connect('localhost', 'root', '', 'testingdb');
if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $id) {
        $query = "DELETE FROM contacts WHERE id = '" . $id . "'";
        mysqli_query($connect, $query);
    }
}
?>
