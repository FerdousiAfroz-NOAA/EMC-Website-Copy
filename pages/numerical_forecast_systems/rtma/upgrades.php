<?php 
global $browser_title;
 $browser_title = 'RTMA/URMA/RTMA-RU';   
 include '../../portal_header.php';?>
 
 <div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="upgrades.php">
              RTMA/URMA/RTMA-RU v2.8 upgrade
            </a>
          </li>
		</ul>
        
		<!-- The file that contains the Resource links to VLAB & Help -->
		<?php include '../../portal_resources_sidelnks.php';?>
		  
		 
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
     <h2 id="section-title">RTMA/URMA/RTMA-RU v2.8 upgrade</h2>
     	<div id="description">
				<p style="text-align: center;"><span style="font-size:20px;"><span style="font-family:arial,helvetica,sans-serif;"></span></span></p>

<p align="center"><span style="font-size:20px;"><strong>RTMA/URMA/RTMA-RU v2.8</strong></span></p>

<p align="center"><span style="font-size:20px;"><strong>PCPANL 3.2</strong></span></p>

<p align="center"><span style="font-size:20px;"><strong>Upgrade scheduled to be implemented in Winter 2020</strong></span></p>

<p><span style="font-size:20px;">RTMA/URMA/RTMA-RU Planned changes :</span></p>

<ul>
	<li><span style="font-size:20px;">Similarity Theory/Boundary layer scheme for winds</span>

	<ul>
		<li><span style="font-size:20px;">New fixed files, new fields from smartinit necessary taking more space</span></li>
	</ul>
	</li>
	<li><span style="font-size:20px;">Expand wave height analysis to Great Lakes (CONUS) and Guam</span>
	<ul>
		<li><span style="font-size:20px;">Minimal size increases</span></li>
	</ul>
	</li>
	<li><span style="font-size:20px;">New variable in RTMA-RU: Sky Cover</span>
	<ul>
		<li><span style="font-size:20px;">File size increases, still meet the requirement of 15-minute product latency</span></li>
	</ul>
	</li>
	<li><span style="font-size:20px;">Finer grid in PR (only)</span>
	<ul>
		<li><span style="font-size:20px;">2.5 km -&gt; 1.25 km</span></li>
	</ul>
	</li>
</ul>

<p><span style="font-size:20px;">PCPANL Planned changes :</span></p>

<ul>
	<li><span style="font-size:20px;">Add NOHRSC 6h/24h snowfall analyses to pcpURMA</span></li>
	<li><span style="font-size:20px;">Introduce a smoother offshore filling of pcpURMA (blending at CMORPH/MRMS and MRMS/Stage IV boundaries)</span></li>
	<li><span style="font-size:20px;">Use radar-estimated MRMS QPE in lieu of early Stage II/Stage IV for pcpRTMA; discontinue Stage II production (erly/mid/late runs for ST2ml, ST2gg, ST2rd, ST2un)</span></li>
	<li><span style="font-size:20px;">Stage IV analysis changing from GRIB1 to GRIB2</span></li>
	<li><span style="font-size:20px;">Discontinue use of “specialty” wgrib2/wgrib2 library (API dependence in source code)</span></li>
	<li><span style="font-size:20px;">Add an additional run at 18Z cycle for 24h Stage IV accumulation (30h after valid time, to supplement the current 1/2/3/5/7-day re-run schedule, for water.weather.gov)</span></li>
	<li><span style="font-size:20px;"><a href="https://www.emc.ncep.noaa.gov/users/meg/rtma_urma_v2p8/">Comprehensive Evaluation Page for V2.8</a>: RTMA, URMA, RTMA-RU, URMA time series at station locations, URMA QPE</span></li>
</ul>

<p style="text-align: center;"><span style="font-size:20px;"><span style="font-family:arial,helvetica,sans-serif;"></span></span><span style="font-size:20px;"><span style="font-family:arial,helvetica,sans-serif;"></span></span></p>
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
 