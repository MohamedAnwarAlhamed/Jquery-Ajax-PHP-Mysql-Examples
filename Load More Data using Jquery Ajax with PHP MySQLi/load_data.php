<?php
sleep(1);
include 'conn.php';
if (isset($_POST['lastid'])) {
    $lastid = $_POST['lastid'];
    $query = mysqli_query(
        $conn,
        "select * from country where id > '$lastid' order by id asc limit 5"
    );

    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_array($query)) { ?>
                    <div class="row">
                         <div class="col-lg-12">
                              <div class="btn btn-success" style="margin:10px;width:50%;"><?php echo $row[
                                  'country'
                              ]; ?></div>
                         </div>
                    </div>
               <?php $lastid = $row['id'];} ?>
          <div id="remove"> 
          <div id="remove_row" class="row">
               <div class="col-lg-12">
                    <button type="button" name="loadmore" id="loadmore" data-id="<?php echo $lastid; ?>" class="btn btn-primary">See More</button>
               </div>
          </div>
          </div> 
          <?php
    }
}
?>
