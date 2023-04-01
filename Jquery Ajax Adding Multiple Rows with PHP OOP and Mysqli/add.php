<?php
include 'conn.php';
if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    for ($count = 0; $count < count($firstname); $count++) {
        $firstname_clean = mysqli_real_escape_string($conn, $firstname[$count]);
        $lastname_clean = mysqli_real_escape_string($conn, $lastname[$count]);

        if ($firstname_clean != '' && $lastname_clean != '') {
            $conn->query(
                "insert into multiplerow_members (firstname, lastname) values ('" .
                    $firstname_clean .
                    "', '" .
                    $lastname_clean .
                    "')"
            );
        } else {
            echo '1';
        }
    }
}

?>
