<?php
global $browser_title;
$browser_title = 'NCEP Monsoon Desk';
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
     <h2 id="section-title">NCEP Monsoon Desk</h2>
     	<div id="description">
				<h1 style="margin-left:0px; margin-right:0px; text-align:center"><span style="font-family:arial,helvetica,sans-serif;">MONSOON DESK</span></h1>

<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-family:arial,helvetica,sans-serif;"></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">The Monsoon Desk at NOAA's National Centers for Environmental Prediction (NCEP) serves as the modality to coordinate numerical model simulations and diagnostics between NCEP and MoES parties in India. Read the Monsoon Desk&nbsp;<a href="http://www.emc.ncep.noaa.gov/monsoondesk/curriculum.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">curriculum</a>.</span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif">_________________________________________________________________________________________________________________</span></span><span style="color:#8a8a8a"><span style="font-family:Arial,Helvetica,sans-serif">&nbsp;&nbsp;<a href="http://www.emc.ncep.noaa.gov/?abtemc=abtemc" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><span style="color:#ffffff">About EM</span></a></span></span></span></p>

<div id="tabs" style="-webkit-text-stroke-width:0px; background-color:#ffffff; border-bottom:1px solid #4e589f; box-sizing:border-box; color:#34495e; font-family:&quot;Open Sans&quot;,Helvetica,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:normal; letter-spacing:normal; orphans:2; padding:5px; text-align:left; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px">
<ul>
	<li><span style="font-size:16px;"><strong><span style="color: rgb(138, 138, 138);"><span style="font-family: Arial,Helvetica,sans-serif;">Home</span></span><span style="color: rgb(138, 138, 138);"><span style="font-family: Arial,Helvetica,sans-serif;"></span></span></strong></span></li>
	<li><span style="font-size:16px;"><strong><span style="color: rgb(138, 138, 138);"><span style="font-family: Arial,Helvetica,sans-serif;"><a href="http://www.emc.ncep.noaa.gov/monsoondesk/curriculum.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Curriculum</a></span></span><span style="color: rgb(138, 138, 138);"><span style="font-family: Arial,Helvetica,sans-serif;"></span></span></strong></span></li>
	<li><span style="font-size:16px;"><strong><span style="color: rgb(138, 138, 138);"><span style="font-family: Arial,Helvetica,sans-serif;"><a href="http://www.emc.ncep.noaa.gov/monsoondesk/tutor.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Documentation &amp; Tutorials</a></span></span><span style="color: rgb(138, 138, 138);"><span style="font-family: Arial,Helvetica,sans-serif;"></span></span></strong></span></li>
	<li><span style="font-size:16px;"><strong><span style="color: rgb(138, 138, 138);"><span style="font-family: Arial,Helvetica,sans-serif;"><a href="http://www.emc.ncep.noaa.gov/monsoondesk/events.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Events</a></span></span><span style="color: rgb(138, 138, 138);"><span style="font-family: Arial,Helvetica,sans-serif;"></span></span></strong></span></li>
	<li><span style="font-size:16px;"><strong><span style="color: rgb(138, 138, 138);"><span style="font-family: Arial,Helvetica,sans-serif;"><a href="http://www.emc.ncep.noaa.gov/monsoondesk/modup.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Model Updates</a></span></span><span style="color: rgb(138, 138, 138);"><span style="font-family: Arial,Helvetica,sans-serif;"></span></span></strong></span></li>
	<li><span style="font-size:16px;"><strong><span style="color: rgb(138, 138, 138);"><span style="font-family: Arial,Helvetica,sans-serif;"><a href="http://www.emc.ncep.noaa.gov/monsoondesk/projects.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Projects</a></span></span><span style="color: rgb(138, 138, 138);"><span style="font-family: Arial,Helvetica,sans-serif;"></span></span></strong></span></li>
	<li><span style="font-size:16px;"><strong><span style="color: rgb(138, 138, 138);"><span style="font-family: Arial,Helvetica,sans-serif;"><a href="http://www.emc.ncep.noaa.gov/monsoondesk/ndevents.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Special Reports</a></span></span><span style="color: rgb(138, 138, 138);"><span style="font-family: Arial,Helvetica,sans-serif;"></span></span></strong></span></li>
	<li><span style="font-size:16px;"><strong><span style="color: rgb(138, 138, 138);"><span style="font-family: Arial,Helvetica,sans-serif;"><a href="http://www.emc.ncep.noaa.gov/monsoondesk/modup2.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Weather Forecast</a></span></span><span style="color: rgb(138, 138, 138);"><span style="font-family: Arial,Helvetica,sans-serif;"></span></span></strong></span></li>
	<li><span style="font-size:16px;"><strong><span style="color: rgb(138, 138, 138);"><span style="font-family: Arial,Helvetica,sans-serif;"><a href="http://www.emc.ncep.noaa.gov/monsoondesk/refs.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Publications</a></span></span></strong></span></li>
