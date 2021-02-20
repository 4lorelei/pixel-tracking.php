<?php
header("Content-type: image/jpeg");

$origfile="./orso.JPG";
$fd = fopen ($origfile, "rb");
$contents = fread ($fd, filesize ($origfile));
fclose ($fd);

print $contents; 