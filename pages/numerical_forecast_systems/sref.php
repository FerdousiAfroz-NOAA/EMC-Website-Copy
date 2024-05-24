<?php 
global $browser_title;
 $browser_title = 'SREF';   
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
     <h2 id="section-title"></h2>
     	<div id="description">
				<p style="text-align: center;"><b style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: -webkit-center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;"><i><font size="6">NCEP SHORT-RANGE ENSEMBLE FORECAST (SREF)</font></i></b><span style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: -webkit-center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"></span></p>
     <p>
     <img src="https://www.emc.ncep.noaa.gov/emc/images/sref_plume_example.png" />
     <p>
     <center><FONT SIZE="4"</FONT>Above: From the NCEP SPC SREF Plume Page: Plume for Total QPF at Washington, DC (DCA) from the 1500 UTC 9 September 2022 SREF forecast for all NMMB (green/blue/purple traces) and ARW (yellow/red/orange traces) members.</center>
     <p>
     <p>
				<img src="../../pages/disclaimer/disclaimer_small.png" style="display:block; margin:auto; " />
<p>
<p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">NCEP's Short-Range Ensemble Forecast (SREF) system is a dual-core multi-physics regional ensemble over North America. It consists of 26 members, 13 using the Advanced Research WRF (WRF-ARW) model and 13 members using the NEMS Non-Hydrostatic Multiscale Model on B-grid (NEMS-NMMB). SREF is run to 87-h at 16 km horizontal resolution with 40 vertical layers at 0300, 0900, 1500, and 2100 UTC. To create ensemble diversity a mix of different physics parameterizations, lateral boundary conditions (LBC) from the Global Ensemble Forecast System (GEFS), and initial conditions are used. Table 1 shows the physics configuration used for the 13 NEMS-NMMB members, and Table 2 shows the configurations used for the WRF-ARW members. </span></span></p>

<p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The <a href="http://www.emc.ncep.noaa.gov/users/mesoimpldocs/SREFv7_implementationBriefing.pdf">October 2015 SREF implementation</a> was its last upgrade, as future regional ensemble development at NCEP will focus on building a high-resolution convective-allowing ensemble including the FV3 dynamic core.&nbsp; </span></span></p>

<center style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Table 1 : Physics, initial conditions, and lateral boundary conditions used in the 13 NEMS-NMMB SREF members; click <a href="http://www.emc.ncep.noaa.gov/users/mesoimpldocs/SREF_options.pdf">here</a> for definition of acronyms.</span></span></p>

<p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;"><img alt="http://www.emc.ncep.noaa.gov/users/mesoimpldocs/nmmbsref.gif" class="transparent" src="http://www.emc.ncep.noaa.gov/users/mesoimpldocs/nmmbsref.gif" width="850" height="605"></p>

<p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: -webkit-center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Table 2: Physics, initial conditions, and lateral boundary conditions used in the 13 WRF-ARW SREF members; click <a href="http://www.emc.ncep.noaa.gov/users/mesoimpldocs/SREF_options.pdf">here</a> for definition of acronyms. </span></span></p>

<p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: -webkit-center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;"><img alt="http://www.emc.ncep.noaa.gov/users/mesoimpldocs/arwsref.gif" class="transparent" src="http://www.emc.ncep.noaa.gov/users/mesoimpldocs/arwsref.gif" width="884" height="663"><span style="font-size:20px;"></span></p>

<p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; text-align: center;"><span style="font-size:22px;"><span style="font-size:26px;">SREF-Related Web Pages</span> </span></p>

<center style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;"><span style="font-size:20px;"></span>

