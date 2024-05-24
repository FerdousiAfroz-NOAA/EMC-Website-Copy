<?php

if (isset($_POST['data']) ) {
    $utc = $_POST['utc'];
    $data = json_decode($_POST['data']);
    $listFile = $data->{'paramName'};
    $filename = "";
    
    for($i = 0; $i < count($listFile); $i++) { 
       
       $searchValue = $utc.'/';
       $replaceValue = $utc.'/pan_';
       if ( strrpos($listFile[$i], "pan") == false ){
        $basePath = str_replace('//www.emc.ncep.noaa.gov', '', $listFile[$i]);
        //$url = '../../../../../../mmb/jcarley/rtma_urma/prod/RTMA/13/vec10m_Great_Lakes_RTMA_ANL.gif';
        $url = '../../../../../../..'.$basePath;
        //var_dump($url);
        $file = fopen($url, "r");
        if (!$file) {
         //echo "<p>Unable to open remote file.\n";
         $filename = str_replace($searchValue, $replaceValue,  $listFile[$i]);
         //echo "The new filename will be changed to the following: ".$filename;
         // We check again if the pan_ file exist and if both the pan file and regular file does not exist that we set that value to null
         $newFileBase = str_replace('//www.emc.ncep.noaa.gov', '../../../../../../..', $filename);
         $file2 = fopen($newFileBase, "r");
         if(!$file2){
           $listFile[$i] = null;
         }else{
            $listFile[$i] = $filename;
         }
         fclose($file2);
         //exit;
        }
        fclose($file);
      }
    }
    echo json_encode(array('success' => 1, 'results'=> $listFile));
}

?>
