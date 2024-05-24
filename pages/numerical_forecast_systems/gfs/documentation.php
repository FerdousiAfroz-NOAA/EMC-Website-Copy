<?php 
global $browser_title;
 $browser_title = 'GFS';   
 include '../../portal_header.php';?>
 
 <div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="../gfs.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gfs/documentation.php">
              Documentation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gfs/implementations.php">
              Implementations
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
            <a class="nav-link active" href="http://www.nco.ncep.noaa.gov/pmb/products/gfs/">
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="http://mag.ncep.noaa.gov/model-guidance-model-parameter.php?group=Model%20Guidance&model=GFS&area=NAMER&ps=area">
              Model Guidance
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://www.emc.ncep.noaa.gov/users/verification/global/">
              Performance
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gfs/documentation_spectralgfs.php">
              Legacy Spectral Model-based GFS Documentation
            </a>
          </li>
        </ul>
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
				<center>
<h1>The Global Forecast System (GFS)</h1>
</center>

<h4>1) Overview</h4>

<h6>

<p>From 1980-2019, NCEP ran a global spectral model in the various production slots allocated for it. 
Its evolution in the NCEP Production Suite can be tracked in the table below, and documentation on 
the GFS spectral model can be found 
<a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gfs/documentation_spectralgfs.php">here</a>.
<br>
<p>In 2017, the <a href="https://www.gfdl.noaa.gov/fv3/">Finite Volume Cubed Sphere (FV3)</a> dynamical core, 
developed at NOAA’s Geophysical 
Fluid Dynamics Laboratory, was selected for the new Unified Forecast System (UFS) atmospheric model 
for both global and regional scales. At NCEP, the FV3 dynamical core implementation included 
incorporating FV3 into NEMS, and developing advanced physics and data assimilation techniques
to match or exceed the skill of spectral model-based Global Forecast System (GFS). In addition, 
NOAA/NWS is working with federal partners, universities, and the community to create a fully 
accessible FV3-based community model, see the <a href="https://github.com/ufs-community/ufs/wiki">UFS Community page</a> 
and the <a href="https://github.com/ufs-community/ufs-weather-model/wiki">UFS Weather Model</a> page on GitHub.
<br> 
<p>The first implementation of the UFS Atmospheric model in NCEP occurred on June 12th 2019 with the 
deployment of GFS Version 15 in the NCEP Production Suite (NPS). The major component of this implementation 
was to replace the Global Spectral Model in the GFS with the FV3 dynamical core. The operational GFS version 
15 runs the same physics as the previous GFS, except that the Zhao-Carr microphysics was replaced with the 
more advanced GFDL microphysics scheme.  More details on the 2019 implementation of the GFS version 15 can 
be found in the <a href="https://www.weather.gov/media/notification/scn19-40gfs_v15_1.pdf">NWS Service Change Notice</a> 
for this change, on <a href="https://vlab.noaa.gov/web/fv3gfs">EMC's GFS page</a> on the NWS Vlab site, or 
at the "Recent GFS Implementation details" link above. Comprehensive information on the official evaluation 
of GFS v15 is available at the <a href="https://www.emc.ncep.noaa.gov/users/meg/fv3gfs/">EMC GFS V15 Model Evaluation Group’s (MEG) web site</a>.
<br>
<p>On March 22th, 2021, NCEP implemented GFS version 16. In addition to the numerous model and data assimilation changes 
that are described in the <a href="https://www.weather.gov/media/notification/scn_21-20_gfsv16.0_aaa_update.pdf">NWS Service Change Notice</a>, 
with this upgrade, NCEP is merging the operational standalone global deterministic WAVEWATCH III based wave model 
Multi_1 into the GFS system. An updated version of the WAVEWATCH III model has been coupled to the GFS using a one-way 
coupling scheme in which the atmospheric model provides forcing to the wave model using the NOAA Environmental Modeling System 
(NEMS). Additional information can be found on the EMC Model Evaluation Group’s <a href="https://www.emc.ncep.noaa.gov/users/meg/gfsv16/">GFS v16 website</a>, which includes numerous links 
to presentations showing details on GFS v16 model/assimilation changes and performance evaluations.
<br>
<p>The following table shows the evolution of NCEP global model since 1980, also see 
<a href="https://www.emc.ncep.noaa.gov/gmb/STATS/html/model_changes.html">https://www.emc.ncep.noaa.gov/gmb/STATS/html/model_changes.html</a>. See the <a href="https://www.emc.ncep.noaa.gov/emc/pages/model_history/modeltables/globalModels.php">JNWPU/NMC/NCEP Global/Hemispheric Model History Page</a> for a list of all Global/Hemispheric Models from 1958-Present.
<p>
<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-yfti-tbllook:1184'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td valign=top style='border:solid black 1.0pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Year</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border:solid black 1.0pt;border-left:none;mso-border-left-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Model</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border:solid black 1.0pt;border-left:none;mso-border-left-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Horizontal</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Resolution/Vertical
  Layers</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border:solid black 1.0pt;border-left:none;mso-border-left-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Forecast
  length</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border:solid black 1.0pt;border-left:none;mso-border-left-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Note</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border:solid black 1.0pt;border-left:none;mso-border-left-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Documents</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td valign=top style='border:solid black 1.0pt;border-top:none;mso-border-top-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>1980</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Spectral;
  Eulerian</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>R30L12</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>48h</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman";color:black'>Rhomboidal Truncation</span></b><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'></td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td valign=top style='border:solid black 1.0pt;border-top:none;mso-border-top-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>1983</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Spectral;
  Eulerian</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>R40L12</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>240h
  @ 00Z</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>MRF</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'></td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td valign=top style='border:solid black 1.0pt;border-top:none;mso-border-top-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>1985</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Spectral;
  Eulerian</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>R40L18</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>240h
  @ 00Z</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>MRF</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'></td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td valign=top style='border:solid black 1.0pt;border-top:none;mso-border-top-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>1987</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Spectral;
  Eulerian</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>T80L18</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>240h
  @ 00Z</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>MRF,</span><span
  style='font-size:10.0pt;mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black'> </span><span style='font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:black'>triangular truncation</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'></td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td valign=top style='border:solid black 1.0pt;border-top:none;mso-border-top-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>1991</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Spectral;
  Eulerian</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>T126L18</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>240h
  @ 00Z</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>MRF</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'></td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td valign=top style='border:solid black 1.0pt;border-top:none;mso-border-top-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>1993</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Spectral;
  Eulerian</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>T126L28</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>240h
  @ 00z</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>MRF,
  SAS convection</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'></td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td valign=top style='border:solid black 1.0pt;border-top:none;mso-border-top-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>2000</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Spectral;
  Eulerian</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>T170L42
  to 144h, T62L28</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>384h
  @ 00Z, 84h @ 06/12/18z</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>MRF/AVN,
  </span><b><span style='font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:black'>Prognostic ozone; NASA
  SW</span></b><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'></td>
 </tr>
 <tr style='mso-yfti-irow:8'>
  <td valign=top style='border:solid black 1.0pt;border-top:none;mso-border-top-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>2002</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Spectral;
  Eulerian</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>T170L42
  to 144h, T62L28 to 384h</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>384h
  4x/day</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman";color:black'>RRTM LW</span></b><span style='font-size:12.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'></td>
 </tr>
 <tr style='mso-yfti-irow:9'>
  <td valign=top style='border:solid black 1.0pt;border-top:none;mso-border-top-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>2002</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Spectral;
  Eulerian</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>T254/64
  to 84h, T170/42 to 180h, T126/28 to 384h</span><span style='font-size:12.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>384h
  4x/day</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Now
  called GFS</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'></td>
 </tr>
 <tr style='mso-yfti-irow:10'>
  <td valign=top style='border:solid black 1.0pt;border-top:none;mso-border-top-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>2005</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Spectral;
  Eulerian</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>T382L64
  to 180h, T190L64 to 384h</span><span style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>384h
  4x/day</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman";color:black'>2L OSU to 4L NOAH LSM</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'></td>
 </tr>
 <tr style='mso-yfti-irow:11'>
  <td valign=top style='border:solid black 1.0pt;border-top:none;mso-border-top-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>2007</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Spectral;
  Eulerian</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>T382L64
  to 180h, T190L64 to 384h</span><span style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>384h
  4x/day</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Hybrid-sigma
  vertical coordinate, GSI analysis</span><span style='font-size:12.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'></td>
 </tr>
 <tr style='mso-yfti-irow:12'>
  <td valign=top style='border:solid black 1.0pt;border-top:none;mso-border-top-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>2010</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Spectral;
  Eulerian</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>T574L64
  to 192h</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>T190L64
  to 384h</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>384h
  4x/day</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman";color:black'>RRTM SW; TVD tracer transport</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><a
  href="https://www.weather.gov/media/notification/tins/tin10-15gfs.pdf"><span
  style='font-size:11.0pt;font-family:"Calibri",sans-serif;color:#0563C1'>NWS
  TIN</span></a><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13'>
  <td valign=top style='border:solid black 1.0pt;border-top:none;mso-border-top-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>2012</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Spectral;
  Eulerian</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>T574L64
  to 192h,</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>T190L64
  to 384h</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>384h
  4x/day</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Hybrid
  variational ensemble (T254) DA&nbsp;</span><span style='font-size:12.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><a
  href="https://www.weather.gov/media/notification/tins/tin12-22gfs_hybridaab.pdf"><span
  style='font-size:11.0pt;font-family:"Calibri",sans-serif;color:#0563C1'>NWS
  TIN</span></a><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14'>
  <td valign=top style='border:solid black 1.0pt;border-top:none;mso-border-top-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>2015</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Spectral;
  Semi-<span class=SpellE>Lagrangian</span></span><span style='font-size:12.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>T1534L64
  to 240h</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>T574L64
  to 384h</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>384h
  4x/day</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'></td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><a
  href="https://www.weather.gov/media/notification/tins/tin14-46gfs_cca.pdf"><span
  style='font-size:11.0pt;font-family:"Calibri",sans-serif;color:#0563C1'>NWS
  TIN</span></a><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15'>
  <td valign=top style='border:solid black 1.0pt;border-top:none;mso-border-top-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>2016</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Spectral;
  Semi-<span class=SpellE>Lagrangian</span></span><span style='font-size:12.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>T1534L64
  to 240h</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>T574L64
  to 384h</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>384h
  4x/day</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>4D
  Hybrid Ensemble-Variational Data Assimilation;&nbsp;</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><a
  href="https://www.weather.gov/media/notification/tins/tin16-11gfs_gdasaaa.pdf"><span
  style='font-size:11.0pt;font-family:"Calibri",sans-serif;color:#0563C1'>NWS
  TIN</span></a><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16'>
  <td valign=top style='border:solid black 1.0pt;border-top:none;mso-border-top-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>2017</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Spectral;
  Semi-<span class=SpellE>Lagrangian</span></span><span style='font-size:12.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>T1534L64
  to 240h</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>T574L64
  to 384h</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>384h
  4x/day</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  class=GramE><span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black'>NEMS ;</span></span><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black'> NSST</span><span style='font-size:
  12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><a
  href="https://www.weather.noaa.gov/media/notification/tins/scn17-67gfsupgrade.pdf"><span
  style='font-size:11.0pt;font-family:"Calibri",sans-serif;color:#0563C1'>NWS
  SCN</span></a><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17'>
  <td valign=top style='border:solid black 1.0pt;border-top:none;mso-border-top-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>2019</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>FV3</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>13 km
  / 64 levels</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>384h
  4x/day</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>Increase
  resolution of ensemble DA from 35km to 25km; GFDL Microphysics&nbsp;</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><a
  href="https://www.weather.gov/media/notification/scn19-40gfs_v15_1.pdf"><span
  style='font-size:11.0pt;font-family:"Calibri",sans-serif;color:#0563C1'>NWS
  SCN</span></a><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;mso-yfti-lastrow:yes'>
  <td valign=top style='border:solid black 1.0pt;border-top:none;mso-border-top-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>2021</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>FV3</span><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>13 km
  / 127 levels</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>384h
  4x/day</span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black'>One-way
  coupling to NCEP wave model</span><span style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><a
  href="https://www.weather.gov/media/notification/scn_21-20_gfsv16.0_aaa_update.pdf"><span
  style='font-size:11.0pt;font-family:"Calibri",sans-serif;color:#1155CC'>NWS
  SCN</span></a><o:p></o:p></span></p>
  </td>
 </tr>
