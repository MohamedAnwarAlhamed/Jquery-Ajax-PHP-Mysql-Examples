<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jquery Ajax PHP and Mysqli Search Box</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
$(".search_button").click(function() {
    var search_word = $("#search_box").val();
    var dataString = 'search_word='+ search_word;
  if(search_word==''){
  }else{
  $.ajax({
   type: "GET",
   url: "searchdata.php",
   data: dataString,
   cache: false,
   beforeSend: function(html) {
    document.getElementById("insert_search").innerHTML = ''; 
     $("#flash").show();
     $("#searchword").show();
  $(".searchword").html(search_word);
    $("#flash").html('<img src="img/loader.gif" align="absmiddle"> Loading Results...');
     },
  success: function(html){
     $("#insert_search").show();
     $("#insert_search").append(html);
     $("#flash").hide();
  }
  });
  }
  return false;
 });
});
</script>
</head>
<body>
<div align="center">
<div style="width:700px">
<div style="margin-top:20px; text-align:left">
<p align="center"><h1>Jquery Ajax PHP and Mysqli Search Box</h1></p>
<form method="get" action="">
 <input type="text" name="search" id="search_box" class='search_box'/>
 <input type="submit" value="Search" class="search_button" /><br />
 <span style="color:#666666; font-size:14px; font-family:Arial, Helvetica, sans-serif;"><b>Ex :</b> Javascript</span>
</form>
</div>   
<div>
<div id="searchword">Search results for <span class="searchword"></span></div>
<div id="flash"></div>
<ol id="insert_search" class="update"></ol>
</div>
</div>
</div>
<style>
body{
font-family:Arial, Helvetica, sans-serif;
}
a
{
color:#DF3D82;
text-decoration:none
}
a:hover
{
color:#DF3D82;
text-decoration:underline;
}
#search_box{
 padding:3px; border:solid 1px #666666; width:400px; height:45px; font-size:18px;-moz-border-radius: 6px;-webkit-border-radius: 6px;
}
.search_button{
 height:50px;border:#fe6f41 solid 1px; padding-left:9px;padding-right:9px;padding-top:9px;padding-bottom:9px; color:#000; font-weight:bold; font-size:16px;-moz-border-radius: 6px;-webkit-border-radius: 6px;
}
ol.update{
 list-style:none;font-size:1.1em; margin-top:20px;padding-left:0; 
}
#flash{
 margin-top:20px;
 text-align:left;
}
#searchword{
 text-align:left; margin-top:20px; display:none;
 font-family:Arial, Helvetica, sans-serif;
 font-size:16px;
 color:#000;
}
.searchword{
 font-weight:bold;
 color:#fe6f41;
}
ol.update li{ border-bottom:#dedede dashed 1px; text-align:left;padding-top:10px;padding-bottom:10px;}
ol.update li:first-child{ border-top:#dedede dashed 1px; text-align:left}
</style>
</body>
</html>