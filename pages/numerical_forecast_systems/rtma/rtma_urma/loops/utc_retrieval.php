<?php

#$fileName = "../../../../../../mmb/rtma/prod/CONUS_RTMARU_cyc.txt";
$fileName = "../../../../../../mmb/rtma/prod/RTMA_CONUS_t2m_cyc.txt";
$result = "";
$contents = file($fileName);
#$hour = trim(str_replace('HOUR=', '', $contents[0]));;
$hour = trim($contents[0]);
$result = $hour;
?>

<?php
#var_dump($contents);
#echo "Test:".$result; ?>
