<?php
global $browser_title;
 $browser_title = 'GEFS';
 include '../../portal_header.php';?>

<?php include 'sidebar.php';?>

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
     <h2 id="section-title">GEFS FAQ</h2>
        <div id="description">

<b><center><font color="#3300CC"><font size="+1">BACKGROUND INFO<BR>ON<BR>NCEP GLOBAL ENSEMBLE PRODUCTS & DATA SOURCES</font></font></center></b>
<br>
<br>
<blockquote><big><span style="font-weight: bold;">
<a href="#PQPF" style="text-decoration:underline;">
Probabilistic Forecasts of Quantitative Precipitation from the NCEP Global Ensemble</a>
</big></blockquote>

<blockquote><big><span style="font-weight: bold;">
<a href="#RMOP" style="text-decoration:underline;">
Relative Measure of Predictability</a>
</big></blockquote>

<blockquote><big><span style="font-weight: bold;">
<a href="#NSPREAD" style="text-decoration:underline;">
Ensemble Normalized Spread</a>
</big></blockquote>

<blockquote><big><span style="font-weight: bold;">
<a href="https://www.emc.ncep.noaa.gov/gmb/ens/spaghetti/spag_frame.htm" style="text-decoration:underline;">
Ensemble (Medium & Short Range) Spaghetti Diagrams</a>
</big></blockquote>
<br>
<div id="tabs">
</div> 