</table>
<p>
<h4>2) GFS v15 Documentation</h4>
<h6>
<p>
<a href="https://www.weather.gov/media/notification/scn19-40gfs_v15_1.pdf">GFSv15 Service Change Notice</a> 
<p>
<a href="https://www.emc.ncep.noaa.gov/users/meg/fv3gfs/">EMC Model Evaluation Group’s (MEG) GFSv15 web page</a>
<p>
<a href="http://www.emc.ncep.noaa.gov/users/Alicia.Bentley/fv3gfs/updates/MEG_9-20-18_FV3GFS_SUMMARY.pptx">GFSv15 MEG Evaluation Summary</a> 
<p>
<a href="http://www.emc.ncep.noaa.gov/users/Alicia.Bentley/fv3gfs/updates/EMC_CCB_FV3GFS_9-24-18.pdf">NCEP/EMC Change Control Board Presentation</a> 
<p>
<a href="http://www.emc.ncep.noaa.gov/users/Alicia.Bentley/fv3gfs/updates/MEG_9-27-18_FV3GFS_EVAL.pptx">GFSv15 NOAA/NWS Evaluation Summary</a> 
<p>
<a href="http://www.emc.ncep.noaa.gov/users/Alicia.Bentley/fv3gfs/updates/OD_Brief_10-01-18_FV3GFS.pptx">NCEP Office of the Director Science and Decisional Brief on GFSv15</a> 
<p>
<h4>3) GFS v16 Documentation</h4>
<h6>
<p>
<a href="https://www.weather.gov/media/notification/scn_21-20_gfsv16.0_aaa_update.pdf">GFSv16 Service Change Notice</a> (for science / output changes)
<p>
<a href="https://www.weather.gov/media/notification/pdf2/scn21-21model_timing_gfs_v16.pdf">GFSv16 Service Change Notice</a> (timing changes for downstream NCEP Production Suite systems)
<p>
<a href="https://www.emc.ncep.noaa.gov/users/meg/gfsv16/">EMC MEG GFSv16 page</a>
<p>
<a href="https://www.emc.ncep.noaa.gov/users/meg/gfsv16/pptx/CCB_9-30-20_GFSv16_Full.pdf">NCEP/EMC Change Configuration Board Presentation</a> 
<p>
<a href="https://www.emc.ncep.noaa.gov/users/meg/gfsv16/pptx/MEG_10-01-20_GFSv16_Wave_Evaluation.pdf">GFS Wave vs. Multi-1 Evaluation Summary</a>
<p>
<a href="https://www.emc.ncep.noaa.gov/users/meg/gfsv16/pptx/MEG_10-01-20_GFSv16_Field_Evaluations.pptx">GFSv16 Field Evaluations (Waves/Days 1-10 Weather)</a> 
<p>
<a href="https://www.emc.ncep.noaa.gov/users/meg/gfsv16/pptx/MEG_9-17-20_GFSv16_SOO_Team_Evaluation.pdf">GFSv16 NWS SOO Team Evaluation Overview</a> 
<p>
<a href="https://www.emc.ncep.noaa.gov/users/meg/gfsv16/pptx/MEG_9-24-20_GFSv16_MEG_Eval_Overview.pptx">GFSv16 EMC MEG Evaluation and Overview</a>
<p>
<a href="https://www.emc.ncep.noaa.gov/users/meg/gfsv16/pptx/OD_Brief_10-05-20_GFSv16_Full.pptx">NCEP Office of the Director Science and Decisional Briefing: Summary</a>
<p>
<a href="https://www.emc.ncep.noaa.gov/users/meg/gfsv16/pptx/OD_Brief_10-05_20_GFSv16_Field_Evaluations.pptx">NCEP Office of the Director Science and Decisional Briefing: Field Evaluations</a>
<p>
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
 
