<?php 
include("config.php");
if(isset($_GET['canal']) && !empty($_GET['canal'])) {
    include("live/get_video.php");
}elseif(isset($_GET['url']) && !empty($_GET['url'])) {
    include("live/get_ch_full.php");
}