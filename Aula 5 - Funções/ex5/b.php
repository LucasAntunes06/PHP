<?php
$jan1 = mktime(0,0,0,1,31,2014);
$jan1_30 = mktime(0,30,0,1,31,2014);
$dif =$jan1_30 - $jan1;
echo $dif;
//Timestamp 
//Contagem de segundos desde o  início da Unix Epoc (01/01/1970)