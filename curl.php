#!/usr/local/bin/php -q
<?php
$ch = curl_init();

$url2 = "http://www.offover.com/vne/makefulltextfeed.php?"; //Wishing I could use $_GET here, in order to retrieve the session ID from the first result page
//$webaddress='http://grunread.appspot.com';
//$submitval='Create Feed';
$POSTFIELDS2 = 'url=http://grunread.appspot.com&submit=Create+Feed';

$url2 .= $POSTFIELDS2;

curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS,$POSTFIELDS2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file_path);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
$result = curl_exec($ch);
echo 'result is:';
echo $result; 
curl_close($ch);
?>
