<html>  
 <head>  
  <title>Add Remove Input Fields Dynamically with jQuery and PHP MySQLi</title>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<style>
.input-wrapper div {
    margin-bottom: 10px;
}
.remove-input {
    margin-top: 10px;
    margin-left: 15px;
    vertical-align: text-bottom;
}
.add-input {
    margin-top: 10px;
    margin-left: 10px;
    vertical-align: text-bottom;
}
</style>
 </head>  
 <body>  
<?php
$conn = new mysqli('localhost', 'root', '', 'testingdb');
if ($conn->connect_error) {
    die('Error : (' . $conn->connect_errno . ') ' . $conn->connect_error);
}

if (isset($_POST['cmdaddnew'])) {
    $fields = $_POST['field'];
    foreach ($fields as $value) {
        //echo $value . " <br/>";
        $sql = "INSERT INTO fullnames (full_name) VALUES ('" . $value . "')";
        if ($conn->query($sql) === true) {
            echo '<h2>New record created successfully</h2>';
        } else {
            echo '<h2>Error:</h2>';
        }
    }
}
?>
  <div style="width:85%;padding:50px;">  
    <h2>Add Remove Input Fields Dynamically with jQuery and PHP MySQLi</h2> 
    <form action="" method="post">
        <div class="input-wrapper">
            <div>Name : <br/>
            <input type="text" name="field[]" value=""/>
            <a href="javascript:void(0);" class="add-input" title="Add input"><img src="img/add.png"/></a>
            </div>
        </div>
        <input type="submit" name="cmdaddnew" value="Submit"/>
    </form>
   
  </div>  
<script>
$(document).ready(function(){
    var max_input_fields = 10;
    var add_input = $('.add-input');
    var input_wrapper = $('.input-wrapper');
    var new_input = '<div><input type="text" name="field[]" value=""/><a href="javascript:void(0);" class="remove-input" title="Remove input"><img src="img/remove.png"/></a></div>';
    var add_input_count = 1; 
    $(add_input).click(function(){
        if(add_input_count < max_input_fields){
            add_input_count++; 
            $(input_wrapper).append(new_input); 
        }
    });
    $(input_wrapper).on('click', '.remove-input', function(e){
        e.preventDefault();
        $(this).parent('div').remove();
        add_input_count--;
    });
});
</script>
 </body>  
</html>  