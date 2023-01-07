<?php
error_reporting(0);


function http_get($url){

  $header = array(
     "User-Agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36"
);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  return curl_exec($ch);
}


$ret = "https://github.com/Ikuzot/Faucet/raw/main/prox.txt";
$ret = http_get($ret);
$img = "proxy.txt";
$file = fopen($img, "w");
fwrite($file, $ret);
fclose($file);




$getproxy = file_get_contents("proxy.txt");
$ipp = explode("\n" ,$getproxy);


$d = 40;

a:
$ff = rand(111,999);
$us = "Mozilla/5.0 (Linux; Android 8.1.0; C12 Pro Build/O11019) AppleWebKit/537.36 (KHTML, like Gecko) Kiwi Chrome/69.0.3".$ff.".40 Mobile Safari/537.36";

if($d == "349"){
exit;
}

$gg = $ipp[$d];
$mm = explode(":" ,$gg)[0];
$mmx = explode(":" ,$gg)[1];
$proxy_ip = $mm;
$proxy_port = $mmx;

$ua = array(
 "Host: ladangreceh.xyz", 
  "Pragma: no-cache", 
     "Cache-Control: no-cache", 
	 "upgrade-insecure-requests: 1", 
      "dnt: 1", 
     "User-Agent: ".$us.""
);
$login1 = "https://ladangreceh.xyz/click/0OB1YxuVb";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $login1);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL , 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy_ip);
curl_setopt($ch, CURLOPT_PROXYPORT, $proxy_port);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIE, true);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
curl_setopt( $ch, CURLOPT_REFERER, 'https://ladangreceh.xyz/click/0OB1YxuVb');
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_AUTOREFERER, true);
//curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
$ret = curl_exec($ch);





$ua = array(
 "Host: ladangreceh.xyz", 
  "Pragma: no-cache", 
     "Cache-Control: no-cache", 
	 "upgrade-insecure-requests: 1", 
      "dnt: 1", 
     "User-Agent: ".$us.""
);
$login = "https://ladangreceh.xyz/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $login);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL , 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy_ip);
curl_setopt($ch, CURLOPT_PROXYPORT, $proxy_port);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIE, true);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
curl_setopt( $ch, CURLOPT_REFERER, 'https://ladangreceh.xyz/click/0OB1YxuVb');
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_AUTOREFERER, true);
//curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
$ret = curl_exec($ch);
$bot1 = explode('<' ,explode('<i class="fa fa-hashtag" aria-hidden="true"></i>', $ret)[1])[0];
if($bot1 == ""){
$d = $d + 1;
goto a;

}else{
echo " User : ".$bot1." \n";
}
$d = $d + 1;
sleep(3);
goto a;


