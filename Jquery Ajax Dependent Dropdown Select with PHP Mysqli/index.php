<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Ajax Dependent Dropdown Select with PHP Mysqli</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />   
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script> 
</head>
<body>
<?php include 'conn.php'; ?>
 <div class="container mt-4">
 <h4 class="text-center">Jquery Ajax Dependent Dropdown Select with PHP Mysqli</h4><br>
   <div class="row">
    <div class="col-sm-4">
      <h6>Car Brand Name</h6>
        <select class="form-select" name="select" id="selectID">
        <option>Select Option</option>
 
        <?php
        $sql = 'SELECT * FROM carbrands';
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <option value="<?php echo $row['brand_id']; ?>"><?php echo $row[
    'brand_name'
]; ?></option>
            <?php }
        ?>
 
        </select>
     </div> 
 
     <div class="col-sm-4">  
     <h6>Car Model</h6>
      <select  class="form-select"  name="select" id="show"></select>
    </div>
    
   </div>
 </div>  
<script>
  $(document).ready(function(){
     $('#selectID').change(function(){
      var Stdid = $('#selectID').val(); 
 
      $.ajax({
        type: 'POST',
        url: 'fetch.php',
        data: {id:Stdid},  
        success: function(data)  
         {
            $('#show').html(data);
         }
        });
     });
  });
</script> 
</body>
</html>