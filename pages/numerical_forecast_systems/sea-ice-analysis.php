<?php 
global $browser_title;
 $browser_title = 'SEA ICE ANALYSIS';   
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
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <!--<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>-->
            <button id="export" type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>
     <h2 id="section-title">NCEP Sea Ice Analysis</h2>
     	<div id="description">
				<h2><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">NCEP/EMC Sea Ice Home Page</span></span></h2>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The Polar and Great Lakes Ice group works on sea ice analysis from satellite, sea ice modeling, and ice-atmosphere-ocean coupling. Our work supports the <a href="http://www.arh.noaa.gov/">Alaska Region</a> of the <a href="http://www.nws.noaa.gov/">National Weather Service</a>, the Great Lakes Marine Forecasting group in the Cleveland NWSFO, and other groups, as well as the <a href="http://www.emc.ncep.noaa.gov/">Environmental Modeling Center</a>, of which the ice group is a part.</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/seaice/icegroup.shtml">Ice group: longer description</a></span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">If you have an addition or correction, comment or suggestion, please write <a href="mailto:Robert.Grumbine@noaa.gov">Robert Grumbine</a></span></span></p>

<hr>
<h3><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Pages of Interest</span></span></h3>

<ul>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Analysis</span></span>

	<ul>
		<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/seaice/Analyses.shtml">Daily Sea Ice Analyses</a></span></span>

		<ul>
			<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Animations of the recent sea ice cover figures - JavaScript required</span></span>

			<ul>
				<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/seaice/nh.html">Northern Hemisphere - 30 days</a></span></span></li>
				<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/seaice/sh.html">Southern Hemisphere - 30 days</a></span></span></li>
				<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/seaice/alaska.shtml">Alaska Region - 14 days</a></span></span></li>
			</ul>
			</li>
			<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/seaice/interactive.shtml">More interactive image construction</a></span></span></li>
		</ul>
		</li>
		<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/seaice/Historical.html">Sea Ice Climatology and NCEP History</a></span></span></li>
		<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/seaice/climatology/">Sea ice climatology analysis tools</a></span></span></li>
		<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="ftp://polar.ncep.noaa.gov/pub/ice/archive/">Sea Ice analysis hemispheric analyst grids archive (10/1995 to present)</a></span></span></li>
		<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="ftp://polar.ncep.noaa.gov/pub/cdas/">Sea Ice analysis global modeller's grids archive (10/1995 to present)</a></span></span></li>
	</ul>
	</li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Interesting Features</span></span>
	<ul>
		<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/seaice/Ross.shtml">Ross Sea Decay Watch (seasonal)</a></span></span></li>
		<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/seaice/Weddell.shtml">Weddell Sea Polynya Watch (seasonal)</a></span></span></li>
		<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/seaice/icebergs.shtml">Iceberg Sizes</a></span></span></li>
	</ul>
	</li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Modeling</span></span>
	<ul>
		<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/seaice/Forecasts.html">Sea Ice Forecast model guidance</a></span></span></li>
	</ul>
	</li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/seaice/polar.links.shtml">Sea Ice and Polar Links</a></span></span>
	<ul>
		<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/seaice/polar.links.shtml#research">Sea Ice and Polar Research and Operations Centers</a></span></span></li>
		<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/seaice/polar.links.shtml#weafcst">Weather Forecasts in Sea Ice Regions</a></span></span></li>
		<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/seaice/polar.links.shtml#field">Field Research Programs</a></span></span></li>
		<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/seaice/polar.links.shtml#data">Data Centers</a></span></span></li>
		<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/seaice/polar.links.shtml#indices">Other Polar and Sea Ice Link Indices</a></span></span></li>
	</ul>
	</li>
</ul>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Sea Ice Group Publications</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Robert Grumbine, <a href="http://polar.ncep.noaa.gov/mmab/papers/tn315">Long Range Sea Ice Drift Model Verification</a>, MMAB Technical Note 315, 22 pp., 2013.</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Robert Grumbine, <a href="http://polar.ncep.noaa.gov/mmab/papers/tn314">Keeping Ice'S Simplicity -- A Modeling Start</a>, MMAB Technical Note 314, 32 pp., 2013</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Grumbine, R. W., <a href="http://polar.ncep.noaa.gov/mmab/papers/tn186/">MMAB&nbsp;C++&nbsp;Class Library Descriptions</a>, OMB&nbsp;Tech. Note 186, 2000.</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Grumbine, R. W., <a href="http://polar.ncep.noaa.gov/mmab/papers/tn185/">C++&nbsp;for Ocean Modeling Branch Consideration</a>,&nbsp; OMB Tech. Note 185, 23 pp., 2000.</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Hines, K. M., R. W. Grumbine, D. H. Bromwich, R. I. Cullather, Surface Energy Balance of the NCEP MRF and NCEP-NCAR Reanalysis in Antarctic Latitudes during FROST, <i>Weather and Forecasting</i>, <b>14</b>, 851-866, 1999.</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Bromwich, D. H., R. I. Cullather, and R. W. Grumbine, An Assessment of the NCEP Operational Global Spectral Model Forecasts and Analyses for Antarctica during FROST, <i>Weather and Forecasting</i>,<b> 14</b>, 835-850, 1999.</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Randall, D., J. Curry, D. Battisti, G. Flato, R. Grumbine, S. Hakkinen, D. Martinson, R. Preller, J. Walsh, J. Weatherly, Status of and Outlook for Large-Scale Modeling of Atmosphere-Ice-Ocean Interactions in the Arctic, <i>Bull. American Meteorological Society</i>, <b>79</b>, 197-219, 1998.</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Grumbine, R. W., <a href="http://polar.ncep.noaa.gov/mmab/papers/tn114">Virtual Floe Ice Drift Forecast Model Intercomparison</a>, <i>Weather and Forecasting</i>, <b>13</b>, 886-890, 1998.</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Cullather, R. I., D. H. Bromwich, and R. W. Grumbine, Validation of Operational Numerical Analyses in Antarctic Latitudes, <i>J. Geophys. Res., </i><b>102</b>, 13,761-13,784, 1997.</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://www.nws.noaa.gov/om/tpb/440.htm">Automated Ice Concentration Analysis</a>, R. W. Grumbine, Technical Procedures Bulletin 440, National Weather Service, 1997.</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://www.nws.noaa.gov/om/tpb/ice.htm">Sea Ice Drift Guidance</a>, R. W. Grumbine, Technical Procedures Bulletin 435, National Weather Service, 1997</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/mmab/papers/tn120/">Automated Passive Microwave Sea Ice Concentration Analysis at NCEP</a>, Robert W. Grumbine, Ocean Modeling Branch Tech. Note 120, 13 pp., 1996</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/mmab/papers/tn114">Drift Verification</a>, Robert W. Grumbine, Ocean Modeling Branch Tech. Note 114, 1996</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Grumbine, Robert W., NMC Notes: A Sea-ice albedo experiment with the NMC Medium Range Forecast Model, <i>Weather and Forecasting</i>, <b>9</b>, 453-456, 1994.</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Grumbine, Robert W., The thermodynamic predictability of sea ice, <i>J. Glaciology</i>, <b>40</b>, 277-282, 1994.</span></span></p>

<hr>
<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="https://www.weather.gov/disclaimer">Disclaimer</a></span></span></p>

<p style="margin-left:0px; margin-right:0px">&nbsp;</p>
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
 