<blockquote><b><center><font color="#3300CC"><font size="+1">TRAINING ON THE
USE OF ENSEMBLE
FORECASTS</font></font></b></center></blockquote>
<br>
<blockquote><big><span style="font-weight: bold;">
Statistical Downscaling Approach and its Application - 
<a href="https://www.emc.ncep.noaa.gov/gmb/ens/papers/Bo_Downscaling_070412.ppt" style="text-decoration:underline;">PPT</a> - 12 Apr 2007
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Tropical-Extratropical Interactions Case Study - <a href="https://www.emc.ncep.noaa.gov/gmb/targobs/target/special/powerpoint/gmb_1026_rev.ppt" style="text-decoration:underline;">PPT</a>
- 23 Nov 2005
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
WSR-2005 - <a href="https://www.emc.ncep.noaa.gov/gmb/targobs/target/powerpoint/WSR2005.ppt" style="text-decoration:underline;">PPT</a>
- 23 Nov 2005
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Advanced Warnings for High Impact Weather - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/papers/Toth_Managua_final.ppt" style="text-decoration:underline;">PPT</a> - 7 Nov 2005
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Adaptive Use of AQUA Brightness Temperatures in Winter Storm Recon Case
Studies - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/papers/train-airs5.ppt" style="text-decoration:underline;">PPT</a> - 11 Oct 2005
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Probabilistic Forecasting - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/papers/prob_gaynor.pdf" style="text-decoration:underline;">PDF</a> - 28 Mar 2005
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Data Assimilation and Ensemble Forecasting - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/papers/Toth_DA_workshop2.pdf" style="text-decoration:underline;">PDF</a> - 28 Mar 2005
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Predictability Research with Indian Monsoon Examples - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/papers/Toth_India.pdf" style="text-decoration:underline;">PDF</a> - 28 Mar 2005
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
North American Ensemble Forecast System (NAEFS) - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/papers/toth_naefs_tigge.pdf" style="text-decoration:underline;">PDF</a> - 28 Mar 2005
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Ensemble Forecasting at NCEP - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/papers/Toth_NWP_Symp_short.pdf" style="text-decoration:underline;">PDF</a> - 28 Mar 2005
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Weather Forecast Process and Uncertainty - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/papers/toth_talk_final_kobe.pdf" style="text-decoration:underline;">PDF</a> - 28 Mar 2005
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
WSR-2004 - <a href="https://www.emc.ncep.noaa.gov/gmb/targobs/target/powerpoint/NEW_WSR2004.ppt" style="text-decoration:underline;">PDF</a> - 23 Nov 2005&nbsp; (updated)
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
General Description of the Weather Forecast Process with Emphasis on Forecast Uncertainty - 
<a href="https://www.emc.ncep.noaa.gov/gmb/ens/toth_talk_final_kobe.pdf"><span style="text-decoration: underline;" style="text-decoration:underline;">PDF</span> </a>- 22 Feb 2005
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Present status and future directions for ensemble forecasting at NCEP -
<a href="https://www.emc.ncep.noaa.gov/gmb/ens/Toth_NWP_Symp_short.pdf" style="text-decoration:underline;"> PDF</a> - June 16, 2004
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Review of North American Ensemble Forecast System - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/naefs_briefing2.pdf" style="text-decoration:underline;"> PDF</a> - June 3, 2004
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Probabilistic Forecasts and their Verification - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/umprob.ppt" style="text-decoration:underline;">PPT</a> - 11 May 2004
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Performance of Experimental Ensemble Forecasts with Multiple Versions of NCEP's GFS Model - 
<a href="https://www.emc.ncep.noaa.gov/gmb/ens/papers/AMS2004PRES-HOU.ppt" style="text-decoration:underline;">PPT</a> - January 2004
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Results from the WSR 2002-2003 - <a href="https://www.emc.ncep.noaa.gov/gmb/targobs/papers/WSR-ams2004.ppt" style="text-decoration:underline;">PPT</a> - January 2004
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Overview of Predictability Related Work at NCEP - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/Toth1.pdf" style="text-decoration:underline;">PDF</a> - November 2003
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
THORPEX - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/thorpex_nws_talk.ppt" style="text-decoration:underline;">PPT </a> - 5 November 2003
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
The North American Ensemble Forecast System <a href="https://www.emc.ncep.noaa.gov/gmb/ens/naefs.ppt" style="text-decoration:underline;">PPT</a> - 30 September 2003
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Recent Changes in the NCEP Global Ensemble Forecast System - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/ens_impl.ppt" style="text-decoration:underline;">PPT</a> - 19 September 2003
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Track Verification - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/trackerror_hpc.ppt" style="text-decoration:underline;">PPT</a> - 4 September 2003
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Predicting Predictability - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/toth_savanna.ppt" style="text-decoration:underline;">PPT</a> - 19 February 2003
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Methods to Evaluate Probabilistic and Ensemble Forecasts - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/fnl.ppt" style="text-decoration:underline;">PPT</a> - 5 November 2002
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Intercomparison of the Canadian, ECMWF, and NCEP Ensemble Forecast Systems - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/cmctalk.ppt" style="text-decoration:underline;">PPT</a>
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Ensemble Forecasting at NCEP - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/canadaworkshop.ppt" style="text-decoration:underline;">PPT</a>
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
NOAA THORPEX Initiative - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/NOAA_THORPEX_INITIATIVE.ppt" style="text-decoration:underline;">PPT</a>
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Validation of Probabilistic Forecasts - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/training/ecprobver.pdf" style="text-decoration:underline;">PPT</a> - September 2002
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Adaptive Observations at the NWS: The Winter Storm Reconnaissance Program - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/training/nwstarg.pdf" style="text-decoration:underline;">PPT</a> - July 2002
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Global Ensemble Forecasting at NCEP - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/training/ncepwks/ncepwks.html" style="text-decoration:underline;">PPT</a> - November 2000 
(<a href="https://www.emc.ncep.noaa.gov/gmb/ens/training/ncepwkshort.pdf" style="text-decoration:underline;">Short Version</a>)
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Ensembles in Climate Forecasting - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/training/climate.pdf" style="text-decoration:underline;">PPT</a> - March 2002
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
On the Use and Value of Probabilistic Forecasts - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/target/ens/ensgen.html" style="text-decoration:underline;">web page</a>
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Bias-Corrected ProbabilistIC QPF Forecasts - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/training/pqpfcal.pdf" style="text-decoration:underline;">PPT</a> - GCIP/GAPP
</big></blockquote>

<blockquote><big><span style="font-weight: bold;">
ENSEMBLE FORECASTING AT NCEP - <a href="https://www.emc.ncep.noaa.gov/GEFS/gmb/ens_detbak.html" style="text-decoration:underline;">web page</a>
</big></blockquote>
<blockquote><big><span style="font-weight: bold;">
Economic Value of Forecasts - <a href="https://www.emc.ncep.noaa.gov/gmb/ens/target/econ.html" style="text-decoration:underline;">web page</a>
</big></blockquote>


