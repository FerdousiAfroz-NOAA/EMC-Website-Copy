<?php 
global $browser_title;
 $browser_title = 'Weather Research and Forecast';   
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
     <h2 id="section-title">Weather Research and Forecast</h2>
     	<div id="description">
				<h1 class="title" id="page-title" style="margin: 0px; font-family: UbuntuBold; font-size: 18px; color: rgb(46, 88, 106); font-weight: normal; letter-spacing: 2px; line-height: 19px; padding: 0px; text-transform: uppercase; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; text-indent: 0px; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">WEATHER RESEARCH AND FORECASTING MODEL</h1>

<div id="titlebar" style="border-bottom: 2px solid rgb(46, 88, 106); color: rgb(51, 51, 51); font-family: &quot;Lucida Grande&quot;, arial, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">&nbsp;</div>

<p><span style="color: rgb(51, 51, 51); font-family: &quot;Lucida Grande&quot;, arial, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"></span></p>

<div class="clear-block" style="color: rgb(51, 51, 51); font-family: &quot;Lucida Grande&quot;, arial, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">
<div class="region region-content" style="min-height: 200px;">
<div class="block block-system" id="block-system-main">
<div class="content" style="background: transparent; margin: 0px 0px 15px; padding: 10px 0px; overflow: hidden;">
<div class="node node-wrfmodel node-full clearfix" id="node-1612">
<div class="content clearfix" style="background: transparent; margin: 0px 0px 15px; padding: 10px 0px; overflow: hidden;">
<div class="field field-name-body field-type-text-with-summary field-label-hidden">
<div class="field-items">
<div class="field-item even">
<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><strong>The Weather Research and Forecasting (WRF) Model</strong>&nbsp;is a next-generation mesoscale numerical weather prediction system designed for both atmospheric research and operational forecasting applications. It features two dynamical cores, a data assimilation system, and a software architecture supporting parallel computation and system extensibility. The model serves a wide range of meteorological applications across scales from tens of meters to thousands of kilometers. The effort to develop WRF began in the latter part of the 1990's and was a collaborative partnership of the National Center for Atmospheric Research (NCAR), the National Oceanic and Atmospheric Administration (represented by the National Centers for Environmental Prediction (NCEP) and the (then) Forecast Systems Laboratory (FSL)), the (then) Air Force Weather Agency (AFWA), the Naval Research Laboratory, the University of Oklahoma, and the Federal Aviation Administration (FAA).</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">NCEP Production Systems which currently use the Advanced Research WRF model (WRF-ARW) are the Rapid Refresh (RAP), the High-Resolution Rapid Refresh (HRRR), the Short-Range Ensemble Forecast System (SREF), and the High-Resolution Ensemble Forecast System (HREF), which uses the two Advanced Research WRF (WRF-ARW) HiresW forecast runs. The operational Hurricane WRF (HWRF) runs with the WRF-NMM (<span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Non-Hydrostatic Mesoscale Model) dynamic code. </span></span>The NCEP North American Mesoscale System (NAM) ran with the WRF-NMM from 2006-2011. </span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">For further information, please go to the <a href="https://www.weather.gov/exit?url=https://www.mmm.ucar.edu/weather-research-and-forecasting-model">WRF main web page</a>. </span></span></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
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
 
