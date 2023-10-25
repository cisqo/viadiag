<?php

$clientip		= $_SERVER['REMOTE_ADDR']; // Do Not Touch 
$clienturl  = @$_SERVER['HTTP_REFERER'];

echo "clientip: ".$clientip;
echo "clienturl: ".$clienturl;


if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
$clientip = $_SERVER['HTTP_X_FORWARDED_FOR'];
echo "clientipHTTP_X: ".$clientip;

} else {
$clientip = $_SERVER['REMOTE_ADDR'];
echo "clientip: ".$clientip;

}

print_r($_SERVER);

?>