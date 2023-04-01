<!doctype html>
<html>
<head>
<title>Like Unlike using PHP Mysqli and jQuery AJAX</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type='text/javascript'>
$(document).ready(function(){
    $(".like, .unlike").click(function(){
        var id = this.id;   
        var split_id = id.split("_");
        var text = split_id[0];
        var postid = split_id[1]; 
        var type = 0;
        if(text == "like"){
            type = 1;
        }else{
            type = 0;
        }
        $.ajax({
            url: 'likeunlike.php',
            type: 'post',
            data: {postid:postid,type:type},
            dataType: 'json',
            success: function(data){
                var likes = data['likes'];
                var unlikes = data['unlikes'];
                $("#likes_"+postid).text(likes);       
                $("#unlikes_"+postid).text(unlikes);   
                if(type == 1){
                    $("#like_"+postid).css("color","#ffa449");
                    $("#unlike_"+postid).css("color","lightseagreen");
                }
                if(type == 0){
                    $("#unlike_"+postid).css("color","#ffa449");
                    $("#like_"+postid).css("color","lightseagreen");
                }
            }
        });
    });
});
</script>
</head>
<body >
<div class="container" >
    <div class="row" style="padding:50px;">
        <p><h1>Like Unlike using PHP Mysqli and jQuery AJAX</h1></p>
        <div class="content">
            <?php
            include 'dbcon.php';
            $userid = 5;
            $query = 'SELECT * FROM posts';
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {

                $postid = $row['id'];
                $title = $row['title'];
                $conntent = $row['content'];
                $type = -1;

                $status_query =
                    'SELECT count(*) as cntStatus,type FROM like_unlike WHERE userid=' .
                    $userid .
                    ' and postid=' .
                    $postid;
                $status_result = mysqli_query($conn, $status_query);
                $status_row = mysqli_fetch_array($status_result);
                $count_status = $status_row['cntStatus'];
                if ($count_status > 0) {
                    $type = $status_row['type'];
                }

                $like_query =
                    'SELECT COUNT(*) AS cntLikes FROM like_unlike WHERE type=1 and postid=' .
                    $postid;
                $like_result = mysqli_query($conn, $like_query);
                $like_row = mysqli_fetch_array($like_result);
                $total_likes = $like_row['cntLikes'];

                $unlike_query =
                    'SELECT COUNT(*) AS cntUnlikes FROM like_unlike WHERE type=0 and postid=' .
                    $postid;
                $unlike_result = mysqli_query($conn, $unlike_query);
                $unlike_row = mysqli_fetch_array($unlike_result);
                $total_unlikes = $unlike_row['cntUnlikes'];
                ?>
                    <div class="post">
                        <h1><?php echo $title; ?></h1>
                        <div class="post-text">
                            <?php echo $conntent; ?>
                        </div>
                        <div class="post-action">
                            <input type="button" value="Like" id="like_<?php echo $postid; ?>" class="like" style="<?php if (
    $type == 1
) {
    echo 'color: #ffa449;';
} ?>" /> (<span id="likes_<?php echo $postid; ?>"><?php echo $total_likes; ?></span>) 
                            <input type="button" value="Unlike" id="unlike_<?php echo $postid; ?>" class="unlike" style="<?php if (
    $type == 0
) {
    echo 'color: #ffa449;';
} ?>" /> (<span id="unlikes_<?php echo $postid; ?>"><?php echo $total_unlikes; ?></span>)
                        </div>
                    </div>
            <?php
            }
            ?>
        </div>
   </div>
</div>
<style>
.content{
    border: 0px solid black;
    border-radius: 3px;
    padding: 5px;
    margin: 0 auto;
    width: 70%;
}
.post{
    border-bottom: 1px solid black;
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
}
.post:last-child{
    border: 0;
}
.post h1{
    font-weight: normal;
    font-size: 30px;
}
.post-text{
    letter-spacing: 1px;
    font-size: 15px;
    font-family: serif;
    color: gray;
    text-align: justify;
}
.post-action{
    margin-top: 15px;
    margin-bottom: 15px;
}
.like,.unlike{
    border: 0;
    background: none;
    letter-spacing: 1px;
    color: lightseagreen;
}
.like,.unlike:hover{
    cursor: pointer;
}
</style>
</body>
</html>