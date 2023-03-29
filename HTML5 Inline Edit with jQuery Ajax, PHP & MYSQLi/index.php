<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HTML5 Inline Content Editing with jQuery, PHP & MYSQL</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(function(){
    var message_status = $("#status");
    $("td[contenteditable=true]").blur(function(){
        var field_userid = $(this).attr("id");
        var value = $(this).text();
  var string = value;
  $.post("ajax_inlineupdate.php", { string: string,field_userid: field_userid}, function(data) {
           if(data != '')
     {
   message_status.show();
   message_status.text(data);
   //hide the message
   setTimeout(function(){message_status.hide()},1000);
     }
        });
    });
});
</script>
<style>
table.zebra-style {
 font-family:"Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
 text-align:left;
 border:1px solid #ccc;
 margin-bottom:25px;
 width:50%
}
table.zebra-style th {
 color: #444;
 font-size: 13px;
 font-weight: normal;
 padding: 10px 8px;
}
table.zebra-style td {
 color: #777;
 padding: 8px;
 font-size:13px;
}
table.zebra-style tr.odd {
 background:#f2f2f2;
}
body {
 background:#fafafa;
}
.container {
 width: 800px;
 border: 1px solid #C4CDE0;
 border-radius: 2px;
 margin: 0 auto;
 height: 1300px;
 background:#fff;
 padding-left:10px;
}
#status { padding:10px; background:#88C4FF; color:#000; font-weight:bold; font-size:12px; margin-bottom:10px; display:none; width:90%; }
</style>
</head>
<body>
  <h1>HTML5 Inline Edit with jQuery Ajax, PHP & MYSQLi</h1>
  <div id="status"></div>
<table class="table zebra-style">
    <thead>
      <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>City</th>
      </tr>
    </thead>
    <tbody>
      <tr class="odd">
        <td>1</td>
        <td id="f:1" contenteditable="true">Michael</td>
        <td id="l:1" contenteditable="true">Holz</td>
        <td id="c:1" contenteditable="true">Olongapo City</td>
      </tr>
      <tr>
        <td>2</td>
        <td id="f:2" contenteditable="true">Paula</td>
        <td id="l:2" contenteditable="true">Wilson</td>
        <td id="c:2" contenteditable="true">California</td>
      </tr>
      <tr class="odd">
        <td>3</td>
        <td id="f:3" contenteditable="true">Antonio</td>
        <td id="l:3" contenteditable="true">Moreno</td>
        <td id="c:3" contenteditable="true">Olongapo City</td>
      </tr>
    </tbody>
 </table>
</body>
</html>