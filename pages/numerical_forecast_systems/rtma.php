<?php 
global $browser_title;
 $browser_title = 'RTMA/URMA/RTMA-RU';   
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
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/users/meg/rtma_urma_v2p8/">
              RTMA/URMA/RTMA-RU v2.8 upgrade
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
     <h2 id="section-title"><div style="text-align left; margin-left:200px;">Real-Time Mesoscale Analysis/UnRestricted Mesoscale Analysis/RTMA-Rapid Update</h2>
     <p>
     <p>
     <div style="margin-bottom:20px;"></div>
     	<div id="description">

<div id="meta" style="-webkit-text-stroke-width:0px; background-color:#ffffff; box-sizing:border-box; color:#34495e; font-family:&quot;Open Sans&quot;,Helvetica,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:normal; letter-spacing:normal; orphans:2; padding:15px; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px"><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><img alt="RTMA" src="https://www.emc.ncep.noaa.gov/emc/images/RTMA_Wind_Gust_Example.png" style="border:0px; box-sizing:border-box; vertical-align:middle" title="RTMA"></span></span></span>
<p>
     <img src="../../pages/disclaimer/disclaimer_small.png" style="width:80%;display:block; margin:auto; " />
<p>

				<h3 id="section-FrontPage-System+Overview"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:22px;"><strong>System Overview <span style="font-size:16px;"></span></strong></span></span></h3>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The Real Time Mesoscale Analysis (RTMA) and the UnRestricted Mesoscale Analysis system (URMA) are 2DVar analysis systems that provide analyses of National Digital Forecast Database parameters for CONUS, Alaska, Hawaii, Puerto Rico, and Guam. The RTMA is run hourly for all domains to provide situational awareness. The URMA is also run hourly but with a six hour time delay to capture late arriving data at NCEP. While RTMA is considered for situational awareness the URMA is considered for verification/validation. The URMA also serves as a critical component in the National Blend of Models (NBM) program, as it is used for calibration and validation.&nbsp; As of December 2017, a new Rapid Update version of the RTMA (RTMA-RU) was implemented.&nbsp; This system provides a new analysis every 15 minutes and is for users in need of fast, low-latency analysis products (e.g. the aviation community).</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;">
<span style="font-size:16px;">EMC has created a <a href="https://vlab.noaa.gov/group/715073">RTMA/URMA Discussion Group</a> on VLab (a Vlab account is required to access it).
<br>
External users can also access the <a href="https://vlab.noaa.gov/web/715073">RTMA/URMA Discussion Group</a> (no log-in required).
</span></span>
</p>
<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Documentation for RTMA/URMA can be found at the <a href="https://sites.google.com/a/ucar.edu/model-encyclo-determ/deterministic/analyses/rtma-urma">official COMET site</a>.</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><strong><span style="font-size:16px;">WHERE TO FIND GRAPHICS FOR THE RTMA-URMA/RTMA-RU</span></strong></span></p>

<p><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Official guidance for the operational CONUS, Alaska, and Guam RTMA systems can be found at the <a href="http://mag.ncep.noaa.gov/"><b>Model Analysis and Guidance (MAG)</b></a> web page. The MAG page is supported 24 hours a day and 7 days a week.</span></span></p>

<p><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">EMC maintains a <a href="https://www.emc.ncep.noaa.gov/mmb/rtma/prod/RTMA/">web page</a> of RTMA/URMA/RTMA-RU graphics that supplements the NCEP MAG site. EMC-generated web pages are experimental and not subject to 24/7 support, and will be unavailable during computer outages.

</span></span></p>

<h4 id="section-FrontPage-RTMA"><span style="font-family:arial,helvetica,sans-serif;"><strong><span style="font-size:16px;">RTMA Description</span></strong></span></h4>

