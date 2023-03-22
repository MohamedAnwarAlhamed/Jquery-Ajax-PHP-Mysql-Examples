<?php
include "dbcon.php";
$result = $conn->query("SELECT * FROM employee");
$customers = $result->fetch_all(MYSQLI_ASSOC);
/*
array(
    [0] => array(
        [id] => 1
        [0] => 1
        [name] => John
        [1] => John
        [email] =>
        [2] =>
    ),
    [1] => array(
        [id] => 2
        [0] => 2
        [name] => Smith
        [1] => Smith
        [email] =>
        [2] =>
    ),
    [2] => array(
        [id] => 3
        [0] => 3
        [name] => Peter
        [1] => Peter
        [email] =>
        [2] =>
    )

*/
$data = array();
foreach ($result as $row) {
    $sub_array = array();
    $sub_array[] = $row['id'];
    $sub_array[] = $row['name'];
    $sub_array[] = $row['email'];
    $sub_array[] = $row['phone'];
    /*
    sub_array = ([0] => 1,[1] => John,[2] =>,[3] =>)
    sub_array = ([0] => 2,[1] => mohamed,[2] =>,[3] =>)
    sub_array = ([0] => 3,[1] => ali,[2] =>,[3] =>)

     */
    $data[] = $sub_array;
    /*
    data = (
         [0] => ([0] => 1,[1] => John,[2] =>,[3] =>)
        ,[1] => ([0] => 2,[1] => mohamed,[2] =>,[3] =>),
        [2] => ([0] => 3,[1] => ali,[2] =>,[3] =>)
    )

     */
}
$output = array(
    'data'      =>   $data
);
/*
  output= [data] => (
         [0] => ([0] => 1,[1] => John,[2] =>,[3] =>)
        ,[1] => ([0] => 2,[1] => mohamed,[2] =>,[3] =>),
        [2] => ([0] => 3,[1] => ali,[2] =>,[3] =>)
    )
*/

echo json_encode($output);
/*
{"data":[["1","Caite Ednalan","caite@gmail.com","35465465"],
    ["2","Mark Oto","marokoto@gmail.com","123123123"]]}
*/
