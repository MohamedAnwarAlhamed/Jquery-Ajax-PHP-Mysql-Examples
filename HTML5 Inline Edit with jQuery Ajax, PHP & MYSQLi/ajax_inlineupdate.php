<?php
include 'dbcon.php';
$string = $_POST['string'];
$field_userid = $_POST['field_userid'];
if ($string == '') {
    echo "<p class='btn btn-info' align='center'>Please Insert field</p>";
} else {
    $strings = $field_userid;
    $fields = $strings[0];
    if ($fields == 'f') {
        $setrs = "fname='$string'";
    } elseif ($fields == 'l') {
        $setrs = "lname='$string'";
    } elseif ($fields == 'c') {
        $setrs = "city='$string'";
    } else {
        $setrs = '';
    }
    $getid = substr($field_userid, 2);
    $sql = "UPDATE user SET $setrs WHERE id = '$getid' ";
    if ($conn->query($sql) === true) {
        echo 'Record updated successfully';
    } else {
        echo 'Error updating record: ' . $conn->error;
    }
}
?>
