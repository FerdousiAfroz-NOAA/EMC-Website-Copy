<?php
global $browser_title;
 $browser_title = 'NOAH-LSM';
 include '../../portal_header.php';?>

<?php include 'sidebar.php';?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <!--<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>-->
            <button id="export" type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>
     <h2 id="section-title">NOAH-Land Surface</h2>
        <div id="description">

<UL>
   <LI><A HREF="https://www.emc.ncep.noaa.gov/users/verification/">
       EMC Verification Portal</A>
   <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/research/nearsfc/nearsfc.verf.html">
       Monthly 2m and 10m NAM Verification Stats (January 2010-August 2018)</A>
       NAM Daily Verification at Selected Surface Stations</A>
</UL>
<UL>
   <LI> Precipitation observations/forecast verification
   <UL>
      <LI><A HREF="https://www.emc.ncep.noaa.gov/mmb/SREF/pcpanl/">
          NCEP Hourly precipitation analyses</A>
      <LI><A HREF="https://www.emc.ncep.noaa.gov/users/verification/precip/verif/daily/">
           Daily Observed vs. Forecast 24h Precipitation Plots</A>
      <LI><A HREF="https://www.emc.ncep.noaa.gov/users/verification/precip/verif/old_scores/">
           QPF Verfication Scores (2018-2020)</A>
   </UL>
</UL>

<UL>
   <LI><A HREF="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/nam/references.php#TAB4">Log of EMC Mesoscale Model upgrades from 1993-present</A>
</UL>

<H4>Problems and fixes:</H4>
<UL>
<LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/wind.html">Correction of wind rotation error (Prior to 1 Aug 1995) </A>
</UL>
<?php include 'footer.php';?>
