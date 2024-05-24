<?php 
global $browser_title;
 $browser_title = 'SST';   
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
     	<div id="description">
				<h2>EMC’s Near Surface Sea Surface Temperature (NSST)</h2>
        <img src="../../pages/disclaimer/disclaimer_small.png" />
        <div style="margin-bottom:20px;"></div>

<p>Traditionally, the sea surface temperature (SST) used in NCEP’s operational medium and short-range weather models was produced independently, provided as input to the atmospheric model, and did not change during the model integration. For example, for many years the NAM, GFS and RAP/HRRR models used the high-resolution real-time sea surface temperature (RTG_SST_HR), a daily sea surface temperature product produced on a twelfth-degree latitude/longitude grid by a two-dimensional variational interpolation analysis of the most recent 24-hours of buoy and ship data, satellite-retrieved SST data, and SST's derived from satellite-observed sea-ice coverage.</p>
<p>With the advent and maturity of advanced atmospheric data assimilation systems in EMC and with the NCEP Global Forecast System (GFS) now extended to 16 days, it became critical to incorporate SST diurnal variability in the GFS, and to move towards direct analysis of the SST in the NCEP Global Data Assimilation System (GDAS) using both in situ observations such as surface marine platforms and the direct assimilation of satellite radiances. The culmination of this effort was the implementation of the Near-surface Sea Surface Temperature (NSST) in the NCEP GFS in June 2017.  Figure 1 gives specific information on the NSST in the GFS.</p>
<p>On February 11, 2020, the RTG_SST_HR used in the NAM and RAP/HRRR was retired from NCEP’s Production Suite, replaced by the use of the GDAS NSST foundation temperature, interpolated to the 1/12 deg resolution of the RTG_SST_HR for seamless use in the NCEP mesoscale models. Further details on this change are described in the relevant NWS <a href="https://www.weather.gov/media/notification/pdf2/scn20-10nsst1_0.pdf">Service Change Notice</a>.
<p><center><img src="../../images/NSST_GFS.png"></center></p>
<p><center>Figure 1 : Computation and use of NSST in the NCEP GDAS/GFS</center></p>
			  </div>
	  <br/>
<p> Effective July 2020, the NOAA weekly and monthly Optimum Interpolation SST Analysis is maintained by the Climate Prediction Center. EMC's web page for this product with links to EMC's and CPC's archive of gridded data can be found<a href="https://www.emc.ncep.noaa.gov/research/cmb/sst_analysis/"> here</a>. 
      
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
 
