<?php
//connection
$conn = new mysqli('localhost', 'root', '', 'devprojectdb');

$action = 'fetch';
$output = '';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

if ($action == 'fetch') {
    $sql = 'SELECT * FROM members';
    $query = $conn->query($sql);

    while ($row = $query->fetch_assoc()) {
        $output .=
            "
                <tr>
                    <td><input type='checkbox' class='check' value='" .
            $row['id'] .
            "'></td>
                    <td>" .
            $row['id'] .
            "</td>
                    <td>" .
            $row['firstname'] .
            "</td>
                    <td>" .
            $row['lastname'] .
            "</td>
                    <td>" .
            $row['address'] .
            "</td>
                </tr> 
            ";
    }
}

if ($action == 'delete') {
    $output = ['error' => false];
    $ids = $_POST['ids'];
    $count = count($ids);
    $row = $count == 1 ? 'Row' : 'Rows';

    foreach ($ids as $id) {
        $sql = "DELETE FROM members WHERE id = '$id'";
        $conn->query($sql);
    }

    $output = $count . ' ' . $row . ' deleted';
}

echo json_encode($output);
