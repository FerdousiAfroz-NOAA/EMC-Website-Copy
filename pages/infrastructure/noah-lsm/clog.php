<?php
global $browser_title;
 $browser_title = 'NOAH-LSM';
 include '../../portal_header.php';?>

<?php include 'sidebar.php';?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <!--<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>-->
            <button id="export" type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>
     <h2 id="section-title">NOAH-Land Surface</h2>
        <div id="description">

<?php

    $url = "https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/nam/references.php#TAB4";

     $fp = fopen($url, "r");
  
    $content = "";

    while( !feof( $fp ) ) 
    {

    $buffer = trim( fgets( $fp, 4096 ) );

    $content .= $buffer;

    }

    

    $start = '<h1 align="center">';

    $end = '<\/H3><p><p align="center">';

    

    preg_match( "/$start(.*)$end/s", $content, $match );

    $title = $match[ 1 ]; 

    

    $metatagarray = get_meta_tags( $url );

    $keywords = $metatagarray[ "keywords" ];

    $description = $metatagarray[ "description" ];

    

    //echo "<div><strong>URL:</strong> $url</div>\n";

    echo "<div align='left'>$title</div>\n";

    //echo "<div><strong>Description:</strong> $description</div>\n";

    //echo "<div><strong>Keywords:</strong> $keywords</div>\n";
?>
<?php include 'footer.php';?>