<table align="right" width="500" border="1" bordercolor="#6699ff" cellpadding="2" cellspacing="0" rules="none">
<tr valign="top" align="left">
<td><font color="#3300CC"><font size="+1">Examples:</font></font></td>
<tr valign="top" align="left">
<td><a href="https://www.emc.ncep.noaa.gov/gmb/ens/target/rel.html" style="text-decoration:underline;">Variations in Forecast Reliability</a></td>
</tr>
<tr valign="top" align="left">
<td>A Weather Event with <a href="https://www.emc.ncep.noaa.gov/gmb/ens/target/highpred.html" style="text-decoration:underline;">Exceptionally High Predictability</a></td>
</tr>
<tr valign="top" align="left">
<td> A "<a href="https://www.emc.ncep.noaa.gov/gmb/ens/target/nostorm.html" style="text-decoration:underline;">False Alarm</a>" Case with Low Predictability</td>
</tr>
<tr valign="top" align="left">
<td>Impact of <a href="https://www.emc.ncep.noaa.gov/gmb/ens/target/wsr2000/example0209/obsimpact.html" style="text-decoration:underline;">Targeted Observations</a>, 2000020900</td>
</tr>
<tr valign="top" align="left">
<td><a href="https://www.emc.ncep.noaa.gov/gmb/ens/training/example00091812/example00091812.html" style="text-decoration:underline;">Can Regime Changes be Predicted?</a></td>
</tr>
<tr valign="top" align="left">
<td><a href="https://www.emc.ncep.noaa.gov/gmb/ens/training/example02030400/example02030400.html" style="text-decoration:underline;">Regime Change Forecast at 15-day Lead Time</a></td>
</tr>
<tr valign="top" align="left">
<td><a href="https://www.emc.ncep.noaa.gov/gmb/ens/training/example01030500/example01030500.html" style="text-decoration:underline;">The Snow Storm of 4-6 March 2001</a> - Can We Foresee Difficulties?</td>
</tr>
<tr valign="top" align="left">
<td>A <a href="https://www.emc.ncep.noaa.gov/gmb/ens/training/example01031300/example01031300.html" style="text-decoration:underline;">Highly Predictable Heavy Precipitation</a> Event</td>
</tr>
<tr valign="top" align="left">
<td>A Case With a <a href="https://www.emc.ncep.noaa.gov/gmb/ens/training/example01101700/text.html" style="text-decoration:underline;">Highly Predictable Small, and a Poorly Predictable Large Scale Feature</a></td>
</tr>
<tr valign="top" align="left">
<td>Assessing <a href="https://www.emc.ncep.noaa.gov/gmb/ens/training/example02031200/example02031200.html" style="text-decoration:underline;">High and Low Predictability</a> in Real Time</td>
</tr>
</table>

<blockquote>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</blockquote>
<div id="tabs">
</div> 

<blockquote><big><b><center>
<a name="PQPF"></a>ENSEMBLE PROBABILISTIC FORECASTS OF QUANTITATIVE PRECIPITATION <BR>*PQPF*</center><br></b>
In these charts, the probability that 24-hour precipitation amounts  over a 2.5x2.5 lat-lon grid box will 
exceed a certain threshold values is given.  The forecast probability is estimated directly from the 17-member global 
ensemble. At each gridpoint, the number of ensemble members having a 24-hour  precipitation amount greater than the 
limit considered is counted <font color="#3300CC">(M)</font> and the probability is expressed as 
<font color="#3300CC">100*(M/17)</font>. In addition to the color shading, the 5, 35, 65 and 95% probability isolines 
are also drawn. If the NCEP MRF model has a bias or the perturbed ensemble forecasts do not span the range of uncertainty 
perfectly, the raw probability values from the ensemble may be biased as well. So the products should be used and 
evaluated with this in mind. We plan to calibrate the forecast probabilities based on observed rainfall data after 
which the new, more reliable probability values will be displayed. In particular we expect that the calibrated 
probability forecasts will be less sharp, i. e., the probabilities close to 0 and 100 will be used less frequently. 
For the purpose of comparison, plots of the MRF precipitation forecasts are included for the US region.
<br>
</big></blockquote>

<div id="tabs">
</div> 

