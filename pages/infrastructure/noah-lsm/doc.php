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

<P>
CPPA/GAPP/GEWEX information are available at <a href="http://www.weather.gov/exit?url=https://www.eol.ucar.edu/field_projects/cppa">https://www.eol.ucar.edu/field_projects/cppa</a> 
<?php include 'footer.php'?>


