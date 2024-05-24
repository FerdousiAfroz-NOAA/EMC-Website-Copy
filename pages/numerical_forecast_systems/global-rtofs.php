<?php 
global $browser_title;
 $browser_title = 'GLOBAL-RTOFS';   
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
     <h2 id="section-title">Global Real-Time Ocean Forecast System</h2>
     	<div id="description">
				<table width="525" cellspacing="0" cellpadding="0" border="0">
	<tbody>
		<tr>
			<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;">
			<table width="500" cellspacing="0" cellpadding="0" border="0">
				<tbody>
					<tr>
						<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;">
						<table width="500" cellspacing="0" cellpadding="0" border="0">
							<tbody>
								<tr align="center">
									<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;"><span></span>
									<h2 style="font-size: 19px; font-family: Helvetica, Arial, sans-serif;" align="center"><strong>Global Real-Time Ocean Forecast System</strong></h2>
									</td>
								</tr>
							</tbody>
						</table>

						<div class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-weight: normal; width: 500px; border-top: 1px solid black; border-bottom: 1px solid black; padding-top: 3px; padding-bottom: 3px;" align="center"><u>Home</u><span>&nbsp;</span><img src="http://polar.ncep.noaa.gov/global/images/spacer.gif" width="1" height="1"><span>&nbsp;</span><a href="http://polar.ncep.noaa.gov/global/nc/?" style="color: rgb(0, 51, 153); text-decoration: none;">Z-Levels</a><span>&nbsp;</span><img src="http://polar.ncep.noaa.gov/global/images/spacer.gif" width="1" height="1"><span>&nbsp;</span><a href="http://polar.ncep.noaa.gov/global/ab/?" style="color: rgb(0, 51, 153); text-decoration: none;">Isopycnals</a><span>&nbsp;</span><img src="http://polar.ncep.noaa.gov/global/images/spacer.gif" width="1" height="1"><span>&nbsp;</span><a href="http://polar.ncep.noaa.gov/global/monitor/?" style="color: rgb(0, 51, 153); text-decoration: none;">Gulf Stream</a><span>&nbsp;</span><img src="http://polar.ncep.noaa.gov/global/images/spacer.gif" width="1" height="1"><span>&nbsp;</span><a href="http://polar.ncep.noaa.gov/global/class-4/?" style="color: rgb(0, 51, 153); text-decoration: none;">Metrics</a><span>&nbsp;</span><img src="http://polar.ncep.noaa.gov/global/images/spacer.gif" width="1" height="1"><span>&nbsp;</span><a href="http://polar.ncep.noaa.gov/global/woce/?" style="color: rgb(0, 51, 153); text-decoration: none;">WOCE</a><span>&nbsp;</span><img src="http://polar.ncep.noaa.gov/global/images/spacer.gif" width="1" height="1"><span>&nbsp;</span><a href="http://polar.ncep.noaa.gov/global/data_access.shtml?" style="color: rgb(0, 51, 153); text-decoration: none;">Data Access</a><span>&nbsp;</span><img src="http://polar.ncep.noaa.gov/global/images/spacer.gif" width="1" height="1"><span>&nbsp;</span><a href="http://polar.ncep.noaa.gov/global/about/?" style="color: rgb(0, 51, 153); text-decoration: none;">About</a></div>

						<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;" align="justify">The global operational Real-Time Ocean Forecast System (Global RTOFS) at the National Centers for Environmental Prediction is based on an eddy resolving 1/12° global HYCOM (HYbrid Coordinates Ocean Model) and is part of a larger national backbone capability of ocean modeling at the National Weather Service in a strong partnership with the US Navy.</p>

						<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; text-align: center;"><a style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="Global Real-time Ocean Forecast System SST" src="http://polar.ncep.noaa.gov/global/nc/images/small/rtofs_global_temperature_n048_000.png" width="500" height="411" border="0"></a><br clear="left">
						The latest Global RTOFS Sea Surface Temperature nowcast<br>
						Click image to enlarge</p>

						<table width="500" cellspacing="20" cellpadding="0" border="0">
							<tbody>
								<tr>
									<td class="reg" style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0);" align="center"><a href="http://polar.ncep.noaa.gov/global/nc/" style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="Nowcast/Forecast Viewer Icon" src="http://polar.ncep.noaa.gov/global/icons/viewer_icon.png" width="75" height="75" border="0"><span>&nbsp;</span><br clear="left">
									Nowcast/Forecast Viewer</a></td>
									<td class="reg" style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0);" align="center"><a href="http://polar.ncep.noaa.gov/global/data_access.shtml" style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="Data Access Icon" src="http://polar.ncep.noaa.gov/global/icons/data_icon.png" width="75" height="75" border="0"><span>&nbsp;</span><br clear="left">
									Data Access</a></td>
									<td class="reg" style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0);" align="center"><a href="http://polar.ncep.noaa.gov/global/class-4/" style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="Metrics Icon" src="http://polar.ncep.noaa.gov/global/icons/metrics_icon.png" width="75" height="75" border="0"><span>&nbsp;</span><br clear="left">
									Metrics (internal use)</a></td>
								</tr>
								<tr>
									<td class="reg" style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0);" align="center"><a href="http://polar.ncep.noaa.gov/global/monitor" style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="Gulf Stream Icon" src="http://polar.ncep.noaa.gov/global/icons/gulfstream_icon.png" width="75" height="75" border="0"><span>&nbsp;</span><br clear="left">
									Gulf Stream Location</a></td>
									<td class="reg" style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0);" align="center"><a href="http://polar.ncep.noaa.gov/global/woce/" style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="WOCE Icon" src="http://polar.ncep.noaa.gov/global/icons/woce_icon.png" width="75" height="75" border="0"><span>&nbsp;</span><br clear="left">
									WOCE Sections</a></td>
									<td class="reg" style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0);" align="center"><a href="http://polar.ncep.noaa.gov/global/about/" style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="About Icon" src="http://polar.ncep.noaa.gov/global/icons/about_icon.png" width="75" height="75" border="0"><span>&nbsp;</span><br clear="left">
									About the Model</a></td>
								</tr>
							</tbody>
						</table>

						<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; text-align: justify; border-top: 1px solid black; border-bottom: 1px solid black;">While Global RTOFS is an operational model, we cannot guarantee the timeliness or accuracy of the model data and figures offered on this site.<span>&nbsp;</span><br>
						<a href="http://weather.gov/disclaimer.php" style="color: rgb(0, 51, 153); text-decoration: none;">Please see our disclaimer for more information.</a></p>

						<h4 style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;">Questions or Comments?</h4>

						<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;">We welcome any questions or comments you may have on the Global RTOFS system.</p>

						<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;"><b style="font-weight: bold;"><a href="https://lstsrv.ncep.noaa.gov/mailman/listinfo/ncep.list.rtofs-users" style="color: rgb(0, 51, 153); text-decoration: none;">Subscribe to the RTOFS Users mailing list</a>.</b><span>&nbsp;</span>This list is for announcements of new features and releases as well as general discussions on the model.</p>
						You can also send us email by selecting from the following list of contacts:

						<ul type="none">
							<li><span></span><b style="font-weight: bold;">Operations:&nbsp;</b><a href="mailto:ilya.rivin@noaa.gov">Ilya Rivin</a><span> </span></li>
							<li class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;"><b style="font-weight: bold;">Website:</b><span>&nbsp;</span><a href="mailto:Todd.Spindler@noaa.gov?subject=Global%20RTOFS%20website%20feedback" style="color: rgb(0, 51, 153); text-decoration: none;">Todd Spindler</a></li>
						</ul>
						</td>
					</tr>
				</tbody>
			</table>

			<table width="500" cellspacing="0" cellpadding="0" border="0">
				<tbody>
					<tr align="center">
						<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal; border-top: 1px solid black; padding-top: 3px; border-bottom: 1px solid black; padding-bottom: 3px;">EMC Marine Modeling Information Topics:<br>
						<a href="http://polar.ncep.noaa.gov/global/#allproducts" style="color: rgb(0, 51, 153); text-decoration: none;">All Products</a>,<span> </span><span></span><a href="mailto:Todd.Spindler@noaa.gov" style="color: rgb(0, 51, 153); text-decoration: none;">Contact Us</a></td>
					</tr>
				</tbody>
			</table>

			<table width="504" cellspacing="0" cellpadding="0" border="0">
				<tbody>
					<tr valign="top">
						<td class="gray" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal; color: rgb(128, 128, 128); padding-top: 3px;"><a href="http://www.noaa.gov/" style="color: rgb(0, 51, 153); text-decoration: none;"><span class="gray" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: rgb(128, 128, 128);">NOAA/</span></a><span>&nbsp;</span><a href="http://www.nws.noaa.gov/" style="color: rgb(0, 51, 153); text-decoration: none;"><span class="gray" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: rgb(128, 128, 128);">National Weather Service</span></a><br>
						<a href="http://www.ncep.noaa.gov/" style="color: rgb(0, 51, 153); text-decoration: none;"><span class="gray" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: rgb(128, 128, 128);">National Centers for Environmental Prediction</span></a><br>
						<a href="http://www.emc.ncep.noaa.gov/" style="color: rgb(0, 51, 153); text-decoration: none;"><span class="gray" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: rgb(128, 128, 128);">Environmental Modeling Center</span></a><a href="http://polar.ncep.noaa.gov/" style="color: rgb(0, 51, 153); text-decoration: none;"><span class="gray" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: rgb(128, 128, 128);"></span></a><br>
						5830 University Research Court<br>
						College Park, MD 20740</td>
						<td class="gray" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal; color: rgb(128, 128, 128); padding-top: 3px;"><a href="http://www.weather.gov/admin.php" style="color: rgb(0, 51, 153); text-decoration: none;"><span class="gray" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: rgb(128, 128, 128);">About Us</span></a><br>
						<a href="http://www.weather.gov/disclaimer.php" style="color: rgb(0, 51, 153); text-decoration: none;"><span class="gray" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: rgb(128, 128, 128);">Disclaimer</span></a><br>
						<a href="http://www.weather.gov/credits.php" style="color: rgb(0, 51, 153); text-decoration: none;"><span class="gray" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: rgb(128, 128, 128);">Credits</span></a><br>
						<a href="http://www.weather.gov/careers.php" style="color: rgb(0, 51, 153); text-decoration: none;"><span class="gray" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: rgb(128, 128, 128);">Career Opportunities</span></a><br>
						<a href="http://www.weather.gov/glossary/" style="color: rgb(0, 51, 153); text-decoration: none;"><span class="gray" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: rgb(128, 128, 128);">Glossary</span></a></td>
						<td class="gray" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal; color: rgb(128, 128, 128); padding-top: 3px;" align="right"><a href="http://www.nws.noaa.gov/notice.html" style="color: rgb(0, 51, 153); text-decoration: none;"><span class="gray" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: rgb(128, 128, 128);">Privacy Policy</span></a><br>
						<a href="mailto:Todd.Spindler@noaa.gov" style="color: rgb(0, 51, 153); text-decoration: none;"><span class="gray" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: rgb(128, 128, 128);">Comments/Feedback</span></a></td>
					</tr>
					<tr valign="top">
						<td class="gray" colspan="3" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal; color: rgb(128, 128, 128);">&nbsp;</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;">&nbsp;</td>
		</tr>
	</tbody>
</table>
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
 