<p id="dbresults">
<?php
$db = new mysqli('localhost', 'root', '', 'testingdb');
if (!$db) {
    echo 'ERROR: Could not connect to the database.';
} else {
    // Is there a posted query string?
    if (isset($_POST['queryString'])) {
        $queryString = $db->real_escape_string($_POST['queryString']);
        // Is the string length greater than 0?
        if (strlen($queryString) > 0) {
            $query = $db->query(
                "SELECT * FROM searchs WHERE name LIKE '%" .
                    $queryString .
                    "%' ORDER BY name LIMIT 5"
            );

            if ($query) {
                while ($result = $query->fetch_object()) {
                    echo '<a href="' . $result->url . '">';
                    echo '<img src="img/' . $result->img . '" alt="" />';
                    $description = $result->desc;
                    if (strlen($description) > 80) {
                        $description = substr($description, 0, 80) . '...';
                    }
                    echo '<span>' . $description . '</span></a>';
                }
            } else {
                echo 'ERROR: There was a problem with the query.';
            }
        } else {
            // Dont do anything.
        } // There is a queryString.
    } else {
        echo 'There should be no direct access to this script!';
    }
}
?>
</p>