<?php
header("Content-type: image/jpeg");

$origfile="./frog.JPG"; 
$fd = fopen ($origfile, "rb");
$contents = fread ($fd, filesize ($origfile));
fclose ($fd);

print $contents; 
$ip = $_SERVER['REMOTE_ADDR'];
$referer = $_SERVER['HTTP_REFERER'];
$useragent = $_SERVER['HTTP_USER_AGENT'];
$browser = get_browser(null, true);

$log = file_get_contents("traccia.txt");
$dd=date("d/m/Y H:i:s");
$log =  $log . "\n" . $ip . "-" .$referer . "-" . $useragent . "-" . $browser . "-" . $dd;
	
file_put_contents("traccia.txt", $log, LOCK_EX);