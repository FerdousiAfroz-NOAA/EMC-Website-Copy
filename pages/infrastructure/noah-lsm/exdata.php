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

<H4>NAM/NDAS Output Fields (contents, format, grid specs, output frequency, archive):</H4>
<UL>
   <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/overview.html">The NWP model</A>
   <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/hgrid.html">The horizontal output grid</A>
   <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/vgrid.html">The vertical grid</A>
   <LI> Access to fields
   <UL>

      <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/access.anon.html">Anonymous FTP Access</A>
      <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/access.perm.html">Permanent Tape Archive</A>
   </UL>
   <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/awip212.html">Contents of the 2D/3D gridded fields</A>
   <LI><A HREF="http://wwwt.emc.ncep.noaa.gov/mmb/gcp/molts.html">
      The hourly station profiles output (molts)</A>
   <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/grbunpk.html">GRIB unpacking</A>

   <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/bufr.readme.html">BUFR unpacking</A>
</UL>
<?php include 'footer.php';?>
