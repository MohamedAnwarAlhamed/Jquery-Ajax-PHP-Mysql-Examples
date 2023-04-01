<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Mysql PDO AutoComplete Search with Jquery Ajax</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-warning">
  <div class="container">
    <div class="row mt-4">
      <div class="col-md-8 mx-auto bg-light rounded p-4">
        <h5 class="text-center font-weight-bold">PHP Mysql PDO AutoComplete Search with Jquery Ajax</h5>
        <hr class="my-1">
        <form action="details.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="search" id="search" placeholder="Search..." aria-describedby="basic-addon2" autocomplete="off">
          <button class="btn btn-outline-secondary" type="submit" name="submit" id="basic-addon22">Search</button>
        </div>
        </form>
        <div class="card list-group" id="show-list"></div>
      </div>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script>
$(document).ready(function () {
  // Send Search Text to the server
  $("#search").keyup(function () {
    let searchText = $(this).val();
    if (searchText != "") {
      $.ajax({
        url: "action.php",
        method: "post",
        data: {
          query: searchText,
        },
        success: function (response) {
          $("#show-list").html(response);
        },
      });
    } else {
      $("#show-list").html("");
    }
  });
  // Set searched text in input field on click of search button
  $(document).on("click", "a", function () {
    $("#search").val($(this).text());
    $("#show-list").html("");
  });
});
</script>
</body>
</html>