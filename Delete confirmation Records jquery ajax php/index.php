<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Delete confirmation Records jquery ajax</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
$(".delbutton").click(function(){
 //Save the link in a variable called element
 var element = $(this);
 //Find the id of the link that was clicked
 var del_id = element.attr("id");
 //Built a url to send
 var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this records? There is NO undo!")) {
    $.ajax({
     type: "GET",
     url: "deleterec.php",
     data: info,
     success: function(data){ 
     alert(data);
     }
  });
    $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
    .animate({ opacity: "hide" }, "slow");
  }
 return false;
});
});
</script>
</head>
<body>
<table id="box-table-a" summary="Employee Pay Sheet">
 <thead>
  <tr>
   <th scope="col" width="60">Photo</th>
   <th scope="col">Employee</th>
   <th scope="col">Bonus</th>
   <th scope="col" width="40">Action</th>
  </tr>
 </thead>
 <tbody>
<?php
include 'dbcon.php';
$query = $conn->query('SELECT * FROM updates order by msg_id desc');
while ($result = $query->fetch_object()) {
    $fullname = stripslashes($result->fullname); ?>
  <tr class="record">
   <td><img src="img/<?php echo $result->photo; ?>" width="50" height="50"/></td>
   <td><?php echo $fullname; ?></td>
   <td>$50</td>
   <td align="center"><a href="#" id="<?php echo $result->msg_id; ?>" class="delbutton"><img src="img/delete.png" style="background:#FFFFFF;width:15px;"/></a></td>
  </tr>
<?php
}
?>  
 </tbody>
</table>
<style>
#box-table-a {
    font-family: lucida sans unicode,lucida grande,Sans-Serif;
    font-size: 12px;
    width: 480px;
    text-align: left;
    border-collapse: collapse;
    margin: 20px;
}
.tr, tr {
    border-bottom: 1px solid #ddd;
}
#box-table-a th {
    font-size: 13px;
    font-weight: 400;
    background: #b9c9fe;
    border-top: 4px solid #aabcfe;
    border-bottom: 1px solid #fff;
    color: #039;
    padding: 8px;
}
#box-table-a td {
    background: #e8edff;
    border-bottom: 1px solid #fff;
    color: #669;
    border-top: 1px solid transparent;
    padding: 8px;
}
#box-table-a tr:hover td{background:#d0dafd;color:#339}
</style> 
</body>
</html>