<?php
include 'dbcon.php';
$userid = 4;
$postid = $_POST['postid'];
$rating = $_POST['rating'];

$query =
    'SELECT COUNT(*) AS cntpost FROM post_rating WHERE postid=' .
    $postid .
    ' and userid=' .
    $userid;

$result = mysqli_query($conn, $query);
$fetchdata = mysqli_fetch_array($result);
$count = $fetchdata['cntpost'];

if ($count == 0) {
    $insertquery =
        'INSERT INTO post_rating(userid,postid,rating) values(' .
        $userid .
        ',' .
        $postid .
        ',' .
        $rating .
        ')';
    mysqli_query($conn, $insertquery);
} else {
    $updatequery =
        'UPDATE post_rating SET rating=' .
        $rating .
        ' where userid=' .
        $userid .
        ' and postid=' .
        $postid;
    mysqli_query($conn, $updatequery);
}

$query =
    'SELECT ROUND(AVG(rating),1) as averageRating FROM post_rating WHERE postid=' .
    $postid;
($result = mysqli_query($conn, $query)) or die(mysqli_error());
$fetchAverage = mysqli_fetch_array($result);
$averageRating = $fetchAverage['averageRating'];
$return_arr = ['averageRating' => $averageRating];

echo json_encode($return_arr);
