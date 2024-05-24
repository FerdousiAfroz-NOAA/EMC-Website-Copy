<?php

$fileName = "../../../../../../../mmb/rtma/prod/URMA_CONUS_t2m_cyc.txt";

$result = "";
$contents = file($fileName);
$hour = trim($contents[0]);
#$min = $contents[1];
$result = $hour;
?>

<?php
#var_dump($contents);
#echo "Test:".$result; ?>
