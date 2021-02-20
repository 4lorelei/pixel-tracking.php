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
$browser = get_browser(null, true);

$log = file_get_contents("traccia.txt");
#$log = json_decode($myLogJson,true);
$dd=date("d/m/Y H:i:s");
$log =  $log . "\n" . $ip . "-" .$referer . "-" . $useragent . "-" . $browser . "-" . $dd;
	
#$myLogJson = json_encode($log);
file_put_contents("traccia.txt", $log, LOCK_EX);


