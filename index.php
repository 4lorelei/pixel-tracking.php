<?php

  header('Content-type: image/png');
#echo gzinflate(base64_decode('6wzwc+flkuJiYGDg9fRwCQLSjCDMwQQkJ5QH3wNSbCVBfsEMYJC3jH0ikOLxdHEMqZiTnJCQAOSxMDB+E7cIBcl7uvq5rHNKaAIA'));
 echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=');

<img src="https://pixel-php.herokuapp.com/orso.JPG" alt="Mia Immagine">


$ip = $_SERVER['REMOTE_ADDR'];
$referer = $_SERVER['HTTP_REFERER'];
$useragent = $_SERVER['HTTP_USER_AGENT'];
$browser = get_browser(null, true);

$myLogJson = file_get_contents("traccia.txt");
#$log = json_decode($myLogJson,true);
$dd=date("d/m/Y H:i:s");
$log = $log . "\n" . $ip . "-" .$referer . "-" . $useragent . "-" . $browser . "-" .$dd;
	
$myLogJson = $log;
#$myLogJson = json_encode($log);
file_put_contents("traccia.txt", $myLogJson, LOCK_EX);

?>