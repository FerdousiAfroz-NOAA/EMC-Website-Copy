<?php 
global $browser_title;
 $browser_title = 'NCEP Data Assimilation';   
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
        <h1 id="section-title"><div style="text-align left; margin-left:300px;">NCEP Data Assimilation</h1>
        <p>
        <p>
        <img src="../../images/DA_history_timeline.png" />
        <p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif">Above: 30 years of Data Assimilation Progress: Timeline of significant milestones 
        in NCEP’s Operational Global and Regional Atmospheric Data Assimilation from 1991-2021.</p>
        <p>
        <img src="../../pages/disclaimer/disclaimer_small.png" />
        <div style="margin-bottom:20px;"></div>
        <p><h3> 1. INTRODUCTION/OVERVIEW/HISTORY</h3>
        <p>
        <p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"> The backbone of NCEP’s data assimilation effort is the Gridpoint Statistical Interpolation (GSI), 
     originally developed as a three-dimensional variational data assimilation (3DVAR) analysis system, which was 
     implemented in the Global Data Assimilation System/Global Forecast System (GDAS/GFS) in May 2007 (Kleist et al., 2009). 
     The GSI is an extension of the Spectral Statistical Interpolation (SSI) analysis/assimilation system which was 
     first implemented into the NCEP GDAS/GFS in June 1991 (Derber et al., 1991). The use of the SSI in the GDAS/GFS 
     led to improved model performance over the previously used optimum interpolation scheme due to many innovations, 
     including the ability to use observations which are different from the model and analysis variables (satellite 
     measure radiances (Derber and Wu 1998), total precipitable water, etc.), the analysis variables being different 
     than the model variables and the use of all observations at once allowing a better dynamical constraint between 
     wind and mass fields. 
     <p>
     <p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif">The GSI was developed 
     at the Environmental Modeling Center at NCEP as part of an effort to create a more unified, robust, and efficient 
     analysis scheme. The key aspect of the GSI is that it formulates the analysis in model grid space, which makes it 
     straightforward for this single analysis system to be used across a broad range of applications, including both 
     global and regional modeling systems and domains. In addition to its use in the GDAS/GFS, versions of the GSI are 
     used in operational NCEP mesoscale and convective-resolving guidance systems such as the Rapid Refresh (RAP), High 
     Resolution Rapid Refresh (HRRR), North American Mesoscale (NAM), NCEP’s real-time analysis systems (RTMA, URMA, RU-RTMA), 
     and NCEP’s Hurricane modeling systems (HWRF). The GSI application in the GDAS/GFS includes the use of a Tangent 
     Linear Normal Mode Constraint (TLNMC, Kleist(2009)) to reduce non-physical noise in the analysis system.
     <p>
        <p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif">Many additional enhancements
     to the GSI analysis system have been made over the years. For example, in 2016 an upgrade was made in the GDAS with 
     the replacement of the 3D Hybrid Ensemble-Variational to 4D Hybrid Ensemble-Variational Data Assimilation System. 
     With this extension, 4D analysis increments at prescribed times are constructed through linear combinations of 4D 
     ensemble perturbations.  Also added to the GSI system were improved observational quality control (variational 
     and platform specific) algorithms, the inclusion of additional observations (new satellite radiances and extensions 
     to all-sky assimilation), more aircraft observations (with bias correction), GPS radio occultation observations and 
     wind estimates from satellites, along with many other enhancements.
     <p>
        <p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif">In 2016 
     an upgrade was made in the GDAS with the replacement of the 3D Hybrid Ensemble-Variational 
     to a 4D Hybrid Ensemble-Variational Data Assimilation System. The 4-D increments are constructed by 
     computing the best combination of 4-D ensemble perturbations. The weights for ensemble members are 
     kept constant throughout the assimilation window, and the GDAS 4D-Hybrid uses uses 2 outer iterations 
     with 50 and 150 inner iterations in those 2 outer iterations, with variational quality control
     turned on in every iteration. Tangent Linear Normal Mode Constraint (TLNMC) and Digital Filter 
     Initialization (DFI) are used to constrain the analysis increment while additive error inflation 
     is removed. Also, ozone cross covariances are in the 4D-Hybrid. Localization is recued to 50 percent 
     in the troposphere and the weights for static and ensemble are kept at 12.5 percent and 87.5 percent, 
     respectively. 
     <p>
       <p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"> More recent data assimilation changes included in NCEP GDAS/GFS upgrades are:
       <font size="3">
       <ol> 
          <li><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"> In 
               the <a href="https://www.weather.gov/media/notification/pdfs/scn17-67gfsupgradeaad.pdf">2017 GDAS/GFS upgrade</a> the Near
               Sea-Surface Temperature (<a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/sst.php">NSST</a>) 
               Analysis was implemented to replace Real-Time Global SST (RTG_SST), to provide more realistic ocean boundary conditions. 
          <li><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"> In 
               the <a href="https://www.weather.gov/media/notification/pdf2/scn19-40gfs_v15_1.pdf">2019 GDAS/GFS upgrade</a>:
             <ol type=a>
                <li><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"> Upgrade 
                     specific humidity perturbation and statistics physics tendency perturbation with new parameter 
                     settings in the ensemble forecast for prescribing background errors.
                <li><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"> Remove 
                    digital filter and tropical cyclone vortex relocation
                <li><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"> Increase 
                     the horizontal resolution of the ensemble part of the hybrid data assimilation from 35 km to 25 km
                <li><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"> Update the 
                     Near Sea Surface Temperature scheme to a) apply Sea Surface Temperature climatology tendency 
                     to the foundation temperature and, b) reduce background error correlation length from 450~800 km down to 100 km.
             </ol>
           <li><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"> In 
                the <a href="https://www.weather.gov/media/notification/pdf2/scn21-20_gfsv16.0_aac.pdf">2021 GDAS/GFS upgrade</a>:
             <ol type=a>
                <li><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"> Spinning 
                     up an offline land model with observed precipitation in the Global Land Data Assimilation System to provide improved 
                     land initial conditions.
                <li><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"> Replacing 
                     the Ensemble Square Root Filter with the Local Ensemble Kalman Filter (LETKF) that offers 
                     a model space localization and linearized observation operators.
                <li><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"> Employing 
                     the 4-Dimensional Incremental Analysis Update (4DIAU) technique.
                <li><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"> Adopting a 
                     stochastic kinetic energy backscattering (SKEB) perturbation technique in the ensemble 
                     forecast component used to prescribe background error covariances.
                <li><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"> Updating 
                     variational quality control.
                <li><span style="font-size:16px;"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"> Applying 
                     the Hilbert curve to aircraft data
             </ol>
       </ol>
       </font>
     <p>
     <p><h3> 2. SOME USEFUL LINKS</h3>
     <p>
