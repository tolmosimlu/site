<?php
Header('Content-type: application/x-mpegURL');
$url = $_GET['url'];
$ch = curl_init();
$timeout = 5; // set to zero for no timeout

curl_setopt ($ch, CURLOPT_URL, $url);

curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36');
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$file_contents = curl_exec($ch);
curl_close($ch);
die($file_contents);
?>
