<!DOCTYPE html>
    <html>
        <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <link rel="stylesheet" type="text/css" href="css/style.css">
        </head>
        <body>
<span class="lol">
<?php
include_once('randomizer.php'); ?>
    </span>
<center><video id="videoPlayer" src="<?=$content?>" type="video/mp4" autoplay autobuffer controls></video></center>
            <script type="text/javascript">
                var nextVideo = mdlol();
                function mdlol()
                {
                    $.ajax({url: "randomizer.php", success: function(result){
                        nextVideo  = result;
                        console.log(nextVideo);
                    }});
                }
                var videoPlayer = document.getElementById('videoPlayer');
                videoPlayer.onended = function()
                {
                    videoPlayer.src = nextVideo;
                    mdlol();
                }
            </script>
            <span class="topTxt">
                jeej
                <a href="https://twitter.com/share" class="twitter-share-button" data-text="jeej" data-via="guigur">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </span>
            <span class="bottomTxt">
                Site par
                <a href="https://twitter.com/guigur" class="twitter-follow-button" data-show-count="false">Follow @guigur</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                 pour
                <a href="https://twitter.com/JFCLG" class="twitter-follow-button" data-show-count="false">Follow @JFCLG</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </span>
        </body>
</html>