<blockquote><big><b><center>
<a name="RMOP"></a>ENSEMBLE RELATIVE MEASURE OF PREDICTABILITY<BR>*RMOP*</center><br></b>
The colors on these figures measure the relative predictability associated with ensemble mean forecasts (contours) on a scale 
from 0 to 100. Relative predictability is measured by the number of ensemble members falling into the same, climatologically 
equally (10%) likely bin in which the ensemble mean falls. Quantitatively, dark blue (red) areas are associated with 10% of all 
cases exhibiting the lowest (highest) level of predictability at any lead time (Fig. 1), while intermediate colors mark areas 
with predictability values in between.<br><center>
<img src="https://www.emc.ncep.noaa.gov/gmb/targobs/target/ens/probpapw_page3.gif"></center><br>
Verification studies indicate that the more ensemble members predict an event, the more likely that event verifies.  
Forecast probability values, marked by the same colors, are based on past verification statistics, reflecting the relative 
frequency at which the verifying analysis falls into a climate bin with a given number of ensemble members. The probability 
values reflect temporal/spatial <a href="#EnsProb" style="text-decoration:underline;">variations in the degree of predictability</a> arising due to initial value uncertainty in a 
chaotic system, and also account for the effect of using an imperfect model. While probability values, due to the overall 
loss of predictability, tend to approach the asymptotic value of 10% climate probability with increasing lead time, the 
range of relative predictability valules is kept unchanged by design.
<br><br>
The red and blue curves on Fig. 2 summarize verification statistics corresponding to the most and least predictable 10-15% 
of all cases, marked as red and blue areas respectively on the relative measure of predictability charts.<br><center>
<img src="https://www.emc.ncep.noaa.gov/gmb/targobs/target/ens/probpapw_Auto1.gif"></center><br>
Note that at longer lead times the low- and medium predictability cases show similar probability values. The relative measure 
of predictability charts can help users take advantage of the ensemble's most important benefit, its ability to objectively 
identify cases when the forecasts are either below or above the average level of predictability (marked by a green curve 
on Fig. 2). 
<br>
</big></blockquote>

<div id="tabs">
</div> 

<blockquote><big><b><center>
<a name="EnsProb"></a>ENSEMBLE BASED PROBABILISTIC FORECASTS</center><br></b>
After a little statistical postprocessing (that can be done operationally and that takes care of the bias in probabilities 
arising due to model/ensemble problems) probabilistic forecasts from the global ensemble are very reliable. If the ensemble 
suggests an event will happen with 80% (or 10%) probability, that type of event will verify with roughly 80% (or 10%) of such 
forecast cases! Please see examples of reliability diagrams for 12-24 hr and 120 hr forecasts.<br><center>
<img src="https://www.emc.ncep.noaa.gov/gmb/targobs/target/ens/fig1.gif">
<img src="https://www.emc.ncep.noaa.gov/gmb/targobs/target/ens/fig2.gif"></center><br>
We get similarly reliable probabilistic forecasts at all lead times out to 15 days. Note, however, that at longer lead times 
forecast probability values will generally be further and further restricted toward values near climatological probabilities, 
reflecting the loss of predictability at longer lead times. <br><br>
On different days the loss of predictability, however, occurs at various lead times: for example, 10-15% OF THE TIME A 12-DAY 
FORECAST CAN BE AS GOOD, OR A 1-DAY FORECAST CAN BE AS POOR AS AN AVERAGE 4-DAY FORECAST!<br><center>
<img src="https://www.emc.ncep.noaa.gov/gmb/targobs/target/ens/fig3.gif"></center><br>
And the ensemble can reliably identify these cases in advance.  By using the full probability information from the ensemble 
(red line), as compared to using categorical forecasts from the control forecasts (green and blue lines), the information 
content of a 5-day forecast can be more than doubled; or a 7.5 day forecast with the full ensemble-based probablity distribution 
has as much information as a 5-day categorical forecast guidance based on a single deterministic run. <br><center>
<img src="https://www.emc.ncep.noaa.gov/gmb/targobs/target/ens/fig4.gif"></center><br>
<br>
</big></blockquote>

<div id="tabs">
</div> 

<blockquote><big><b><center>
<a name="NSPREAD"></a>ENSEMBLE NORMALIZED SPREAD</center><br></b>
Normalized spread is computed by averaging the spread values at every gridpoint separately for the most recent 30 days, 
for each lead time. Today's ensemble spread then is divided by the average spread (for each gridpoint and lead time separately). 
Normalized spread values below (above) 1 represent areas where today's spread is below (above) the typical spread over the most 
recent 30 day period,  With this normalization the effect of different lead times and different geographical areas is eliminated. 
Consequently the forecasters can identify areas with below and above average uncertainty in the forecast at any lead time and at 
any geographical location. 
<br>
</big></blockquote>

<div id="tabs">
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
