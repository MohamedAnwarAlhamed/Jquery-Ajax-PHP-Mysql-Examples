<html>

<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DataTable Inline Editing using PHP Mysqli jquery ajax and X-Editable</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" />
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>

    <script type="text/javascript" language="javascript">
        $(document).ready(function() {
            var dataTable = $('#sample_data').DataTable({
                "ajax": {
                    url: "fetchrec.php",
                    type: "POST",
                },
                createdRow: function(row, data, rowIndex) {
                    $.each($('td', row), function(colIndex) {
                        if (colIndex == 1) {
                            $(this).attr('data-name', 'name');
                            $(this).attr('class', 'name');
                            $(this).attr('data-type', 'text');
                            $(this).attr('data-pk', data[0]);
                        }
                        if (colIndex == 2) {
                            $(this).attr('data-name', 'email');
                            $(this).attr('class', 'email');
                            $(this).attr('data-type', 'text');
                            $(this).attr('data-pk', data[0]);
                        }
                        if (colIndex == 3) {
                            $(this).attr('data-name', 'phone');
                            $(this).attr('class', 'phone');
                            $(this).attr('data-type', 'text');
                            $(this).attr('data-pk', data[0]);
                        }
                    });
                }
            });

            $('#sample_data').editable({
                container: 'body',
                selector: 'td.name',
                url: 'update_rec.php',
                title: 'Name',
                type: 'POST',
                validate: function(value) {
                    if ($.trim(value) == '') {
                        return 'This field is required';
                    }
                }
            });

            $('#sample_data').editable({
                container: 'body',
                selector: 'td.email',
                url: 'update_rec.php',
                title: 'Email',
                type: 'POST',
                validate: function(value) {
                    if ($.trim(value) == '') {
                        return 'This field is required';
                    }
                }
            });

            $('#sample_data').editable({
                container: 'body',
                selector: 'td.phone',
                url: 'update_rec.php',
                title: 'Phone',
                type: 'POST',
                validate: function(value) {
                    if ($.trim(value) == '') {
                        return 'This field is required';
                    }
                }
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <h3 align="center">DataTable Inline Editing using PHP Mysqli jquery ajax and X-Editable</h3>
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">DataTable</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="sample_data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />
</body>

</html>