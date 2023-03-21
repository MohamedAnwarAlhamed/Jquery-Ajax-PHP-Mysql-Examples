<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Month Array List Select Box Live-search</title>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
      <h2>PHP Month Array List Select Box Live-search</h2>
      <p>This uses <a href="https://silviomoreto.github.io/bootstrap-select/">https://silviomoreto.github.io/bootstrap-select/</a></p>
      <hr />
    </div>
<?php
$lang_Date = array(
 'Jan'   =>'January',
 'Feb'   =>'February',
 'Mar'   =>'March',
 'Apr'   =>'April',
 'May'   =>'May',
 'June'   =>'June',
 'July'   =>'July',
 'August'  =>'August',
 'Sep'  =>'September',
 'Oct'  =>'October',
 'Nov'  =>'November',
 'Dec'  =>'December',
); 
?>
    <div class="row-fluid">
      <select class="selectpicker" data-show-subtext="true" data-live-search="true">
   <?php
    foreach ($lang_Date as $key=>$value){
  $selected = ($key==$function)?" Selected=\"Selected\"": "";
  echo "<option data-subtext=\"$key\" $selected > $value </option>";
    }
    ?>
      </select>
      <span class="help-inline">Try searching for November</span>
    </div>
  </div>
</body>
</html>