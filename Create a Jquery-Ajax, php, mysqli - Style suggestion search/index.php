<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create a Jquery/Ajax, php, mysqli - Style suggestion search</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
function find(textboxString) {
    if(textboxString.length == 0) {
        $('#resultbox').fadeOut(); // Hide the resultbox box
    } else {
        $.post("ajaxsuggestdata.php", {queryString: ""+textboxString+""}, function(data) { // Do an AJAX call
            $('#resultbox').fadeIn(); // Show the resultbox box
            $('#resultbox').html(data); // Fill the resultbox box
        });
    }
    // Fade out the resultbox box when not active
     $("input").blur(function(){
        $('#resultbox').fadeOut();
     });
     // Safely inject CSS3 and give the search results a shadow
    var cssObj = { 'box-shadow' : '#888 5px 10px 10px', // Added when CSS3 is standard
        '-webkit-box-shadow' : '#888 5px 10px 10px', // Safari
        '-moz-box-shadow' : '#888 5px 10px 10px'}; // Firefox 3.5+
    $("#resultbox").css(cssObj);
}
</script>
</head>
<body>
<div style="margin-left:50px">
    <div><h2>What are you looking for?</h2></div>
    <form id="searchwrapper">
        <div>
            <input type="text" size="30" class="searchbox" value="" id="textboxString" onkeyup="find(this.value);" />
        </div>
        <div id="resultbox"></div>
    </form>
</div>
<style>
    body, div, img, p { padding:0; margin:0; }
    a img { border:0 }
    body { font-family:"Lucida Grande","Lucida Sans Unicode",Arial,Verdana,sans-serif; }
    #searchwrapper {
        width:310px; 
        height:40px;
        background-image:url(img/searchbox.jpg);
        background-repeat:no-repeat; 
        padding:0px;
        margin:0px;
        position:relative; 
    }
    #searchwrapper form { display:inline ; }
    .searchbox {
        border:0px;
        background-color:transparent; 
        position:absolute; 
        top:5px;
        left:9px;
        width:256px;
        height:28px;
        color:#FFFFFF;
    }
    #dbresults { border-width:1px; border-color:#919191; border-style:solid; width:310px;
        font-size:10px; margin-top:20px; -moz-box-shadow:0px 0px 3px #aaa;
        -webkit-box-shadow:0px 0px 3px #aaa;
        box-shadow:0px 0px 3px #aaa;
        -moz-border-radius:5px;
        -webkit-border-radius:5px;
        border-radius:5px;
        padding-top:42px;   
    }
    #dbresults a { display:block; background-color:#D8D6D6; clear:left; height:56px; text-decoration:none; }
    #dbresults a:hover { background-color:#b7b7b7; color:#ffffff; }
    #dbresults a img { float:left; padding:5px 10px; }
    #dbresults a span { color:#555555; }
    #dbresults a:hover span { color:#f1f1f1; }
</style>
</body>
</html>