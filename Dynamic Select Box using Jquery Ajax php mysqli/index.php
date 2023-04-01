<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dynamic Select Box using Jquery Ajax php mysqli</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript">
         $(document).ready(function()
         {
          $(".country").change(function()
          {
           var id=$(this).val();
           var dataString = 'id='+ id;
           $.ajax
           ({
            type: "POST",
            url: "city.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
             $(".city").html(html);
            }
           });
          });
         });
</script> 
</head>
<body>
 <p>State : 
         <select name="country" class="country select" style="width:250px" >
            <option value="1">Alabama</option>
            <option value="2">Alaska</option>
            <option value="3">Arizona</option>
            <option value="4" selected>California</option>
            <option value="5">Colorado</option>
            <option value="6">Connecticut</option>
            <option value="7">Florida</option>
            <option value="8">Georgia</option>
         </select></p>  
<p>City :
         <select name="city" style="width:250px" class="city select">
          <option value="" selected="selected" >Please Select Your Area</option>
         </select></p>       
</body>
</html>