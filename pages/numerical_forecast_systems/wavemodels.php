<?php 
global $browser_title;
 $browser_title = 'EMC Wave Models';   
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
        <h1 id="section-title"><div style="text-align left; margin-left:150px;">EMC Global Wave Models</h1>
        <p>
        <img src="http://www.emc.ncep.noaa.gov/emc/images/US_eastcoast.hs.gif" />
        <FONT SIZE="4"</FONT>Left: 10 day GFS-Wave forecast of Significant Height of Combined Wind Waves
        and Swell from 00z 6 July 2022
        <p>
        <img src="../../pages/disclaimer/disclaimer_small.png" />
        <div style="margin-bottom:20px;"></div>
<p>

<div class="one-half-first" style="border: 0px solid black; padding: 20px;">
    <!-- GFS-Wave -->    
    <h2><a href="https://polar.ncep.noaa.gov/waves/viewer.shtml?-gfswave-">Global Forecast System - Wave</a></h2>
    <p>
    <FONT SIZE="4"</FONT>The Global Forecast System (GFS) is a global numerical weather
    prediction system containing a global computer model and variational
    analysis run by the U.S. National Weather Service (NWS).
    </p>    
    <p>
    The model is run four times a day: 00Z, 06Z, 12Z, and 18Z. Each
    run produces forecasts of every hour from the initial time out
    to 120 hours, and then forecasts at 3-hour intervals out to 384
    hours (the animated image viewer only shows data out to 240 hours).
    </p>      
    <p>
    The coupled wave model consists of global and regional nested grids.
    As background information, a list of selected <a href="https://polar.ncep.noaa.gov/waves/references.shtml">references
    </a>and a chronological list of <a href="https://polar.ncep.noaa.gov/waves/changes.shtml">model changes</A> are
    available. Finally, <a href="https://polar.ncep.noaa.gov/waves/validation/gfsv16/buoys/">GFS-Wave buoy validation
    is available</a>.
    </p>
    <p>
      Links to images
      <a href="https://polar.ncep.noaa.gov/waves/viewer.shtml?-gfswave-">(Animated Image Viewer)</a>
      <a href="https://polar.ncep.noaa.gov/waves/product_table2.shtml?-gfswave-">(Product Table)</a>
      <br>
      Links to Model Data
      <a href="ftp://ftpprd.ncep.noaa.gov/pub/data/nccf/com/gfs/prod">(FTP)</a>
      <a href="https://nomads.ncep.noaa.gov/pub/data/nccf/com/gfs/prod">(https)</a>
      <a href="https://nomads.ncep.noaa.gov/dods/wave/gfswave">(OpenDAP)</a>
      <a href="https://nomads.ncep.noaa.gov/cgi-bin/filter_gfswave.pl">(Grib Filter)</a>
    </p>
    <p>
    * GFS-Wave data is located in gfs.YYYYMMDD/CC/wave (YYYY=year, MM=month,
    DD=day, CC=cycle (00,06,12,18 Z)
    </p>
</div>

<div class="one-half-last" style="border: 0px solid black; padding: 20px;">
    <!-- GEFS-Wave -->    
    <h2><a href="https://polar.ncep.noaa.gov/waves/validation/gefsv12">Global Ensemble Forecast System - Wave</a></h2>
    <p>   
    The Global Ensemble Forecast System - Wave (GEFS-Wave) is a one-way
    coupling of the GEFS atmospheric model with the WAVEWATCH III wave
    model.  This allows for an increase in frequency of the wind forcing
    from 3 hours to 1 hour. This unified system has 30 members and the
    wave model is initialized with the previous member's 6 hour forecast.
    The wave model has a spatial resolution of 0.25 x 0.25 degrees. The
    system runs four cycles per day (00, 06, 12 and 18Z). The wave
    forecast has been extended from 10 to 16 days.
    </p>
    <p>
    More information on the GEFS system is available 
    <a style="color: blue" href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gefs.php">
    here</a>.
    <p>
      Link to images
      <a href="https://polar.ncep.noaa.gov/waves/validation/gefsv12">(Image Viewer)</a>
      <br>
      Links to Model Data
      <a href="ftp://ftpprd.ncep.noaa.gov/pub/data/nccf/com/gens/prod">(FTP)</a>
      <a href="https://nomads.ncep.noaa.gov/pub/data/nccf/com/gens/prod/">(https)</a>
      <a href="https://nomads.ncep.noaa.gov/cgi-bin/filter_gefs_wave_0p25.pl">(Grib Filter)</a>
    </p>
    <p>
    * GEFS-Wave data is located in gefs.YYYYMMDD/CC/wave (YYYY=year, MM=month,
    DD=day, CC=cycle (00,06,12,18 Z)
    </p>
</div>

<div style="clear:both;"></div>          

<div class="one-half-first" style="border: 0px solid black; padding: 20px;">
<p><a id="TABGLW"></a></p>
    <!-- Great Lakes -->
    <h2><a href="https://polar.ncep.noaa.gov/waves/viewer.shtml?-glwu-latest-hs-grl-">Great Lakes Wave</a></h2>
    <p>
    The Great Lakes wave model consists of a single unstructured grid.
    As background information, a list of selected <A HREF="https://polar.ncep.noaa.gov/waves/references.shtml">references
    </A>and a chronological list of <A HREF="https://polar.ncep.noaa.gov/waves/changes.shtml">model changes</A> are
    available.
    </p>
    <p>
    The model is run four times a day: 00Z, 06Z, 12Z, and 18Z. Each run starts with 9-,
    6- and 3-hour hindcasts and produces forecasts of every 3 hours from the initial time
    out to 84 hours.
    </p>    
    <p>
      Links to images
      <a href="https://polar.ncep.noaa.gov/waves/viewer.shtml?-glwu-">(Animated Image Viewer)</a>
      <a href="https://polar.ncep.noaa.gov/waves/product_table2.shtml?-glwn-">(Product Table)</a>      
      <br>
      Links to Model Data
      <a href="ftp://ftpprd.ncep.noaa.gov/pub/data/nccf/com/wave/prod">(FTP)</a>
      <a href="https://nomads.ncep.noaa.gov/pub/data/nccf/com/wave/prod">(https)</a>
      <a href="https://nomads.ncep.noaa.gov/dods/wave/glwu">(OpenDAP)</a>      
      <a href="https://nomads.ncep.noaa.gov/cgi-bin/filter_glwu.pl">(Grib Filter)</a>      
    </p>
    <p>
    * Great Lakes Wave data is located in glwu.YYYYMMDD/CC/wave (YYYY=year, MM=month,
    DD=day, CC=cycle (00,06,12,18 Z)
    </p>
</div>

<div class="one-half-last" style="border: 0px solid black; padding: 20px;">
    <!-- NFCENS -->
    <h2><a href="https://polar.ncep.noaa.gov/waves/nfcens/viewer.shtml">NCEP/FNMOC Combined Wave Ensemble</a></h2>
    <p>
    The NCEP/FNMOC Combined Wave Ensembles (NFCENS) product consists of a combination
    of wave ensemble outputs from the GEFS-Wave ensemble system, and
    from the wave ensembles run by the US Navy Fleet Numerical Meteorology and
    Ocenographic Center (FNMOC). The product combines outputs from a total of 51 wave
    ensemble members: one control run and 30 members from the GEFS-Wave system, and 20
    additional members from FNMOC.
    </p>
    <p>
    Link to images
    <a href="https://polar.ncep.noaa.gov/waves/nfcens/viewer.shtml">(Animated Image Viewer)</a>
    </p>
</div>

<div style="clear:both;"></div>          

<div class="one-half-first" style="border: 0px solid black; padding: 20px;">
    <!-- NWPS -->
    <h2><a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/nwps.php">Nearshore Wave Prediction System</a></h2>
    <p>
    The Nearshore Wave Prediction System (NWPS) provides on-demand, high-resolution
    nearshore wave model guidance to U.S. coastal WFOs, triggered in real time by forecast
    wind grids prepared and submitted by the individual offices. NWPS is maintained and
    developed by NCEP's Environmental Modeling Center (EMC) in collaboration with a number of
    Weather Forecast Offices (WFOs), as well as partners at NOAA/NOS, USGS and USACE.
    </p>
    <p>
    <a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/nwps.php">Link to NWPS</a>
</div>    

<div class="one-half-last" style="border: 0px solid black; padding: 20px;">
    <!-- Hindcasts -->
    <h2><a href="https://polar.ncep.noaa.gov/waves/hindcasts/">Hindcast and Reanalysis Archives</a></h2>
    <p>
    There are two classes of WAVEWATCH III<sup>&reg;</sup>
    hindcasts. 
    </p>
    <ul class="reg">
        <li>A thirty-year hindcast generated from the 
        NCEP Climate Forecast System Reanalysis and Reforecast (CFSRR)
        homogeneous dataset of hourly high-resolution winds.  The time
        period covers from 1979 through 2009. This is a true hindcast
        generated with a single version of the model and a statistically
        consistent forcing wind field, and is suitable for use in climate
        studies.
        </li>
        <li>A data set produced by rerunning the model from the
        operational wind fields to produce best-estimate nowcast
        datasets for the period Feb 2005 through May 2019.
        This is a statistically inhomogeneous hindcast data set, because the
        underlying models are periodically updated.  Therefore this data set
        should not be used for climate studies.
        </li>
    </ul>
    <p class="reg">
    Detailed descriptions of the hindcasts and reanalyses, with links to the datasets,
    validation statistics from buoy match-ups, and visualizations of the model data
    fields, can be found in the archive.
    </p>
    <p>
      <a href="https://polar.ncep.noaa.gov/waves/hindcasts/">Link to Hindcast Archive</a><br>
    </p>    
</div>

<div style="clear:both;"></div>    

<hr width="100%">

<div class="full-width-first">
    <h2>
    <a href="https://polar.ncep.noaa.gov/waves/wavewatch">WAVEWATCH III<sup>&reg;</sup>
    Model Description and GitHub Repository</a>
    </h2>
    <p>
    We have moved to an open development paradigm using GitHub, which
    means users and developers are no longer required to submit requests
    for usernames and passwords to access our software package.</p>      
    <p>
    The WAVEWATCH III<sup>&reg;</sup> 
    <a style="color: blue"
    href="https://github.com/NOAA-EMC/WW3/releases/latest">project page is
    here</a>.
    </p>
    <p>The latest release is available
    as a compressed tarball or zipfile from the project page.</p>      
    <p>
    To help users and developers navigate the new repositories, we have
    created two sets of guidelines in GitHub to help you navigate our
    community modeling framework, one for users and the other for
    developers:</p>
    <ul>
        <li><b>If you are a user</b> and would like to access the code for
        applications and do not plan to engage in development work, see the 
        <a href="https://github.com/NOAA-EMC/WW3/wiki/WAVEWATCH-III-User-Guide">
        User Guide</a>.</li><br>
        <li><b>If you are a developer</b> and would like to add a new feature to the
        code, see the 
        <a href="https://github.com/NOAA-EMC/WW3/wiki/Developer-Guide">Developer
        Guide</a>.</li>
    </ul>
    <p>
    The
    <a style="color: blue" href="https://github.com/NOAA-EMC/WW3/wiki">
    WW3 GitHub wiki</a> hosts a description
    of the model, its main features, output options, user
    and developer guides, technical documentation and latest news.</p>
    </p>

    <hr width="100%">

    <h2>WAVEWATCH III<sup>&reg;</sup> Tutorials</h2>
    <p>
    Two <a href="http://www.weather.gov/exit?url=http://www.comet.ucar.edu/">COMET</a> 
    modules are available regarding WAVEWATCH III<sup>&reg;</sup> and analysis of ocean swell:
    </p>
    <ul>
    <li class="reg">
    <a href="http://www.weather.gov/exit?url=http://www.meted.ucar.edu/oceans/wavewatch3/">
    Operational Use of WAVEWATCH III<sup>&reg;</sup></a></li>
    <li class="reg">
    <a href="http://www.weather.gov/exit?url=http://www.meted.ucar.edu/oceans/ocean_swell/">
    Analyzing Ocean Swell</a></li>
    </ul>
    <p>
    Registration is required, but there is no cost for the courses.
    </p>
    
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
 
