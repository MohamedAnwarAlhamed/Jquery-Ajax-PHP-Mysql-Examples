<!DOCTYPE html>  
<html>  
<head>  
      <title>Load More Data using Jquery Ajax with PHP MySQLi</title>  
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />   
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>  
</head>  
<body>  
      <div class="container">   
        <div class="row">
              <h2 align="center">Load More Data using Jquery Ajax with PHP MySQLi</h2>
              <div id="loadtable">  
                  <?php
                  $lastid = '';
                  include 'conn.php';
                  $query = mysqli_query(
                      $conn,
                      'select * from country order by id asc limit 5'
                  );
                  while ($row = mysqli_fetch_array($query)) { ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="btn btn-success" style="margin:10px;width:50%;"><?php echo $row[
                                    'country'
                                ]; ?></div>
                            </div>
                        </div>
                        <?php $lastid = $row['id'];}
                  ?>
                  <div id="remove">
                  <div class="row">
                      <div class="col-lg-12">
                      <button type="button" name="loadmore" id="loadmore" data-id="<?php echo $lastid; ?>" class="btn btn-primary">See More</button>
                      </div>
                  </div>
                  </div>  
                </div>  
          </div>  
      </div>
 
<script>
$(document).ready(function(){  
      $(document).on('click', '#loadmore', function(){  
           var lastid = $(this).data('id');  
           $('#loadmore').html('Loading...');  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{
                    lastid:lastid,
                },  
                dataType:"text",  
                success:function(data)  
                {  
                     if(data != '')  
                     {  
                          $('#remove').remove();  
                          $('#loadtable').append(data);  
                     }  
                     else 
                     {  
                          $('#loadmore').html('No more data to show');  
                     }  
                }  
           });  
      });  
 }); 
</script>  
</body>  
</html>  