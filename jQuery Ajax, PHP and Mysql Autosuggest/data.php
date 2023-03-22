<?php
$link = new mysqli('localhost', 'root', '', 'testingdb');
if ($link->connect_error) {
    die('Could not connect: ' . $conn->connect_error);
}
if (isset($_POST['queryString'])) {
    $queryString = $_POST['queryString'];
    if (strlen($queryString) > 0) {
        $query = ("SELECT country FROM countries WHERE country LIKE '$queryString%' LIMIT 10");
        $result = mysqli_query($link, $query);
        if ($result) {
            echo '<ul>';
            while ($row = mysqli_fetch_array($result)) {
                echo '<li onClick="fill(\'' . addslashes($row["country"]) . '\');">' . $row["country"] . '</li>';
            }
            echo '</ul>';
        } else {
            echo 'OOPS we had a problem :(';
        }
    } else {
    }
} else {
    echo 'There should be no direct access to this script!';
}
