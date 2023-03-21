//ajaxlivesearch.php
<div class="search-list">
<?php
include"dbcon.php";
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "SELECT * FROM tblprogramming WHERE title LIKE '%".$search."%' OR category LIKE '%".$search."%'";
}else{
 $query = "SELECT * FROM tblprogramming ORDER BY id";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0) {
 $totalfound = mysqli_num_rows($result);
  $output .= '<h3>'.$totalfound.' Records Found</h3>
  <table class="table table-striped custab">
  <thead>
      <tr>
         <th>Title</th>
         <th>Category</th>
      </tr>
  </thead>
  <tbody>';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["title"].'</td>
    <td>'.$row["category"].'</td>
   </tr>';
 }
 echo $output;
}else{
 echo 'No Rocord Found';
}
?>
 </tbody>
   </table>
</div>