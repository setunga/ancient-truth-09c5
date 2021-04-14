<?php
$img=file('setunga.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>