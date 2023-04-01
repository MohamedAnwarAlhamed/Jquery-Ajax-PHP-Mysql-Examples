<?php
  require_once 'config.php';
 
  if (isset($_POST['submit'])) {
    $countryName = $_POST['search'];
 
    $sql = 'SELECT * FROM countries WHERE name = :name';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['name' => $countryName]);
    $row = $stmt->fetch();
  } else {
    header('location: .');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-5 mx-auto">
        <div class="card shadow text-center">
          <div class="card-header">
            <h1><?php echo $row['name']; ?></h1>
          </div>
          <div class="card-body">
            <h4><b>Country Code :</b> <?php echo $row['name']; ?></h4>
            <h4><b>Country ID :</b> <?php echo $row['id']; ?></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>