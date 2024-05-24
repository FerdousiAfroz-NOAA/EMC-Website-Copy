<?php

#$fileName = "../../../../../../mmb/rtma/prod/CONUS_RTMARU_cyc.txt";
$fileName = "../../../../../../../mmb/rtma/prod_ts/urma/rtma.html";
$hilats = "";
$hilongs = "";
$hinames = "";
$contents = file($fileName);

foreach($contents as $line) {
    #echo $line . "\n";
    if ( strpos($line, 'hilats') !== false ){
       $hilats = $line;
       #echo $hilats . "\n";
       break;
    }
}

foreach($contents as $line) {
     if ( strpos($line, 'hilons') !== false ){
       $hilongs = $line;
       #echo $hilongs . "\n";
       break;
    }
}

foreach($contents as $line) {
    if ( strpos($line, 'hinames') !== false ){
       $hinames = $line;
       #echo $hilongs . "\n";
       break;
    }
}



//Remove garabage
$hilats = trim(str_replace('var hilats=', '', $hilats));
$hilongs = trim(str_replace('var hilons=', '', $hilongs));
$hinames = trim(str_replace('var hinames=', '', $hinames));
//Remove Open Bracket from string variable
$hilats = trim(str_replace('[', '', $hilats));
$hilongs = trim(str_replace('[', '', $hilongs));
$hinames = trim(str_replace('[', '', $hinames));
//Remove Closed Bracket from string variable
$hilats = trim(str_replace(']', '', $hilats));
$hilongs = trim(str_replace(']', '', $hilongs));
$hinames = trim(str_replace(']', '', $hinames));
//Remove single quotes
$hinames = trim(str_replace("'", "", $hinames));


//Split values into an array
$hilatsArr = explode(',', $hilats);
$hilongsArr = explode(',', $hilongs);
$hinamesArr = explode(',', $hinames);
?>

<?php
#var_dump($contents);
#var_dump($hilatsArr);
#var_dump($hilongsArr);
#var_dump($hinamesArr);
?>
