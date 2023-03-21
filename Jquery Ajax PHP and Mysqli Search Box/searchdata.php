<?php
include"dbcon.php";
if(isset($_GET['search_word']))
{
 $search_word=$_GET['search_word']; 
 $query = "SELECT * FROM tblprogramming WHERE title LIKE '%".$search_word."%' ORDER BY id DESC LIMIT 20";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result)){
   $msg = $row["category"];
   $title = $row["title"];
   $bold_word='<b>'.$search_word.'</b>';
   $final_msg = str_ireplace($search_word, $bold_word, $msg);
   echo "<li>$title <br/><span style='font-size:12px;'>$final_msg</span></li>";
  }
  }else{
 echo "<li>No Results</li>";
 } 
}
?>