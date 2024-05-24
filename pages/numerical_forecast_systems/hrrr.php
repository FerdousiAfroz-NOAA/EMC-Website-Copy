<?php 
global $browser_title;
 $browser_title = 'HRRR';   
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
     <h1 id="section-title"><div style="text-align left; margin-left:230px;">High-Resolution Rapid Refresh</h1>
     	<div id="description">
<p>
<div id="meta" style="-webkit-text-stroke-width:0px; background-color:#ffffff; box-sizing:border-box; color:#34495e; font-family:&quot;Open Sans&quot;,Helvetica,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:normal; letter-spacing:normal; orphans:2; padding:15px; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px"><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><img alt="HRRR" src="https://www.emc.ncep.noaa.gov/emc/images/hrrr_imageref_crop.png" style="border:0px; box-sizing:border-box; vertical-align:middle" title="HRRR"></span></span></span>
<p>
				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:12px;"><big><span style="color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline ! important; float: none;">Above: Comparison of HRRR composite reflectivity forecasts of the August 2020 Iowa derecho from three forecasts versus the observed reflectivity from the Multi-Radar/Multi-Sensor System (MRMS).</span></big></span></span></p>
<p>
<div id="meta" style="-webkit-text-stroke-width:0px; background-color:#ffffff; box-sizing:border-box; color:#34495e; font-family:&quot;Open Sans&quot;,Helvetica,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:normal; letter-spacing:normal; orphans:2; padding:15px; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px"><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><img alt="HRRR" src="https://www.emc.ncep.noaa.gov/emc/images/hrrr_smoke_crop.png" style="border:0px; box-sizing:border-box; vertical-align:middle" title="HRRR"></span></span></span>
<p>
				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:12px;"><big><span style="color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline ! important; float: none;">Above: 18-h forecast of HRRR surface smoke (left) and HRRR total colum integrated smoke (right) valid 1800 UTC 15 September 2020.</span></big></span></span></p>
<p>
				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><big><span style="color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline ! important; float: none;">The High-Resolution Rapid Refresh is a NOAA/NCEP operational 
weather prediction system is comprised of a numerical forecast model and an analysis/assimilation system 
to initialize the model. It is run with a horizontal resolution of 3 km and has 50 vertical levels. 
</span></big></span></span></p>
				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><big><span style="color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline ! important; float: none;">The HRRR was developed to serve users needing frequently-updated high-resolution short- range weather forecasts, especially those in the US severe weather forecasting community. The model is run over the CONUS every hour of the day; it is integrated to 48 hours for the 00/06/12/18 UTC cycles and to 18 hours for every other cycle. The HRRR Alaska sector is run every third hour; it is integrated to 48 hours for the 00/06/12/18 UTC cycles and to 18 hours for the 03/09/15/21 UTC cycles. 
</span></big></span></span></p>
				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><big><span style="color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline ! important; float: none;">With the December 2020 HRRRv4 upgrade, the CONUS HRRR will begin using a HRRR Data Assimilation System (HRRRDAS), a storm-scale (3km) ensemble data assimilation process in which 36 members are integrated for one hour, and ensemble Kalman Filter data assimilation is performed including direct reflectivity assimilation. The ensemble mean then provides the initial conditions for the HRRR spin-up and analysis process. The Alaska HRRR will continue to use initial conditions from the RAP. The HRRR forecast model is the ARW core of the WRF model, and output is generated every 15 minutes during the forecast for the first 18 hours. Hourly output is generated between forecast hours 18 and 48 for the extended cycles. 
</span></big></span></span></p>

				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><big><span style="color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline ! important; float: none;"> 
The <a href="http://rapidrefresh.noaa.gov/hrrr/">HRRR web site at the NOAA Global Systems Laboratory</a> has hourly displays of all products produced by the system, documentation, and other information. </span></big></span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><big>HRRR History at NCEP:</big></span></span></p>

<ul>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://www.emc.ncep.noaa.gov/users/mesoimpldocs/HRRR_EMC_NCEPDirector_Briefing.pdf">HRRRv1</a> - 30 Sept 2014</span></span></li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://www.emc.ncep.noaa.gov/users/mesoimpldocs/RAPX_HRRRX_NWS-13sep2016-pub.pdf">HRRRv2</a> - 23 Aug 2016 <font color="red"><b> </b></font></span></span></li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><font color="red"><b><a href="http://www.emc.ncep.noaa.gov/users/mesoimpldocs/EMC_RAPv4_HRRRv3_OD_Briefing.pdf">HRRRv3 - 12 July 2018</a> </b></font></span></span></li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><font color="red"><b><a href="https://www.emc.ncep.noaa.gov/users/meg/rapv5_hrrrv4/">HRRRv4 - 2 December 2020</a> </b></font></span></span></li>
</ul>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><big>The December 2, 2020 implementation was the last HRRR upgrade at NCEP. Development is underway on the future Rapid Refresh Forecast System (RRFS), a convection-allowing ensemble forecast system with this projected configuration:</span></span></p>
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
<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><big>The RRFS is intended to facilitate the replacement of all current mesoscale systems in NCEP Production: NAM/NAM nests, RAP/HRRR, and HiResW/HREF in ~2024.</span></span></p>


<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><big>A chronological listing from 1993-present of all EMC Mesoscale Model upgrades, including all RUC/RAP/HRRR implementations, can be found at the <a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/nam/references.php#TAB4">EMC Mesoscale Model reference web site</a>. </big></span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><big>Official RAP and HRRR graphics from the operational runs can be found at the <a href="http://mag.ncep.noaa.gov/model-guidance-model-area.php">NCEP Model Analysis and Guidance (MAG)</a> web site. </big></span></span></p>
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
 
