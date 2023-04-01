<?php
include 'conn.php';
if (isset($_POST['fetch'])) { ?>
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Firstname</th>
                    <th>Lastname</th>
                </thead>
                <tbody>
                    <?php
                    include 'conn.php';
                    $query = $conn->query('select * from multiplerow_members');
                    while ($row = $query->fetch_array()) { ?>
                            <tr>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                            </tr>
                            <?php }
                    ?>
                </tbody>
            </table>
        <?php }

?>
