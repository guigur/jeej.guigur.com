<!DOCTYPE html>
    <html>
        <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        </head>
        <body>
<?php
include_once('randomizer.php');
echo '<video id="videoPlayer" width="100%" height="100%" src="'.$content.'" type="video/mp4" autoplay autobuffer controls ></video>';
?>
<script type="text/javascript">
    var nextVideo = "";
    mdlol();
    function mdlol()
    {
        $.ajax({url: "randomizer.php", success: function(result){
            nextVideo  = result;
            console.log(nextVideo);
        }});
    };
    var videoPlayer = document.getElementById('videoPlayer');
    videoPlayer.onended = function(){
        videoPlayer.src = nextVideo;
        mdlol();
    }
</script>

        </body>
</html>
