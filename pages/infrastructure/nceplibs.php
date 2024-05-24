<?php 
global $browser_title;
 $browser_title = 'NCEPLIBS';   
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
     <h2 id="section-title">NCEP Common Software (NCEPLIBS)</h2>
     	<div id="description">

                <div id="tabs" style="margin-left:2px;">&nbsp;</div>
                
                <div id="branch"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">NCEP Code Libraries (NCEPLIBS) are the shared software code libraries used in the UFS Weather Model and its accompanying coupled components, the UFS Medium-Range Weather application, and the UFS Short-Range Weather Application. NCEPLIBS consists of both libraries developed and maintained in-house at NCEP for the UFS Model, and external (i.e., third-party) libraries used by the UFS Model.</span></span></div>
<p>
                <ul>
                	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="https://github.com/NOAA-EMC/NCEPLIBS">NCEPLIBS page on Github</a></span></span></li>
                	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="https://github.com/NOAA-EMC/NCEPLIBS/wiki">NCEPLIBS Wiki page on Github</a></span></span></li>
                	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://www.nco.ncep.noaa.gov/pmb/codes/nwprod/lib/">Library source code directories in NCEP Production, maintained by NCEP Central Operations (NCO)</a></span></span></li>
                	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://www.nco.ncep.noaa.gov/pmb/docs/libs/">Documentation of routines in selected libraries (NCO page)</a></span></span></li>
                	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="https://www.emc.ncep.noaa.gov/emc/pages/infrastructure/bufrlib.php">BUFR library main page </a></span></span></li>
                	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://www.nco.ncep.noaa.gov/pmb/docs/grib2/">NCO GRIB2 web page</a> (has links to tar files with the latest version of GRIB2 libraries)</span></span></li>
                </ul>

                <div id="branch"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Please refer to the <a href="https://github.com/NOAA-EMC/NCEPLIBS">NCEPLIBS page on Github </a> for more details. On this page one can get information on supported computing platforms/compilers, and through a user support forum for build dependency issues.</span></span></div>
<p>
                
                <p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><strong>CONTACTS</strong></span></span></p>

                <p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="mailto:edward.hartnett@noaa.gov"><strong><em>Edward Hartnett</em></strong></a></span></span></p>

                <div><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"></span></span></div>
                
                <div>&nbsp;</div>
                
                <div style="clear:both;">&nbsp;</div>
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
 
