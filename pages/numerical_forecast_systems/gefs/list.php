<?php 
global $browser_title;
 $browser_title = 'GEFS';   
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
            <a class="nav-link active" href="list.php">
              Comprehensive List of Ensemble Websites
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
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/sref.php">
              Short Range Ensemble Forecast System (SREF)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mag.ncep.noaa.gov/model-guidance-model-area.php">
              Operational Graphics (NCEP Model and Analysis Graphics site)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://nomads.ncep.noaa.gov/index.shtml">
              Operational Products (NCEP NOMADS site)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.nco.ncep.noaa.gov/pmb/products/gens/">
              Operational Product Inventory
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/emc/pages/emc-research-developmental-graphics.php">
              Experimental Graphics (under "Global/Climate Modeling Systems" list)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/users/verification/global/gefs/ops/">
              GEFS Verification
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/users/verification/global/naefs/ops/">
              NAEFS Verification
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/gmb/yzhu/html/ENS_IMP.html">
              GEFS/NAEFS Implementations
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.emc.ncep.noaa.gov/gc_wmb/wli/html/doc.html">
              Documentation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gefs/faq.php">
              FAQ
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.weather.gov/disclaimer">
              Disclaimer
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.emc.ncep.noaa.gov/GEFS/projmenu.html">
              Projects
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/gmb/yzhu/html/ENS_IMP.html">
              Change Log
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.emc.ncep.noaa.gov/GEFS/people.html">
              People
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
     <h2 id="section-title">Comprehensive List of Ensemble Web Sites</h2>
     <img src="../../../pages/disclaimer/disclaimer_small.png" />
     <div style="margin-bottom:20px;"></div>
     	<div id="description">
			<p class="link1"><span style="font-size:14px;"><a href="https://www.weather.gov/nwsexit.php?url=https://sites.google.com/a/ucar.edu/model-encyclo-determ">COMET MetEd Operational Models Encyclopedia</a> - multi-agency operational prediction system specifications and configurations.</span></p>


            <p class="link2"><span style="font-size:18px;">US (NOAA/NCEP/NWS, academic institutions)</span></p>
            
            <p class="link1"><span style="font-size:16px;">Point Forecasts </span></p>
            
            <ul class="link">
            	<li class="link1"><a href="https://www.emc.ncep.noaa.gov/users/meg/gefs_plumes/">EMC GEFS plume diagrams</a> - plume diagram viewer for GEFS</li>
            	<li class="link"><a href="http://www.spc.noaa.gov/exper/sref/srefplumes">SPC SREF plume diagrams</a> - plume diagram viewer for SREF</li>
            </ul>
            
            <p class="link3"><span style="font-size:16px;">Situational Awareness Tables</span></p>
            
            <ul class="link">
            	<li class="link"><a href="https://satable.ncep.noaa.gov/naefs/">NOAA-NWS Ensemble Situational Awareness Table</a> - ESAT displays probabilistic information (e.g., model climate and reanalysis climate return intervals) for the NAEFS, maintained by NWS Western Region</li>
            </ul>
            
            <p><span style="font-size:16px;">Spatial - Global</span></p>
            
            <ul class="link">
            	<li class="link"><a href="http://ssd.wrh.noaa.gov/naefs/">NAEFS-GEFS-CMC ensemble guidance</a> - ensemble guidance products from NWS Western Region</li>
            	<li class="link"><a href="http://origin.cpc.ncep.noaa.gov/products/people/mchen/CFSv2FCST/weekly">CFSv2 Weekly Climate Anomaly</a> - NCEP CFSv2 weekly model guidance</li>
            </ul>
            
            <p class="link3"><span style="font-size:16px;">Spatial - Regional</span></p>
            
            <ul class="link">
            	<li class="link"><a href="http://www.emc.ncep.noaa.gov/mmb/mpyle/hrefv3/">EMC HREF guidance</a> - EMC <a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/href-hiresw.php">HREF</a> guidance for CONUS, Alaska, Hawaii, Puerto Rico</li>
            	<li class="link"><a href="http://www.emc.ncep.noaa.gov/mmb/SREF_avia/FCST/NARRE/web_site/html/refl.html">EMC NARRE-TL ensemble</a> - Aviation-focused experimental time-lagged ensemble using ops RAP and NAM nest forecasts</li>
            	<li class="link"><a href="http://www.esrl.noaa.gov/psd/map/images/ens/ens.html">ESRL PSD ensemble guidance</a> - NCEP ensemble guidance from ESRL PSD</li>
            	<li class="link"><a href="http://www.spc.noaa.gov/exper/sref">SPC SREF ensemble guidance</a> - various SREF forecast guidance</li>
            </ul>
            
            <p class="link3"><span style="font-size:16px;">Tropical</span></p>
            
            <ul class="link">
            	<li class="link"><a href="http://www.emc.ncep.noaa.gov/gmb/jpeng/EMC_TC/index_TC.html">NCEP EMC TC ensemble products (restricted access, login required)</a> - collection of experimental single-model and multi-model TC ensemble guidance</li>
            </ul>
            
            <p class="link1"><span style="font-size:16px;">Documentation, research, FAQ, etc.</span></p>
            
            <ul class="link">
            	<li class="link"><a href="https://sites.google.com/a/noaa.gov/nws-wr-stid/projects/stid-forecast-toolkit">Western Region Forecast Confidence Toolkit</a> - collection of links (some redundant from above" corresponding to forecast confidence</li>
            	<li class="link">For NCEP GEFS/NAEFS/SREF research - See the GEFS, NAEFS, and SREF main pages on the EMC web site</li>
            </ul>
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
 
