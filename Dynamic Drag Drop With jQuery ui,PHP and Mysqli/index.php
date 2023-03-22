<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Drag Drop With jQuery ui,PHP and Mysqli</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        ul {
            padding: 0px;
            margin: 0px;
        }

        #response {
            padding: 10px;
            background-color: #9F9;
            border: 2px solid #396;
            margin-bottom: 20px;
        }

        #list li {
            margin: 0 0 3px;
            padding: 8px;
            background-color: #00CCCC;
            color: #fff;
            list-style: none;
            border: #CCCCCC solid 1px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            function slideout() {
                setTimeout(function() {
                    $("#response").slideUp("slow", function() {});
                }, 2000);
            }

            $("#response").hide();
            $(function() {
                $("#list ul").sortable({
                    opacity: 0.8,
                    cursor: 'move',
                    update: function() {
                        var order = $(this).sortable("serialize") + '&update=update';
                        $.post("updateList.php", order, function(theResponse) {
                            $("#response").html(theResponse);
                            $("#response").slideDown('slow');
                            slideout();
                        });
                    }
                });
            });

        });
    </script>
</head>

<body>
    <div id="container" style="width:300px;">
        <div id="list">
            <div id="response"> </div>
            <ul>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'testingdb');
                if ($conn->connect_error) {
                    die('Error : (' . $conn->connect_errno . ') ' . $conn->connect_error);
                }
                $results = $conn->query("SELECT id, text FROM dragdrop ORDER BY listorder ASC");
                while ($row = $results->fetch_assoc()) {
                    $id = $row['id'];
                    $text = $row['text'];
                ?>
                    <li id="arrayorder_<?php echo $id ?>"><?php echo $id ?> <?php echo $text; ?>
                        <div class="clear"></div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</body>

</html>