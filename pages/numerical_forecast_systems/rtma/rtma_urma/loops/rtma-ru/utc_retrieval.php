<?php

$fileName = "../../../../../../../mmb/rtma/prod/CONUS_RTMARU_cyc.txt";

$result = "";
$contents = file($fileName);
$hour = trim(str_replace('HOUR=', '', $contents[0]));
$min = trim(str_replace('MINUTE=', '', $contents[1]));
$result = $hour .' '.$min;
?>

<?php
#var_dump($contents);
#echo "Test:".$result; ?>
