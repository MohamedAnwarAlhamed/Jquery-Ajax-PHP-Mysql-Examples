<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dyanamic Drop down combo box using Ajax Get jquery in array</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<script type="text/javascript">
 jQuery(document).ready(function(){    
  jQuery("select[name='country']").change(function(){   
   var optionValue = jQuery("select[name='country']").val();  
   jQuery.ajax({
    type: "GET",
    url: "data.php",
    data: "country="+optionValue+"&status=1",
    beforeSend: function(){ jQuery("#ajaxLoader").show(); },
    complete: function(){ jQuery("#ajaxLoader").hide(); },
    success: function(response){
     jQuery("#cityAjax").html(response);
     jQuery("#cityAjax").show();
    }
   });    
  });
 });
</script>
</head>
<body> 
<h2>Dyanamic Drop down combo box using Ajax Get jquery ajax php in array</h2>
<h1>Countries:</h1>
<div class="box" style="position: absolute;top: 50%;left: 50%;">
<select name="country">
 <option value="">Please Select</option>
 <option value="1">Nepal</option>
 <option value="2">India</option>
 <option value="3">China</option>
 <option value="4">USA</option>
 <option value="5">UK</option>
 <option value="6">Philippines</option>
</select>
</div>
<div id="ajaxLoader" style="display:none"><img src="../img/loader.gif" alt="loading...">Loading...</div>
<div id="cityAjax" style="display:none"></div>
<style>
body {
  margin: 0;font-family: Arial;
  padding: 0;
  background-color: #004882;
}
h1 { 
  position: absolute;
  top: 35%; color:#fff;
  left:41%;
}
h2 { 
  color:#fff;padding:10px;text-align:center;
}
.box {
  transform: translate(-50%, -50%);
}
.box select {
  background-color: #0563af;
  color: white;
  padding: 12px;
  width: 250px;
  border: none;
  font-size: 20px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
  -webkit-appearance: button;
  appearance: button;
  outline: none;
}
.box::before {
  content: "\f13a";
  font-family: FontAwesome;
  position: absolute;
  top: 0;
  right: 0;
  width: 20%;
  height: 100%;
  text-align: center;
  font-size: 28px;
  line-height: 45px;
  color: rgba(255, 255, 255, 0.5);
  background-color: rgba(255, 255, 255, 0.1);
  pointer-events: none;
}
.box:hover::before {
  color: rgba(255, 255, 255, 0.6);
  background-color: rgba(255, 255, 255, 0.2);
}
.box select option {
  padding: 30px;
}
#ajaxLoader { 
  position: absolute;
  top: 25%; color:#fff;
  left:41%;
}
.city { 
  position: absolute;
  top: 55%; color:#fff;
  left:41%;
}
</style>
</body>
</html>