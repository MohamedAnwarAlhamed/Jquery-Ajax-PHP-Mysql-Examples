<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery/Ajax, PHP and Mysql Autosuggest </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script>
        function suggest(inputString) {
            if (inputString.length == 0) {
                $('#suggestions').fadeOut();
            } else {
                $('#country').addClass('load');
                $.post("data.php", {
                    queryString: "" + inputString + ""
                }, function(data) {
                    if (data.length > 0) {
                        $('#suggestions').fadeIn();
                        $('#suggestionsList').html(data);
                        $('#country').removeClass('load');
                    }
                });
            }
        }

        function fill(thisValue) {
            $('#country').val(thisValue);
            setTimeout("$('#suggestions').fadeOut();", 600);
        }
    </script>
    <style>
        #country {
            width: 200px;
            padding: 3px;
            font-size: 110%;
            vertical-align: middle;
        }

        .suggestionsBox {
            width: 200px;
            color: #fff;
            margin: 0;
            padding: 0;
            background: #86BAC7;
            top: 0;
            left: 0;
        }

        .suggestionList {
            margin: 0px;
            padding: 0px;
        }

        .suggestionList ul li {
            list-style: none;
            margin: 0px;
            padding: 6px;
            border-bottom: 1px dotted #98BE56;
            cursor: pointer;
        }

        .suggestionList ul li:hover {
            background-color: #006E89;
            color: #000;
        }

        ul {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 11px;
            color: #FFF;
            padding: 0;
            margin: 0;
        }

        .load {
            background-image: url(img/loader.gif);
            background-position: right;
            background-repeat: no-repeat;
        }

        #suggest {
            position: relative;
        }

        .sf_active {
            border: 2px #8BB544 solid;
            background: #fff;
            color: #333;
        }
    </style>
</head>

<body>
    <form id="form" action="#">
        <div id="suggest">Start to type a country: <br />
            <input type="text" size="25" value="" id="country" onkeyup="suggest(this.value);" onblur="fill();" class="sf_active" />
            <div class="suggestionsBox" id="suggestions" style="display: none;">
                <div class="suggestionList" id="suggestionsList"> </div>
            </div>
        </div>
    </form>
</body>

</html>