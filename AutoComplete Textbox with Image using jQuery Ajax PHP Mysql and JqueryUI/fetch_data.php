<?php
include 'dbcon.php';
if (isset($_GET['term'])) {
    $result = $conn->query(
        "SELECT * FROM employee WHERE name LIKE '%" .
            $_GET['term'] .
            "%' ORDER BY name ASC"
    );
    $total_row = mysqli_num_rows($result);
    $output = [];
    if ($total_row > 0) {
        foreach ($result as $row) {
            $temp_array = [];
            $temp_array['value'] = $row['name'];
            $temp_array['label'] =
                '<img src="images/' .
                $row['photo'] .
                '" width="70" />   ' .
                $row['name'] .
                '';
            $output[] = $temp_array;
        }
    } else {
        $output['value'] = '';
        $output['label'] = 'No Record Found';
    }
    echo json_encode($output);
}
?>
