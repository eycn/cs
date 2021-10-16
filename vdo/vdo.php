<?php
/**
* PHP随机图显示
*/
header('Content-Type: text/html; charset=UTF-8');
$vdo_array = glob("vdo/*.mp4",GLOB_BRACE);
$vdo = array_rand($vdo_array);
header("location:$vdo_array[$vdo]");
?>