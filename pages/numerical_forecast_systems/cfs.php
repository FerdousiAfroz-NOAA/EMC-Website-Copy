<?php 
global $browser_title;
 $browser_title = 'CFS';   
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
		
		<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Others</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="http://cfs.ncep.noaa.gov/index.html">
              CFS 2: CFS NCEP
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://cfs.ncep.noaa.gov/cfsv2/news.html">
              CFS 2: News
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://cfs.ncep.noaa.gov/cfsv2/docs.html">
              CFS 2:Documentation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://cfs.ncep.noaa.gov/cfsv2/downloads.html">
              CFS 2:Downloads
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://cfs.ncep.noaa.gov/cfsr/">
              CFS 2:Reanalysis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://origin.cpc.ncep.noaa.gov/products/people/wwang/cfsv2fcst/">
              CFSv2 at CPC
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://cfs.ncep.noaa.gov/menu/news/">
              CFS 1: News
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://cfs.ncep.noaa.gov/menu/doc/">
              CFS 1: Documentation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.cpc.ncep.noaa.gov/products/analysis_monitoring/lanina/ensoforecast.shtml">
              CFSv1 at CPC
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
     <h2 id="section-title"><div style="text-align left; margin-left:175px;">Climate Forecast System Version 2</h2>
     <p>
     <img src="https://www.emc.ncep.noaa.gov/emc/images/glbSSTSeaInd2.gif" />
     <p>
     <FONT SIZE="4"</FONT>Above: An example of seasonal SST anomalies from the NCEP coupled Climate Forecast System (CFSv2).
     <b>NOTE</B> : Official NCEP seasonal forecast outlooks can be found at the NCEP <a href="https://www.cpc.ncep.noaa.gov/">Climate Prediction Center</a> website. 
     <p>

     	<div id="description">
        <p style="margin-left: 0px; margin-right: 0px; text-align: left;"><strong><span style="font-size:18pt"><span style="color:blue"><span style="font-family:&quot;Times New Roman&quot;,sans-serif">The NCEP Climate Forecast System Version 2 (CFSv2)</span></span></span></strong></p>
<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-size:14px;">&nbsp;<br>
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Version 2 of the Climate Forecast System was developed at NCEP's Environmental Modeling Center.&nbsp; It is a fully coupled model representing the interaction between the Earth's atmosphere, oceans, land and sea ice. CFS Version 2 became operational at NCEP in March 2011. </span></span></span><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Further Information on CFSv2:</span></span></p>

<ul>
	<li style="margin-left: 0px; margin-right: 0px; text-align: start;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><a href="http://cfs.ncep.noaa.gov/cfsv2/news.html">Latest CFS v2 News</a></span></span></li>
	<li style="margin-left: 0px; margin-right: 0px; text-align: start;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><a href="http://cfs.ncep.noaa.gov/cfsv2/docs.html">Documentation</a> </span></span></li>
	<li style="margin-left: 0px; margin-right: 0px; text-align: start;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><a href="http://cfs.ncep.noaa.gov/cfsv2/downloads.html">Downloads</a></span></span></li>
	<li style="margin-left: 0px; margin-right: 0px; text-align: start;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><a href="http://cfs.ncep.noaa.gov/cfsr/">Reanalysis</a></span></span></li>
	<li style="margin-left: 0px; margin-right: 0px; text-align: start;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><a href="http://origin.cpc.ncep.noaa.gov/products/people/wwang/cfsv2fcst/">NCEP Climate Prediction Center CFS web page</a></span></span></li>
</ul>

<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-size:12pt"><span style="color:red"><strong>Please reference the following article when using the CFS Reanalysis (CFSR) data.</strong></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-size:12pt"><em><a href="http://journals.ametsoc.org/doi/pdf/10.1175/2010BAMS3001.1" style="box-sizing: border-box; background-color: transparent; color: rgb(52, 152, 219); text-decoration: none;">Saha, Suranjana, and Coauthors, 2010: The NCEP Climate Forecast System Reanalysis.&nbsp;</a>Bull. Amer. Meteor. Soc., <strong>91</strong>, 1015.1057. doi: 10.1175/2010BAMS3001.1</em></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-size:12pt"><em><span style="color:red"><strong>Please reference the following article when using the CFS version 2 Reforecast model or data</strong></span></em></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-size:12pt"><em><em><a href="http://dx.doi.org/10.1175/JCLI-D-12-00823.1" style="box-sizing: border-box; background-color: transparent; color: rgb(52, 152, 219); text-decoration: none;">Saha, Suranjana and Coauthors, 2014: The NCEP Climate Forecast System Version 2.&nbsp; </a>Journal of Climate, <strong>27</strong>, 2185–2208. doi: http://dx.doi.org/10.1175/JCLI-D-12-00823.1</em></em></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-size:12pt">For further information on CFSv2 please contact <em><em><a href="mailto:cfs@noaa.gov" style="box-sizing: border-box; background-color: transparent; color: rgb(52, 152, 219); text-decoration: none;">cfs@noaa.gov</a>.</em></em></span></p>
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
 
