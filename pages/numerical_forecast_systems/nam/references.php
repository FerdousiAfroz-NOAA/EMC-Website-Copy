<?php 
global $browser_title;
 $browser_title = 'NAM';   
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
            <a class="nav-link active" href="../nam/references.php">
              References
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
            <a class="nav-link" href="https://www.nco.ncep.noaa.gov/pmb/products/nam">
              NAM Operational Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.nco.ncep.noaa.gov/pmb/products/hiresw/">
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
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/nam/NAM_2017.pdf">
              NAM System Configuration
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/emc/pages/infrastructure/nems.php">
              NCEP NEMS Page
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/mmb/research/FAQ-meso.html">
              FAQ
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/nam/references.php#TAB4">
              Operational Change Log (all NCEP Mesoscale Systems since 1993)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.weather.gov/disclaimer">
              NWS Disclaimer
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
     	<div id="description">
				<h1 align="center"><strong>Mesoscale Model/Analysis Systems Web Page Reference List </strong></h1>
                
                <p><a id="TOC"></a></p>
                
                <h2>Table of Contents</h2>
                
                <ul>
                	<li><a href="#TAB1">NCEP OPERATIONAL MODEL FORECAST GRAPHICS</a></li>
                	<li><a href="#TAB2">PARALLEL/EXPERIMENTAL MODEL FORECAST GRAPHICS</a></li>
                	<li><a href="#TAB3">OPERATIONAL VERIFICATION / DIAGNOSTICS</a></li>
                	<li><a href="#TAB3b">PARALLEL VERIFICATION / DIAGNOSTICS</a></li>
                	<li><a href="#TAB4">ON-LINE DOCUMENTATION OF MAJOR CHANGES TO EMC MESOSCALE MODEL/ANALYSIS SYSTEMS</a></li>
                	<li><a href="#TAB5">MISCELLANEOUS LINKS</a></li>
                </ul>
                
                <p>&nbsp;</p>

				<img src="../../../pages/disclaimer/disclaimer_small.png" style="width:80%;display:block; margin:auto; " />
     			<div style="margin-bottom:20px;"></div>
                
			<h4>Please note : Most of the NCEP real-time model web pages listed below are generated on the NCEP development computer, and therefore will not be updated when this computer is down. Official web graphics for the NAM 12-km parent, GFS, GEFS, NAM Alaska/CONUS/Fire Weather nests, SREF, HiResW runs, RTMA, RAP, and HRRR are available at the NCEP <a href="https://mag.ncep.noaa.gov/"> Model Analysis and Guidance (MAG) site</a> and subject to 24/7 monitoring by NCEP Central Operations. If you have any questions please email Eric Rogers at <i>eric.rogers@noaa.gov</i>.</h4>
                
                <p><a id="TAB1"></a></p>
                
                <center>
                <h2>1. NCEP OPERATIONAL MODEL FORECAST GRAPHICS</h2>
                </center>
                
                <p><a name="TABNEST"></a></p>
                
                <p>&nbsp;</p>
                
                <table border="1">
                	<tbody>
                		<tr>
                			<th>Web Page</th>
                			<th>Models Displayed</th>
                			<th>Forecast Length</th>
                			<th>Forecast frequency</th>
                			<th>Animation?</th>
                			<th>Archive of past forecasts?</th>
                		</tr>
                		<tr>
                			<td><a href="https://mag.ncep.noaa.gov/model-guidance-model-area.php"><strong>NCEP North American Mesoscale (NAM-12) Model : NCEP Model Analysis and Guidance (MAG) page </strong> </a>
                			</td>
                			<td>NAM</td>
                			<td>84-h</td>
                			<td>3 hours</td>
                			<td>Yes</td>
                			<td>1 day</td>
                		</tr>
                		<tr>
                			<td><strong>NAM Nest runs on NCEP Model Analysis and Guidance Page (Model Type = "NAM-HIRES") </strong>
                			<ol type="1">
                				<li><a href="https://mag.ncep.noaa.gov/model-guidance-model-area.php"><strong>3 km Alaska or CONUS nest </strong> </a></li>
                			</ol>
                
                			<p>&nbsp;</p>
                			</td>
                			<td>
                			<ul>
                				<li>Model Area = ALASKA for 3 km Alaska nest</li>
                				<li>Model Area = CONUS for 3 km CONUS nest</li>
                			</ul>
                			</td>
                			<td>60-h</td>
                			<td>3 hour</td>
                			<td>Yes</td>
                			<td>1 day</td>
                		</tr>
                		<tr>
                			<td>
                			<a href="https://mag.ncep.noaa.gov/model-guidance-model-area.php"><strong>NAM Fire Weather Nest : NCEP Model Analysis and Guidance (MAG) page </strong> </a>
                			<p>&nbsp;</p>
                			<p><strong>To access : Model Type = "FIREWX", Model Area = "CONUS-AK"</strong></p>
                			</td>
                			<td>1.5 km NAM Fire weather nest</td>
                			<td>36-h</td>
                			<td>1 hour</td>
                			<td>Yes</td>
                			<td>Last 4 cycles</td>
                		</tr>
                		<tr>
                			<td><a href="https://mag.ncep.noaa.gov/model-guidance-model-area.php"><strong>NCEP HiResWindow Forecasts on NCEP Model Analysis and Guidance Page </strong> </a></td>
                			<td>
                			<ul>
                				<li>Model Area = CONUS, HAWAII, ALASKA, GUAM, or PR (Puerto Rico)</li>
                				<li>Model Type = HRW-FV3 or HWR-ARW for CONUS, HAWAII, GUAM</li>
                				<li>Model Type = HRW-FV3-AK or HWR-ARW-AK for ALASKA</li>
                				<li>Model Type = HRW-FV3-PR or HWR-ARW-PR for Puerto Rico</li>
                			</ul>
                			</td>
                			<td>48-h</td>
                			<td>1 hour</td>
                			<td>Yes</td>
                			<td>1 day</td>
                		</tr>
                		<tr>
                			<td>
                			<div><a href="https://www.emc.ncep.noaa.gov/mmb/mpyle/hrefv3"><strong>HREF fields for CONUS, Alaska, Hawaii, and Puerto Rico </strong></a></div>
                			</td>
                			<td>
                			<div>HREF Ensemble Probability Fields</div>
                			</td>
                			<td>48-h</td>
                			<td>1 hour</td>
                			<td>Yes</td>
                			<td>1 day</td>
                		</tr>
                		<tr>
                			<td><a href="https://mag.ncep.noaa.gov/model-guidance-model-area.php"><strong>NCEP Short-range Ensemble Forecast (SREF) System : NCEP Model Analysis and Guidance page </strong> </a>
                			<p>&nbsp;</p>
                
                			<p>&nbsp;</p>
                
                			<p><a href="https://www.emc.ncep.noaa.gov/mmb/SREF/SREF.html"><strong>NCEP Short-range Ensemble Forecast (SREF) System (EMC page) </strong> </a></p>
                			</td>
                			<td>21 member SREF ensemble (WRF-NMM, WRF-ARW, NEMS-NMMB, 7 members each)</td>
                			<td>87-h</td>
                			<td>3 hours</td>
                			<td>Yes</td>
                			<td>3 days</td>
                		</tr>
                		<tr>
                			<td><a href="https://mag.ncep.noaa.gov/model-guidance-model-area.php"><strong>NCEP Rapid Refresh (RAP) - NCEP Model Analysis and Guidance Page </strong> </a>
                			<p>&nbsp;</p>
                			<a href="https://rapidrefresh.noaa.gov"><strong>NCEP Rapid Refresh (RAP) - GSD/ESRL Page </strong> </a>
                
                			<p>&nbsp;</p>
                			</td>
                			<td>RAP version of WRF-ARW</td>
                			<td>
                			<p>39-h (03z, 09z, 15z, 21z cycles)</p>
                
                			<p>21-h (all others)</p>
                			</td>
                			<td>1 hour</td>
                			<td>Yes</td>
                			<td>about 1 day</td>
                		</tr>
                		<tr>
                			<td><a href="https://mag.ncep.noaa.gov/model-guidance-model-area.php"><strong>NCEP 3 km High-Resolution Rapid Refresh (HRRR) - NCEP Model Analysis and Guidance Page </strong> </a>
                			<p>&nbsp;</p>
                			<a href="https://rapidrefresh.noaa.gov/hrrr/"><strong>NCEP 3 km High-Resolution Rapid Refresh (HRRR) - GSD/ESRL Page </strong> </a></td>
                			<td>HRRR version of WRF-ARW</td>
                			<td>
                			<p>36-h (00z, 06z, 12z, 18z cycles)</p>
                
                			<p>18-h (all others)</p>
                			</td>
                			<td>1 hour or 15 minutes</td>
                			<td>Yes</td>
                			<td>about 1 day</td>
                		</tr>
                		<tr>
                			<td><a href="https://mag.ncep.noaa.gov/"><strong>NCEP Real-Time Mesoscale Analysis (RTMA) (NCEP page, click on "Observations and Analyses") </strong> </a></td>
                			<td>Hourly Operational RTMA</td>
                			<td>&nbsp;</td>
                			<td>&nbsp;</td>
                			<td>Not applicable</td>
                			<td>1 day</td>
                		</tr>
                		<tr>
                			<td><a href="https://www.emc.ncep.noaa.gov/mmb/rtma/prod/RTMA/"><strong>NCEP Real-Time Mesoscale Analysis (RTMA) (EMC site) </strong> </a></td>
                			<td>Hourly Operational RTMA</td>
                			<td>&nbsp;</td>
                			<td>&nbsp;</td>
                			<td>Yes</td>
                			<td>1 day</td>
                		</tr>
                		<tr>
                			<td><a href="https://www.emc.ncep.noaa.gov/mmb/rtma/prod/URMA/"><strong>NCEP Unrestricted Real-Time Mesoscale Analysis (URMA) (EMC site) </strong> </a></td>
                			<td>Hourly Operational URMA</td>
                			<td>&nbsp;</td>
                			<td>&nbsp;</td>
                			<td>Yes</td>
                			<td>1 day</td>
                		</tr>
                		<tr>
                			<td>
                			<p><a href="https://www.emc.ncep.noaa.gov/mmb/rtma/prod/rtma2p5_ru/"><strong>NCEP Rapidly Updated RTMA </strong></a></p>
                			</td>
                			<td>
                			<p>15 Minute RTMA-RU analyses</p>
                			</td>
                			<td>&nbsp;</td>
                			<td>&nbsp;</td>
                			<td>Yes</td>
                			<td>1 day</td>
                		</tr>
                		<tr>
                			<td>
                			<p><a href="https://www.emc.ncep.noaa.gov/mmb/rtma/prod_ts/urma/rtma.html"><strong>URMA Time Series </strong></a></p>
                			</td>
                			<td>
                			<p>URMA Time Series for CONUS stations</p>
                			</td>
                			<td>&nbsp;</td>
                			<td>&nbsp;</td>
                			<td>N.A.</td>
                			<td>6 day</td>
                		</tr>
                		<tr>
                			<td><a href="https://www.emc.ncep.noaa.gov/mmb/aq/"><strong>NCEP CMAQ Ozone and Particulate Matter Forecast Page </strong> </a></td>
                			<td>Operational and Developmental Air Quality Forecasts and Verification</td>
                			<td>&nbsp;</td>
                			<td>&nbsp;</td>
                			<td>&nbsp;</td>
                			<td>&nbsp;</td>
                		</tr>
                	</tbody>
                </table>
                
                <p><a href="#TOC">Back to Table of Contents</a></p>
                
                <p><a id="TAB2"></a></p>
                
                <center>
                <h2>2. PARALLEL/EXPERIMENTAL GRAPHICS</h2>
                </center>

                <p><a name="TABNEST"></a></p>
                
                <p>&nbsp;</p>
                
                <table border="1">
                	<tbody>
                		<tr>
                			<th>Web Page</th>
                			<th>Models Displayed</th>
                			<th>Forecast Length</th>
                			<th>Forecast frequency</th>
                			<th>Animation?</th>
                			<th>Archive of past forecasts?</th>
                		</tr>
                		<tr>
                			<td>
                			<a href="https://www.emc.ncep.noaa.gov/users/emc.campara/rrfs/"><strong>Limited-Area FV3 Model (FV3-LAM) parallel experimental runs</strong></a>
                			</td>
                			<td>
                			<div>
                			<p>3 KM FV3 runs</p>
                			</div>
                			</td>
                			<td>60-h</td>
                			<td>
                			<p>hourly</p>
                			</td>
                			<td>Yes</td>
                			<td>
                			<p>2-4 days</p>
                			</td>
                		</tr>
                	</tbody>
                </table>
                
                <p><a href="#TOC">Back to Table of Contents</a></p>
                
                <p><a id="TAB3"></a></p>
                
                <center>
                <h2>3a. OPERATIONAL MODEL VERIFICATION / DIAGNOSTICS</h2>
                </center>

                <p><a name="TABNEST"></a></p>
                
                <p>&nbsp;</p>
                
                <p>&nbsp;</p>
                
                <table border="1">
                	<tbody>
                		<tr>
                			<th>Web Page</th>
                			<th>Description</th>
                			<th>Models Displayed</th>
                			<th>Retention Period</th>
                		</tr>
                		<tr>
                			<td><a href="https://www.emc.ncep.noaa.gov/users/verification/precip/verif/daily/"><strong>Daily Precipitation Verification Plots </strong> </a></td>
                			<td>This site is an archive of model forecast precipitation vs. 24-h (12Z-12Z) observed precipitation analysis</td>
                			<td>NAM (12 km parent and nests), RAP, HRRR, GFS, International Models (CMC (regional and global), UK Met, ECMWF, JMA, DWD, Meteo France), HiResWindow runs, SREF mean, NAM/GFS parallels, DGEX, HPC QPF forecast</td>
                			<td>December 2001 - present</td>
                		</tr>
                		<tr>
                			<td><a href="https://www.emc.ncep.noaa.gov/users/verification/precip/verif/scores/"><strong>NCEP/EMC Precipitation Skill Scores for Operational Models</strong></a></td>
                			<td>Monthly equitable threat and bias scores for 24-h forecast precipitation versus observed precipitation</td>
                			<td>NAM, GFS, HiResWindow runs, various international regional and global models</td>
                			<td>1995 - present</td>
                		</tr>
                		<tr>
                			<td><a href="https://www.emc.ncep.noaa.gov/mmb/gplou/emchurr/nwprod"><strong>NCEP/EMC Operational Model Cyclone Tracking Page </strong> </a></td>
                			<td>This page shows the various model forecast tracks for tropical and extratropical cyclones</td>
                			<td>NAM, GFS, GEFS, SREF, UKMET, NOGAPS, CMC</td>
                			<td>Several months</td>
                		</tr>
                	</tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p><a href="#TOC">Back to Table of Contents</a></p>
                
                <p><a id="TAB3b"></a></p>
                
                <center>
                <h2>3b. PARALLEL VERIFICATION / DIAGNOSTICS</h2>
                </center>

                <p><a name="TABNEST"></a></p>
                
                <p>&nbsp;</p>
                
                <p>&nbsp;</p>
                
                <table border="1">
                	<tbody>
                		<tr>
                			<th>Web Page</th>
                			<th>Description</th>
                			<th>Models Displayed</th>
                			<th>Retention Period</th>
                		</tr>
                		<tr>
                			<td><a href="https://www.emc.ncep.noaa.gov/users/verification/precip/verif/daily/"><strong>Daily Precipitation Verification Plots </strong> </a></td>
                			<td>This site is an archive of model forecast precipitation vs. 24-h (12Z-12Z) observed precipitation analysis</td>
                			<td>NAM, GFS, GFSX, CMC, CMC Global, UK Met, ECMWF, JMA, DWD, Meteo France, HiResWindow runs, various NAM parallels, DGEX</td>
                			<td>December 2001 - present</td>
                		</tr>
                		<tr>
                			<td>
                			<p><a href="https://www.emc.ncep.noaa.gov/users/verification/regional/cam/para/"><strong>FV3-LAM parallel runs vs HRRR, NAM CONUS nest Verification Graphics/Scorecards </strong></a></p>
                			</td>
                			<td>
                			<p>Scorecards and time series of grid-to-obs and precipitation verification scores for the FV3-LAM runs vs the NAM CONUS nest and HRRR</p>
                			</td>
                			<td>
                			<p>NAM CONUS nest, HRRR, FV3-LAM parallels</p>
                			</td>
                			<td>Last 6 weeks</td>
                		</tr>
                	</tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p><a href="#TOC">Back to Table of Contents</a></p>
                
                <p><a id="TAB4"></a></p>
                
                <center>
                <h2>4. ON-LINE DOCUMENTATION OF EMC MESOSCALE MODEL/ANALYSIS SYSTEM CHANGES</h2>
                </center>

                <p><a name="TABNEST"></a></p>
                
                <p>Additional NCEP Model Change logs:</p>
                
                <ol type="1">
                	<li><a href="https://www.emc.ncep.noaa.gov/mmb/research/eta.log.html">Old Eta/EDAS production change log (Up to March 2004)</a></li>
                	<li><a href="https://rapidrefresh.noaa.gov">RAP Web page at ESRL/GSD, with list of RUC/RAP implementations at NCEP</a></li>
                	<li><a href="https://rapidrefresh.noaa.gov/hrrr/">HRRR Web page at ERSL/GSD, with list of HRRR implementations at NCEP</a></li>
                	<li><a href="https://www.emc.ncep.noaa.gov/mmb/aq/AQChangelog.html">NCEP Air Quality Model Change Log</a></li>
                </ol>
                
                <p><a name="1207MMBReview"></a><a name="0607WRFNMMChanges"></a><a name="0906NAMChanges"></a><a name="0806NAMChanges"></a></p>
                
                <table border="1">
                	<tbody>
                		<tr>
                			<th>Date (link goes to on-line documentation)</th>
                			<th>Contents/major changes</th>
                		</tr>


                                <tr>
                                        <th>
                			<center>&nbsp;</center>
                
                			<center><strong><a href="https://www.emc.ncep.noaa.gov/users/meg/cmaqv6/updates/NCEP_OD_Brief_2021-04-09_AQMv6.pptx">20 July 2021</a> </strong></center>
                
                			<center>&nbsp;</center>

                			</th>
                			<th style="text-align: left;">Operational Air Quality Model (AQMv6) Upgrade:
                			<ol type="1">
                				<li> <a href="https://www.weather.gov/media/notification/pdf2/SCN21-60_aqm_v6.0_aaa.pdf">NWS Service Change Notice</a> on this upgrade.</li>
                				<li> For the CONUS domain, the CMAQ Kalman Filter Analog (KFAN) bias 
                                                    correction system for fine Particulate Matter (PM2.5) and Ozone 
                                                    will be improved to use a consistent training data set, additional 
                                                    monitor sites, and a unified KFAN bias correction system.</li>
                                                <li> Over the CONUS, Alaska, and Hawaii domains, the CMAQ code will 
                                                    be unified with the Environmental Protection Agency (EPA) Version 5.3.1 
                                                    using an updated 2016 National Emissions Inventory (NEI 2016).</li>
                                                <li> All domains will be driven by the NWS Global Forecast System (GFS) 
                                                    v16 meteorology with air quality forecasts extended from 48 to 72 
                                                    hours for the 06 and 12 UTC run cycles.</li>
                                                <li> The Air Resources Laboratory (ARL) Fengsha dust model will be updated 
                                                    with improved threshold velocities by soil type.</li>
                                                <li> The Updated Biomass Emissions Land Database (BELD) will be updated 
                                                    to v5 for biogenic emissions processing.</li>
                                                <li> Greenness vegetation fraction (GVF) will be updated daily with a 
                                                    7-day average GVF provided by the National Environmental Satellite, 
                                                    Data, and Information Service (NESDIS) satellite products.</li>
                                                <li> Leaf Area Index (LAI) will be updated from a constant value in 
                                                    space and time to a climatological field.</li>
                                                <li> The NESDIS Global Biomass Burning Emissions Product eXtended 
                                                    (GBBEPx) product will be used to initialize fire particulate and 
                                                    gas-phase emissions and its associated Fire Radiative Power, which 
                                                    is used to drive fire smoke plume rise. Both GVF and LAI are used 
                                                    for biogenic and deposition processes and should result in better 
                                                    land-related processes.</li>
                			</ol>
                			</th>
                		</tr>
                           
                                <tr>
                                        <th>
                			<center>&nbsp;</center>
                
                			<center><strong>11 May 2021 </strong></center>
                
                			<center>&nbsp;</center>
                
                			<center><a href="https://www.emc.ncep.noaa.gov/users/meg/hrefv3/updates/NCEP_OD_Brief_2020-08-28_HREFv3.pptx"><strong>Technical Briefing </strong></a></center>
                			&nbsp;
                
                			<center><a href="https://www.emc.ncep.noaa.gov/users/meg/hrefv3/updates/MEG_2020-07-30_HREFv3_MEG_Overview.pptx"><strong>Overview with verification results </strong></a></center>
                
                			<center>&nbsp;</center>

                			</th>
                			<th style="text-align: left;">Changes to the HIRESW/HREF modeling system:
                			<ol type="1">
                				<li> The Finite Volume Cubed Sphere (FV3) model replaces the
                                                    Nonhydrostatic Multiscale Model on B-grid (NMMB) within the
                                                    HIRESW system.</li>
                				<li> The HiresW-FV3 increases the resolution of the HiresW-NMMB
                                                    it replaces (from 3.2 km to 3.0 km horizontal grid spacing,
                                                    from 50 levels to 60 levels in the vertical), and extends the
                                                    forecast range from 48 h to 60 h. No changes in vertical resolution
                                                    or forecast length are being made for the ARW HIRESW runs.</li>
                                                <li> The initialization of the HiresW-FV3 differs from the
                                                    HiresW-NMMB it replaces for all domains except Guam. All
                                                    HiresW-FV3 domains are initialized from a 6 h old cycle of the
                                                    Global Forecast System (GFS). Previously the HiresW-NMMB
                                                    utilized North American Model (NAM) surface conditions for all
                                                    non-Guam domains, and took atmospheric initial conditions from
                                                    the Rapid Refresh (RAP) for the CONUS and Puerto Rico domains.</li> 
                                                <li> The HiresW-FV3 also utilizes a very different set of
                                                    physics than the HiresW-NMMB being replaced. In both models no
                                                    parameterized convection is used, but the HiresW-FV3 otherwise
                                                    is using GFSv15 physics (GFDL microphysics, GFS PBL/sfc layer), 
                                                    while the HiresW-NMMB utilized NAM-style physics (modified Ferrier
                                                    microphysics, MYJ PBL/sfc layer.</li>
                                                <li> Changes to HREF model membership:
                                                    <ol type=a> 
                					<li> The HIRESW-FV3 replaces the HIRESW-NMMB for all domains within
                                                            the HREF.
                                                        <li> The High Resolution Rapid Refresh (HRRR) is added as a new
                                                            member for the CONUS and Alaska domains of HREF. A 6 h old 
                                                            time-lagged member of HRRR also is added for these domains. HREF
                                                            membership size increases from 8 to 10 for CONUS, and from 6 to
                                                            8 for Alaska. The membership size of the Hawaii and Puerto Rico
                                                            domains remains unchanged at 6 members. 
                                                    </ol>
                                                <li> HIRESW/HREF output file changes are described in the 
                                                     <a href="https://www.weather.gov/media/notification/scn21-38hiresw_v8_hrefaaa.pdf">NWS Service Change Notice</a>
                			</ol>
                			</th>
                		</tr>
                           
                                <tr>

                                        <th>
                			<center>&nbsp;</center>
                
                			<center><strong>2 December 2020 </strong></center>
                
                			<center>&nbsp;</center>
                
                			<center><a href="https://www.emc.ncep.noaa.gov/users/meg/rapv5_hrrrv4/updates/EMC_RAPv5_HRRRv4_OD_Brief.pptx"><strong>Technical Briefing </strong></a></center>
                			&nbsp;
                
                			<center><a href="https://www.emc.ncep.noaa.gov/users/meg/rapv5_hrrrv4/updates/MEG_12-19-19_RAPv5_HRRRv4_Evaluation_Conclusion.pptx"><strong>Overview with verification results and stakeholders evaluation </strong></a></center>
                
                			<center>&nbsp;</center>

                			&nbsp;
                
                			<center><a href="https://www.emc.ncep.noaa.gov/users/meg/rapv5_hrrrv4/updates/MEG_2020-06-25_RAPv5_HRRRv4_Update.pptx"><strong>Additional Details on Fixes for Model Instability </strong></a></center>
                
                			<center>&nbsp;</center>
                			</th>
                			<th style="text-align: left;">Changes to the Rapid Refresh (RAP) and High-Resolution Rapid Refresh (HRRR)
                			<ol type="1">
                				<li>Updated versions of the Advanced Research WRF core of the
                                                    Weather Research and Forecasting Model (WRF-ARW) model, the
                                                    Gridpoint Statistical Interpolation (GSI) analysis code, and the
                                                    Unified Post Processor (UPP).</li>
                				<li>Extended forecast length for four RAP and four HRRR cycles
                                                    each day</li>
                				<ol type="a">
                					<li>00/06/12/18z HRRR forecasts to 48-h</li>
                					<li>03/09/15/21z RAP forecasts to 51-h</li>
                				</ol>
                				<li>Data assimilation / analysis changes:
                				<ol type="a">
                					<li> The CONUS HRRR will begin using a HRRR Data Assimilation
                                                             System (HRRRDAS), a storm-scale (3km) ensemble data assimilation
                                                             process in which 36 members are integrated for one hour, and
                                                             ensemble Kalman Filter data assimilation is performed including
                                                             direct reflectivity assimilation. The ensemble mean then
                                                             provides the initial conditions for the HRRR spin-up and
                                                             analysis process. The Alaska HRRR will continue to use initial
                                                             conditions from the RAP.Updated version of the Gridpoint Statistical 
                                                             Interpolation (GSI) analysis code.</li>
                					<li> The CONUS HRRR will use the GLERL temperatures and ice
                                                             concentrations for the Great Lakes.</li>
                					<li> The assimilation of GOES-16 radiances, TC Vitals for tropical
                                                             cyclone position/intensity, VIIRS/MODIS fire radiative power
                                                             observations, and aircraft and raob moisture observations at
                                                             pressures lower than 300 hPa will be added to the RAP and HRRR.</li>
                				</ol>
                				</li>
                				<li>Forecast Model Changes
                				<ol type="a">
                					<li> The RAP and HRRR will both use a new model for temperatures
                                                             for small lakes (smaller than the Great Lakes).</li>
                					<li> The RAP and HRRR will use an improved version of the MYNN PBL
                                                             scheme, enhanced gravity wave drag, and reduced 6th-order
                                                             diffusion (especially for hydrometeor fields).</li>
                					<li> The HRRR will use an implicit-explicit vertical advection
                                                             (IEVA) scheme to permit stronger convective updrafts with the
                                                             same model time step and allow removal of a limit to the
                                                             microphysical latent heating rate.</li>
                					<li> The HRRR model top will be raised from 20 hPa to 15 hPa
                                                             resulting in a slight upward shift of the pressure for the
                                                             native model level sigma values.</li>
                					<li> The RAP will use an enhanced version of the Grell-Freitas
                                                             convective scheme.</li>
                					<li> The RAP and HRRR will use radiation modifications that better
                                                             account for subgrid clouds.</li>
                					<li> The RAP and HRRR will have sources and sinks for aerosols and
                                                             the explicit transport of smoke.</li>
                				</ol>
                				</li>
                				<li>Post-processing
                				<ol type="a">
                					<li>New RAP and HRRR smoke products</li>
                				</ol>
                				</li>
                			</ol>
                			</th>
                		</tr>


                		<tr>
                			<th><center><a href="https://www.emc.ncep.noaa.gov/users/impldocs/rtma_urma_v2.8_science_brief.pdf"><strong>28 July 2020 </strong></a></center></th>
                			<th style="text-align: left;">Changes to the NCEP Real-time Mesoscale Analysis (RTMA), Unrestricted Real-time Mesoscale Analysis (URMA), Real Time Mesoscale Analysis with Rapid Updates (RTMA-RU), and the RTMA/URMA Precipitation Analysis (PCPANL):
                                             <ol type=a>
                			       <li>Introduction of similarity theory calculations in the forward operator for the     
                                                   assimilation of near-surface winds to account for non-standard anemometer heights 
                                                   associated with mesonet observations  the cycle time.</li>
                			       <li>Extending the significant wave height analysis to the Great Lakes and Guam.</li> 
                			       <li>The sea/land mask of the background is used for the significant wave height analysis.</li>
                                               <li>Re-tuning of the sky cover analysis to: ensure consistency with the ceiling analysis, 
                                                   introduce quality control over water at night when satellite observations are of lower 
                                                   quality, and refine data thinning and decorrelation lengths to produce a more consistent analysis.</li>
                                               <li>The addition of a sky cover analysis to RTMA-RU.</li>
                                               <li>Increase in analysis resolution over Puerto Rico from 2.5 km to 1.25 km for consistency with NDFD.</li>
                                               <li>Introduction of enhanced background error for temperature in complex terrain for OCONUS (was 
                                                   implemented in CONUS in v2.7)</li> 
                                               <li>Introduction of refined observation selection algorithm for OCONUS (was implemented for CONUS in v2.7)</li> 
                                               <li>Removal of a 1-2-1 smoother currently applied to the derived dewpoint increments to address a 
                                                   moist bias in complex terrain.</li> 
                                               <li>Use of radar-only MRMS QPE instead of first-run Stage II/IV for precipitation RTMA; 
                                                   discontinuation of various Stage II analyses.</li> 
                                               <li>Stage IV analysis changing from GRIB1 to GRIB2.</li>
                                               <li>Add 6h/24h snowfall analysis from NOHRSC to the precipitation URMA system.</li> 
                                               <li>Smoother offshore filling of ConUS precipitation URMA.</li> 
                                               <li>New temperature downscaling is used for Guam, Hawaii and Puerto Rico in the background 
                                                   fields (HiresW and NAM Smartinit).</li>
                                               <li>New wind downscaling is used for CONUS and Alaska in the background fields (HRRR Smartinit) 
                                               <li>Land cover is used instead of vegetation type for the coastal adjustment of the background fields 
                                                   (RAP Smartinit) 
                			</ol>
                			</th>
                		</tr>
                		<tr>
                			<th><center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/AQMv5.1-CCB.pdf"><strong>18 December 2018 </strong></a></center></th>
                			<th>
                			<p style="text-align: left;">Changes to the NCEP Community Air Quality Model:</p>
                
                			<ol type="1">
                				<li style="text-align: left;">For the CONUS domain :
                				<ol type="a">
                					<li>The CMAQ Kalman Filter Analog (KFAN) bias correction system for fine Particulate Matter (PM2.5) will be improved to use a consistent training data set, additional monitor sites and a unified KFAN bias correction system. For the first time, the unified KFAN bias correction system will also be employed on CMAQ ozone predictions.</li>
                					<li>4x/day cycling runs of CMAQ V5.0.2 with updated oil and gas sector emissions for year 2017 (implemented May 1, 2018).</li>
                					<li>Updated Environmental Protection Agency (EPA) National Emissions Inventory base emissions to NEI2014V2.</li>
                					<li>Turn off fire smoke emissions from November through April.</li>
                				</ol>
                				</li>
                				<li style="text-align: left;">For the Alaska and Hawaii domains :
                				<ol type="a">
                					<li>For Alaska and Hawaii (O-CONUS): Update the chemical transport model to unified CMAQ V5.0.2 used for all domains.</li>
                				</ol>
                				</li>
                				<li style="text-align: left;">All AQM ozone and PM2.5 AWIPS grid files (CONUS 227, Alaska 198 and Hawaii 196) will no longer output associated bitmap information to reduce file size. In addition, nearest neighbor option will be used to interpolate from the native CMAQ grid to the AWIPS output grids to reduce unrealistic gradients when using the bicubic interpolation approach.</li>
                			</ol>
                			</th>
                		</tr>
                		<tr>
                			<th><center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/OD_Science_Brief_RTMA_v2.7.pdf"><strong>4 December 2018 </strong></a></center></th>
                			<th style="text-align: left;">Changes to the NCEP Real-time Mesoscale Analysis (RTMA), Unrestricted Real-time Mesoscale Analysis (URMA), Real Time Mesoscale Analysis with Rapid Updates (RTMA-RU), and the RTMA/URMA Precipitation Analysis (PCPANL):
                			<ol type="1">
                				<li>The RTMA-RU system latency is improved such that product delivery occurs within 15 minutes of the cycle time.</li>
                				<li>Guam RTMA will change from a three-hourly analysis system to an hourly analysis system.</li>
                				<li>Guam RTMA will change to use a background field from the 3-km Guam High-Res Window forecast, rather than a 13-km GFS forecast. The new high spatial resolution background is generally of a longer forecast length, since the High-Res Window model only makes forecasts for cycles 00Z and 12Z, while the GFS makes forecasts for cycles 00Z, 06Z, 12Z and 18Z. In addition, the first five hours of each High-Res Window forecast are discarded to avoid noise in the RTMA background.</li>
                				<li>Alaska RTMA and Alaska URMA will change to use a background field from the 3-km High Resolution Rapid Refresh (HRRR) Alaska forecast, rather than a 13-km Rapid Refresh (RAP) forecast. The new high resolution background is generally of a longer forecast length, since the HRRR-AK model only makes forecasts for cycles 00Z, 03Z, 06Z, 09Z, 12Z, 15Z, 18Z, 21Z, while the RAP model makes forecasts for hourly cycles</li>
                				<li>The ceiling/sky cover analysis is expanded to all OCONUS domains in support of the National Blend of Models (NBM).</li>
                				<li>The significant wave height analysis is expanded to the OCONUS URMA domains.</li>
                				<li>The ceiling and visibility analysis is improved for all domains through the use of a general nonlinear transformation of variables in the data assimilation algorithm.</li>
                				<li>CONUS RTMA/URMA/RTMA-RU will begin assimilating new visibility observations from Mesonets via a use-list provided by NOAA Earth System Research Laboratory (ESRL).</li>
                				<li>The coastal gaps in the CONUS URMA precipitation analysis are filled via the incorporation of available Multi-Radar Multi- Sensor (MRMS) and the Climate Prediction Center MORPHing Technique (CMORPH) precipitation analysis data.</li>
                				<li>Updates to improve how well the analysis matches observations:</li>
                				<li>For CONUS domains of RTMA, URMA, and RTMA-RU, update the analysis observation selection algorithm to only use the observation closest to analysis time instead of fitting among the full window of reports from a single station.</li>
                				<li>For the CONUS domains of RTMA, URMA, and RTMA-RU, update temperature background error covariance in complex terrain</li>
                				<li>Updated wind Quality Control (QC) lists for Mesonets.</li>
                			</ol>
                			</th>
                		</tr>
                		<tr>
                			<th>
                			<center>&nbsp;</center>
                
                			<center><strong>11 July 2018 </strong></center>
                
                			<center>&nbsp;</center>
                
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/RAPv4HRRRv3_CCB.pdf"><strong>Technical Briefing </strong></a></center>
                			&nbsp;
                
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/EMC_RAPv4_HRRRv3_OD_Briefing.pdf"><strong>Overview with verification results and stakeholders evaluation </strong></a></center>
                
                			<center>&nbsp;</center>
                			</th>
                			<th style="text-align: left;">Changes to the Rapid Refresh (RAP) and High-Resolution Rapid Refresh (HRRR)
                			<ol type="1">
                				<li>RAP forecast length increases to 39-h for the 03/09/15/21z cycles</li>
                				<li>CONUS HRRR forecast length increases to 36-h for the 00/06/12/18z cycles</li>
                				<li>CONUS Alaska HRRR added every 3-h:
                				<ol type="a">
                					<li>00/06/12/18z forecasts to 36-h</li>
                					<li>03/09/15/21z forecasts to 18-h</li>
                				</ol>
                				</li>
                				<li>Data assimilation / analysis changes:
                				<ol type="a">
                					<li>Updated version of the Gridpoint Statistical Interpolation (GSI) analysis code.</li>
                					<li>New observations assimilated:
                					<ol type="a">
                						<li>AMV's over land and TAMDAR aircraft data</li>
                						<li>NCEP new VAD wind retrievals</li>
                						<li>New satellite radiances in RAP : IASI, CrIS, SEVIRI</li>
                						<li>Lightning and radar radial velocities assimilated in HRRR</li>
                					</ol>
                					</li>
                					<li>Revised PBL psuedo-obs</li>
                					<li>Weighting of the ensemble in hybrid GSI will increase from 0.75 to 0.85.</li>
                					<li>Cloud building - cloud CCN now considered, GOES/METAR cloud building now consistent</li>
                					<li>Latent heating reduced by 50% (RAP only)</li>
                				</ol>
                				</li>
                				<li>Forecast Model Changes
                				<ol type="a">
                					<li>The RAP and HRRR will both begin using WRF version 3.8.1; both will continue to use the ARW core.</li>
                					<li>Vertical coordinate changed from sigma to sigma-isobaric hybrid</li>
                					<li>The MYNN planetary boundary layer scheme is being updated to improve effects of subgrid-scale clouds, EDMF (local/deep) mixing</li>
                					<li>The 9-level RUC land-surface model update: mosaic snow, 2-m Temp diagnostic</li>
                					<li>Thompson microphysics scheme updated to improve ice clouds</li>
                					<li>Revised Grell-Freitas convection in RAP</li>
                				</ol>
                				</li>
                				<li>Land-surface/post-processing
                				<ol type="a">
                					<li>Use MODIS high-resolution 15" land-use data</li>
                					<li>Use VIIRS real-time vegetation greenness fraction</li>
                					<li>Revised roughness length</li>
                					<li>Wind gust computation fixed (stronger at night)</li>
                					<li>Visibility computation improved</li>
                				</ol>
                				</li>
                			</ol>
                			</th>
                		</tr>
                		<tr>
                			<th><center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/RTMA_URMA_V2.6_Implementation_Brief.pdf"><strong>13 December 2017 </strong></a></center></th>
                			<th style="text-align: left;">Changes to the NCEP Real-time Mesoscale Analysis (RTMA), Unrestricted Real-time Mesoscale Analysis (URMA), Real Time Meoscale Analysis with Rapid Updates (RTMA-RU), and the RTMA/URMA Precipitation Analysis (PCPANL):
                			<ol type="1">
                				<li>For RTMA/URMA:
                				<ol type="a">
                					<li>Add GLERL-adjusted observations over the Great Lakes (URMA only)</li>
                					<li>New terrain and land-sea mask for CONUS, Hawaii, and Puerto Rico</li>
                					<li>Add daily max/min RH for all URMA domains</li>
                					<li>Add significant wave height for CONUS URMA</li>
                					<li>Add ceiling height to Alaska RTMA/URMA</li>
                					<li>Observation quality control changes</li>
                					<li>Reduce coastal steepening, removing zero-increment line along coastlines</li>
                				</ol>
                				</li>
                				<li>For RTMA-RU:
                				<ol type="a">
                					<li>Introduction of CONUS RTMA-RU, based on RTMA, with 15 minute analysis updates, available about 16-17 minutes after analysis time</li>
                					<li>Variables analyzed : temperature, moisture, wind, wind gust, ceiling height, visibility, and surface pressure</li>
                				</ol>
                				</li>
                				<li>For PCPANL:
                				<ol type="a">
                					<li>Merge precipitation analysis processing for RTMA/URMA into RTMA/URMA package (was previously separate)</li>
                					<li>Add hourly precipitation for CONUS and Puerto Rico domains</li>
                				</ol>
                				</li>
                			</ol>
                			</th>
                		</tr>
                		<tr>
                			<th><center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/hiresw_decision_brief_hireswv7_hrefv2.pdf"><strong>1 November 2017 </strong></a></center></th>
                			<th>
                			<p style="text-align: left;">Changes to the High-Resolution Ensemble Forecast (HREF) and High-Resolution Window (HiResW) systems:</p>
                
                			<ol type="1">
                				<li style="text-align: left;">Changes to the HREF model membership
                				<ol type="a">
                					<li>For the CONUS domain:
                					<ol>
                						<li>Adds a second Weather Research and Forecasting (WRF) Advanced Research WRF run (ARW2) member (current cycle run plus the 12 h old run).</li>
                						<li>Reduces the number of North American Mesoscale (NAM) 3 km CONUS nest members in HREF from five to two (previously included the current cycle plus 6, 12, 18, and 24 hour old runs; now uses just the current cycle plus the six hour old run).</li>
                						<li>Reduces the number of Nonhydrostatic Multiscale Model on B-grid (NMMB) members from HIRESW from three to two (previously included the current cycle plus the 12 and 24 hour old runs; now uses just the current cycle plus the 12 h old run).</li>
                						<li>Reduces the number of HIRESW WRF-ARW members from three to two (previously included the current cycle plus the 12 and 24 hour old runs; now uses just the current cycle plus the 12 h old run).</li>
                					</ol>
                					</li>
                					<li>For the Alaska, Hawaii, and Puerto Rico domains:
                					<ol>
                						<li>Generates new HREF products from a six-member ensemble (two cycles each of HIRESW NMMB, HIRESW ARW1, and HIRESW ARW2)</li>
                					</ol>
                					</li>
                				</ol>
                				</li>
                				<li style="text-align: left;">Changes to HIRESW model runs:
                				<ol type="a">
                					<li>Unifies the horizontal grid spacing at 3 km for both the ARW and NMMB models (3.2 km for both over CONUS).</li>
                					<li>Changes horizontal grid spacing (new km/old km)
                					<ol>
                						<li>For the WRF-ARW runs over the five domains:
                						<ol type="a">
                							<li>CONUS (3.2/4.2)</li>
                							<li>Alaska (3.0/3.5)</li>
                							<li>Hawaii (3.0/3.8)</li>
                							<li>Guam (3.0/3.8)</li>
                							<li>Puerto Rico (3.0/3.8)</li>
                						</ol>
                						</li>
                						<li>For the NMMB run over one domain only
                						<ol type="a">
                							<li>CONUS (3.6 to 3.2)</li>
                						</ol>
                						</li>
                					</ol>
                					</li>
                					<li>Add a second ARW (ARW2) member for all domains, except for Guam, that is initialized from the NAM. This second member also uses the Mellor Yamada Janjic (MYJ) planetary boundary layer (PBL) and MYJ surface layer physics, so differs from primary HIRESW ARW member in terms of the physics used in addition to having a different source of initial and lateral boundary conditions. It also has just 40 vertical levels, while the primary ARW1 member has 50 vertical levels.</li>
                					<li>The NMMB run increases the call frequency for PBL/surface physics and microphysics from every fourth model time-step to every other time-step.</li>
                					<li>Changes the vertical level structure within the primary 50 level ARW1 runs for all domains except Alaska. Counting from the surface upward, layers 7-18 (roughly 970 to 760 hPa for a surface pressure of 1010 hPa) are made somewhat thicker, and layers 19-30 (roughly 690 to 330 hPa for a surface pressure of 1010 hPa) are made somewhat thinner. This change was made for Alaska only in a previous fix to improve numerical stability, and is extended to all domains with this upgrade.</li>
                					<li>Runs considerably earlier within production suite by using 6 hr old GFS (or NAM for the ARW2 member) files to generate lateral boundary conditions. Runs that use the GFS for initial conditions now utilize a 6 hr forecast from the 6 hr old GFS for initialization.</li>
                					<li>Changes from 0.5 degree to 0.25 degree GFS data for use in producing initial and lateral boundary conditions.</li>
                					<li>Initializes the Puerto Rico domain runs from the RAP (previously initialized from the GFS); the new ARW2 member for Puerto Rico is NAM initialized.</li>
                				</ol>
                				</li>
                			</ol>
                			</th>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/CMAQ_June2017.pptx"><strong>14 June 2017 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP Community Air Quality Model for the CONUS:
                				<ol type="1">
                					<li>Upgrade to EPA CMAQ version V5.0.2 (155 species) with improved gas- and aerosol-phase (AERO VI) chemistry</li>
                					<li>Update anthropogenic emissions with point sources projected to 2017 from NEI 2011 base year</li>
                					<li>Update BlueSky fire/smoke emission modeling system (through HYPSLIT and PREMAQ smoke processing codes); Include a 24-hr backward reanalysis of fire/smoke emissions at 06z cycle to correspond with NESDIS/HMS fire information</li>
                					<li>Implement Kalman Filter Analog (KFAN) bias correction of PM 2.5 over CONUS. Developed by CMAQ model was originally developed and updated by U.S. Environmental Protection Agency (USEPA) and modified by NOAA/OAR/Air Resource Laboratory and NCEP/EMC; Analog Ensemble bias correction was developed by NOAA ESRL and transitioned to aerosol-phase (AERO VI) chemistry</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/RTMA_v2.5_Implementation_Briefing.pdf"><strong>2 May 2017 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP Real-time Mesoscale Analysis (RTMA) and Unrestricted Real-time Mesoscale Analysis (URMA):
                				<ol type="1">
                					<li>Exapnded CONUS domain westward by 200 points</li>
                					<li>Changes to ceiling height
                					<ol type="a">
                						<li>Use HRRR instead of RAP-based background</li>
                						<li>Ceiling analysis elevated from "experimental" to operational</li>
                					</ol>
                					</li>
                					<li>Visibility improvements over Alaska : switch from NAM-based background to RAP-based,</li>
                					<li>Quality control changes
                					<ol type="a">
                						<li>Beginning of near-real-time mesonet QC</li>
                						<li>Remove old static accept list</li>
                						<li>Updated wind-bin lists to reflect HRRRv2 background, ~10k more winds used in RTMA</li>
                					</ol>
                					</li>
                					<li>PCPANL v2.3: Add Alaska and Puerto Rico to 6-h precipitation URMA (previously CONUS only)</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/namv4docs/NAMv4_ScienceIT_brief_10Mar2017.final_expanded.pdf"><strong>21 March 2017 (Overview) </strong></a></center>
                
                			<p>&nbsp;</p>
                
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/namv4docs/aligo_awc_8-24-2016.pdf"><strong>Details on Microphysics Changes </strong></a></center>
                
                			<p>&nbsp;</p>
                
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/namv4docs/NMMB_Model_Changes_8-24-2016_v3.pdf"><strong>Details on Model Stability Changes </strong></a></center>
                
                			<p>&nbsp;</p>
                
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/namv4docs/radar_lightningDA_namv4.pdf"><strong>Details on Radar/Lightning Data Assimilation </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP North American Mesoscale (NAM) Forecast System
                				<ol type="1">
                					<li>Forecast model changes
                					<ol type="a">
                						<li>Horizontal grid resolution changes:
                						<ol type="i">
                							<li>CONUS nest from 4 km to 3 km</li>
                							<li>Alaska nest from 6 km to 3 km</li>
                							<li>CONUS fire weather nest from 1.333 km to 1.5 km</li>
                						</ol>
                						</li>
                						<li>More frequent calls of physics (now every 2nd time step for all domains); change frequency of radiation updates for the NAM 12 km parent domain from hourly to every 20 minutes</li>
                						<li>Advect specific humidity every dynamics time step Mix out superadibatic layers</li>
                						<li>Changes to Betts-Miller-Janjic convective scheme to improve 12 km parent QPF bias, especially during the cool season</li>
                						<li>Updated Ferrier-Aligo microphysics to improve stratiform precipitation, better anvil reflectivity, reduce areas of light/noisy reflectivity over oceans</li>
                						<li>Improved effect of frozen soil on transpiration and soil evaporation, leads to reduced cold/moist bias during cool season</li>
                						<li>Radiation changes to reduce incoming surface shortwave radiation under liquid clouds; reduces warm-season 2-m temperature bias</li>
                					</ol>
                					</li>
                					<li>Data Assimilation / Analysis Changes
                					<ol type="a">
                						<li>Replace 12-h NAM Data Assimilation System (NDAS, 3-h analysis updates for the 12 km parent domain) with a 6-h data assimilation cycle with hourly analysis updates for the 12 km parent and the 3 km CONUS/Alaska nests. The Hawaii/Puerto Rico/Fire weather nests will be initialized from the 12-km first guess at the end of 6-h assimilation cycle.</li>
                						<li>Use of lightning data (from NLDN and ENL networks) and radar reflectivity-derived temperature tendencies in the diabatic digital filter initialization.</li>
                						<li>Add execution of the diabatic digital filter initialization prior to the NAM free forecast (was only run during NDAS in previous ops NAM version 3).</li>
                						<li>Assimilate new observation types:
                						<ol type="i">
                							<li>Aircraft data: Aeromexico, ADS-C, Air-Wisconsin</li>
                							<li>New satellite radiance data: NOAA NPP (ATMS, CRIS), METEOSAT-10 SEVIRI, DMSP-F17 SSMIS; METOP-B AMSUA, MHS, IASI</li>
                							<li>New GPS Radio Occultation data: METOP-B 3 (subtype)</li>
                							<li>New satellite winds: Himawari-B, METEOSAT-7, 10 Imager WV AMV, NOAA-15, 18, 19 AVHRR IR AMV, METOP-A, B AVHRR AMV</li>
                						</ol>
                						</li>
                					</ol>
                					</li>
                					<li>Other Science Changes
                					<ol type="a">
                						<li>Reinstate use of 557th Weather Wing (formerly AFWA) 23 km snow depth analysis using envelope adjustment</li>
                						<li>Use a new climatology of fresh water lake temperatures (FLAKE) for inland water bodies not resolved by the 1/12th degree RTG_SST_HR analysis in the CONUS, Alaska, and fire weather nests</li>
                						<li>Reduce terrain smoothing in all NAM nest domains</li>
                						<li>Use NESDIS burned area data (30-day and 2-day average) in the fire weather nest; greenness fraction and albedo are adjusted based on the 30-day average, top-layer soil moisture based on the 2-day average</li>
                						<li>Perform tropical cyclone relocation for the 12 km parent domain at the start of the 6-h DA cycle and for the NAM forecast first guess.</li>
                					</ol>
                					</li>
                					<li>Output / Miscellanous Changes
                					<ol type="a">
                						<li>The Downscaled GFS by NAM Extension (DGEX) forecast run is discontinued</li>
                						<li>The output grid for these nests will change:
                						<ol type="i">
                							<li>CONUS nest: change from the 5 km grid #227 to the 3 km HRRR output grid (click <a href="https://www.emc.ncep.noaa.gov/mmb/namgrids/conusoutgrid.jpg">here </a> for difference)</li>
                							<li>Alaska nest: change from the 6 km NDFD grid to the 3 km NDFD grid</li>
                						</ol>
                						</li>
                						<li>All NAM nests grids will be output hourly from 0-60 hours; in the previous ops NAMv3 they were output hourly from 0-36 hours and 3-h from 39-60 hours.</li>
                						<li>Ceiling height in the NAMv4 is changed from height above ground level to height above mean sea level for all output files</li>
                						<li>With the NAM Alaska nest horizontal grid resolution changing from 6 km to 3 km, it will no longer run with convective parameterization. Therefore the convective- type fields will no longer be output for the Alaska nest</li>
                						<li>Added 1-h maximum precipitation rate (PRATE) and frozen precipitation rate (SRWEQ) to the following grids:
                						<ol type="i">
                							<li>32 km North America lambert conformal grid #221 (awip32)</li>
                							<li>12 km CONUS lambert conformal grid #218 (awip12)</li>
                							<li>11.25 km Alaska polar stereogrpaphic grid #242 (awak3d)</li>
                							<li>All NAM nest output grids</li>
                						</ol>
                						</li>
                						<li>Add a new visibility field based on the GSD algorithm to the selected NAM output grids (this field is labeled with vertical level=cloud top</li>
                						<li>NAMv4 output files on the NCEP/NWS web servers will be written as GRIB2 format direct from the post-processing, instead of first being written out in GRIB1 format and converted to GRIB2. The GRIB2 compression type for each NAM domain will be as follows:
                						<ol type="i">
                							<li>JPEG2000: Hawaii, Puerto Rico and Fire Weather nests</li>
                							<li>Complex packing with 2nd order spatial differencing: CONUS nest, Alaska nest and all output from 12km NAM parent domain</li>
                						</ol>
                						</li>
                					</ol>
                					</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/05-DiMego-NPSR.pptx"><strong>5 December 2016 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Mesoscale Modeling Presentation from 2016 NCEP Production Suite Review</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/RTMA_URMA_v2.4.4_Implementation_Briefing.pdf"><strong>23 August 2016 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP Real-time Mesoscale Analysis (RTMA) and Unrestricted Real-time Mesoscale Analysis (URMA):
                				<ol type="1">
                					<li>Replace the current terrain and land/sea mask used in the system with the new EMC/GFE consensus terrain and land/sea mask in the 2.5km CONUS domain. The use of the common terrain and land/sea mask will eliminate the need for NWS forecasters to reduce the RTMA and URMA analyses to their local GFE terrain.</li>
                					<li>Improve the CONUS and Alaska grids of wind speed by analyzing wind speed directly as a scalar, as opposed to deriving it from the control variables of stream function and velocity potential.</li>
                					<li>Produce new URMA output for Hawaii and Puerto Rico on 2.5km grids. These new URMA systems will provide "truth analyses" for the National Blend of Models Project. The output will contain analysis and analysis uncertainty for the following parameters: Surface pressure, 2m-temperature, 2m-dewpoint, 2m-specific Humidity, 10-m u-wind component, 10m-v wind component, 10-m wind speed, 10-m wind direction, 10-m gust, and surface visibility.</li>
                				</ol>
                				</li>
                				<li>Associated changes to the NAM Downscaled Gridded Products (DNG)
                				<ol type="1">
                					<li>Replace the current terrain and land/sea mask used in the system with the new EMC/GFE consensus terrain and land/sea mask for the 2.5km CONUS domain.</li>
                					<li>Modify the wind gust calculation at intermediate hours (1,2,4,5, etc) to use the maximum of the NAM nest wind gust and downscaled wind speed. This calculation is already done at the 0,3,6, etc forecast hours and this change will make it consistent across all forecast hours.</li>
                					<li>Add new variables: Cloud Ceiling height [gpm], and Mean Sea Level Pressure (Eta model reduction) [Pa] to the 2.5km CONUS, 3km Alaska, Puerto Rico and Hawaii NAM DNG files on the NCEP ftp server.</li>
                					<li>Add hourly output of Total Cloud Cover field for all NAM DNG domains. It was previously available only every 3 hours.</li>
                					<li>Remove the 5km CONUS and 6km AK NAM DNG GRIB files from the NCEP servers. These products have been replaced by the 2.5km CONUS and 3km Alaska products.</li>
                					<li>Modify the GRIB encoding for the Haines Index fields will be modified to use the value 9.9 x 10^10 for the missing value.</li>
                				</ol>
                				</li>
                				<li>Associated changes to SREF Products
                				<ol type="1">
                					<li>Update the SREF ensemble mean, probability and spread products on NOAAPORT to add the 0-3h accumulated precipitation parameter, which is erroneously being skipped.</li>
                					<li>Add the following fields to all of the SREF output grids (grids 132, 212, 216, 221 and 243) on the NCEP ftp server: Water Equivalent of Snow Depth (both instantaneous and 3-hourly Snow Depth.</li>
                					<li>Increase the forecast hours available in the probability files available on the NCEP ftp server for grid 132 from 72 hours to 87. The filename is sref.tCCz.pgrb132.prob_3hrly.grib2</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/RAPX_HRRRX_NWS-13sep2016-pub.pdf"><strong>23 August 2016 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the Rapid Refresh (RAP) and High-Resolution Rapid Refresh (HRRR)
                				<ol type="1">
                					<li>RAP domain expanded to be identical to the 12 km NAM domain</li>
                					<li>RAP forecast runs to 21-h; HRRR to 18-h</li>
                					<li>Data Assimilation Changes
                					<ol type="a">
                						<li>Updated version of the Gridpoint Statistical Interpolation (GSI) analysis code.</li>
                						<li>Refinements are made to the GSI to improve the assimilation of surface observations, soil moisture adjustment, and three- dimensional cloud and precipitation hydrometeors.</li>
                						<li>The HRRR will start using the ensemble/hybrid data assimilation</li>
                						<li>Weighting of the ensemble in hybrid GSI will increase from 0.50 to 0.75.</li>
                						<li>Land-states cycling will be done in the HRRR</li>
                						<li>Use of radial wind and mesonet data</li>
                						<li>Apply PBL-based pseudo-innovations for 2-meter temperatures (already used for 2-meter dew points)</li>
                						<li>Changing the cloud-hydrometeor assimilation to avoid METAR-based cloud building when satellite data shows clear skies at all times of day (currently used just in daytime)</li>
                						<li>Introducing direct use of 2-meter temperature and dew point model diagnostics in the GSI.</li>
                						<li>Specific to the HRRR, the application of radar reflectivity data in the GSI to direct specification of 3-dimensional hydrometeors is increased to apply to a broader range of weather conditions, including warm-season events with reflectivity up to 28 dBZ.</li>
                					</ol>
                					</li>
                					<li>Forecast Model Changes
                					<ol type="a">
                						<li>The RAP and HRRR will both begin using WRF version 3.6.1; both will continue to use the ARW core.</li>
                						<li>The MYNN planetary boundary layer scheme is being updated to include the effects of subgrid-scale clouds. The mixing length formulation in the boundary layer scheme and thermal roughness in the surface layer are being changed.</li>
                						<li>The 9-level RUC land-surface model is being updated to add a mosaic approach for fractional snow cover, improve the fluxes from snow cover, and modify the wilting point for cropland use.</li>
                						<li>Major updates are being made to the Thompson microphysics scheme, including making it aerosol-aware with use of an ice- friendly and water-friendly aerosol field.</li>
                						<li>Shortwave and longwave radiation have been changed to use the RRTMG (RRTM global) scheme that includes the effects of aerosols and boundary layer subgrid-scale clouds.</li>
                						<li>The WRF-ARW diagnostics for 2-meter temperature and dew point are being improved.</li>
                						<li>The convective scheme in the RAP is changed from the Grell 3-D scheme to the scale-aware Grell-Freitas scheme.</li>
                					</ol>
                					</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/CMAQ_Readiness_Jan2016.pdf"><strong>4 February 2016 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP Air Quality Model:
                				<ol type="1">
                					<li>Increase vertical levels from 22 to 35</li>
                					<li>Include global contributions of dust-related aerosol species at the CMAQ lateral boundaries from the NEMS Global Aerosol Capability (NGAC) forecasts</li>
                					<li>Analog ensemble bias correction for predictions of fine particulate matter</li>
                					<li>Initial public distribution of raw and bias corrected particulate matter (PM2.5) products</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/URMA_RTMA_Q2FY16_Implementation_Briefing.pdf"><strong>6 January 2016 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP Real-time Mesoscale Analysis (RTMA) and Unrestricted Real-time Mesoscale Analysis (URMA):
                				<ol type="1">
                					<li>Add variational quality control for the observations to RTMA-CONUS, RTMA-Alaska and URMA-CONUS</li>
                					<li>Add an observation buddy-check for temperature to RTMA-Alaska</li>
                					<li>Relax the observation quality control for coastal mass observations in RTMA-Hawaii</li>
                					<li>Add a 3.0 km resolution URMA-Alaska system with these variables:
                					<ol type="a">
                						<li>2-m temperature</li>
                						<li>2-m specific humidity</li>
                						<li>2-m dew point temperature</li>
                						<li>10-m wind speed</li>
                						<li>10-m wind direction</li>
                						<li>10-m wind gust</li>
                						<li>surface pressure</li>
                						<li>surface visibility</li>
                						<li>maximum temperature (TMAX)</li>
                						<li>minimum temperature (TMIN)</li>
                					</ol>
                					</li>
                					<li>For hourly precipitation RTMA: use Stage IV hourly as primary source of precipitation RTMA, supplemented by Stage II hourly when Stage IV is not available at the time precipitation RTMA is made.</li>
                					<li>For 6-hourly precipitation URMA: coverage inside of an RFC's domain proper will only come from that RFC (previously, if an RFC's input is late or missing, coverage from neighboring RFCs is used). The WGRFC domain will be expanded to cover its area of responsibility in Mexico. Areas outside of the RFC domains (except for Gulf of Mexico and the Atlantic) will be set to no data/missing. Coverage for the Great Lakes will come from specific RFCs assigned to each Lake (previously, the average of all available coverage from nearby RFCs is used for the Great Lakes).</li>
                					<li>Daytime maximum temperature (TMAX) analysis, and overnight minimum temperature (TMIN) analysis along with the corresponding fields of the analysis uncertainty are added to the URMA-CONUS GRIB2. The new fields have a nominal spatial resolution of 2.5 km and are produced once a day.</li>
                					<li>Additional airport temperature data : RTMA temperature data will be interpolated at an additional 141 airports (all in Alaska) to serve as a real-time observation where an observation is unavailable.</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/NPSR_2015_MESO.pptx"><strong>7 December 2015 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Mesoscale Modeling Presentation from 2015 NCEP Production Suite Review</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/SREFv7_implementationBriefing.pdf"><strong>21 October 2015 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the Short-Range Ensemble Forecast (SREF) system:
                				<ol type="1">
                					<li>Increase from 21 to 26 members, 13 WRF-ARW, 13 NEMS-NMMB; WRF-NMM dropped</li>
                					<li>Increase in the number of vertical levels from 35 to 40</li>
                					<li>Enhanced initial condition diversity:
                					<ol type="a">
                						<li>Mixed use of multiple analyses (NDAS, GFS, RAP) for each model core</li>
                						<li>Blending of GEFS and SREF IC perturbations for all members</li>
                					</ol>
                					</li>
                					<li>Enhanced physics diversity:
                					<ol type="a">
                						<li>More variety of physics schemes</li>
                						<li>Stochastic flavor in physics parameters (GWD and soil moisture)</li>
                					</ol>
                					</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/HiresW_v6.1_directorbriefing_EMC.pdf"><strong>8 September 2015 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the High-Resolution Window (HiResW) modeling system:
                				<ol type="1">
                					<li>New version (WRFv3.6.1) of the WRF-ARW model with updates</li>
                					<li>New version (January 2015 trunk code) of the NEMS-NMMB model + updates</li>
                					<li>Increase in the number of vertical levels from 40 to 50i, enhances resolution in PBL (16 levels in the lowest 120 hPa, versus 9 levels previously)</li>
                					<li>Modified version of WSM6 microphysics in WRF-ARW to slow graupel production, improving radar echo top height forecasts</li>
                					<li>New output product : High-Resolution Ensemble Forecast (HREF) : ensemble guidance produced from time-lagged HiresW and NAM nest output</li>
                					<li>Additional fields for aviation and severe weather</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/RTMA_URMA_Implementation_Briefing.pdf"><strong>14 April 2015 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP Real-time Mesoscale Analysis (RTMA) and Unrestricted Real-time Mesoscale Analysis (URMA):
                				<ol type="1">
                					<li>The background changed from downscaled 13 km RAP analysis to a blend of the 3 km HRRR and 4 km NAM CONUS nest. The RAP analysis is still used in RTMA/URMA regions outside the HRRR domain.</li>
                					<li>Addition of sky cover analysis</li>
                					<li>Improved quality control : "terrain-aware" gross error check and buddy check for temperature observations</li>
                					<li>Extend the lookback period for 6-hourly URMA precipitation analysis from 1-7 days
                					<ol type="a">
                						<li>Hourly Stage IV will be re-made hourly if there is new input after valid time for the next 23 hours, then again at 1, 3, 5 and 7 days after valid time</li>
                						<li>The 6-hourly Stage IV/URMA will be re-made hourly if there is new input for 24 hours after valid time, then the four 6-hourly mosaics covering a 12Z-12Z 24 hour period will be re-made at 1, 3, 5 and 7 days after the ending 12Z (the 6-hourly Stage IV precipitation is remapped to the 2.5km NDFD-CONUS and NWRFC grids at each update as precipitation URMA)</li>
                						<li>Each remake of the 6-hourly mosaic is followed by its remapping to the 2.5km CONUS and NWRFC grids as precipitation URMA</li>
                					</ol>
                					</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/CMAQ_Readiness_2015-jtm.pdf"><strong>29 January 2015 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP Air Quality Model:
                				<ol type="1">
                					<li>Carbon Bond Mechanisms (CB05) with updated rate constants,</li>
                					<li>Monthly varying lateral boundary conditions for 36 gaseous and aerosol species below 7 km altitude,</li>
                					<li>Modified dry deposition velocity calculation,</li>
                					<li>Planetary boundary layer height in the model constrained to be at least 50 m,</li>
                					<li>Faster removal of organic nitrate from the atmosphere,</li>
                					<li>Inclusion of particulate emissions from wild fires based on wildfire locations observed over the previous day,</li>
                					<li>Suppression of soil emissions when terrain is covered by ice or snow,
                					<ol type="a">
                						<li>Windblown dust emissions are included using threshold friction velocity and soil wetness fraction with climatological source composition and locations.</li>
                					</ol>
                					</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong>2 December 2014 </strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>Mesoscale Modeling Branch Presentations from 2014 NCEP Production Suite Review
                				<ol type="1">
                					<li><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/NPSR_2014_MESO/10-DiMego.Mesoscale.ppt"><strong>North American Mesoscale (NAM), HiResWindow and RTMA/URMA </strong> </a></li>
                					<li><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/NPSR_2014_MESO/12-Du-SREF.pptx"><strong>Short-range Ensemble Forecast (SREF) System </strong> </a></li>
                					<li><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/NPSR_2014_MESO/11-Benjamin_HRRR_COMBINED.pptx"><strong>Rapid Refresh (RAP) / High Resolution Rapid Refresh (HRRR) </strong> </a></li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/HRRR_EMC_NCEPDirector_Briefing.pdf"><strong>30 September 2014 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Initial implementation of the hourly 3-km High-Resolution Rapid Refresh (HRRR) at NCEP</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/NAMv3.1_NCEPDirectorbrief_08aug2014_forweb.pdf"><strong>12 August 2014 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the North American Mesoscale (NAM) modeling system:
                				<ol type="1">
                					<li>Model Changes:
                					<ol type="a">
                						<li>Replace legacy GDFL radiation with RRTM</li>
                						<li>Modified Gravity Wave Drag/Mountain Blocking; more responsive to subgrid-scale terrain variability</li>
                						<li>New version of Betts-Miller-Janjic convection : moister convective profiles; convection triggers less</li>
                						<li>Ferrier-Aligo microphysics (see linked presentation for details)</li>
                						<li>Modified treatment of snow cover/depth : Use forecast rime factor from microphysics in land-surface model</li>
                						<li>Reduce roughness length for 5 vegetation types
                						<ol>
                							<li>Evergreen Needleleaf Forest</li>
                							<li>Deciduous Broadleaf Forest</li>
                							<li>Mixed Forests</li>
                							<li>Croplands</li>
                							<li>Cropland/natural vegetation mosaic</li>
                						</ol>
                						</li>
                						<li>Model changes specifically targeting improving convective storm structure:
                						<ol>
                							<li>All nests except Alaska will run with explicit convection</li>
                							<li>Ferrier-Aligo microphysics (see linked presentation for details)</li>
                							<li>Removed 4x increase in diffusion of specific humidity and cloud water mixing ratio</li>
                							<li>Reduced 2nd order diffusion in nests</li>
                							<li>Turn on separate microphysics species advection for all nests except Alaska</li>
                						</ol>
                						</li>
                					</ol>
                					</li>
                					<li>Analysis/NDAS Changes
                					<ol type="a">
                						<li>Hybrid variational ensemble analysis</li>
                						<li>New satellite bias correction scheme</li>
                						<li>Variational quality control</li>
                						<li>Raob level enhancement</li>
                						<li>Begin use of mesonet wind reject list from RTMA</li>
                						<li>Use new RTMA reject lists with most NWS Western Region stations removed</li>
                						<li>Use GFS ozone analysis in radiance assimilation</li>
                						<li>Diabatic digital filter initialization (12-km NDAS only)</li>
                						<li>Resume calculation of NDAS long-term precipitation budget adjustment (used to bias correct Stage II/IV precip analyses using CCPA</li>
                						<li>New observation types:
                						<ol>
                							<li>GPS bending angle data replaces refractivity</li>
                							<li>GOES-15 radiances</li>
                							<li>New VAD winds (higher vertical resolution, produced at NCEP with radial wind QC)</li>
                							<li>Meteosat-10 wind subtypes w/different data thinning</li>
                						</ol>
                						</li>
                					</ol>
                					</li>
                					<li>Changes to NAM Downscaled Grids
                					<ol type="a">
                						<li>5 km CONUS / 6 km Alaska DNG grids extended to 192-h via DGEX</li>
                						<li>Added Haines Index for fire weather</li>
                						<li>Improved 10-m wind treatment; use mass-consistent wind field, based on velocity potential, incorporating local terrain effects</li>
                					</ol>
                					</li>
                					<li>Other Changes:
                					<ol type="a">
                						<li>Discontinue use of AFWA snow depth product; NDAS snow depth will be continuously cycled, once per day (start of 06z NDAS) snow will be removed at any grid point that is snow-free in the IMS snow cover analysis. Points that are snow-covered in the IMS product that are snow-free in the NDAS will have a minimum snow depth assigned of 5 cm</li>
                						<li>Over the Great Lakes, replaced the GLERL water temperatures with those from the RTG_SST_HR analysis (SST product used over the rest of the NAM domain)</li>
                					</ol>
                					</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/HiresW_v6.0.7_director_brief.pdf"><strong>11 June 2014 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the High-Resolution Window (HiResW) modeling system:
                				<ol type="1">
                					<li>Replace WRF-NMM with NEMS-NMMB (~ August 2013 version with updates)</li>
                					<li>New version (WRFv3.5) of the WRF-ARW model</li>
                					<li>East and West CONUS domains replaced by a single full CONUS domain run at 00z and 12z</li>
                					<li>Alaska domain now run at both 06z and 18z</li>
                					<li>Resolution changes:
                					<ol type="a">
                						<li>Alaska : 3 km NMMB, 3.5 km WRF-ARW</li>
                						<li>CONUS : 3.6 km NMMB, 4.2 km WRF-ARW</li>
                						<li>Hawaii/Puerto Rico/Guam : 3.0 km NMMB, 3.8 km WRF-ARW</li>
                						<li>Increase the number of vertical levels from 35 to 40</li>
                					</ol>
                					</li>
                					<li>Replace WSM3 microphysics in ARW with WSM6 (includes graupel; more appropriate for sub-10 km resolution)</li>
                					<li>Upgraded Ferrier microphysics in NMMB</li>
                					<li>RRTM radiation in the NMMB</li>
                					<li>RAP replaces NAM as inititalization source for CONUS runs</li>
                					<li>GFS replaces NAM for Hawaii and Puerto Rico initializations</li>
                					<li>New output on 2.5-3 km NDFD grids with smartinit downscaling</li>
                					<li>Additional isobaric level output and selected new fields for aviation (simulated radar VIL) and fire weather</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/SREFv6.1.3_decisionbriefing20140314.pdf"><strong>2 April 2014 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the Short-range Ensemble Forecast System (SREF):
                				<ol type="1">
                					<li>Replace GFS land states with NDAS land states in NMM and ARW members</li>
                					<li>Revise NDAS land states in NMMB members to fix a bug related to ice cover in the Great Lakes</li>
                					<li>Replace global initial conditions with RAP initial conditions for the ARW members</li>
                					<li>Fix bugs in NOAH Land Surface Model (LSM):
                					<ol type="a">
                						<li>Eliminate negative soil moisture fractions for NMM and ARW members</li>
                						<li>Eliminate "urban swamp" (causing too cold surface temperature over urban regions during heat wave periods) for NMMB members</li>
                					</ol>
                					</li>
                					<li>Correct GFS physics in 2 NMMB members to produce compatible cloud &amp; ceiling guidance with the rest of SREF members</li>
                					<li>Fix post-processor to remove use of snow in diagnosing cloud base height</li>
                					<li>Correct a mapping bug (eastward shift) in NMM members pressure-grib output files</li>
                					<li>Use the model lowest-level values for the 2m T, Td q, RH and 10m u and v fields for the 7 NMMB members at initial time f00; these fields do not have correct values in the current operational SREF.</li>
                					<li>Switch the hypsometric option in the ARW model back to the version in the original wrf3.3 version from option 2 (height is derived from log pressure) to option 1 (derived from pressure); this will make the model more reliable.</li>
                					<li>New output products:
                					<ol type="a">
                						<li>Rime Factor at the lowest model level above the surface</li>
                						<li>Snow depth</li>
                						<li>Percent of frozen precipitation for all 21 members</li>
                						<li>Water equivalent of accumulated snow for all 7 ARW members.</li>
                						<li>Begin disseminating 2m temperature and 3-hourly accumulated precipitation for all 21 SREF members on the 32km North American domain (grid 221) via NOAAPORT. More details about these products, including WMO headers, can be found in NWS TIN 13-44.</li>
                						<li>Modify the clustering algorithm to preserve time-continuity within a cluster over each of the three pre-selected forecast periods (00-39hr, 42-63hr, 66-87hr). This change will make available a larger number of cluster files. Also, some of the spacing in the sref_cluster_info text file will change.</li>
                						<li>Modify the list of stations for which SREF BUFR output is generated. The details of the additions, replacements and eliminations of stations are listed below. There were 68 sites added.</li>
                					</ol>
                					</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/RAPV2_NCEP_Director.pdf"><strong>25 February 2014 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the Rapid Refresh (RAP) Modeling System:
                				<ol type="1">
                					<li>Model changes
                					<ol type="1">
                						<li>Updated version of WRF-ARW model code</li>
                						<li>Increase the number of soil layers from 6 to 9; with modified roughness length for some land-use classes</li>
                						<li>Modifications to the Thompson microphysics</li>
                						<li>Switch PBL scheme from MYJ to MYNN</li>
                					</ol>
                					</li>
                					<li>Analysis/assimilation changes
                					<ol type="1">
                						<li>Updated version of GSI analysis code</li>
                						<li>Use hybrid variational ensemble analysis with global EnKF</li>
                						<li>Adjustment of soil temperature/moisture inside GSI analysis based on atmospheric low-level temperature and moisture increments</li>
                						<li>Improvement in assimilation of GPS precipitable water data</li>
                						<li>Assimilation of lightning data as proxy for radar reflectivity</li>
                						<li>Addition of PBL-based pseudo-innovations for surface moisture observations</li>
                						<li>Retaining cloud fraction from METAR and satellite cloud data and other cloud assimilation improvements</li>
                						<li>Modification to radar hydrometeor specification and adding a surface temperature tendency</li>
                					</ol>
                					</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/RTMA_27Jan2014Briefing.pdf"><strong>28 January 2014 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP Real-Time Mesoscale Analysis (RTMA) System:
                				<ol type="1">
                					<li>Unified version of RTMA for all domains</li>
                					<li>Five domains now run:
                					<ol type="a">
                						<li>CONUS 2.5 km</li>
                						<li>Alaska 3 km</li>
                						<li>Hawaii 2.5 km</li>
                						<li>Puerto Rico 2.5 km</li>
                						<li>Guam 2.5 km</li>
                					</ol>
                					</li>
                					<li>Extend CONUS 2.5 km domain northward to provide support for the Northwest River Forecast Center</li>
                					<li>Additional of Unrestricted Mesoscale Analysis (URMA)
                					<ol type="a">
                						<li>Identical to RTMA but with 6-h delay</li>
                						<li>Run for extended CONUS 2.5 km domain only</li>
                						<li>Includes remapped Stage IV precipitation every 6-h</li>
                					</ol>
                					</li>
                					<li>GSI changes
                					<ol type="a">
                						<li>Improved background error covariance model</li>
                						<li>Bias correct 2-m temperature</li>
                						<li>Use low-level satellite winds</li>
                						<li>Routinely compute cross-validation for CONUS 2.5 km</li>
                						<li>First guess : blend HWRF for tropical storm winds, blend RAP and NAM Alaska nest for Alaska 3 km RTMA</li>
                						<li>Use diurnal reject lists for mesonet T, Td and direction-dependent accept lists for mesonet winds</li>
                					</ol>
                					</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong>3 December 2013 </strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>Mesoscale Modeling Branch Presentations from 2013 NCEP Production Suite Review
                				<ol type="1">
                					<li><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/MMB_NAM+HIRESW_NPSR2013.ppt"><strong>North American Mesoscale (NAM) and HiResWindow Systems </strong> </a></li>
                					<li><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/MMB_SREF_NPSR2013.ppt"><strong>Short-range Ensemble Forecast (SREF) System </strong> </a></li>
                					<li><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/MMB_RAP+HRRR_NPSR2013.ppt"><strong>Rapid Refresh (RAP) / High Resolution Rapid Refresh (HRRR) </strong> </a></li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/MMB.ProdSuiteRev.Dec2012.pptx"><strong>5 December 2012 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Mesoscale Modeling Branch Presentation from 2012 NCEP Production Suite Review</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/SREF_2012ImplementationReview2Louis.pdf"><strong>21 August 2012 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP Short-Range Ensemble Forecast System (SREF):
                				<ol type="1">
                					<li>Model changes:
                					<ol type="a">
                						<li>Eliminate Eta and RSM members, add more WRF-NMM/ARW members, and add NEMS-NMMB members (still 21 members total)</li>
                						<li>Upgrade WRF cores from v2.2 to v3.3</li>
                						<li>Increase horizontal Resolution from 32km/35km to 16km</li>
                						<li>All models run with 35 levels in the vertical and 50 mb model top pressure</li>
                					</ol>
                					</li>
                					<li>Changes to initial condition diversity
                					<ol type="a">
                						<li>More control initial conditions (NDAS for NMMB members, GDAS for-&gt; WRF-NMM, RAP blended @ edges w/GFS for WRF-ARW)</li>
                						<li>More IC perturbation diversity (blend of regional breeding and downscaled ETR)</li>
                						<li>Diversity in land surface initial states (NDAS, GFS, and RAP).</li>
                					</ol>
                					</li>
                					<li>More diversity of physics schemes (flavors from NAM, GFS, NCAR, and RAP)</li>
                					<li>New capabilities of post-processing and product generation:
                					<ol type="a">
                						<li>Precipitation bias correction (individual members and ensemble mean)</li>
                						<li>Clustering and associated mean/prob/spread within a cluster</li>
                						<li>Member performance ranking (different weights for different members)</li>
                						<li>Downscaling to 5km using RTMA and associated ensemble products</li>
                					</ol>
                					</li>
                					<li>New ensemble products :
                					<ol type="a">
                						<li>Max/min, mode, 10-25-50-75-90% forecasts</li>
                						<li>Probability of severe thunderstorms, lightning, dry lightning, fire weather (SPC) as well as LLWS, composite reflectivity, echo top, ceiling and visibility</li>
                						<li>Addition of hourly ensemble product output from 1-39 hr.</li>
                						<li>Ensemble mean station data in BUFR format</li>
                						<li>A new 16km output grid covering North America (g132)</li>
                					</ol>
                					</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/RAPbrief.NCEP-Dir-20Mar2012.pdf"><strong>1 May 2012 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Rapid Update Cycle (RUC) upgraded to Rapid Refresh (RAP):
                				<ol type="1">
                					<li>Increase in domain coverage compared to the RUC, including Alaska and the Caribbean basin and almost all of North America.</li>
                					<li>Use of the WRF modeling framework, with the Advanced Research WRF (ARW) forecast model with RUC physics.</li>
                					<li>Major upgrades to the prediction model (updated versions of the cloud microphysics, Grell convection, and RUC land-surface schemes)</li>
                					<li>Modifications to the data analysis and assimilation system:
                					<ol>
                						<li>Begin use of Grid-point Statistical Interpolation (GSI) analysis</li>
                						<li>Assimilate satellite radiances (including AMSU-A and AMSU-B)</li>
                						<li>Use aircraft moisture observations from UPS and Southwest Airlines</li>
                						<li>Use 915-MHz profiler wind observations</li>
                						<li>GOES cloud pressure/temperature from NASA Langley over full RAP domain added to NESDIS cloud data already assimilated in RUC</li>
                					</ol>
                					</li>
                					<li>Match most existing RUC products and add new ones to cover the expanded domain.</li>
                					<li>Introducing the experimental North American Rapid Refresh Ensemble using Time Lagged (NARRE-TL) forecast.</li>
                					<li>Modifying some product output and changing the names of all directories and output filenames from *ruc* or *ruc2a* to *rap*.</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/MMB.ProdSuiteRev.Dec2011.ppt"><strong>7 December 2011 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Mesoscale Modeling Branch Presentation from 2011 NCEP Production Suite Review</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/NAM_NMMB_Implementation.pdf"><strong>18 October 2011 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NAM/DGEX:
                				<ol type="1">
                					<li>Non-hydrostatic Multiscale Model on B-grid in NEMS format (NEMS-NMMB) replaces the WRF-NMM as the forecast model in the NDAS/NAM/DGEX</li>
                					<li>Addition of nested domains that run inside the 12 km NAM domain from 0-60 h:
                					<ol type="a">
                						<li>4 km CONUS</li>
                						<li>6 km Alaska</li>
                						<li>3 km Hawaii</li>
                						<li>3 km Puerto Rico</li>
                						<li>From 0-36 h, run a placeable 1.333 km nest inside the CONUS nest or a 1.5 km nest inside the Alaska nest for support of fire weather meteorologist and the NCEP Centers</li>
                						<li>All nests run with new convection option ("BMJ_DEV") with reduced convective triggering</li>
                					</ol>
                					</li>
                					<li>Specific dynamics changes in the NMMB:
                					<ol type="a">
                						<li>Janjic's Eulerian passive tracer advection of scalars</li>
                						<li>New generalized hybrid vertical coordinate</li>
                						<li>Boundary condition treatment changed to specify 5 boundary rows instead of one row</li>
                						<li>Modified vertical level distribution with more layers in the stratosphere (twice as many levels above 200 mb)</li>
                						<li>Diffusion of specific humidity/cloud water increased by 4x</li>
                					</ol>
                					</li>
                					<li>Physics changes
                					<ol type="a">
                						<li>Microphysics changes to increase radar reflectivities, rain rates and produces higher rain amounts:
                						<ol type="a">
                							<li>Use expanded rain look up tables, increasing the maximum size of raindrops from 0.45 to 1.0 mm.</li>
                							<li>Parameterizes sedimentation of 50-micron ice crystals.</li>
                							<li>New cloud water to rain autoconversion (PRAUT) scheme following work of Liu &amp; Daum et al. This new scheme no longer requires an autoconversion threshold, and the functional dependence of cloud water mixing ratio is quite different from the original Kessler-based formulation.</li>
                							<li>NCW increased from 100 to 200 cm^-3.</li>
                							<li>T_ice_init=0 results in faster initiation of ice. In 1D column runs it produced higher maximum surface rainfall rates.</li>
                							<li>FLARGE2=0.07 based on tests by JMA visiting scientist Nakagawa in his global runs. The parameter determines the number fraction of large precipitation ice particles.</li>
                							<li>VEL_INC~VRIMEF**2 – even faster rimed ice fall speeds than in the HAIL microphysics.</li>
                							<li>Changes to improve cloud fraction (reduce coverage associated with cold, high clouds)</li>
                						</ol>
                						</li>
                						<li>Change from USGS to MODIS_IGBP land-use definitions</li>
                					</ol>
                					</li>
                					<li>Analysis/assimilation changes
                					<ol type="a">
                						<li>Upgrade to latest version (March 2011) of Grid-point Statistical Interpolation (GSI) analysis code</li>
                						<li>Add GSI analysis job for all 5 NAM nests</li>
                						<li>Begin use of dynamic reject list (from RTMA) for mesonet data</li>
                						<li>New observation types:
                						<ol type="a">
                							<li>ACARS humidity</li>
                							<li>WDSATR : superob'ed Scatterometer winds over oceans</li>
                							<li>HIRS and AMSU-A radiances from NOAA-19,</li>
                							<li>IASI radiances from METOP</li>
                							<li>AMSU-A radiances from AQUA</li>
                							<li>RASS virtual temperatures</li>
                							<li>MAP winds</li>
                							<li>ASCAT winds</li>
                							<li>Improved assimilation of GPS radio occultation (COSMIC) data</li>
                						</ol>
                						</li>
                						<li>Analysis will now update the first guess 2-m temperature/specific humidity and 10-m wind (12 km NAM domain only)</li>
                					</ol>
                					</li>
                					<li>Switch SST analysis from MMAB 1/2 degree RTG_SST to 1/12th degree RTG_SST_HR</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/HiResW-upgrade.impl_decision_17Mar2011.pdf"><strong>29 March 2011 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP HiResWindow Modeling System:
                				<ol type="1">
                					<li>The HIRESW model will be updated from Weather Research and Forecasting (WRF) version 2.2 code to WRF version 3.2 code for both the Advanced Research WRF (ARW) and the Nonhydrostatic Mesoscale Model (NMM) members of the system. Both the ARW and NMM models will use better conserving moisture advection..</li>
                					<li>The Puerto Rico domain will be expanded by approximately 50% to provide full coverage to Hispaniola. A new domain will be added to run over Guam twice daily at 00 and 12 UTC. The model grid spacing will remain unchanged at 5.15 km for ARW and 4.0 km for NMM for all domains. With the addition of Guam, the revised run schedule will be:
                                                           <ul>
                					     <li>00 UTC: East, Hawaii, Guam</li>
                					     <li>06 UTC: West, Puerto Rico</li>
                					     <li>12 UTC: East, Hawaii, Guam</li>
                					     <li>18 UTC: Alaska, Puerto Rico</li>
                					  </ul>
                					<li>BUFR-formatted point forecasts for select locations are now available</li>
                					<li>New high-resolution, hybrid ensemble output will be created that combines uncertainty information from the Short Range Ensemble Forecast (SREF) with deterministic forecasts from the HIRES. Output products from this HIRES ensemble will include mean, spread, and probabilistic guidance.</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/briefing_RTMA_guam_conus2.5km_hawaii_20Sept2010.pdf"><strong>28-29 September 2010 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP Real-Time Mesoscale Analysis (RTMA) System:
                				<ol type="1">
                					<li>Add 2.5 km RTMA for Guam; use downscaled GFS for first guess</li>
                					<li>Begin running 2.5 km CONUS RTMA, new features:
                					<ol type="a">
                						<li>Extended assimilation time window (+/-30 min; 5 km RTMA uses +/-12 min)</li>
                						<li>Use First Guess at the Appropriate Time (FGAT)</li>
                						<li>Apply sequential bias-correction algorithm for background temperature</li>
                						<li>Improved quality control</li>
                						<li>Add ocean surface WindSat and ASCAT winds and low-level satellite drift winds</li>
                					</ol>
                					</li>
                					<li>Slight realignment of the Hawaii 2.5 km RTMA grid</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong>6 July 2010 </strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the preemption schedule for the operational HIRESW forecasts when the NCEP Hurricane model is running:
                				<ol type="1">
                					<li>Two or less hurricane runs : All HIRESW forecasts made</li>
                					<li>Three hurricane runs : Large domain (East CONUS, West CONUS, Alaska) NMM and ARW runs cancelled</li>
                					<li>Four hurricane runs : All HIRESW forecasts cancelled</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.weather.gov/media/notification/tins/tin10-07aaa_ruc_changes.pdf"><strong>2 March 2010 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP Rapid Update Cycle Forecast:
                				<ol type="1">
                					<li>Forecast extended to 18 hours for all cycles</li>
                				</ol>
                				</li>
                				<li>Changes to the NCEP Rapid Update Cycle Analysis/Preprocessing:
                				<ol type="1">
                					<li>Assimilation will use Canadian aircraft (AMDAR) data</li>
                					<li>Fixed bug in cloud-building code that will impact virtual potential temperature in cloudy areas</li>
                					<li>Aircraft reject list updated</li>
                					<li>The removal of snow at grid points where the NESDIS snow analysis does not support its presence is changed from once pre day at 19Z to twice per day at 17Z and 23Z. A land-sea mask will also be incorporated into this algorthim due to the difference in resolution between the NESDIS analysis and the RUC.</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong>3 November 2009 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Minor changes to the NAM/DGEX:
                				<ol type="1">
                					<li>Fixed a bug in the horizontal advection of W and height in the non-hydrostatic module; missing factor of 2 added.</li>
                					<li>Removed the addition of rain water mixing ratio to the input cloud water mixing ratio array used by the GFDL radiation code. This change should make the clouds less opaque to SW and LW radiation at grid points where rain is falling in the column.</li>
                					<li>Bug fix in turbulence routine to declare and define CAPA (R/Cp).</li>
                					<li>The surface (skin) temperature is constrained to be no greater than 350K. This fix will eliminate spurious values at the NAM lateral boundary. These spurious values were not used in the NAM integration, but they did cause the SREF failures in early April, late May, and late October 2009</li>
                					<li>The assumed fraction of large, precipitating ice particles to the total number concentration of ice particles is reduced from 0.2 to 0.03, which acts to increase the number of small, nonprecipitating ice particles. This change improves NAM simulated GOES brightness temperatures.</li>
                					<li>Enforce a minimum number concentration for large ice particles (1 per liter) at all temperatures, rather than not enforcing it at &gt;0C in the operational code where a fixed mean diameter is assumed.</li>
                					<li>When initiating ice in water saturated conditions, growth rates are calculated by combining the number concentrations of ice initiation from eq. (2.4) of Meyers et al. (JAM, 1992) with estimated mass growth rates of ice crystals using the calculations of Miller and Young (JAS, 1979). The Miller-Young calculations were in cgs units (g per unit time), so the values in the model need to be multiplied by 1e.-3 to convert to mks units (kg per unit time) in subroutine MY_GROWTH_RATES.</li>
                					<li>Added radar echo top height to some NAM output grids</li>
                					<li>Fixed a bug in the computation of dew point temperature in the post-processing routine that determines categorical precipitation type.</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/SREFupgrade4NWP2009.pdf"><strong>27 October 2009 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP Short-Range Ensemble Forecast (SREF) System:
                				<ol type="1">
                					<li>Three of the four models used in the SREF (NMM, ARW, and RSM) are upgraded; NMM and ARW from WRF V2.0 to WRF V2.2, RSM from v2003 to v2008.</li>
                					<li>The horizontal resolution of the WRF members is increased 40 km to 32 km, and the RSM members from 45 km to 35 km</li>
                					<li>The number of WRF-NMM and WRF-ARW members are increased from 3 to 5; the number of Eta members is reduced from 10 to 6, and members n3, n4, and p3 and p4 removed.</li>
                					<li>Introduce more physics diversity by switching from Zhao cloud scheme to Ferrier cloud scheme in three out of five RSM members.</li>
                					<li>GRIB forecast output frequency will increase from 3-hourly to hourly for the first 39 hours (CONUS grid only).</li>
                					<li>Four new aviation products are added:
                					<ol type="a">
                						<li>Icing (probability products only)</li>
                						<li>Clear air turbulence (probability products only)</li>
                						<li>Ceiling (mean and probability products)</li>
                						<li>Flight restriction (probability products only)</li>
                					</ol>
                					</li>
                					<li>Three new products will be added to the individual member output for some members:
                					<ol type="a">
                						<li>Richardson number-based PBL height (Richardson number = 0.25)</li>
                						<li>Simulated composite radar reflectivity</li>
                						<li>Radar echo top height (= 18.3dbz)</li>
                					</ol>
                					</li>
                					<li>BUFR sounding output from each SREF member will be broken out into individual station time series.</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://ruc.noaa.gov/forum/f2/Welcome.cgi/read/2052"><strong>31 March 2009 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP Rapid Update Cycle (RUC):
                				<ol type="1">
                					<li>Introducing the NESDIS snow analysis to eliminate snow cover at model points where the analysis indicates no snow is present. The new code will introduce the NESDIS analysis once per day at 1900 UTC and will eliminate snow cover at any point where 1) the analysis shows no snow, 2) the model surface temperature is above 274 K, and 3) no precipitation has fallen during the previous one hour forecast.</li>
                					<li>Changing the call to the analysis of cloud data so it occurs near the end of the analysis process. This will prevent non- cloud observations from causing subsaturation at grid points where clouds exists. A final check is made to make certain that any grid point with analyzed cloud is saturated.</li>
                					<li>Modifications to the code to allow GOES satellite cloud data to supersede any METAR report of clear skies.</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.nws.noaa.gov/mdl/synop/tin/txt/tin08-90ngm_termination.txt"><strong>3 March 2009 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>The NCEP operational Nested Grid Model (NGM) was turned off as of this cycle.</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong>26 January 2009 </strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>Change to the land-surface physics in the WRF-NMM model running in the NDAS/NAM:
                				<ol>
                					<li>At the start of the first (tm12) forecast of each NDAS run, the WRF-NMM forecast model, instead of cycling the frozen soil moisture from the previous NDAS run, was recomputing it using the explicit Flechinger equation. This led to inconsistencies between the frozen soil moisture and both the total (liquid+frozen) soil moisture and the soil temperatures, leading to warm 2-m temperature biases in cold regions. As of this date the error has been fixed.
                					<p>Note : This code error, in the forecast code since the unified Noah land-surface physics was implemented on 31 March 2008, was never invoked in the operational NDAS until it began to be initialized from the GDAS first guess on 16 December 2008.</p>
                					</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/NAM_December2008-1.pdf"><strong>16 December 2008 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NAM forecast system:
                				<ol type="1">
                					<li>The background for the first (tm12) analysis in each NDAS run is now from the GDAS instead of the previous NDAS run (so-called "partial cycling"). Land states are still fully cycled from the previous NDAS cycle.</li>
                					<li>WRF-NMM Model changes (also implemented into the DGEX):
                					<ol type="a">
                						<li>The PBL/turbulence schemes were modified to mix each hydrometeor species in the vertical.</li>
                						<li>To apply vertical diffusion for separate water species, the model was changed so that (a) it can apply vertical diffusion to an arbitrary number of species, (b) the counter gradient option can be applied to some or all of the species if desired, and (c) option to set to zero some or all of the surface fluxes is also made available.</li>
                						<li>In the radiation parameterization, the absorption coefficients for water and ice have been doubled to 1600 and 1000, respectively</li>
                						<li>Changes to land-sfc physics:
                						<ol type="a">
                							<li>Let the potential evaporation decrease linearly with Bulk Richardson number under stable condition, and weighted by snow coverage.</li>
                							<li>Let the slope of saturated humidity function wrt temperature decrease linearly with snow coverage.</li>
                						</ol>
                						</li>
                					</ol>
                					</li>
                					<li>Changes to GSI analysis
                					<ol type="a">
                						<li>Use latest (1Q 2008) version of the GSI analysis code</li>
                						<li>Assimilate METOP radiance data</li>
                						<li>Assimilate TAMDAR/AMDAR aircraft data</li>
                						<li>New version of Community Radiative Transfer Model</li>
                					</ol>
                					</li>
                					<li>Use AFWA 1/16 bedient snow depth analysis</li>
                					<li>Use WPS (instead of WRF-SI) codes to process GDAS first guess input files, which are used as a first guess to the first (tm12) GSI analysis in the NDAS</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/DiMego_ProdSuiteRev.Dec08.ppt"><strong>9 December 2008 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Mesoscale Modeling Branch Presentation from 2008 NCEP Production Suite Review</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong>17 November 2008 </strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP Rapid Update Cycle (RUC):
                				<ol type="1">
                					<li>Changes to the RUC analysis:
                					<ol type="a">
                						<li>Include processing of three-dimensional radar reflectivity mosaic data to produces a latent heat specification to be used in the model digital filter</li>
                						<li>It is also being modified to include an assimilation of TAMDAR and MESONET wind data</li>
                						<li>Revision to observation and background error for moisture data</li>
                						<li>Improved quality control based on mean observation-background differences for a given platform within the analysis window</li>
                					</ol>
                					</li>
                					<li>Changes to the RUC forecast model:
                					<ol type="a">
                						<li>Change the longwave radiative scheme from Dudhia to Rapid Radiative Transfer Model (RRTM)</li>
                						<li>Modify the snow component of the land-surface model to avoid excessively cold temperatures over fresh snow at night as well as during warm advection events over snow cover</li>
                						<li>Modify the convective scheme to reduce the excessive generation of light precipitation areas.</li>
                						<li>Specify three-dimensional latent heating in the diabatic digital filter initialization.</li>
                					</ol>
                					</li>
                					<li>Changes to the RUC post-processing:
                					<ol type="a">
                						<li>Add simulated reflectivity products</li>
                						<li>Add relative humidity computed with respect to precipitable water in a saturated column to the pressure level output files</li>
                						<li>Add four new land-surface fields (soil type, vegetation type, land/water mask, and ice cover) to the native level output files.</li>
                						<li>Modify post-processing code to correct the GRIB PDS (product description section) time descriptors for very short-range precipitation forecasts.</li>
                					</ol>
                					</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong>7 October 2008 </strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>Operational implementation of the Real-time Mesoscale Analysis (RTMA) over Hawaii and Puerto Rico.</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong>13 May 2008 </strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP Air Quality Model:
                				<ol type="1">
                					<li>Point, area and mobile emissions will be upgraded based upon recent EPA National Emissions Inventory (NEI, 2005) and then projected for the current year. EGU sources will use 2006 CEM data projected for 2008.</li>
                					<li>For mobile sources, the EPA Office of Transportation and Air Quality (OTAQ) estimates will be used in addition to 2005 NEI v1 emission data sets. Use of OTAQ on-road emission estimates is</li>
                					<li>Use of OTAQ on-road emission estimates is a departure from the temperature dependent regression approach used in previous years.</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong>22 April 2008 </strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>Begin assimilation of AIRS radiance data in NDAS/NAM GSI analysis. This was not implemented on 31 March 2008 as intended due to a script error.</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong>15 April 2008 </strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>Operational implementation of the Real-time Mesoscale Analysis (RTMA) over Alaska.</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/nam_upgrades.2008.pdf"><strong>31 March 2008 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the WRF-NMM forecast model running in the North American Mesoscale (NAM) Analysis and Forecast System and the DGEX:
                				<ol type="1">
                					<li>The computational domain of the NAM was increased by ~18%.</li>
                					<li>WRF-NMM Model changes:
                					<ol type="a">
                						<li>Run with WRF-NMM V2.2 code (August 2007 Repository version) with IJK array indexing</li>
                						<li>Use gravity wave drag/mountain blocking. Run with SIGFAC=0: gravity wave drag responds only to ELEVMAX, the maximum elevation within the grid box only. No further inflation is done based on the standard deviation of the 30" heights in the grid box.</li>
                						<li>Use new Unified (with NCAR) Land-Surface Physics module. This module now uses total soil moisture rather than liquid soil moisture (as in the previous NCEP/noah-lsm) to determine bare-soil evaporation, which results in greater moisture fluxes (and thus higher near-surface dew point temperatures) over regions of frozen, bare soil with patchy or no snow cover.</li>
                						<li>Use of new passive advection with the requirement for exact conservation of specific humidity, TKE, and cloud water relaxed in the advection step. The exact conservation is still required in the antifiltering step following the advection step.</li>
                						<li>Stratospheric ozone fix in the computation of latitude: the error led to using climatological ozone values valid at the equator at all latitudes.</li>
                						<li>Remove two modifications to longwave radiation made for the June 2006 WRF-in-NAM implementation
                						<ol type="i">
                							<li>Remove averaging of longwave temperature tendencies from the lowest two model layer</li>
                							<li>Compute the upward LW at the surface was based on the ground (skin) temperature instead of the average of the skin and lowest model layer temperatures.</li>
                						</ol>
                						</li>
                					</ol>
                					</li>
                					<li>GSI analysis changes:
                					<ol type="a">
                						<li>New (August 2007) version of GSI code</li>
                						<li>Retuned background errors (gives improved obs fit to first guess)</li>
                						<li>Use AIRS radiance data</li>
                						<li>Use GOES 1X1 radiance data</li>
                						<li>New SATWND data (eumetsat and modis)</li>
                						<li>MESONET uv (winds with uselist)</li>
                					</ol>
                					</li>
                					<li>Use new terrain with "3x3" (smoothed-desmoothed) smoothing, a smaller (more realistic) Great Salt Lake, better depiction of the Channel Islands off the California coast, and spurious waterfalls removed; use climatological water temperatures for Lake Champlain.</li>
                					<li>Use 12-36 h forecast precipitation from the 00z ops NAM run to fill in for the CONUS-based Stage II/IV analysis as a driver for NDAS soil moisture outside of the CONUS (OCONUS)</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/SREF-FALL2007.pdf"><strong>12 December 2007 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to Short-range Ensemble Forecast System:
                				<ol type="1">
                					<li>Introduce bias correction scheme for basic meteorological fields (except QPF)</li>
                					<li>Expand RSM domain to fully cover Alaska</li>
                					<li>Add aviation-related ensemble products (icing, CAT, flight restriction, ceiling height)</li>
                					<li>Add BUFR sounding output to the 6 WRF members</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/EMC-MMB-ProdSuiteRev.Dec07.pdf"><strong>11 December 2007 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Mesoscale Modeling Branch Presentation from 2007 NCEP Production Suite Review</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/CMAQ_Sept2007_upgrade.pdf"><strong>17 September 2007 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP Air Quality Model:
                				<ol type="1">
                					<li>Expanded domain (5X) to cover Continental U.S.</li>
                					<li>Common WRF-NMM hybrid sigma-P vertical coordinate</li>
                					<li>NAM clear sky radiation prediction used to scale CMAQ photolysis</li>
                					<li>Asymmetric Convective Model used to drive CMAQ moist convection mixing</li>
                					<li>Asymmetric Convective Model-2 used to drive CMAQ PBL mixing</li>
                					<li>Constant, static Ozone Lateral Boundary conditions for all CMAQ levels (turned off use of GFS ozone at CMAQ Lateral boundary top)</li>
                					<li>Updates to CMAQ V4.6 with bug corrections to deposition, optimized advection scheme and plume rise</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/mesoimpl/hiresw2007/HiResWindow_2007.html"><strong>11 September 2007 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the NCEP HiResWindow Modeling System:
                				<ol type="1">
                					<li>WRF-NMM
                					<ol type="a">
                						<li>Upgrade from WRF version 1.3 to WRF version 2.2</li>
                						<li>Increase resolution from 5.2 km to 4.0 km</li>
                					</ol>
                					</li>
                					<li>WRF-ARW
                					<ol type="a">
                						<li>Upgrade from WRF version 1.3 to WRF version 2.2</li>
                						<li>Increase resolution from 5.8 km to 5.1 km</li>
                					</ol>
                					</li>
                					<li>Expanded large domains:
                					<ol type="a">
                						<li>Western and Eastern U.S. domains roughly doubled in size</li>
                						<li>3 CONUS nests reduced to 2 overlapping domains (West-Central &amp; East-Central)</li>
                						<li>New HIRESW schedule (see below) to run the new East/Central domain at 00z and 12z for NCEP's Storm Prediction Center</li>
                					</ol>
                					</li>
                					<li>New HIRESW run schedule:
                					<ol type="a">
                						<li>0000Z : East/Central U.S., Hawaii</li>
                						<li>0600Z : West/Central U.S., Puerto Rico</li>
                						<li>1200Z : East/Central U.S., Hawaii</li>
                						<li>1800Z : Alaska, Puerto Rico</li>
                					</ol>
                					</li>
                					<li>The operational HIRESW forecasts are subject to cancellation by NCEP Central Operations (NCO) if the NCEP Hurricane model is running. This is the production HIRESW configuration when the NCEP hurricane model is running
                					<ol type="a">
                						<li>No hurricane runs : Both large and small NMM and ARW domains are run by NCO</li>
                						<li>One hurricane run : Large domain ARW run cancelled by NCO</li>
                						<li>Two or three hurricane runs : Both large domain NMM and ARW runs cancelled by NCO</li>
                						<li>Four hurricane runs : All WRF HIRESW cancelled by NCO</li>
                					</ol>
                					</li>
                					<li>Due to computing resource constraints EMC will no longer run the cancelled HIRESW WRF-NMM forecast on the development computer at this time.</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/RTMA-CONUS_26Jun07_Upgrade.pdf"><strong>26 June 2007 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the Real-time Mesoscale Analysis (RTMA):
                				<ol type="1">
                					<li>Tuned observation and background error covariances for improved fit to observations</li>
                					<li>Reduced spatial scales of anisotropic filter to allow the for better resolution of mesoscale features</li>
                					<li>Elevation gradient near coastlines made artifically large to obbain sharper background error covariances, which reduced influence of coastal land stations on the analysis of temperatures over water.</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong>19 June 2007 </strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the WRF-NMM model running in the NAM and DGEX:
                				<ol type="1">
                					<li>Under stable conditions, modify roughness length for heat so that it is only a function of surface-layer bulk Richardson number, removing the dependence on surface elevation.</li>
                					<li>The minimum canopy resistance was increased for evergreen needleleaf forest (doubled from 125.0 to 250.0, units of s/m) and for mixed forest (from 125.0 to 150.0).</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/nam_upgrades.nov2006.pdf"><strong>19 December 2006 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the WRF-NMM forecast model running in the North American Mesoscale (NAM) Analysis and Forecast System and the DGEX:
                				<ol type="I">
                					<li>The divergence damping routine, which damps all gravity-inertia and external modes, is changed to increase damping of the external mode.</li>
                					<li>During the NDAS, divergence damping is increased to 5x that used during the 84 hr NAM free forecast.</li>
                					<li>Numerous changes are made to convective parameterization:
                					<ol type="1">
                						<li>Triggering of deep and shallow convection is considered only for grid points with positive cape throughout a parcel's ascent; the search for parcel instability is extended to include not only whether the most unstable (highest theta-e) parcel can support convection, but also whether parcels originating at higher levels become positively buoyant when lifted to their LCL. Convective adjustments are made with respect to the parcel associated with the greatest instability (largest CAPE)</li>
                						<li>The search for the most unstable parcel is extended from the lowest twenty percent of the atmosphere to the lowest 40 percent of the atmosphere.</li>
                						<li>Water loading effects are now included in assessing the buoyant instability of parcels from which a revised (lower) cloud top is determined to be at the highest level of positive buoyancy.</li>
                						<li>The latent heat of vaporization used to calculate equivalent potential temperatures during model integration is made to be consistent with the value used in generating the initial lookup tables.</li>
                						<li>When a grid point fails the entropy check for deep convection but still has positive CAPE, changes in temperature and moisture by shallow convection are then considered at these so-called "swap" points. The first-guess estimate for the top of shallow convection is based on the highest level where the parcel remains positively buoyant (this is more restrictive than positive CAPE), and the vertical extent of shallow convection is not to exceed 0.2 times the atmospheric pressure depth (e.g., 200 hPa for a surface pressure of 1000 hPa). A final adjustment is made to the top of shallow convection in which it can extend to higher altitudes if the mean ambient relative humidity (RH) in the cloud layer exceeds a threshold RH while remaining positively buoyant (i.e. CAPE greater than 0). The threshold RH is based on the RH at cloud base that is consistent with a deficit saturation pressure of 25 mb (usually near 90%). The maximum cloud top height for shallow convection is still limited to 450 hPa.</li>
                						<li>The first-guess reference temperatures in the upper-half of shallow convective clouds are limited to be no more than 1 deg C colder than the ambient temperature.</li>
                					</ol>
                					</li>
                					<li>Three changes are made to the cloud microphysics:
                					<ol type="1">
                						<li>During melting precipitation ice particles are assumed to have the same mean diameter (1 mm) as at the freezing level.</li>
                						<li>Two changes intended to increase the presence of supercooled liquid water and improve forecast products for use in aircraft icing algorithms:
                						<ol type="a">
                							<li>The temperature at which small amounts of supercooled liquid water, if present, are assumed to be glaciated to ice was lowered from -30C to -40C.</li>
                							<li>The temperature at which ice nucleation is allowed to occur was lowered from -5C to -15C based on aircraft icing observations</li>
                						</ol>
                						</li>
                					</ol>
                					</li>
                					<li>Allow horizontal diffusion between neighboring grid points with a slope of less than or equal to 54 m / 12 km (9x that in previous operational NAM).</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/EMC-MMB-ProdSuiteRev.Dec06.pdf"><strong>12 December 2006 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Mesoscale Modeling Branch Presentation from 2006 NCEP Production Suite Review</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong>5 September 2006 </strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the North American Mesoscale (NAM) Analysis and Forecast System:
                				<ol type="1">
                					<li>Increased Smagorinsky constant for lateral diffusion from 0.27 to its maximum value of 0.4; this was inadvertently left out of the 8/15 changes for the NAM, it was implemented in the DGEX on 8/15</li>
                					<li>Revert back to using the 1/2 degree RTG_SST analysis used in the NAM-Eta due to problems with a persistent cold bias in the hi-res (1/12th degree) RTG_SST analysis in and north of the Bering Strait and in Hudson's Bay.</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong>15 August 2006 </strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the North American Mesoscale (NAM) Analysis and Forecast System and the DGEX:
                				<ol type="1">
                					<li>Remove any restrictions to horizontal diffusion between water points at different elevations (e.g., between erroneously sloping water points and water points at sea-level)</li>
                					<li>Redefine roughness length z0=z0base (veg component) + z0land, removing terrain height component</li>
                					<li>Code changes to allow horizontal diffusion at grid points along coastal/ice boundaries where the slope between neighboring grid points is &gt; 6 m</li>
                					<li>Increases Smagorinsky constant for lateral diffusion from 0.27 to its maximum value of 0.4</li>
                					<li>Enhanced vertical diffusion</li>
                					<li>Turned on assimilation of surface temperature data over land in the GSI analysis</li>
                					<li>Modified the SST preprocessing job to use new climatological values for Great Salt Lake water temperatures from the University of Utah; a cosine fit to the bimonthly observational data from Saltair Boat harbor (from 1972-1989). From Steenburgh et al., 2000: Climatology of Lake-Effect Snowstorms of the Great Salt Lake. Monthly Weather Review, 128, 709-727.</li>
                					<li>Modified the SST preprocessing job to use monthly climatological values of water temperature for the Salton Sea in southern California</li>
                					<li>Modified the SST preprocessing job to use monthly climatological values of water temperature (obtained from the Army Corps of Engineers) for Fort Peck Reservoir in Montana</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/RTMA.Implementation_Brief.June2006.pdf"><strong>6 August 2006 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Operational implementation of the Real-time Mesoscale Analysis (RTMA) over the CONUS.</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td style="text-align: center;"><a href="https://ruc.noaa.gov/ruc/ruc13_docs/RUC13ppt.htm">11 July 2006</a></td>
                			<td>
                			<ul>
                				<li>Numerous RUC model/analysis/output changes (click on link for details)</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong>27 June 2006 </strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the Short-range Ensemble Forecast (SREF) system:
                				<ol type="1">
                					<li>Added 03Z and 15Z runs</li>
                					<li>Expanded integration domain to cover Alaska</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/Update_WRF-NMM_replacing_Eta_in_NAM2.pdf"><strong>20 June 2006</strong></a></center>
                
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the North American Mesoscale (NAM) Analysis and Forecast System:
                				<ol>
                					<li>Eta step-mountain coordinate model replaced with the WRF version of the Non-hydrostatic Mesoscale (WRF-NMM) model in the NDAS, NAM, and DGEX; WRF-NMM model characteristics:
                					<ol type="a">
                						<li>Uses WRF common modeling infrastructure</li>
                						<li>Non-hydrostatic dynamics</li>
                						<li>Uses hybrid sigma-pressure vertical coordinate with model top pressure of 2 mb for NAM (DGEX has 30 mb model top)</li>
                						<li>Refined advection, diffusion, numerics, and physics</li>
                					</ol>
                					</li>
                					<li>Eta 3D-Variational analysis replaced with the Gridpoint Statistical Interpolation (GSI) analysis:
                					<ol type="a">
                						<li>Unified 3D-Variational analysis adapted to WRF infrastructure</li>
                						<li>Uses background errors based on WRF-NMM forecasts</li>
                						<li>Uses new variable (normalized RH) for moisture analysis</li>
                						<li>Uses tendency in constraint term</li>
                						<li>Uses dynamically retuned observation error covariances</li>
                					</ol>
                					</li>
                					<li>Changes to model initialization:
                					<ol type="a">
                						<li>Use of new unified package to bring external fields (SST, snow, sea ice) into WRF-NMM forecast</li>
                						<li>Begin use of high resolution (1/12th degree lat/lon) RTG_SST analysis</li>
                						<li>Begin use of high resolution (NESDIS 4km, 1/96th bedient) snow/sea ice analysis</li>
                					</ol>
                					</li>
                					<li>Data assimilation changes:
                					<ol type="a">
                						<li>Turn off nudging of temperature, moisture and cloud during assimiltion of observed precipitation, but continue use of bias-corrected observed precipitation analysis to drive the WRF-NMM land-surface physics</li>
                						<li>Begin use of new observation types: WSR-88D Level II radial wind data, GPS-Integrated Precipitable Water (IPW) data, and NOAA-18 radiances.</li>
                						<li>Drop use of GOES and SSM/I Precipitable Water retrievals</li>
                					</ol>
                					</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/MMB.ProdSuiteRev.Dec05.pdf"><strong>6 December 2005 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Mesoscale Modeling Branch Presentation from 2005 NCEP Production Suite Review</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/SREF-Nov2005b/SREF-Nov2005b.html"><strong>6 December 2005 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to Short-range Ensemble Forecast System:
                				<ol type="1">
                					<li>Added 6 new members:
                					<ol type="a">
                						<li>Three with 40km/50lev WRF-NMM w/EMC physics (control, n5, p5 perturbations)</li>
                						<li>Three with 45km/35lev WRF-ARW w/NCAR physics (control, n1, p1 perturbations)</li>
                					</ol>
                					</li>
                					<li>Begin use of common ensemble product generator</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/mmb/aq/AQChangelogE.html"><strong>31 August 2005 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to NCEP Air Quality Model run;
                				<ol>
                					<li>Northeast US operational forecasts replaced with Eastern U.S. (3X) runs.</li>
                					<li>The 3X operational forecasts were the same as the NE U.S. runs except for:
                					<ol type="1">
                						<li>Larger CMAQ domain: 268x259x22</li>
                						<li>Lateral Boundaries are static except at CMAQ top layer where GFS ozone is specified</li>
                						<li>Above-cloud downward convective mixing turned off</li>
                					</ol>
                					</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong>30 August 2005 </strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to Short-range Ensemble Forecast (SREF) System;
                				<ol>
                					<li>Upgrade 10 Eta members so they are initialized using land states from 12 km NDAS</li>
                					<li>Lateral boundary conditions from GFS 3-h old forecast (previously 9-hour)</li>
                					<li>Forecast length increased from 63 to 87 h</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/mesoimpl/June2005.HRWUpgrade/June2005.HRWupgrade.html"><strong>28 June 2005 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Resolution of WRF-NMM in HIRESW system changed from 8km/60levels to 5.1km/35 levels</li>
                				<li>Resolution of WRF-EM (ARW) in HIRESW system changed from 10km/50levels to 5.8km/35 levels</li>
                				<li>Convective parameterization turned off in both HIRESW NMM and ARW</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center>&nbsp;</center>
                
                			<center><a href="https://ruc.noaa.gov/ruc/ruc13_docs/RUC13-preimp-24Jun05.ppt"><strong>28 June 2005</strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Resolution of RUC increased from 20 km to 13 km</li>
                				<li>Numerous model/analysis/output changes</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/CMAQ-EMCbranch051905.pdf"><strong>3 May 2005 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to NE US Air Quality Model run:
                				<ol>
                					<li>PREMAQ updated to use NAM-12 1 km land-use data</li>
                					<li>Minor CMAQ updates to version 4.4</li>
                					<li>2002 Point/Area Source Emissions projected for 2005</li>
                					<li>Updated Mobile 6 source emissions</li>
                					<li>GFS ozone for CMAQ LBCs above 6 km</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/Spring2005.NAMUpgrade.pdf"><strong>3 May 2005 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to NAM/DGEX:
                				<ol>
                					<li>Eta 3DVAR:
                					<ol type="a">
                						<li>Turned on use of on-time overland surface temperature observations in Eta 3DVAR using 2DVar with anisotropic covariance tied to terrain</li>
                						<li>Use of Level II.5 (on-site derived superobs) WSR-88D radial velocity data</li>
                					</ol>
                					</li>
                					<li>Precipitation assimilation:
                					<ol type="a">
                						<li>Cease attempts to create precipitation when model precipitation is less than observed</li>
                						<li>Continue to reduce latent heat and moisture fields when model precipitation is greater than observed</li>
                						<li>Use observed precipitation directly in driving the land surface physics</li>
                					</ol>
                					</li>
                					<li>Eta Model : Land-surface model changes:
                					<ol type="a">
                						<li>Use high-resolution (1-km vs 1 deg) vegetation and soils data bases with more classes</li>
                						<li>Retuned canopy conductance and other vegetation parameters - ops had been tuned to higher values to maintain reasonable evaporation rates given low soil moisture bias which is removed by new precipitation assimilation procedures</li>
                						<li>Lowered roughness length for heat to reduce skin temperature, and hence lower diagnosed 2-m air temp</li>
                						<li>Parameter changes over patchy snow cover (higher snow albedo, reduced snow sublimation, less snow depth for 100% cover)</li>
                						<li>Surface emissivity over snow changed from 1.0 to 0.95</li>
                						<li>In very stable conditions when PBL depth is diagnosed at the lowest Eta model level, impose lower limit on eddy diffusivity up to (and one level above) inversion height</li>
                					</ol>
                					</li>
                					<li>Eta Model : Clouds / radiation:
                					<ol type="a">
                						<li>Radiation scheme modified to "see" thicker clouds by removing the upper limit for cloud water mixing ratio when computing optical depths</li>
                						<li>Modified cloud cover fraction formulation to allow for more partial cloudiness (had been too binary)</li>
                					</ol>
                					</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong>25 January 2005 </strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>Operational Eta forecast system officially renamed North American Mesoscale (NAM) forecast system; Eta Data Assimilation System (EDAS) renamed NAM Data Assimilation System (NDAS).</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/MMB.ProdSuiteRev.Dec04.pdf"><strong>7 December 2004 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Mesoscale Modeling Branch Presentation from 2004 NCEP Production Suite Review</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong>29 November 2004 </strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to WRF-NMM and WRF-ARW runs in HIRESW system:
                				<ol>
                					<li>WRF-ARW:
                					<ol type="a">
                						<li>The "masked" horizontal interpolation of SST data was generating spurious 290K temperatures over parts of the Arctic Ocean, leading to unrealistically warm near-surface temperatures.</li>
                						<li>Native-grid GRIB output from the HI and PR WRF-ARW runs were being labeled as Lambert Conformal, when the integration domain is actually Mercator. Improper hardwiring of the map type to a Lambert Conformal projection was removed from, and the problem that necessitated the hardwiring was eliminated.</li>
                						<li>Made modifications so the initial snow cover would be properly defined within the WRF-ARW.</li>
                						<li>Definition of sea-ice points are changed from water to land, and the Land-sfc physics can now handle sea-ice properly</li>
                					</ol>
                					</li>
                					<li>WRF-NMM:
                					<ol type="a">
                						<li>Modify vertical advection to use an off-centered Crank-Nicholson scheme, which remedied recent failures of the WRF-NMM over Alaska</li>
                						<li>Divergence damping parameter CODAMP set back to 6.4 for all domains</li>
                						<li>Removed faulty logic in generating the initial skin temperature</li>
                					</ol>
                					</li>
                					<li>WRF Post-processor:
                					<ol type="a">
                						<li>The reduced sea-level pressure in the WRF-ARW was in poor agreement with the initializing Eta model data at the initial time (up to 5 hPa too low relative to the Eta), and would continue to have a low bias through the forecast period. A moisture component of pressure that is subtracted out during initialization of the WRF-ARW was added back in the post.</li>
                						<li>Fixes which ensure that output from both WRF cores will produce bit-identical answers regardless of the number of processors applied to the task.</li>
                						<li>Modified two routines to process properly the snow and snow cover fields now coming out of the WRF-ARW.</li>
                					</ol>
                					</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/mesoimpl/wrftest/WRF-HRW-Readiness-Rev-13Sep04.htm"><strong>21 September 2004 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Replace single run of NCEP Non-hydrostatic Meso Model (NMM) in the HiResWindow suite with two runs : 1) The WRF version of the NMM (WRF-NMM), and the WRF version of the Eulerian Mass core (WRF-ARW) with physics chosen by NCAR:
                				<p>&nbsp;</p>
                
                				<table width="577" cellspacing="0" cellpadding="0" border="1">
                					<colgroup>
                						<col width="218">
                						<col width="149">
                						<col width="209">
                					</colgroup>
                					<tbody>
                						<tr valign="TOP">
                							<td width="218" height="23">
                							<p class="western" lang="en-US" align="CENTER"><font face="Courier New, monospace"><b>WRF-NMM</b></font></p>
                							</td>
                							<td width="149">
                							<p class="western" lang="en-US" align="CENTER"><font face="Courier New, monospace"><b>Physics module</b></font></p>
                							</td>
                							<td width="209">
                							<p class="western" lang="en-US" align="CENTER"><font face="Courier New, monospace"><b>WRF-ARW</b></font></p>
                							</td>
                						</tr>
                						<tr valign="TOP">
                							<td width="218" height="22">
                							<p class="western" lang="en-US"><font face="Courier New, monospace">Betts-Miller-Janjic</font></p>
                							</td>
                							<td width="149">
                							<p class="western" lang="en-US"><font face="Courier New, monospace">Convection</font></p>
                							</td>
                							<td width="209">
                							<p class="western" lang="en-US"><font face="Courier New, monospace">Kain-Fritsch</font></p>
                							</td>
                						</tr>
                						<tr valign="TOP">
                							<td width="218" height="23">
                							<p class="western" lang="en-US"><font face="Courier New, monospace">Ferrier</font></p>
                							</td>
                							<td width="149">
                							<p class="western" lang="en-US"><font face="Courier New, monospace">Microphysics</font></p>
                							</td>
                							<td width="209">
                							<p class="western" lang="en-US"><font face="Courier New, monospace">Ferrier</font></p>
                							</td>
                						</tr>
                						<tr valign="TOP">
                							<td width="218" height="41">
                							<p class="western" lang="en-US"><font face="Courier New, monospace">Mellor-Yamada-Janjic (Eta)</font></p>
                							</td>
                							<td width="149">
                							<p class="western" lang="en-US"><font face="Courier New, monospace">PBL</font></p>
                							</td>
                							<td width="209">
                							<p class="western" lang="en-US"><font face="Courier New, monospace">MRF scheme</font></p>
                							</td>
                						</tr>
                						<tr valign="TOP">
                							<td width="218" height="35">
                							<p class="western" lang="en-US"><font face="Courier New, monospace">Monin-Obukhov (Janjic Eta) scheme</font></p>
                							</td>
                							<td width="149">
                							<p class="western" lang="en-US"><font face="Courier New, monospace">Surface layer</font></p>
                							</td>
                							<td width="209">
                							<p class="western" lang="en-US"><font face="Courier New, monospace">Monin-Obukhov</font></p>
                							</td>
                						</tr>
                						<tr valign="TOP">
                							<td width="218" height="28">
                							<p class="western" lang="en-US"><font face="Courier New, monospace">OSU land-surface</font></p>
                							</td>
                							<td width="149">
                							<p class="western" lang="en-US"><font face="Courier New, monospace">Land-surface</font></p>
                							</td>
                							<td width="209">
                							<p class="western" lang="en-US"><font face="Courier New, monospace">OSU land-surface</font></p>
                							</td>
                						</tr>
                						<tr valign="TOP">
                							<td width="218" height="21">
                							<p class="western" lang="en-US"><font face="Courier New, monospace">GFDL (Eta)</font></p>
                							</td>
                							<td width="149">
                							<p class="western" lang="en-US"><font face="Courier New, monospace">Radiation</font></p>
                							</td>
                							<td width="209">
                							<p class="western" lang="en-US"><font face="Courier New, monospace">Dudhia</font></p>
                							</td>
                						</tr>
                					</tbody>
                				</table>
                
                				<p>&nbsp;</p>
                				</li>
                				<li>The WRF version of the NMM has been upgraded with these changes to the model dynamic core:
                				<ol>
                					<li>The Matsuno vertical advection scheme has been replaced with the neutral, unconditionally stable Crank-Nicholson scheme</li>
                					<li>The Smagorinsky constant in the lateral diffusion is reduced by 70%</li>
                					<li>The effect of horizontal shear of vertical velocity has been added to the lateral diffusion scheme.</li>
                					<li>The fundamental time step has been reduced by 10%.</li>
                				</ol>
                				</li>
                				<li>The NCEP physics for the WRF-NMM have these changes:
                				<ol>
                					<li>Input data on surface conditions (soil and vegetation type) have been refined</li>
                					<li>Soil heat capacity has been increased which results in larger ground fluxes</li>
                					<li>The dependence of roughness length (z0) on the height of topography has been removed, significantly reducing z0 over elevated terrain</li>
                					<li>The countergradient heat flux has been added to the turbulent kinetic energy (TKE) equation and in the vertical heat diffusion</li>
                					<li>The diagnostic mixing length has been increased</li>
                					<li>The floor values for TKE and mixing length have been significantly reduced</li>
                					<li>Increased residual turbulent mixing has been introduced in case of strong stability between the top of the surface layer and the layer above the inversion</li>
                					<li>The effect of entrainment has been incorporated into the procedure for finding convective cloud top pressure.</li>
                					<li>The entropy change threshold for triggering deep convection has been reduced</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/aqemcbranch040520.pdf"><strong>15 September 2004 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Operational Implementation of the Northeast US Air Quality Model run</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/SREFJul04-NCO.pdf"><strong>17 August 2004 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Replace 48-km SREF (10 Eta members, 5 RSM members) with a 15-member Eta/RSM system at 32 km resolution with physics diversity:
                				<ol>
                					<li>Eta, Betts-Miller-Janjic convection, ops Ferrier microphysics, control</li>
                					<li>Eta, Kain-Fritsch convection, ops Ferrier microphysics, control</li>
                					<li>Eta, Betts-Miller-Janjic convection, ops Ferrier microphysics, negative perturbation</li>
                					<li>Eta, Betts-Miller-Janjic convection, ops Ferrier microphysics, positive perturbation</li>
                					<li>Eta, Kain-Fritsch convection, ops Ferrier microphysics, negative perturbation</li>
                					<li>Eta, Kain-Fritsch convection, ops Ferrier microphysics, positive perturbation</li>
                					<li>Eta, Betts-Miller-Janjic convection w/saturated vapor pressure profiles, experimental Ferrier microphysics, negative perturbation</li>
                					<li>Eta, Betts-Miller-Janjic convection w/saturated vapor pressure profiles, experimental Ferrier microphysics, positive perturbation</li>
                					<li>Eta, Kain-Fritsch convection w/full cloud detrainment, experimental Ferrier microphysics, negative perturbation</li>
                					<li>Eta, Kain-Fritsch convection w/full cloud detrainment, experimental Ferrier microphysics, positive perturbation</li>
                					<li>RSM, simplified Arakawa-Schubert convection, Zhou GFS microphysics, control</li>
                					<li>RSM, simplified Arakawa-Schubert convection, Zhou GFS microphysics, negative perturbation</li>
                					<li>RSM, simplified Arakawa-Schubert convection, Zhou GFS microphysics, positive perturbation</li>
                					<li>RSM, relaxed Arakawa-Schubert convection, Zhou GFS microphysics, negative perturbation</li>
                					<li>RSM, relaxed Arakawa-Schubert convection, Zhou GFS microphysics, positive perturbation</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/DGEX2004impl_combined.pdf"><strong>1 June 2004 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Initial implementation of the Downscaled GFS with Eta Extension (DGEX) over the CONUS (06Z/18Z cycles) and Alaska (00Z/12Z cycles)</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/mesoimpl/EtaWinter2004.briefing/EtaWinter2004.briefing.html"><strong>16 March 2004 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                                                <li>Eta Model/Analysis Changes
                                                <ol>
                				  <li>Use of daily gauge data for precipitation assimilation bias adjustment</li>
                				  <li>Assimilation of GOES cloud top radiances</li>
                				  <li>Eta Land-surface model precipitation type now based on model microphysics</li>
                				  <li>Post-processing changes</li>
                                                </ol>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/MMB.ProdSuiteRev.Dec2003.pdf"><strong>9 December 2003 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Mesoscale Modeling Branch Presentation from 2003 NCEP Production Suite Review</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/Notice8Sep2003.htm"><strong>10 September 2003 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>To improve the quality of the Eta initial conditions: 1) surface temperatures over land are not used in the Eta 3DVAR analysis, and 2) all surface data that is not within 6 minutes of the analysis time is excluded.</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/SREF_Sept03bundle.pdf"><strong>2 September 2003 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>SREF increased from 10 to 15 members with the addition of 5 Eta forecasts with Kain-Fritsch convective parameterization</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/tpb.spring03/tpb.htm"><strong>8 July 2003 (TPB) </strong></a></center>
                
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/Spring03Bundle.pdf"><strong>8 July 2003 (Powerpoint briefing) </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Eta model changes:
                				<ul>
                					<li>Extension of the "off-time" (06/18Z) runs to 84 hours</li>
                					<li>Addition of hourly output on selected grids to 36 hours</li>
                					<li>Modifications to the cloud physics and radiation</li>
                					<li>Assimilation of GOES cloud top pressure, Stage IV precipitation data, and super-observations of NEXRAD radial wind data.</li>
                				</ul>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong><a href="https://ruc.noaa.gov/ruc/ppt_pres/RUC-3dvar-tpb-May03.pdf">27 May 2003</a> </strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>A 3-d variational (3DVAR) analysis was implemented replacing the previous optimal interpolation (OI) analysis in the 20 km RUC</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://s3.us-east-1.amazonaws.com/library.oarcloud.noaa.gov/noaa_documents.lib/NOAA_historic_documents/WB/TPB/2000-2003/TPB_490.pdf"><strong>15 April 2002 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Resolution of the Rapid Update Cycle changed from 40km to 20km</li>
                				<li>Improved cloud microphysics, convection, land-surface physics</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/mesoimpl/CAFTI.feb2002/CAFTI.feb2002.html"><strong>22 February 2002 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Eta land-surface physics changed to increase the thermal conductivity through snow; change lessened Eta forecast 2-m temperature bias over snow cover</li>
                				<li>Upgrade to the NCEP HiResWindow (HIRESW) runs with the Non-hydrostatic Meso Model (NMM)</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/mesoimpl/eta12tpb/"><strong>27 November 2001 (TPB) </strong></a></center>
                
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/mesoimpl/Eta12Implemention/Eta12Implemention.html"><strong>27 November 2001 (Powerpoint briefing) </strong></a></center>
                			</td>
                			<td>
                			<ul>
                                                <li>Eta Model/Analysis Changes
                                                <ol>
                				  <li>Increased horizontal and vertical resolution from 22 km/50 levels to 12 km/60 levels</li>
                				  <li>New cloud microphysics scheme</li>
                				  <li>Improvements to the 3DVAR initialization</li>
                                                </ol>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/mesoimpl/spring2001/tpb/"><strong>24 July 2001 (TPB) </strong></a></center>
                
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/mesoimpl/May2401.CAFTI/May2401.CAFTI.html"><strong>24 July 2001 (Powerpoint briefing) </strong></a></center>
                			</td>
                			<td>
                			<ul>
                                                <li>Eta Model/Analysis Changes
                                                <ol>
                				  <li>Eta 3DVAR analysis modified for improved mass-wind balance constraint</li>
                				  <li>Assimilation of the 4-km NCEP National Precipitation Analysis (stage II) in the EDAS</li>
                				  <li>Extensive modifications to the Eta model land-surface physics (NOAH LSM version 2.3</li>
                                                </ol>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/srefupdate_2001.pdf"><strong>5 June 2001 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Initial implementation of NCEP Short-range Ensemble Forecasting System</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/caftinfo3_files/v3_document.htm"><strong>22 March 2001 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Extension of 00z/12z Eta runs to 84-h</li>
                				<li>Introduction of nested Eta HiResWindow (HIRESW) runs</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/mesoimpl/eta22tpb/"><strong>26 September 2000 (TPB) </strong></a></center>
                
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/mesoimpl/eta_6sept2000/eta_6sept2000.html"><strong>26 September 2000 (Powerpoint briefing) </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Eta model resolution increased to 22-km and 50 vertical levels</li>
                				<li>Improvements to Eta 3DVAR analysis</li>
                				<li>Vertical advection of cloud ice/water has been added, and slight modifications to the convective scheme</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://s3.us-east-1.amazonaws.com/library.oarcloud.noaa.gov/noaa_documents.lib/NOAA_historic_documents/WB/TPB/2000-2003/TPB_465.pdf"><strong>29 March 2000 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the Eta Model runs
                				<ul>
                					<li>The 00Z and 12Z runs have been extended to 60 hours</li>
                					<li>The convective scheme has been modified to reduce the dry bias in the western U.S. and the moist bias along the Gulf and southeast U.S. coast</li>
                					<li>VAD winds are now being used a new quality control code</li>
                					<li>Balloon drift is now accounted for in the processing of radiosonde data</li>
                				</ul>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://s3.us-east-1.amazonaws.com/library.oarcloud.noaa.gov/noaa_documents.lib/NOAA_historic_documents/WB/TPB/2000-2003/TPB_464.pdf"><strong>15 March 2000 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Nested Grid Model initialization changed to use the 00-h Eta analysis over North America and a 6-h GDAS forecast over the rest of the Northern Hemisphere in place of the Regional Data Assimilation System</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong><a href="https://s3.us-east-1.amazonaws.com/library.oarcloud.noaa.gov/noaa_documents.lib/NOAA_historic_documents/WB/TPB/1990-1999/TPB_454.pdf">3 June 1998</a></strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the Eta Model and Eta Data Assimilation System (EDAS):
                				<ol type="1">
                					<li>The 03Z run of the Eta-29 (Meso Eta) was replaced by an 03Z run of the Eta-32. This forecast will will be the same length as the Eta-29 (33-h). It will be initialized by a 3-h EDAS assimilaition starting at 0000 UTC using the Eta 3DVAR analysis and an EDAS first guess.</li>
                					<li>The 15Z run of the Eta-29 will be replaced by an 1800 UTC run of the Eta-32. Forecast length will be 30-h, with the 1800 UTC Eta 3DVAR analysis created using a 6-h EDAS run starting at 12Z</li>
                					<li>The EDAS will run in full cycling mode, with all 3-d atmospheric variables cycled from the previous EDAS, instead of just soil states/TKE/cloud parameters</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://s3.us-east-1.amazonaws.com/library.oarcloud.noaa.gov/noaa_documents.lib/NOAA_historic_documents/WB/TPB/1990-1999/TPB_454.pdf"><strong>13 May 1999 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Eta 3DVAR modified to improve mass/wind balance</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://s3.us-east-1.amazonaws.com/library.oarcloud.noaa.gov/noaa_documents.lib/NOAA_historic_documents/WB/TPB/1990-1999/TPB_448.pdf"><strong>April 1998 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Implementation of the new 40-km Rapid Update Cycle (RUC2)</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://s3.us-east-1.amazonaws.com/library.oarcloud.noaa.gov/noaa_documents.lib/NOAA_historic_documents/WB/TPB/1990-1999/TPB_447.pdf"><strong>9 February 1998 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Increase resolution of Early Eta from 48km/38levs to 32km/45levs</li>
                				<li>Replaced Eta OI analysis with Eta 3-d variational (3DVAR) analysis</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/Rogers_1996WAF_Eta48.pdf"><strong>2 October 1995 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the Early Eta System:
                				<ol type="1">
                					<li>Increase horizontal resolution from 80 km to 48 km</li>
                					<li>Early Eta initialized from a 12-h intermittent data assimilation system (Eta Data Assimilation System, or EDAS) with 3 hourly analysis update. First EDAS analysis at 12-h prior to cycle time uses GDAS as a first guess</li>
                					<li>Assimilate SSM/I precipitable water data in Eta OI analysis</li>
                					<li>Use 0.5 deg lat/lon SST analysis from NESDIS, merged with a 14-km analysis over the Great Lakes provided by GLERL</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/Black_1994WAF_MesoEta.pdf"><strong>7 February 1995 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Initial implementation of the 29 km/50 level "Meso" Eta forecast over the CONUS
                				<ol type="1">
                					<li>Run from 03z/15z initial conditions, forecast length = 33-h</li>
                					<li>Initialized by a 3-h "mini" data assimilation: use GDAS first guess valid 00z/12z as first guess, perform a 29 km Eta OI analysis, run a 3-h Meso Eta forecast to 03z/15z, use this Meso Eta forecast as first guess to the 03z/15z Eta OI analysis</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://s3.us-east-1.amazonaws.com/library.oarcloud.noaa.gov/noaa_documents.lib/NOAA_historic_documents/WB/TPB/1990-1999/TPB_429.pdf"><strong>27 September 1994 (TPB on Verification and Evaluation of RUC-1) </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Initial implementation of the 80-km Rapid Update Cycle (RUC-1)</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><a href="https://www.emc.ncep.noaa.gov/users/mesoimpldocs/Rogers_1995WAF_EarlyEta_anl.pdf"><strong>September 1994 </strong></a></center>
                			</td>
                			<td>
                			<ul>
                				<li>Changes to the Early Eta System:
                				<ol type="1">
                					<li>Replace silhouette orography with "silhouette-mean" orography: at points where the observed topography is concave, replace silhouette elevation with average elevation</li>
                					<li>Numerous changes to the Eta OI analysis</li>
                				</ol>
                				</li>
                			</ul>
                			</td>
                		</tr>
                		<tr>
                			<td>
                			<center><strong><a href="https://s3.us-east-1.amazonaws.com/library.oarcloud.noaa.gov/noaa_documents.lib/NOAA_historic_documents/WB/TPB/1990-1999/TPB_412.pdf">8 June 1993</a></strong></center>
                			</td>
                			<td>
                			<ul>
                				<li>Limited-area Fine Mesh (LFM) model replaced with 80 km/38 level Eta model ("Early Eta"), initialized with the Eta OI analysis using the GDAS as a first guess</li>
                			</ul>
                			</td>
                		</tr>
                	</tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p><a href="#TOC">Back to Table of Contents</a></p>
                
                <p><a id="TAB5"></a></p>
                
                <h2>5. MISCELLANEOUS LINKS</h2>

                <p><a name="TABNEST"></a></p>
                
                <p>&nbsp;</p>
                
                <h3><a href="https://www.emc.ncep.noaa.gov/mmb/namgrids/">Link to reference page and domain size graphics for NCEP mesoscale model (NAM, RAP, HRRR, HiResW) output grids</a></h3>
                
                <p>&nbsp;</p>
                
                <h3><a href="https://www.emc.ncep.noaa.gov/">Link to NCEP Environmental Modeling Center Home Page </a></h3>
                
                <p>&nbsp;</p>
                
                
                <p align="center"><a href="https://www.weather.gov/disclaimer.html">Disclaimer</a></p>
                
                <p>&nbsp;</p>
                
                <address><a href="mailto:eric.rogers@noaa.gov">Questions? Email Eric Rogers </a></address>
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
 