<p><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">The RTMA (<a href="https://journals.ametsoc.org/doi/abs/10.1175/WAF-D-10-05037.1">De Pondeca et al 2011</a>, <a href="http://www.wcrp-climate.org/WGNE/BlueBook/2015/individual-articles/01_Pondeca_Manuel_etal_RTMA.pdf">Pondeca et al 2015</a>) is an hourly updated, 2-dimensional variational analysis of surface sensible weather fields. &nbsp;The system operates with a horizontal grid-spacing of 2.5 km for all domains except Alaska (3 km) and Puerto Rico (1.25 km), and is disseminated to users via FTP and the AWIPS Satellite Broadcast Network (SBN) with a latency of 55 min. RTMA produces analyses for CONUS, Hawaii, Alaska, Puerto Rico, and Guam (see Figure 1). The CONUS background (first-guess) field is derived from a terrain-dependent, downscaled blend of the hourly updated 3-km operational High-Resolution Rapid Refresh (HRRR; <a href="https://rapidrefresh.noaa.gov/internal/pdfs/RAPX_HRRRX_NWS-13sep2016-pub.pdf">Alexander et al. 2015</a>) model and the 3-km inner nest of the North American Mesoscale model (NAM; <a href="http://www.emc.ncep.noaa.gov/users/mesoimpldocs/namv4docs/NAMv4_ScienceIT_brief_10Mar2017.final_expanded.pdf">Rogers et al. 2017</a>). &nbsp;First-guess fields for AK are derived from downscaled and blended forecasts from the NAM AK nest and the 3-km Alaska-HRRR. &nbsp;Hawaii and Puerto Rico domains utilize the NAM's Hawaii and Puerto Rico downscaled 3-km nests, respectively.&nbsp; Finally, the RTMA uses downscaled GFS output to serve as the background for the Guam domain. &nbsp;Output fields include standard surface fields: 2-m temperature and dew point, 10-m wind and gust, visibility, cloud cover, ceiling, surface pressure, and precipitation. &nbsp;</span></span></p>

<p><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">The precipitation analysis is mapped from the 1km radar-only MRMS ConUS QPE. &nbsp;</span></span></p>

<p><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">The very first version of RTMA was implemented on August 22nd, 2006. A comprehensive list of all RTMA/URMA implementations can be found at the <a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/nam/references.php#TAB4">EMC Mesoscale Systems Reference Page</a>.</span></span></p>

<p><img alt="RTMA_domains.png" src="https://lh5.googleusercontent.com/EJnuF4LAi1-1sVVLPvBBr_xiPG531ZYOwzY7ceP3cKIEKCwzgZI8SOdQRkQsdLzoTq2GNCu0l15mwv0YV6u8wB1dHNyy8yGiTQ3Vh853k_BVwtmauZl2yeB_fWvwkN7td5DA_jlH" width="310" height="310"></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Figure 1 : Domains for which the RTMA analysis is run in NCEP Production.</span></span></p>

<h4 id="section-FrontPage-URMA"><strong><span style="font-size:16px;">URMA Description</span></strong></h4>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">A second application of the same RTMA/GSI software is the Un-Restricted Mesoscale Analysis (URMA; <a href="http://www.wcrp-climate.org/WGNE/BlueBook/2015/individual-articles/01_Pondeca_Manuel_etal_RTMA.pdf">Pondeca et al. 2015</a>), which uses additional, late-arriving observations that did not make the RTMA data-cutoff in real time. &nbsp;URMA is executed by running the same RTMA system, but 6 hours later in time, to pick up the late-arriving observations. &nbsp;URMA includes all analysis variables found in RTMA as well as max/min 2-m temperature, max/min 2-m relative humidity, and significant wave height. &nbsp;URMA is the "Analysis of Record" for the NWS (including the National Blend of Models), against which operational forecasts will be verified. &nbsp;URMA produces analyses for CONUS, Hawaii, Alaska, and Puerto Rico (see Figure 2). &nbsp;</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The first version of URMA was implemented December 18th, 2013. The precipitation analysis is mapped from the 4.7-km NCEP Stage IV (from River Forecast Center QPEs) over ConUS/AK/PR, and gauge-corrected MRMS and CMORPH in the offshore regions of the ConUS grid.</span></span></p>

<p><img alt="URMA_domains.png" src="https://lh4.googleusercontent.com/dFDpcDmdAnbHhjqoHZ0AQEUuzFth3bBy0g0k9Pwicw7Htl8PCEjnAOYhRyPC_faMDcKWIjoM5hBBc7SbdQaJ9XpwFEIFQUKSGNDsyWwJiTFnH32XrXdF2zSjq4mvpJnqLBnfQ98S" width="310" height="310"></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Figure 2 : Domains for which the URMA analysis is run in NCEP production.</span></span></p>

<h4 id="section-FrontPage-RTMA-RU"><span style="font-family:arial,helvetica,sans-serif;"><strong><span style="font-size:16px;">RTMA-RU Description</span></strong></span></h4>

<p><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">The Rapid Update version of the RTMA system (RTMA-RU; <a href="http://www.emc.ncep.noaa.gov/users/mesoimpldocs/01_Yang_Runhua_real_time_mesoscale_analysis.pdf">Yang et al. 2017</a>) updates at a 15 min interval with a &lt;20 min latency for aviation customers, with special focus on Helicopter Emergency Medical Services. &nbsp;RTMA-RU produces an analysis every 15 minutes for CONUS (see Figure 3).</span></span></p>

