
<?php
header('Content-Type: application/json');

$mainDir = './images';
$files = array();

$subDirectories = scandir($mainDir);
unset($subDirectories[0]);
unset($subDirectories[1]);

foreach($subDirectories as $subDirectory){
    foreach(glob($mainDir.'/'.$subDirectory.'/*') as $file){
        $files[] = $file;
    }
}

echo json_encode($files);



