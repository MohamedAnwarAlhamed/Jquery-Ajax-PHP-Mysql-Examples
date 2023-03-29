<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jquery ajax pagenation</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
 $("#results").load("fetch_pages.php", {'page':1} ); //initial page number to load
 $(".paginate_click").click(function (e) {
  $("#results").prepend('<div class="loading-indication"><img src="img/ajax-loader.gif" /> Loading...</div>');
  var page_num = $(this).text(); //get page number from the clicked element 
  $('.paginate_click').removeClass('active'); //remove any active class
  //post page number and load returned data into result element
  $("#results").load("fetch_pages.php", {'page': page_num}, function(){
  });
  $(this).addClass('active'); //add active class to currently clicked element
  return false; //prevent going to herf link
 }); 
});
</script>
</head>
<body>
<?php
include 'config.inc.php';
$results = mysqli_query($connecDB, 'SELECT COUNT(*) FROM paginate');
$get_total_rows = mysqli_fetch_array($results); //total records
//break total records into pages
$pages = ceil($get_total_rows[0] / $item_per_page);
//create pagination
if ($pages > 1) {
    $pagination = '';
    $pagination .= '<ul class="paginate">';
    for ($i = 1; $i <= $pages; $i++) {
        $pagination .=
            '<li><a href="#" class="paginate_click">' . $i . '</a></li>';
    }
    $pagination .= '</ul>';
}
?>
<p><h1 align="center">How to create a Jquery Ajax Pagenation</h1></p>
<div id="results"></div>
<?php echo $pagination; ?>
<style>
.paginate {
 padding: 0px;
 margin: 0px;
 height: 30px;
 display: block;
 text-align: center;
}
.paginate li {
 display: inline-block;
 list-style: none;
 padding: 0px;
 margin-right: 1px;
 width: 30px;
 text-align: center;
 background: #4CC2AF;
 line-height: 25px;
}
.paginate .active {
 display: inline-block;
 list-style: none;
 padding: 0px;
 margin-right: 1px;
 width: 30px;
 text-align: center;
 line-height: 25px;
 background-color: #666666;
}
.paginate li a{
 color:#FFFFFF;
 text-decoration:none;
}
#results{
font: 12px Arial, Helvetica, sans-serif;
width: 400px;
margin-left: auto;
margin-right: auto;
}
.page_result{
 padding: 0px;
}
.page_result li{
 background: #E4E4E4;
 margin-bottom: 5px;
 padding: 10px;
 font-size: 12px;
 list-style: none;
}
.page_result .page_name {
font-size: 14px;
font-weight: bold;
margin-right: 5px;
}
#results .loading-indication{
 background:#FFFFFF;
 padding:10px;
 position: absolute;
}
</style>
</body>
</html>