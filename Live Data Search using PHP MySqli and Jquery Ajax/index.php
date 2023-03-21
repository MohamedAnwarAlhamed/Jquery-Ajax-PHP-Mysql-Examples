<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Live Data Search using PHP MySqli and Jquery Ajax</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
 load_data();
  function load_data(query)
  {
   $.ajax({
    url:"ajaxlivesearch.php",
    method:"POST",
    data:{query:query},
    success:function(data)
    {
  $('#result').html(data);
    }
   });
  }
  $('#search_text').keyup(function(){
   var search = $(this).val();
   if(search != ''){
    load_data(search);
   }else{
    load_data();
   }
  });
});
</script>
</head>
<body>
<div class="container search-table">
<p><h2 align="center">Live Data Search using PHP MySqli and Jquery Ajax</h2></p>
            <div class="search-box">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Search All Fields</h5>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="search_text" id="search_text" class="form-control" placeholder="Search all fields e.g. HTML">
                    </div> 
                </div>
            </div>
   <div id="result"></div>
</div>
<style>
.search-table{
    padding: 10%;
    margin-top: -6%;
}
.search-box{
    background: #c1c1c1;
    border: 1px solid #ababab;
    padding: 3%;
}
.search-box input:focus{
    box-shadow:none;
    border:2px solid #eeeeee;
}
.search-list{
    background: #fff;
    border: 1px solid #ababab;
    border-top: none;
}
.search-list h3{
    background: #eee;
    padding: 3%;color:#fe6f41;
    margin-bottom: 0%;
}
</style>
</body>
</html>