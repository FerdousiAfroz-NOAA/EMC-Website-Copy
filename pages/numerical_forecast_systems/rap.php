<?php 
global $browser_title;
 $browser_title = 'RAP';   
 include '../portal_header.php';?>
 
 <div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
		</ul>
        
		<!-- The file that contains the Resource links to VLAB & Help -->
		<?php include '../portal_resources_sidelnks.php';?>
		  
		 
      </div>
    </nav>

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

     <h2 id="section-title"><div style="text-align left; margin-left:400px;">Rapid Refresh</h2>
<div id="meta" style="-webkit-text-stroke-width:0px; background-color:#ffffff; box-sizing:border-box; color:#34495e; font-family:&quot;Open Sans&quot;,Helvetica,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:normal; letter-spacing:normal; orphans:2; padding:15px; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px"><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><img alt="RAP" src="https://www.emc.ncep.noaa.gov/emc/images/RAP_images_sfccape_crop.png" style="border:0px; box-sizing:border-box; vertical-align:middle" title="HRRR"></span></span></span>
<p>
                                <p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:12px;"><big><span style="color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline ! important; float: none;">Above: RAP analysis of surface-based CAPE (J/kg) valid 0000 UTC 11 Dec 2021 (left, Kentucky tornado event) and 2100 UTC 15 Dec 2021 (right, IA/NE severe weather event).</span></big></span></span></p>
<p>

     	<div id="description">
				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><span class="more">The Rapid Refresh system (RAP) is an hourly-updated assimilation/modeling system running at 13 km resolution, <span class="morecontent"><span style="display: inline;">developed at NOAA's Global Systems Laboratory (GSL). The RAP covers North America and is comprised of a numerical forecast with the Advanced Research WRF (WRF-ARW) model and an data assimilation system using the NCEP Gridpoint Statistical Interpolation (GSI) analysis. The RAP is complemented by the higher-resolution 3km High-Resolution Rapid Refresh (HRRR) model, which is also updated hourly and covers a smaller geographic domain. More information and hourly graphics from the RAP can be viewed at GSL's <a href="http://rapidrefresh.noaa.gov">RAP home page</a>; HRRR information and graphics can be obtained at GSL's <a href="http://rapidrefresh.noaa.gov/hrrr/">HRRR home page</a>.&nbsp; </span>&nbsp; </span></span></span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">RAP History at NCEP:</span></span></p>

<ul>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/RAPbrief.NCEP-Dir-20Mar2012.pdf">RAPv1</a> - implemented 1 May 2012 at NCEP (replacing the <a href="https://ruc.noaa.gov/ruc"> Rapid Update Cycle - RUC </a> )</span></span></li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://www.emc.ncep.noaa.gov/users/mesoimpldocs/RAPV2_NCEP_Director.pdf">RAPv2</a> - implemented 25 Feb 2014 at NCEP</span></span></li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://www.emc.ncep.noaa.gov/users/mesoimpldocs/RAPX_HRRRX_NWS-13sep2016-pub.pdf">RAPv3</a> - implemented 23 Aug 2016 at NCEP </span></span></li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://www.emc.ncep.noaa.gov/users/mesoimpldocs/RAP/RAPv4HRRRv3_CCB.pdf"> RAPv4 : Implemented on 12 July 2018</a></li>
        <li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="https://www.emc.ncep.noaa.gov/users/meg/rapv5_hrrrv4/">RAPv5 - Implemented on 2 December 2020</a></font></span></span></li>
</ul>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The December 2, 2020 implementation was the last RAP upgrade at NCEP. Development is underway on the future Rapid Refresh Forecast System (RRFS), a convection-allowing ensemble forecast system with this projected configuration:</span></span></p>
<p>
<ul type=disk>
<li> Based on the limited area FV3 dynamic core
<li> Rapidly updated and convection-allowing (~3 km grid-spacing)
<li> Ensemble-based data assimilation
<li> Ensemble forecast
<li> 18 h forecast every hour
<li> 36-60 h forecast every 6 hours
</ul>
<p>
<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The RRFS is intended to facilitate the replacement of all current mesoscale systems in NCEP Production: NAM/NAM nests, RAP/HRRR, and HiResW/HREF in ~2024.</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">A chronological listing from 1993-present of all EMC Mesoscale Model upgrades, including all RUC/RAP/HRRR implementations, can be found at the <a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/nam/references.php#TAB4">EMC Mesoscale Model reference web site</a>. </span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">A description of versions 1-3 of the RAP can be found in <a href="https://www.weather.gov/nwsexit.php?url=https://journals.ametsoc.org/doi/pdf/10.1175/MWR-D-15-0242.1">Benjamin et al. 2016, A North American Hourly Assimilation and Model Forecast Cycle: The Rapid Refresh. </a> <i>Mon. Wea. Rev.</i>, <b>144</b>, 1669-1694. </font></span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Official RAP and HRRR graphics from the operational runs can be found at the <a href="http://mag.ncep.noaa.gov/model-guidance-model-area.php">NCEP Model Analysis and Guidance (MAG)</a> web site. </span></span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"><span></span></span><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"><span></span></span><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"><span></span></span><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"><span></span></span></p>
			  </div>
     
	  <br/>
      
    </main>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <!--<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
	  <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>-->
	  
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>

</body>
      
</html>
 
