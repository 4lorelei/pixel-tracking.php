<?php
header("Content-type: image/jpeg");

$origfile="./frog.JPG"; 
$fd = fopen ($origfile, "rb");
$contents = fread ($fd, filesize ($origfile));
fclose ($fd);


$contents = base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=');


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