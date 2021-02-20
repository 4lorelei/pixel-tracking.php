<?php
header("Content-type: image/jpeg");
mysql_connect("localhost","","");

$origfile="./orso.JPG";
$fd = fopen ($origfile, "rb");
$contents = fread ($fd, filesize ($origfile));
fclose ($fd);

print $contents; 