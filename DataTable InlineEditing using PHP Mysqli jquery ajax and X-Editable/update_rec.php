<?php
include"dbcon.php";
$sql = "UPDATE employee SET ".$_POST["name"]." = '".$_POST["value"]."' WHERE id = '".$_POST["pk"]."'"; 
$update = $conn->query($sql);
