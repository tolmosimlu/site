<?php

$ch = curl_init();
$timeout = 5; // set to zero for no timeout

curl_setopt ($ch, CURLOPT_URL, "http://ifconfig.co/");

curl_setopt($ch,CURLOPT_USERAGENT,'curl/7.19.7 (x86_64-redhat-linux-gnu) libcurl/7.19.7 NSS/3.44 zlib/1.2.3 libidn/1.18 libssh2/1.4.2');

curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$file_contents = curl_exec($ch);
curl_close($ch);
echo $file_contents;
?>