<p class=MsoNormal><a href="https://github.com/NOAA-EMC/GSI"><span
style='font-size:13.5pt;line-height:107%;background:white'>Community GSI
Repository on GitHub</span></a><span style='font-size:13.5pt;line-height:107%;
color:#333333;background:white'><o:p></o:p></span></p>

<p class=MsoNormal><a
href="https://www.emc.ncep.noaa.gov/gmb/gdas/radiance/index.html"><span
style='font-size:13.5pt;line-height:107%;background:white'>Radiance Monitoring</span></a><span
style='font-size:13.5pt;line-height:107%;color:#333333;background:white'><o:p></o:p></span></p>

<p class=MsoNormal><a
href="https://www.emc.ncep.noaa.gov/gmb/gdas/es_ozn/index.html"><span
style='font-size:13.5pt;line-height:107%;background:white'>Ozone monitoring</span></a><span
style='font-size:13.5pt;line-height:107%;color:#333333;background:white'><o:p></o:p></span></p>

<p class=MsoNormal><a
href="https://www.emc.ncep.noaa.gov/gmb/gdas/convention/index.html"><span
style='font-size:13.5pt;line-height:107%;background:white'>Global Conventional
Observation Monitoring</span></a><span style='font-size:13.5pt;line-height:
107%;color:#333333;background:white'><o:p></o:p></span></p>