<p><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">The first version of RTMA-RU was&nbsp;implemented December 13th,&nbsp;2017.</span></span></p>

<p><img alt="RTMA-RU_domain.png" src="https://lh4.googleusercontent.com/zpx1DCZsaQESP9-ItEQM2VZs7JdGpyUDbuIW0kZ8lye7M20EQGh_gLq78slsFs8fRv9WPs8XDr6TXU6iPvTAYp4M1rFf_Og_CK4s4dK3kCIJ2EibFOLng9Wrg0zOE_pXPUmQixuY" width="313" height="313"></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Figure 3: The CONUS domain for which the RTMA-RU system is run in NCEP Production.</span></span></p>

<p style="text-align: center;">&nbsp;</p>

<p><span style="font-family:arial,helvetica,sans-serif;"><strong><span style="font-size:18px;">RTMA/URMA/RTMA-RU v2.7/PCPANL 3.1</span></strong></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><strong><span style="font-size:16px;">Implemented on 4 December 2018</span></strong></span></p>

<p><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Changes :</span></span></p>

<ul>
	<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Improve RTMA-RU product latency to 15 minutes after analysis time;</span></span></li>
	<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Update background error covariance model to include flow-dependence;</span></span></li>
	<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Improved observation quality control, especially for winds;</span></span></li>
	<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">New, unified terrain and land-sea mask for Alaska;</span></span></li>
	<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Begin using mesonet visbility observations and CLARUS QC'd obs;</span></span></li>
	<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Add ceiling height and sky cover analysis to OCONUS domains;</span></span></li>
	<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Enhance ceiling height and visibility analysis through improved algorithm;</span></span></li>
	<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Address precipitation coverage gaps near CONUS coastlines;</span></span></li>
	<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Add significant wave height analysis to OCONUS domains;</span></span></li>
	<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Remove legacy coarse-resolution output grids;</span></span></li>
</ul>

<p style="text-align: center;">&nbsp;</p>

<p><span style="font-family:arial,helvetica,sans-serif;"><strong><span style="font-size:18px;">RTMA/URMA/RTMA-RU v2.8/PCPANL 4.0</span></strong></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><strong><span style="font-size:16px;">Implemented on 28 July 2020</span></strong></span></p>

<p><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Changes :</span></span></p>

<ul>
   <li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Introduction of similarity theory calculations in the forward operator for the
                                                   assimilation of near-surface winds to account for non-standard anemometer heights
                                                   associated with mesonet observations.</li>
   <li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Extending the significant wave height analysis to the Great Lakes and Guam.</li>
   <li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">The sea/land mask of the background is used for the significant wave height analysis.</li>
   <li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Re-tuning of the sky cover analysis to: ensure consistency with the ceiling analysis, introduce quality control at night when satellite observations are of lower quality, and refine data thinning and decorrelation lengths to produce a more consistent analysis.</li>
   <li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">The addition of a sky cover analysis to RTMA-RU.</li>
   <li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Increase in analysis resolution over Puerto Rico from 2.5 km to 1.25 km for consistency with NDFD.</li>
   <li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Introduction of enhanced background error for temperature in complex terrain for OCONUS (was implemented in CONUS in v2.7)</li>
   <li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Introduction of refined observation selection algorithm for OCONUS (was implemented for CONUS in v2.7)</li>
   <li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Removal of a 1-2-1 smoother previously applied to the derived dewpoint increments to address a moist bias in complex terrain.</li>
   <li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Use of radar-only MRMS QPE instead of first-run Stage II/IV for precipitation RTMA; discontinuation of various Stage II analyses.</li>
   <li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Stage IV analysis changing from GRIB1 to GRIB2.</li>
   <li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Add 6h/24h snowfall analysis from NOHRSC to the precipitation URMA system.</li>
   <li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Smoother offshore filling of ConUS precipitation URMA.</li>
   <li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">New temperature downscaling is used for Guam, Hawaii and Puerto Rico in the background fields (HiresW and NAM Smartinit).</li>
   <li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">New wind downscaling is used for CONUS and Alaska in the background fields (HRRR Smartinit)
   <li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Land cover is used instead of vegetation type for the coastal adjustment of the background fields (RAP Smartinit)
</ul>

<p><span style="font-family:arial,helvetica,sans-serif;"><a href="https://www.weather.gov/disclaimer"><span style="font-size:16px;">DISCLAIMER</span></a></span></p>
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
 
