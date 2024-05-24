<?php 
global $browser_title;
 $browser_title = 'NAEFS';   
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
				<h1 id="wb-cont" style="text-align: center;">North American Ensemble Forecast System (NAEFS)</h1>
        <div style="margin-bottom:20px;"></div>
               <p>
               <img style="display:block;margin-left:auto;margin-right:auto;" src="https://www.emc.ncep.noaa.gov/emc/images/naefs_500mb_ac.png" />
               <p>
               <img style="display:block;margin-left:auto;margin-right:auto;" src="https://www.emc.ncep.noaa.gov/emc/images/NAEFSlogo.gif">
               <div style="margin-bottom:20px;"></div>

                <img src="../../pages/disclaimer/disclaimer_small.png" style="width:80%;display:block; margin:auto; " />
                <p>
                <p><span style="font-size:18px;">The North American Ensemble Forecast System (NAEFS) is a joint project involving the 
                Meteorological Service of Canada (MSC), the United States National Weather Service (NWS) and the National Meteorological 
                Service of Mexico (<abbr title="National Meteorological Service of Mexico">NMSM</abbr>). 
                NAEFS was officially launched in November 2004 in presence of representatives of the three countries.
                </span>
                </p>
                
                
                <p><span style="font-size:18px;">NAEFS combines the state-of-the-art ensemble forecasts run by the MSC's Global Environmental Multiscale Model 
                and the NCEP Global Spectral Model. When combined, the grand ensemble provides weather forecast guidance for the 0-384 hours that is of higher 
                quality than the currently available operational guidance based on either set of ensembles alone. It allows the generation of a set of forecast 
                products that are seamless across the national boundaries between Canada, the United States and Mexico. The research/development and operational 
                costs of the NAEFS system are shared by the three organizations (MSC, NWS, and <abbr title="National Meteorological Service of Mexico">NMSM</abbr>), 
                which make it more cost effective and result in higher quality and more extensive weather forecast products.
                </span>
                </p>
                
                <p><span style="font-size:18px;">NAEFS forecast graphics and information can be found at:</span></p>
                
                <p><span style="font-size:18px;">- 
                    <a href="http://mag.ncep.noaa.gov/model-guidance-model-area.php?group=Model%20Guidance&amp;model=naefs&amp;area=namer&amp;ps=area#">
                    	Official NAEFS graphics at the NCEP Model Analysis and Guidance Page
                    </a></span>
                </p>
                
                <p><span style="font-size:18px;">- 
                    <a href="https://www.emc.ncep.noaa.gov/users/verification/global/naefs/ops/">
                    	NAEFS Verification
                    </a></span>
                </p>
                
                <p>- <a href="http://www.cpc.ncep.noaa.gov/products/predictions/short_range/NAEFS/Outlook_D264.00.php">
                		<span style="font-size:16px;">NCEP Climate Prediction Center NAEFS 8-14 day outlooks</span>
                	</a>
                </p>
                
                <p>- <span style="font-size:16px;">
                	<a href="http://www.cpc.ncep.noaa.gov/products/predictions/short_range/NAEFS/naefs_prcp.php">NCEP Climate Prediction Center NAEFS 6-10 day precipitation 
                	forecast</a></span>
                </p>
                
                <p>-<a href="http://www.nco.ncep.noaa.gov/pmb/products/naefs/"><span style="font-size:16px;"> List of NAEFS Products produced by NCEP</span></a></p>
                
                <p>-<a href="http://www.weather.gov/exit?url=https://weather.gc.ca/ensemble/naefs/index_e.html">
                <span style="font-size:16px;">Meteorological Service of Canada (MSC) NAEFS web site</span></a></p>



                <table class="wikitable" width="545" height="519" border="2">
                	<thead>
                		<tr>
                			<th scope="row">&nbsp;</th>
                			<th scope="col">&nbsp;</th>
                		</tr>
                	</thead>
                	<caption>
                	<p><strong><a href="https://www.weather.gov/media/notification/pdfs/scn18-50naefs_gefsaaa.pdf"><span style="font-size:16px;">NAEFS changes in July 2018</span></a></strong></p>
                	</caption>
                	<caption>
                	<p><strong><a href="https://www.weather.gov/media/notification/tins/tin16-03gefs-naefs_aaa.pdf"><span style="font-size:16px;">NAEFS configuration as of April 2016</span></a></strong></p>
                	</caption>
                	<tbody>
                		<tr>
                			<th scope="row">Models</th>
                			<td>NWS Global Forecasting System (<a href="gfs.php" title="Global Forecast System">GFS</a>) and
                			<p>MSC Global Environmental Multiscale Model (<a href="http://www.weather.gov/exit?url=http://collaboration.cmc.ec.gc.ca/science/rpn/gef_html_public/index.html" title="Global Environmental Multiscale Model">GEM</a>)</p>
                			</td>
                		</tr>
                		<tr>
                			<th scope="row">Daily Frequency</th>
                			<td>0000 UTC and 1200 UTC</td>
                		</tr>
                		<tr>
                			<th scope="row">Forecast Length</th>
                			<td>16 days</td>
                		</tr>
                		<tr>
                			<th scope="row">Initial Condition Uncertainty</th>
                			<td>Ensemble Kalman Filter (EnKF)</td>
                		</tr>
                		<tr>
                			<th scope="row">Control</th>
                			<td>1 NWS + 1 MSC</td>
                		</tr>
                		<tr>
                			<th scope="row">Ensemble Members</th>
                			<td>50 (30 NWS + 20 MSC) for each cycle</td>
                		</tr>
                		<tr>
                			<th scope="row">Post-Processed Probabilistic
                			<p>Products</p>
                			</th>
                			<td>mean, mode, standard deviation,
                			<p>and probabilities (10%, 50%, 90%)</p>
                			</td>
                		</tr>
                		<tr>
                			<th scope="row">Post-Processed Probabilistic
                			<p>Product Resolution</p>
                			</th>
                			<td>NWS/MSC: 1 deg x 1 deg global products
                			<p>NWS: downscaled CONUS 2.5&nbsp;km, Alaska 3&nbsp;km</p>
                			</td>
                		</tr>
                	</tbody>
                </table>

                <p>&nbsp;</p>
                
                <p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify">
                <span lang="en-US"><b>References for GEFS, NAEFS and post processing:</b></span>
                </p>
                
                <p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify">
                <span lang="en-US">Cui, B., Z. Toth, Y. Zhu and D. Hou, 2012: Bias Correction For Global Ensemble Forecast, Weather and Forecasting, 27, 396-410</span>
                </p>
                
                <p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify">
                <span lang="en-US">Cui, B., Y. Zhu, Z. Toth and D. Hou, 2018: Development of Statistical Post-processor for NAEFS. To be submitted to Weather and Forecasting</span>
                </p>
                
                <p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify">
                <span lang="en-US">Guan, H., B. Cui, Y. Zhu, 2015: Improvement of Statistical Postprocessing Using GEFS Reforecast Information, Weather and Forecasting, Vol. 30, 841-854</span>
                </p>
                
                <p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify">
                <span lang="en-US">Hou, D., Z. Toth, Y. Zhu, W. Yang and R. Wobus, 2012: "A Stochastic Total Tendency Perturbation Scheme Representing Model- Related Uncertainties in the NCEP Global Ensemble Forecast System" Submitted to Tellus-A)</span>
                </p>
                
                <p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify">
                <span lang="en-US">Hou, D., M. Charles, Y. Luo, Z. Toth, Y. Zhu, R. Krzysztofowicz, Y. Lin, P. Xie, D-J. Seo, M. Pena and B. Cui, 2012: Climatology-Calibrated Precipitation Analysis at Fine Scales: Statistical Adjustment of STAGE IV towards CPC Gauge-Based Analysis, Jaurnal of Hydrometeorology Vol. 15 2542-2557 </span>
                </p>
                
                <p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify">
                <span lang="en-US">Liu, Q., S. J. Lord, N. Surgi, Y. Zhu, R. Wobus, Z. Toth and T. Marchok, 2006: Hurricane Relocation in Global Ensemble Forecast System, Preprints, 27th Conf. on Hurricanes and Tropical Meteorology, Monterey, CA, Amer. Meteor. Soc., P5.13.</span>
                </p>
                
                <p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify">
                <span lang="en-US">Ma, J., Y. Zhu, D. Wobus and P. Wang, 2012: An Effective Configuration of Ensemble Size and Horizontal Resolution for the NCEP GEFS, Advance in Atmospheric Sciences, Vol. 29, No. 4, 782-794</span>
                </p>
                
                <p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify">
                <span lang="en-US">Ma, J., Y. Zhu, D. Hou, X. Zhou and M. Pena, 2014: Ensemble Transform with 3D Rescaling Initialization Method, Monthly Weather Review, Vol. 142, 4053-4073</span>
                </p>
                
                <p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify">
                <span lang="en-US">Palmer, T. N., R. Buizza, F. Doblas-Reyes, T. Jung, M. Leutbecher, G. Shutts, M. Steinheimer, and A. Weisheimer, 2009: Stochastic Parametrization and Model Uncertainty. ECMWF Tech. Memo. 598, 44.</span>
                </p>
                
                <p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify">
                <span lang="en-US">Shutts, G., 2005: A kinetic energy backscatter algorithm for use in ensemble prediction systems. Quart. J. Roy. Meteor. Soc., 131, 3079-3102.</span>
                </p>
                
                <p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify">
                <span lang="en-US">Toth, Z., and E. Kalnay, 1997: Ensemble forecasting at NCEP and the breeding method. Mon. Wea. Rev., 125, 3297-3319.</span>
                </p>
                
                <p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify">
                <span lang="en-US">Wei, M., Z. Toth, R. Wobus, and Y. Zhu, 2008: Initial Perturbations Based on the Ensemble Transform (ET) Technique in the NCEP Global Operational Forecast System, Tellus 59A, 62-79</span>
                </p>
                
                <p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify">
                <span lang="en-US">Whitaker, Jeffrey S., Thomas M. Hamill, Xue Wei, Yucheng Song, Zoltan Toth, 2008: Ensemble Data Assimilation with the NCEP Global Forecast System. Mon. Wea. Rev., 136, 463-482.</span>
                </p>
                
                <p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify">
                <span lang="en-US">Zhou, X., Y. Zhu, D. Hou, Y. Luo, J. Peng and R. Wobus, 2017: The NCEP Global Ensemble Forecast System with the EnKF Initialization. Wea. Forecasting, 32, 1989-2004.&nbsp; </span>
                </p>
                
                <p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify">
                <span lang="en-US">Zhu Y., and Y. Luo, 2014: Precipitation Calibration Based on Frequency Matching Method (FMM), Weather and Forecasting, Vol. 30, 1109-1124</span>
                </p>
                
                <p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify">&nbsp;</p>
                
                <p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%; text-align: center;" lang="en-GB">
                <a href="https://www.weather.gov/disclaimer">DISCLAIMER</a></p>
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
 
