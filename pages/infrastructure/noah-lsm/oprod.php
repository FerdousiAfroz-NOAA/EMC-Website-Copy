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

<H4>Noah Community LSM model:</H4>

<UL>
   <LI>User's Guide and Execution Tutorial
     <UL>
        <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/noahlsm/Noah_LSM_USERGUIDE_2.7.1.htm">html</A> 
        <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/noahlsm/Noah_LSM_USERGUIDE_2.7.1.doc">MS Word document</A>
     </UL>
   <LI>Source code and 1-year continued-run script
</UL>
<?php include 'footer.php';?>
