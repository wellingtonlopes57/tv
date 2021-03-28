<style>
#hls-example {
    width: 100%;
    height: 100%;
}
body {
    margin: 0!important;
}
</style>
<!-- CSS  -->
<link href="https://vjs.zencdn.net/7.2.3/video-js.css" rel="stylesheet">
<!-- HTML -->
<video id='hls-example'  class="video-js vjs-default-skin" controls>
<source type="application/x-mpegURL" src="http://iptv.leoreis.me/live/3.m3u8">
</video>
<!-- JS code -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.14.1/videojs-contrib-hls.js"></script>
<script src="https://vjs.zencdn.net/7.2.3/video.js"></script>
<script>
var player = videojs('hls-example');
player.play();
</script>