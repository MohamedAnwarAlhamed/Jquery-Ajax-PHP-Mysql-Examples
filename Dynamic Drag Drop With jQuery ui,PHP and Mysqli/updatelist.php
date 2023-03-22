//updatelist.php
<?php
$conn = new mysqli('localhost','root','','testingdb');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
$array = $_POST['arrayorder'];
 
if ($_POST['update'] == "update"){
  
 $count = 1;
 foreach ($array as $idval) {
  $sql = "UPDATE dragdrop SET listorder = " . $count . " WHERE id = " . $idval;
  if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
 } else {
  echo "Error updating record: " . $conn->error;
 }
  $count ++; 
 }
 echo 'All saved! refresh the page to see the changes';
}
?>