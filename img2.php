<?php
header("Content-type: image/jpeg");

$origfile="./orso.JPG"; 
$fd = fopen ($origfile, "rb");
$contents = fread ($fd, filesize ($origfile));
fclose ($fd);

print $contents; 
$ip = $_SERVER['REMOTE_ADDR'];
$referer = $_SERVER['HTTP_REFERER'];
$useragent = $_SERVER['HTTP_USER_AGENT'];
$request_uri = $_SERVER['REQUEST_URI'];
$browser = get_browser(null, true);

$log = file_get_contents("traccia.txt");
$dd=date("d/m/Y H:i:s");
$log =  $log . "\n" . $ip . "-" .$referer . "-" . $useragent . "-" . $browser . "-" . $request_uri . "-" . $dd;
	
file_put_contents("traccia.txt", $log, LOCK_EX);
