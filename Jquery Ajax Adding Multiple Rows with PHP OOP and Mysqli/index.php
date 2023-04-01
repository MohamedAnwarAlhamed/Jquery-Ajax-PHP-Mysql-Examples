<!DOCTYPE html>
<html>
<head>
    <title>Jquery Ajax Adding Multiple Rows with PHP OOP and Mysqli</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Jquery Ajax Adding Multiple Rows with PHP OOP and Mysqli</h2>
            <h2>Members Table</h2>
            <div id="table"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h2>Add Form</h2>
            <form id="addForm">
                <hr>
                <div class="row">
                    <div class="col-md-2">
                        <label style="position:relative; top:7px;">Firstname:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="firstname[]" class="form-control">
                    </div>
                </div>
                <div style="height:10px;"></div>
                <div class="row">
                    <div class="col-md-2">
                        <label style="position:relative; top:7px;">Lastname:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="lastname[]" class="form-control">
                    </div>
                </div>
                <hr>
                <div id="newrow"></div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" id="save" class="btn btn-primary"> Save</button>
                        <button type="button" id="newbutton" class="btn btn-primary"> Add New</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    showTable();
 
    $('#newbutton').click(function(){
        $('#newrow').slideDown();
        var newrow = '<hr>';
            newrow = '<div class="row">';
            newrow += '<div class="col-md-2"><label style="position:relative; top:7px;">Firstname:</label></div>';
            newrow += '<div class="col-md-10"><input type="text" name="firstname[]" class="form-control"></div>';
            newrow += '</div>';
            newrow += '<div style="height:10px;"></div>';
            newrow += '<div class="row">';
            newrow += '<div class="col-md-2"><label style="position:relative; top:7px;">Lastname:</label></div>';
            newrow += '<div class="col-md-10"><input type="text" name="lastname[]" class="form-control"></div>';
            newrow += '</div>';
            newrow += '<hr>';      
        $('#newrow').append(newrow);    
    });
 
    $('#save').click(function(){
        var addForm = $('#addForm').serialize();
        $.ajax({
            type: 'POST',
            url: 'add.php',
            data: addForm,
            success:function(data){
                if(data==''){
                    showTable();
                    $('#addForm')[0].reset();
                    $('#newrow').slideUp();
                    $('#newrow').empty();
                }
                else{
                    showTable();
                    $('#addForm')[0].reset();
                    $('#newrow').slideUp();
                    $('#newrow').empty();
                    alert('Rows with empty field are not added');
                }
                 
            }
        });
    });
 
});
 
function showTable(){
    $.ajax({
        type: 'POST',
        url: 'fetch.php',
        data:{
            fetch: 1,
        },
        success:function(data){
            $('#table').html(data);
        }
    });
}
</script>
</body>
</html>