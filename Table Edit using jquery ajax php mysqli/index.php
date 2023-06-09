<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Table Edit using jquery ajax php mysqli</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<style>
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:16px;
}
.head
{
background-color:#333;
color:#FFFFFF
}
.edit_tr:hover
{
background:url(img/edit.png) right no-repeat #80C8E5;
cursor:pointer;
}
.editbox
{
display:none
}
.editbox
{
font-size:16px;
width:270px;
background-color:#ffffcc;
border:solid 1px #000;
padding:4px;
}
td
{
padding:10px;
}
th
{
font-weight:bold;
text-align:left;
padding:4px;
}
</style>
<script type="text/javascript">
$(document).ready(function() {
 $(".edit_tr").click(function() {
   var ID=$(this).attr('id');
   $("#first_"+ID).hide();
   $("#first_input_"+ID).show();
  }).change(function(){
   var ID=$(this).attr('id');
   var first=$("#first_input_"+ID).val();
   var dataString = 'id='+ ID +'&name='+first;
   $("#first_"+ID).html('<img src="img/loader.gif" />');
   if(first.length>0){
     $.ajax({
   type: "POST",
   url: "ajax.php",
   data: dataString,
   cache: false,
   success: function(html)
   {
    $("#first_"+ID).html(first);
   }
     });
   }else{
     alert('Enter something.');
   }
  });
   
  $(".editbox").mouseup(function() {
   return false
  });
   $(document).mouseup(function() {
   $(".editbox").hide();
   $(".text").show();
  });
});
</script>
</head>
<body>
<div style="margin:0 auto; width:350px; padding:10px; background-color:#fff;">
<table width="100%" border="0">
 <tr class="head">
 <th>PHP Frameworks</th>
 </tr>
<?php
$conn = new mysqli('localhost', 'root', '', 'testingdb');
if ($conn->connect_error) {
    die('Error : (' . $conn->connect_errno . ') ' . $conn->connect_error);
}
$i = 1;
$sql = $conn->query('SELECT * from topphpframework');
while ($row = $sql->fetch_assoc()) {

    $id = $row['id'];
    $name = $row['name'];
    if ($i % 2) { ?>
  <tr id="<?php echo $id; ?>" class="edit_tr">
  <?php } else { ?>
  <tr id="<?php echo $id; ?>" bgcolor="#f2f2f2" class="edit_tr">
  <?php }
    ?>
   <td width="50%" class="edit_td">
   <span id="first_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
   <input type="text" name="name" value="<?php echo $name; ?>" class="editbox" id="first_input_<?php echo $id; ?>" />
   </td>
  </tr>
 <?php $i++;
}
?>
</table>
</div>
</body>
</html>