<p class=MsoNormal><a href="https://www.emc.ncep.noaa.gov/gmb/gdas/gsi_stat/"><span
style='font-size:13.5pt;line-height:107%;background:white'>Minimization
Monitoring</span></a><span style='font-size:13.5pt;line-height:107%;color:#333333;
background:white'><o:p></o:p></span></p>

<p class=MsoNormal><a
href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gfs/implementations.php"><span
style='font-size:13.5pt;line-height:107%;background:white'>History of NCEP GDAS/GFS
changes (2010-present)</span></a><span style='font-size:13.5pt;line-height:
107%;color:#333333;background:white'><o:p></o:p></span></p>

<p class=MsoNormal><a href="https://www.ospo.noaa.gov/Operations/index.html"><span
style='font-size:13.5pt;line-height:107%;background:white'>NOAA Satellite
Status Information</span></a><span style='font-size:13.5pt;line-height:107%;
color:#333333;background:white'><o:p></o:p></span></p>

<p class=MsoNormal><a
href="https://www.weather.gov/exit?url=https://www.jcsda.org/"><span
style='font-size:13.5pt;line-height:107%;background:white'>Joint Center for
Satellite Data Assimilation</span></a><span style='font-size:13.5pt;line-height:
107%;color:#333333;background:white'><o:p></o:p></span></p>

<p class=MsoNormal><a
href="https://www.emc.ncep.noaa.gov/emc/pages/infrastructure/obs-data-processing.php"><span
style='font-size:13.5pt;line-height:107%;background:white'>Observational Data
Processing at NCEP</span></a><span style='font-size:13.5pt;line-height:107%;
color:#333333;background:white'><o:p></o:p></span></p>

<p class=MsoNormal><a
href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/sst.php"><span
style='font-size:13.5pt;line-height:107%;background:white'>Near-surface Sea
Surface Temperature (NSST)</span></a><span style='font-size:13.5pt;line-height:
107%;color:#333333;background:white'><o:p></o:p></span></p>
     <p><h3> 3. REFERENCES</h3>
     <p>
Derber, J. C., Parrish, D. F., & Lord, S. J. (1991). The New Global Operational Analysis System at 
the National Meteorological Center, <i>Weather and Forecasting</i>, <b>6</b>(4), 538-547. 
<a href="https://journals.ametsoc.org/view/journals/wefo/6/4/1520-0434_1991_006_0538_tngoas_2_0_co_2.xml">https://journals.ametsoc.org/view/journals/wefo/6/4/1520-0434_1991_006_0538_tngoas_2_0_co_2.xml</a>
<p>
Derber, J. C. and W.-S. Wu, 1998: The use of TOVS cloud-cleared radiances in the NCEP SSI analysis system. 
<i>Monthly Weather Review</i>, <b>126</b>(8), 2287 - 2299. 
<a href="https://journals.ametsoc.org/view/journals/mwre/126/8/1520-0493_1998_126_2287_tuotcc_2.0.co_2.xml">https://journals.ametsoc.org/view/journals/mwre/126/8/1520-0493_1998_126_2287_tuotcc_2.0.co_2.xml</a>
<p>
Kleist, D. T., Parrish, D. F., Derber, J. C., Treadon, R., Wu, W., & Lord, S. (2009). Introduction 
of the GSI into the NCEP Global Data Assimilation System, <i>Weather and Forecasting</i>, <b>24</b>(6), 
1691-1705. <a href="https://journals.ametsoc.org/view/journals/wefo/24/6/2009waf222">https://journals.ametsoc.org/view/journals/wefo/24/6/2009waf222</a>
<p>
Whitaker, J. S., Hamill, T. M., Wei, X., Song, Y., & Toth, Z. (2008). Ensemble Data Assimilation with the NCEP
Global Forecast System, <i>Monthly Weather Review</i>, <b>136</b>(2), 463-482. 
<a href="https://journals.ametsoc.org/view/journals/mwre/136/2/2007mwr20">https://journals.ametsoc.org/view/journals/mwre/136/2/2007mwr20</a>
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
 