</ul>
</div>

<div id="meta" style="-webkit-text-stroke-width:0px; background-color:#ffffff; box-sizing:border-box; color:#34495e; font-family:&quot;Open Sans&quot;,Helvetica,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:normal; letter-spacing:normal; orphans:2; padding:15px; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px">&nbsp;
<table style="background-color:transparent; border-collapse:collapse; border-spacing:0px; box-sizing:border-box" cellspacing="0" border="1" align="center">
	<tbody>
		<tr>
			<td><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><strong><span style="font-size:medium">EVENTS &amp; NEWS</span></strong></span></span></span></td>
			<td><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><strong><span style="font-size:medium">MODEL UPDATES</span></strong></span></span></span></td>
		</tr>
		<tr>
			<td rowspan="5">
			<div style="box-sizing:border-box"><br>
			<span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><strong>Oct 2016</strong>&nbsp;- 2016 SW Monsoon report available at IMD. <a href="http://www.emc.ncep.noaa.gov/monsoondesk/ndevents.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Click here to go to the Special Report page</a><br>
			<br>
			<strong>Aug 2016</strong>&nbsp;- IITM started experimental real-time short range forecast (up to 8 days) with GEFS T-574 (SL) 21 ensemble members implemented in new HPC system of IITM. <a href="http://www.emc.ncep.noaa.gov/monsoondesk/modup2.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Click here to go to the Forecast page</a><br>
			<br>
			<strong>Jun 2016</strong>&nbsp;- Visiting scientist from IITM Pune, Dr. Renu Siddharth, attended GEFS ensemble workshop at NOAA College Park&nbsp;<br>
			<br>
			<strong>Dec 2015</strong>&nbsp;- 2015 SW Monsoon report available at IMD. <a href="http://www.emc.ncep.noaa.gov/monsoondesk/ndevents.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Click here to go to the Special Report page</a><br>
			<br>
			<strong>Dec 2014</strong>&nbsp;- 2014 SW Monsoon report available at IMD. <a href="http://www.emc.ncep.noaa.gov/monsoondesk/ndevents.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Click here to go to the Special Report page</a><br>
			<br>
			<strong>June 2014</strong>&nbsp;- IITM scientists predicted 10-day delay in SW Monsoon arrival. <a href="https://www.weather.gov/exit?url=http://timesofindia.indiatimes.com/india/10-day-delay-in-monsoon-Indian-Institute-of-Tropical-Meteorology-says/articleshow/35641137.cms" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Click here to read the news.</a> For All India daily rainfall and progress of Monsoon 2014, please <a href="http://www.emc.ncep.noaa.gov/monsoondesk/ndevents.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">click here to go to the report page.&nbsp;</a><br>
			<br>
			<strong>May 2014</strong>&nbsp;- IMD Rpeort on GFS performance for SW Monsoon (2013) and Cyclone Phailin are now available; <a href="http://www.emc.ncep.noaa.gov/monsoondesk/ndevents.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">click here to go to the report page</a><br>
			<br>
			<strong>Mar 2014</strong>&nbsp;- Monsoon 2013 report available at NCMRWF; <a href="https://www.weather.gov/exit?url=http://www.ncmrwf.gov.in/ncmrwf/Monsoon_Report_2013.pdf" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Click here for the pdf</a><br>
			<br>
			<strong>Dec 2013</strong>&nbsp;- 6th Ensemble user workshop organised by NCEP/NWS will take place at NOAA Centre for Weather and Climate Prediction in College Park, MD between 25 to 27th March, 2014. To read more about this workshop click here -&nbsp;<a href="http://www.emc.ncep.noaa.gov/gmb/ens/WkShopOct13/6th_User_workshop.shtml" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Click here for the link</a><br>
			<br>
			<strong>Dec 2013</strong>&nbsp;- NCMRWF will organise PROWESS-2014, an international conference, on continued development of numerical weather prediction in India during 17-19th February, 2014. To read more about this conference click here -&nbsp;<a href="http://www.ncmrwf.gov.in/ncmrwf/prowess-2014.pdf" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Click here for pdf</a><br>
			<br>
			<strong>Oct 2013</strong>&nbsp;- Visiting IMD Scientist Ananda Das completed one month work on HWRF system at NCEP -&nbsp;<a href="http://www.emc.ncep.noaa.gov/HWRF/weeklies/OCT13/OCT242013.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Click here for presentations</a><br>
			<br>
			<strong>May 2012</strong>&nbsp;- CFSv2 Workshop presentations added to Events tab -&nbsp;<a href="http://www.emc.ncep.noaa.gov/monsoondesk/events.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Click here to read</a><br>
			<br>
			<strong>April 2012</strong>&nbsp;- IMD MoES Long Range Forecast for 2012 South-west Monsoon Season Rainfall -&nbsp;<a href="http://www.imd.gov.in/section/nhac/dynamic/press_english.pdf" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Click here to read</a><br>
			<br>
			<strong>April 2012</strong>&nbsp;- US input to help India meteorological department predict rains better (India Times) -&nbsp;<a href="https://www.weather.gov/exit?url=http://articles.economictimes.indiatimes.com/2012-04-20/news/31374048_1_rains-input-forecast-monsoon" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Click here to read</a><br>
			<br>
			<strong>April 2012</strong>&nbsp;- Visiting Indian scientist Roxy Mathew presents to EMC -&nbsp;<a href="http://www.emc.ncep.noaa.gov/monsoondesk/docs/cfs2_iitm_ncep.pdf" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">View presentation here</a><br>
			<br>
			<strong>April 2012</strong>&nbsp;- Visiting Indian scientist Ashish Routray presents to EMC -&nbsp;<a href="http://www.emc.ncep.noaa.gov/monsoondesk/docs/Presentation-NCEP-modf.ppt" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">View presentation here</a><br>
			<br>
			<strong>March 2012</strong>&nbsp;- Indian scientist Ashish Routray arrives for two month visit as part of his work with the SARR project<br>
			<br>
			<strong>March 2012</strong>&nbsp;- Output from NCMRWF's GFS system is now included in NCEP/EMC's model verification graphics -&nbsp;<a href="http://www.emc.ncep.noaa.gov/gmb/STATS_vsdb/" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">View images here</a><br>
			<br>
			<strong>March 2012</strong>&nbsp;- Indian scientist Roxy Mathew arrives for three month visit to work on Earth System Model development with CFSv2.<br>
			<br>
			<strong>December 2011</strong>&nbsp;- Indian presentations at NCEP Annual Production Suite Review -&nbsp;<a href="http://www.emc.ncep.noaa.gov/monsoondesk/events.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">View presentations here</a><br>
			<br>
			<strong>November 2011</strong>&nbsp;- Visit by Suryachandra A. Rao from IITM, India<br>
			<a href="http://www.emc.ncep.noaa.gov/monsoondesk/events.html" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">View presentation here</a><br>
			<br>
			<strong>August 2011</strong>&nbsp;- CFSv3 Planning Meeting -&nbsp;<a href="http://www.cpc.ncep.noaa.gov/products/ctb/meetings/2011/CFSv3/" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">View presentations here</a><br>
			<br>
			<strong>August 2011</strong>&nbsp;-&nbsp;<a href="https://www.weather.gov/exit?url=http://www.tropmet.res.in/static_page.php?page_id=121" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">IITM National Monsoon Mission website</a><br>
			<br>
			<strong>July 2011</strong>&nbsp;- The Hurricane Weather Research and Forecasting (HWRF) System has been installed at the India Meteorological Department (IMD) for Tropical Cyclone Forecast for Indian Seas.&nbsp;<a href="http://www.emc.ncep.noaa.gov/monsoondesk/docs/report_hwrf_final.pdf" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Click to read trip report</a><br>
			<br>
			<strong>April 2011</strong>&nbsp;- With the completion of the National Monsoon Mission Scoping Workshop at IITM in Pune, India (April 11-15, 2011) the Monsoon Desk at NCEP/EMC is open for business!<br>
			<a href="http://www.emc.ncep.noaa.gov/monsoondesk/ppts/scoping201104" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Click to view NCEP presentations from workshop</a></span></span></span><br>
			&nbsp;</div>
			</td>
			<td>
			<ul>
				<li><span style="font-size:18px;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Arial,Helvetica,sans-serif;">Experimental version of GFS 10.0.0 ported to IITM &amp; NCMRWF - February 2012<span style="color: rgb(0, 0, 0);"><span style="font-family: Arial,Helvetica,sans-serif;"></span></span></span></span></span></li>
				<li><span style="font-size:18px;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Arial,Helvetica,sans-serif;">EnKF Hybrid GSI update - Spring 2012<span style="font-size:18px;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Arial,Helvetica,sans-serif;"></span></span></span></span></span></span></li>
			</ul>
			</td>
		</tr>
		<tr>
			<td><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><strong><span style="font-size:medium">MAILING LIST &amp; CONTACTS</span></strong></span></span></span></td>
		</tr>
		<tr>
			<td><strong><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><a href="mailto:monsoon.desk@tropmet.res.in" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">To submit questions to Monsoon Desk listserv or to be added to it</a>, contact <a href="mailto:monsoon.desk@tropmet.res.in">monsoon.desk@tropmet.res.in</a><br>
			<br>
			Contact the EMC Monsoon Desk at <a href="mailto:emc.monsoondesk@noaa.gov">emc.monsoondesk@noaa.gov</a></span></span></span></strong><br>
			&nbsp;</td>
		</tr>
		<tr>
			<td><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><strong><span style="font-size:medium">LINKS</span></strong></span></span></span></td>
		</tr>
		<tr>
			<td>
			<form id="form" name="form">
			<p><span style="font-size:14px;"><strong><span style="color: rgb(0, 0, 0);"><span style="font-family: Arial,Helvetica,sans-serif;">&nbsp;Ministry of Earth Sciences (MoES) links:</span></span></strong></span></p>

			<ul>
				<li><a href="https://www.weather.gov/exit?url=http://www.moes.gov.in/"><strong><span style="color:#000000">Main MoeS page</span></strong></a></li>
				<li><strong><span style="color:#000000"><a href="https://www.weather.gov/exit?url=http://www.tropmet.res.in/"><span style="color:#000000">Indian Institute of Tropical Meteorology</span></a> </span></strong></li>
				<li><strong><span style="color:#000000"><a href="http://www.imd.gov.in/Welcome%20To%20IMD/Welcome.php">India Meteorological Department</a></span></strong><strong><span style="color:#000000">&nbsp;</span></strong></li>
				<li><strong><span style="color:#000000"></span><a href="https://www.weather.gov/exit?url=http://www.incois.gov.in/portal/index.jsp">Indian National Centre for Ocean Information Services</a></strong></li>
				<li><strong><a href="https://www.weather.gov/exit?url=http://www.ncmrwf.gov.in/">National Centre for Medium Range Weather Forecasting</a><span style="color:#000000"></span></strong></li>
				<li><strong><span style="color:#000000"><a href="https://www.weather.gov/exit?url=http://www.tropmet.res.in/static_page.php?page_id=121">IITM - National Monsoon Mission</a>&nbsp; &nbsp; &nbsp;</span></strong></li>
				<li><strong><span style="color:#000000"><a href="https://www.weather.gov/exit?url=http://nwp.imd.gov.in/index.php">IMD - NWP model charts</a>&nbsp; &nbsp; &nbsp;</span><span style="color:#000000">&nbsp;</span><span style="color:#000000">&nbsp;&nbsp; </span></strong></li>
			</ul>
			</form>

			<form id="form" name="form">
			<p><strong><span style="font-size:14px;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Arial,Helvetica,sans-serif;">Climate Prediction Center (CPC) links:&nbsp; &nbsp;&nbsp; </span></span></span></strong></p>

			<ul>
				<li><strong><span style="font-size:14px;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Arial,Helvetica,sans-serif;"><a href="http://www.cpc.ncep.noaa.gov/products/international/africa/africa.shtml">African Desk: SWFDP GFS forecasts</a>&nbsp;&nbsp; </span></span></span></strong></li>
				<li><strong><span style="font-size:14px;"><a href="http://www.cpc.ncep.noaa.gov/products/international/sasia/sasia.shtml"><span style="color: rgb(0, 0, 0);"><span style="font-family: Arial,Helvetica,sans-serif;">South East Asia Weather and Climate graphics</span></span></a></span></strong></li>
				<li><strong><span style="font-size:14px;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Arial,Helvetica,sans-serif;"><a href="http://www.cpc.ncep.noaa.gov/products/Global_Monsoons/Asian_Monsoons/Asian_Monsoons.shtml">Asian/Australian Monsoon graphics</a>&nbsp; &nbsp; &nbsp;</span></span></span></strong></li>
				<li><strong><span style="font-size:14px;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Arial,Helvetica,sans-serif;"><a href="http://www.cpc.ncep.noaa.gov/products/Global_Monsoons/Global-Monsoon.shtml">Global Monsoon graphics</a>&nbsp; &nbsp;</span></span></span></strong></li>
			</ul>
			</form>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;"><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><strong><span style="font-size:medium">SYSTEM INFORMATION QUICK LINKS</span></strong></span></span></span></td>
		</tr>
		<tr>
			<td colspan="2">
			<table style="background-color: transparent; border-collapse: collapse; border-spacing: 0px; box-sizing: border-box;" width="679" height="122" cellspacing="0" border="1" align="center">
				<tbody>
					<tr>
						<td colspan="2"><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><strong>Global Forecast System (GFS)</strong></span></span></span></td>
						<td rowspan="3"><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><strong>CFS<br>
						<a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/cfs.php">Climate Forecast System</a></strong></span></span></span><br>
						&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</td>
						<td rowspan="3"><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><strong>HWRF<br>
						<a href="https://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/index.php">Hurricane Weather Research<br>
						and Forecast System</a></strong></span></span></span><br>
						&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</td>
					</tr>
					<tr>
						<td><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><strong>ANALYSIS</strong></span></span></span></td>
						<td><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><strong>FORECAST MODEL</strong></span></span></span></td>
					</tr>
					<tr>
						<td><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><br>
						<strong><a href="https://www.emc.ncep.noaa.gov/data_assimilation/data.html">Gridpoint Statistical Interpolation (GSI)</a></strong></span></span></span><br>
						&nbsp;</td>
						<td><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><br>
						<a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gfs.php"><strong>Global Forecast System (FV3 model)</strong></a></span></span></span><br>
						&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>
</div>
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
 