<table border="">
	<tbody>
		<tr>
			<td><font size="5"><font color="#FF0000"><a href="http://mag.ncep.noaa.gov/model-guidance-model-parameter.php?group=Model%20Guidance&amp;model=sref&amp;area=namer&amp;cycle=20131003%2009%20UTC&amp;param=precip_p24&amp;fourpan=no&amp;imageSize="><font color="#FF0000">Official NCEP MAG SREF Site</font></a></font></font></td>
			<td><font size="5"><a href="http://www.spc.noaa.gov/exper/sref">SPC SREF web site</a></font></td>
			<td><font size="5"><a href="http://www.spc.noaa.gov/exper/sref/srefplumes/">SPC SREF Plumes</a></font></td>
		</tr>
		<tr>
			<td><font size="5"><a href="http://www.emc.ncep.noaa.gov/mmb/wd20bz/SREF_aviation/web_site/html_212/fltrestr.html">Aviation(CONUS, Alaska, Hawaii)</a></font></td>
			<td><font size="5"><a href="http://www.emc.ncep.noaa.gov/mmb/gplou/emchurr/nwprod/">Cyclone Track</a></font></td>
			<td>&nbsp;</td>
		</tr>
	</tbody>
</table>
</center>

<center style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">&nbsp;</center>

<center style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;"><span style="font-size:26px;">Information about NCEP SREF</span></center>

<center style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">&nbsp;</center>

<center style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;"><span style="font-size:20px;"></span>

<table border="">
	<tbody>
		<tr>
			<td><font size="5"><a href="http://www.emc.ncep.noaa.gov/users/mesoimpldocs/SREFv7_implementationBriefing.pdf">Oct. 21, 2015 SREF Upgrade</a></font></td>
			<td><font size="5"><a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/nam/references.php">Past Upgrades</a></font></td>
			<td><font size="5"><a href="http://www.emc.ncep.noaa.gov/mmb/SREF/reference.html">References</a></font></td>
		</tr>
		<tr>
			<td><font size="5"><font color="#FF0000">SREF data on<span> </span><a href="http://nomads.ncep.noaa.gov/pub/data/nccf/com/sref/prod/"><font color="#FF0000">NCEP NOMADS</font></a><font color="#FF0000"><span> </span></font></font></font></td>
			<td><font size="5"><a href="http://www.emc.ncep.noaa.gov/mmb/SREF/SREF.veri_category.html">SREF Verification</a></font></td>
			<td><font size="5"><font color="#FF0000"><span></span><font color="#FF0000"><span></span><span></span></font></font></font></td>
		</tr>
	</tbody>
</table>
</center>

<center style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">
<center>&nbsp;</center>

<center><span style="font-size:26px;">Other Time-lagged Ensemble Products</span></center>

<center>&nbsp;</center>

<center>
<table border="">
	<tbody>
		<tr>
			<td><font size="5"><a href="http://www.emc.ncep.noaa.gov/mmb/SREF_avia/FCST/NARRE/web_site/html/icing.html">North America Rapid Refresh Ensemble -- Time Lagged (NARRE-TL)</a></font></td>
		</tr>
		<tr>
			<td><font size="5"><a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/href-hiresw.php">High-Resolution Ensemble Forecast (HREF)</a></font></td>
		</tr>
		<tr>
			<td><font size="5"><a href="https://www.spc.noaa.gov/exper/href/">SPC HREF site</a></font></td>
		</tr>
	</tbody>
</table>
</center>
</center>

<p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">&nbsp;</p>

<center style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">
<p>&nbsp;</p>

<center><img src="http://www.emc.ncep.noaa.gov/mmb/SREF/guan1.jpg"></center>

<center>
<p><b><i><font size="2">PLEASE READ THE<span>&nbsp;</span><a href="http://www.weather.gov/disclaimer.html">DISCLAIMER</a><span></span></font></i></b><span></span></p>
</center>

<center>&nbsp;
<h4>Environmental Modeling Center (EMC)</h4>

<table border="5">
	<tbody>
		<tr>
			<td>
			<center>For more info about the NCEP SREF, please contact: <a href="mailto:jun.du@noaa.gov">Jun Du</a><span> </span><br>
			For more info about the NARRE-TL, please contact: <a href="mailto:binbin.zhao@noaa.gov">Binbin Zhou</a></center>

			<center>For more info on the HREF, please contact <a href="mailto:matthew.pyle@noaa.gov">Matthew Pyle</a></center>
			</td>
		</tr>
	</tbody>
</table>
</center>
</center>

<p>&nbsp;</p>
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
 
