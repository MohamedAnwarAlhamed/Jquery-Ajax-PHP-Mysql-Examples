<!DOCTYPE html>
<html>
<head>
<title>Delete Multiple Records using PHP Mysql and Jquey Ajax with Animated Effect</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>  
    <body>  
        <div class="container">  
            <br />
   <div class="table-responsive">  
    <h3 align="center">Delete Multiple Records using PHP Mysql and Jquey Ajax with Animated Effect</h3><br />
    <div id="targetLayer" class="btn btn-success" style="display:none;width:100%;margin-bottom: 10px;"></div>
    <div id="loader-icon" style="display:none;"><img src="img/loader.gif" /></div>
    <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th width="5%"><button type="button" name="delete_all" id="delete_all" class="btn btn-danger btn-xs">Delete</button></th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Salary</th>
                        </tr>
                        </thead>
                        <?php
                        include 'dbcon.php';
                        $result = $conn->query(
                            'SELECT * FROM employee ORDER BY id DESC'
                        );
                        foreach ($result as $row) {
                            echo '
                            <tr>
                                <td>
                                    <input type="checkbox" class="delete_checkbox" value="' .
                                $row['id'] .
                                '" />
                                </td>
                                <td>' .
                                $row['name'] .
                                '</td>
                                <td>' .
                                $row['position'] .
                                '</td>
                                <td>' .
                                $row['office'] .
                                '</td>
                                <td>' .
                                $row['age'] .
                                '</td>
                                <td>' .
                                $row['salary'] .
                                '</td>
                            </tr>
                            ';
                        }
                        ?>
                    </table>
                </div>
   </div>  
  </div>
<style>
.removeRow {background-color: #ff7373;color:#FFFFFF;}
</style>
<script>  
$(document).ready(function(){ 
    $('.delete_checkbox').click(function(){
        if($(this).is(':checked')) {
            $(this).closest('tr').addClass('removeRow');
        }else{
            $(this).closest('tr').removeClass('removeRow');
        }
    });
    $('#delete_all').click(function(){
        var checkbox = $('.delete_checkbox:checked');
        if(checkbox.length > 0){
            var checkbox_value = [];
            $(checkbox).each(function(){
                checkbox_value.push($(this).val());
            });
            $('#loader-icon').show();
            $('#targetLayer').hide();
            $.ajax({
                url:"delete.php",
                method:"POST",
                data:{checkbox_value:checkbox_value},
                success:function(data)
                {
                    $('.removeRow').fadeOut(1500);
                    $('#loader-icon').hide();
                    $('#targetLayer').show();
                    $('#targetLayer').html(data);
                }
            });
        }else {
            alert("Select atleast one records");
        }
    });
});  
</script>
</body>  
</html> 