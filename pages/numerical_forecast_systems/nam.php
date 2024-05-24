<?php 
global $browser_title;
 $browser_title = 'NAM';   
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
            <a class="nav-link" href="nam/references.php#TAB4">
              Mesoscale Web Page Reference
List (Model Graphics and Mesoscale Systems (NAM, RAP, HRRR, HIRESW/HREF,
SREF, CMAQ) Operational Change Log since 1993
            </a>
          </li>
		</ul>
		
		<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Others</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="http://www.nco.ncep.noaa.gov/pmb/products/nam">
              NAM Operational Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.nco.ncep.noaa.gov/pmb/products/hiresw/">
              HIRESW Operational Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mag.ncep.noaa.gov/model-guidance-model-area.php">
              NCEP Model Analysis and Guidance (MAG) Page 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/emc/pages/emc-research-developmental-graphics.php">
              EMC Graphics Page for Operational Models
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/nam/NAM_2017.pdf">
              NAM Model Configuration
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/emc/pages/infrastructure/nems.php">
              NCEP NEMS
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.weather.gov/disclaimer">
              NWS Disclaimer
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
     <h1 id="section-title"><div style="text-align left; margin-left:360px;">North American Mesoscale</h1>
     	<div id="description">
				<div id="branch" style="-webkit-text-stroke-width:0px; background-color:#ffffff; box-sizing:border-box; color:#34495e; font-family:&quot;Open Sans&quot;,Helvetica,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:normal; letter-spacing:normal; orphans:2; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px"><span style="font-size:12px"><span style="color:#8a8a8a"><span style="font-family:Arial,Helvetica,sans-serif"><strong><span style="color:#000000"></span></strong></span></span></span></div>
<p> 

<div id="meta" style="-webkit-text-stroke-width:0px; background-color:#ffffff; box-sizing:border-box; color:#34495e; font-family:&quot;Open Sans&quot;,Helvetica,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:normal; letter-spacing:normal; orphans:2; padding:15px; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px"><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><img alt="NORTH AMERICAN MESOSCALE" src="https://www.emc.ncep.noaa.gov/emc/images/prico.radargust.gif" style="border:0px; box-sizing:border-box; vertical-align:middle" title="NORTH AMERICAN MESOSCALE"></span></span></span>
<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif">Above: NAM 3 km Puerto Rico nest forecast loop of composite radar reflectivity (left, dBz) and instantaneous 10-m wind gust (right, kts) initialized at 1200 UTC 17 September 2022, showing the passage of Hurricane Fiona through the domain.</span></span></span></p>
<p>
<center><img src="../../pages/disclaimer/disclaimer_small.png"/></center>
<p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif">The North American Mesoscale (NAM) is one of the forecast systems NCEP's Environmental Modeling Center has developed to provide mesoscale guidance to public and private sector meteorologists. It is run four times daily at 0000, 0600, 1200, and 1800 UTC and consists of the following components:</span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif">- The NOAA Environmental Modeling System (NEMS) version of the Non-Hydrostatic Multi-scale Model in B-grid (NMMB). The NAM run makes forecasts for the following domains in one execution of the production run:</span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif">- Full North American 12 km parent domain forecast to 84-h </span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif">- Four fixed 3-km nested domains forecasts to 60-h, which are all one-way nested inside the parent 12 km domain:</span></span></span></p>

<ol style="list-style-type:decimal">
	<li><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif">CONUS</span></span></span></li>
	<li><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif">Alaska</span></span></span></li>
	<li><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif">Hawaii</span></span></span></li>
	<li><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif">Puerto Rico</span></span></span></li>
</ol>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif">- One very high-resolution nest run to 36-h at 1.5 km horizontal resolution that is placed at different locations each cycle over the CONUS or Alaska. During the summer fire weather season the location of this nest is usually determined by the National Interagency Fire Center and is used primarily to provide high-resolution guidance to Incident Meteorologists (IMETS) <font face="Arial">who are dispatched to wildfire locations to support fire-fighting operations</font>. During the rest of the year the location is set based on requests from the NCEP Service Centers, NWS Regions and NWS Forecast Offices. </span></span></span></p>

<p style="margin-left: 0px; margin-right: 0px; text-align: justify;"><span style="font-size:16px;"><span style="font-family: arial,helvetica,sans-serif;">The NAM nests run with the same physics suite as the NAM 12 km parent domain with the following exceptions:</span></span></p>

<ul>
	<li style="margin-left: 0px; margin-right: 0px; text-align: justify;">
	<p><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">The nests are not run with parameterized convection</span></span></p>
	</li>
	<li style="margin-left: 0px; margin-right: 0px; text-align: justify;">
	<p><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">The nests do not run with gravity wave drag/mountain blocking</span></span></p>
	</li>
	<li style="margin-left: 0px; margin-right: 0px; text-align: justify;">
	<p><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">In the Ferrier-Aligo microphysics, the 12 km domain's threshold RH for the onset of condensation is 98%, for the nests it is 100%</span></span></p>
	</li>
	<li style="margin-left: 0px; margin-right: 0px; text-align: justify;">
	<p><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">The NAM nests use a higher divergence damping coefficient. </span></span></p>
	</li>
	<li style="margin-left: 0px; margin-right: 0px; text-align: justify;">
	<p><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">The NAM nests advect each individual microphysics species separately; the NAM 12 km parent domain advects total condensate.</span></span></p>
	</li>
</ul>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif">The NAM is initialized with a 6-h data assimilation (DA) cycle with hourly analysis updates using the NCEP hybrid variational ensemble analysis for the 12 km parent domain and the 3 km CONUS/Alaska nests. The non-cycled nests (Hawaii, Puerto Rico, Fire Weather) are initialized with a first guess from the 12 km parent domain. </span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif">The last major upgrade to the NAM was implemented in March 2017, as EMC has transitioned to devote its full resources towards the development of a high-resolution regional "standalone" version of the FV3 dynamic core with advanced physics for eventual inclusion in a high-resolution convective-allowing ensemble system.&nbsp; This high-resolution convective-allowing ensemble system will eventually replace all current NCEP mesoscale models in providing rapidly-updated mesoscale forecast guidance for the nation's weather enterprise.&nbsp; </span></span></span></p>
<span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:small"><span style="font-size:large">Additional NAM Information</span></span></span></span></span>

<table style="background-color:transparent; border-collapse:collapse; border-spacing:0px; box-sizing:border-box" cellspacing="0">
	<tbody>
		<tr>
			<td>
			<ul>
				<li><a href="https://www.emc.ncep.noaa.gov/mmb/research/meso.products.html"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:blue"></span></span></span></a><a href="http://www.emc.ncep.noaa.gov/mmb/research/meso.products.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;" target="_blank"><span style="color:blue"></span></a><a href="https://mag.ncep.noaa.gov/model-guidance-model-area.php"><span style="font-size:16px;"><strong><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:blue"><span style="color:blue"><span style="color:blue"><span style="color:blue"><span style="color:blue">Official NAM Graphics at the NCEP Model Analysis and Graphics Page</span></span></span></span></span></span></span></strong></span></a></li>
				<li><a href="https://www.emc.ncep.noaa.gov/mmb/research/meso.products.html"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:blue"></span></span></span></a><a href="http://www.emc.ncep.noaa.gov/mmb/research/meso.products.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;" target="_blank"><span style="color:blue"></span></a><a href="https://www.emc.ncep.noaa.gov/mmb/research/meso.products.html"><span style="font-size:16px;"><strong><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:blue"><span style="color:blue"><span style="color:blue"><span style="color:blue"><span style="color:blue">Mesoscale Model Forecast Products</span></span></span></span></span></span></span></strong></span></a></li>
				<li><a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/nam/NAM_2017.pdf"><span style="font-size:16px;"><strong><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:blue"><span style="color:blue"><span style="color:blue"><span style="color:blue"><span style="color:blue">NAM Configuration as of March 2017</span></span></span></span></span></span></span></strong></span></a></li>
				<li><a href="https://www.emc.ncep.noaa.gov/mmb/data_processing/prepbufr.doc/table_4.htm"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:blue"><span style="color:blue"></span></span></span></span></a><a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/prepbufr.doc/table_4.htm" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;" target="_blank"><span style="color:blue"></span></a><a href="https://www.emc.ncep.noaa.gov/mmb/data_processing/prepbufr.doc/table_4.htm"><span style="color:blue"></span></a><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:blue"><span style="color:blue"><a href="https://www.emc.ncep.noaa.gov/mmb/data_processing/prepbufr.doc/table_4.htm"><span style="font-size:16px;"><strong><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:blue"><span style="color:blue"><span style="color:blue"><span style="color:blue"><span style="color:blue">Conventional Observations used in NAM Data Assimilation System </span></span></span></span></span></span></span></strong></span></a></span></span></span></span></li>
				<li><a href="https://www.emc.ncep.noaa.gov/mmb/data_processing/prepbufr.doc/table_4.htm"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:blue"><span style="color:blue"></span></span></span></span></a><a href="https://www.emc.ncep.noaa.gov/mmb/data_processing/prepbufr.doc/table_18.htm"><span style="font-size:16px;"><strong><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:blue"><span style="color:blue"><span style="color:blue"><span style="color:blue"><span style="color:blue">Satellite Data used in NAM Data Assimilation System</span></span></span></span></span></span></span></strong></span></a><a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/prepbufr.doc/table_4.htm" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;" target="_blank"><span style="color:blue"></span></a></li>
				<li><a href="https://www.emc.ncep.noaa.gov/mmb/namgrids/"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:blue"><span style="color:blue"></span></span></span></span></a><a href="http://www.emc.ncep.noaa.gov/mmb/namgrids/" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;" target="_blank"><span style="color:blue"></span></a><a href="https://www.emc.ncep.noaa.gov/mmb/namgrids/"><span style="font-size:16px;"><strong><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:blue"><span style="color:blue"><span style="color:blue"><span style="color:blue"><span style="color:blue">Reference pages for NCEP Mesoscale Model Output Grids </span></span></span></span></span></span></span></strong></span></a></li>
				<li><a href="https://www.emc.ncep.noaa.gov/mmb/namgrids/"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:blue"><span style="color:blue"></span></span></span></span></a><a href="https://www.emc.ncep.noaa.gov/mmb/research/FAQ-meso.html"><span style="font-size:16px;"><strong><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:blue"><span style="color:blue"><span style="color:blue"><span style="color:blue"><span style="color:blue">Frequently Asked Questions</span></span></span></span></span></span></span></strong></span></a></li>
				<li><a href="https://www.emc.ncep.noaa.gov/mmb/namgrids/"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:blue"><span style="color:blue"></span></span></span></span></a><a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/nam/references.php#TAB4"><span style="font-size:16px;"><strong><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:blue"><span style="color:blue"><span style="color:blue"><span style="color:blue"><span style="color:blue">Comprehensive List of NCEP Mesoscale Guidance Pages and Chronological list of Mesoscale System Implementations since 1993</span></span></span></span></span></span></span></strong></span></a><a href="http://www.emc.ncep.noaa.gov/mmb/namgrids/" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;" target="_blank"><span style="color:blue"></span></a><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:blue"><span style="color:blue"><span style="color:blue"><span style="color:blue"><a href="http://www.emc.ncep.noaa.gov/mmb/research/FAQ-meso.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;" target="_blank"><span style="color:blue"></span></a></span></span></span></span></span></span><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:blue"><span style="color:blue"><span style="color:blue"><span style="color:blue"><a href="http://vm-lnx-emcdev-idpdm.ncep.noaa.gov/emc/page/reference-list-mesoscale-model-analysis-systems-reference-list-58" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;" target="_blank"><span style="color:blue"></span></a></span></span></span></span></span></span></li>
				</li>
			</ul>
			</td>
		</tr>
	</tbody>
</table>
</div>

<p><span style="font-size:16px;"><a href="http://www.weather.gov/disclaimer">Disclaimer</a></span></p>

<p><span style="font-size:14px;">Comments, questions, suggestions? Contact <a href="mailto:eric.rogers@noaa.gov">Eric Rogers</a></span></p>
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
 
