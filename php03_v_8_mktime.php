<?php
$_output="";

$_output.= 'strftime("%d %b %Y",mktime(0,0,0,1,1,2018))<br>';
$_output.= strftime("%d %b %Y",mktime(0,0,0,1,1,2018))."<br><br>";

$_output.= 'strftime("%d %b %Y",mktime(0,0,0,0,1,2018))<br>';
$_output.= strftime("%d %b %Y",mktime(0,0,0,0,1,2018))."<br><br>";

$_output.= 'strftime("%d %b %Y",mktime(0,0,0,-1,1,2018))<br>';
$_output.= strftime("%d %b %Y",mktime(0,0,0,-1,1,2018))."<br><br>";

$_output.= 'strftime("%d %b %Y",mktime(0,0,0,1,33,2018))<br>';
$_output.= strftime("%d %b %Y",mktime(0,0,0,1,33,2018))."<br><br>";

$_output.= 'strftime("%d %b %Y",mktime(0,0,0,1,-5,2018))<br>';
$_output.= strftime("%d %b %Y",mktime(0,0,0,1,-5,2018))."<br><br>";

echo $_output;
?>	