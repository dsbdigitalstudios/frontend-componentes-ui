<?php $videoID = ""; ?>

{...}

<?php if ($videoID != '') : ?>

<div class="youtubeAPI" data-video="<?php echo $videoID;?>" style=" overflow:hidden">
    <aside class="playerVideoBox tv" style="overflow: hidden;">
        <div class="video-foreground">
            <div id="ytplayer" class="screen mute"><div>
        </div>
    </aside>
</div><!-- Video Cover -->

<?php endif;?>   

{...}

<?php if ($videoID != '') : ?>
<script>
    
    let tag = document.createElement('script');
    tag.src = "https://www.youtube.com/player_api";
    let firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    let player;
    let playerDefaults = {
        mute: 1,
        modestbranding: 1,
        autoplay: 1, 
        loop: 1,
        autohide: 1, 
        rel: 0,
        showinfo: 0, 
        controls: 0, 
        disablekb: 1, 
        enablejsapi: 0, 
        iv_load_policy: 3
    };
    function onYouTubePlayerAPIReady() {
        player = new YT.Player('ytplayer', {
            videoId: '<?php echo $videoID;?>',
            playerVars: playerDefaults,
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerReady,
                'suggestedQuality': 'large'
            }
        });
        
    }
    function onPlayerReady(event) {
        player.mute();
        player.playVideo();
        // player.setPlaybackQuality(suggestedQuality:large);
    }

</script>
<?php endif;?>  