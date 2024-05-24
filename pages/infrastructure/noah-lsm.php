<?php 
global $browser_title;
 $browser_title = 'NOAH-LSM';   
 include '../portal_header.php';?>

<?php include 'noah-lsm/sidebar.php';?> 

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
     <h2 id="section-title">NOAH-Land Surface</h2>
     	<div id="description">
				<h1 style="text-align: center;"><span style="font-size:12px;"></span><strong><span style="font-size:26px;">Community Noah Land-Surface Model</span></strong></h1>

                <p style="font-size:12px;line-height:2;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The Community Noah land-surface model (Noah-LSM) is the land-surface physics component of NCEP's operational atmospheric models. Noah-LSM development can be traced back the early 1990's, when under the sponsorship of the NOAA/OGP GWEX/GAPP Program Office the Environmental Modeling Center joined with the NWS Office of Hydrology and the NESDIS Office of Research and Applications (ORA) to develop a modern-era land-surface model (LSM) suitable for use in NCEP's operational weather and climate prediction models. At NCEP, the NOAA-LSM was first coupled to the operational NCEP mesoscale Eta model on 31 Jan 1996, with significant Eta (now NAM) LSM refinements subsequently implemented on 18 Feb 1997, 09 Feb 1998, 03 Jun 1998, 24 Jul 2001, 26 Feb 2002, 12 June 2002, and 03 May 2005. Further refinements were implemented as the NAM model switched from Eta to the WRF-NMM in June 2006 and to the NEMS-NMMB in October 2011, up to the final NAM upgrade in March 2017. See the <a href="http://www.emc.ncep.noaa.gov/mmb/mmbpll/eric.html#TAB4">EMC Mesoscale Systems Implementation list</a> for details. In the NCEP Global Spectral model, the 4-layer Noah-LSM replaced the 2-layer OSU model in <a href="http://www.emc.ncep.noaa.gov/gmb/STATS/html/model_changes.html">May 2005</a>.</span></span></p>
                
                <p style="margin-bottom: 0.14in; line-height: 115%"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">FYI, the "NOAH" designation for the land-surface model is intended to formally acknowledge the collaborative efforts of the groups who contributed to </span></span></p>
                
                <p style="margin-bottom: 0.14in; line-height: 115%"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">its development:</span></span></p>
                
                <p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><strong>N: National Centers for Environmental Prediction (NCEP)</strong></span></span></p>
                
                <p style="margin-bottom: 0.14in; line-height: 115%;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><strong>O: Oregon State University (Dept of Atmospheric Sciences)</strong></span></span></p>
                
                <p style="margin-bottom: 0.14in; line-height: 115%;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><strong>A: Air Force; both AFWA (now 577th Weather Wing) and AFRL (formerly AFGL, PL)</strong></span></span></p>
                
                <p style="margin-bottom: 0.14in; line-height: 115%;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><strong>H: Hydrologic Research Lab - NWS (now Office of Hydrologic Dev -- OHD)</strong></span></span></p>
                
                <p style="margin-bottom: 0.14in; line-height: 115%">&nbsp;</p>
                
                <p style="margin-bottom: 0.14in; line-height: 115%; text-align: center;"><strong><span style="font-size:18px;">References</span></strong></p>
                
                <ul>
                	<li>Chen, F., K. Mitchell, J. Schaake, Y. Xue, H. Pan, V. Koren, Y. Duan, M. Ek, and A. Betts, 1996: Modeling of land-surface evaporation by four schemes and comparison with FIFE observations.&nbsp;<em>J. Geophys. Res.</em>,&nbsp;<strong>101</strong>, 7251-7268.</li>
                	<li>Chen, F., Z. Janjic, K. Mitchell, 1997: Impact of atmospheric surface layer parameterization in the new land-surface scheme of the NCEP Mesoscale Eta numerical model.&nbsp;<em>Bound.-Layer Meteor.</em>,&nbsp;<strong>185</strong>, 391-421.</li>
                	<li>Chen, F. and J.Dudhia, 2001: Coupling an Advanced Land Surface-Hydrology Model with the Penn State-NCAR MM5 Modeling System. Part I: Model Implementation and Sensitivity.&nbsp;<em>Mon. Wea. Rev.</em>,&nbsp;<strong>129</strong>, 569-585.</li>
                	<li>Ek, M. B., K. E. Mitchell, Y. Lin, E. Rogers, P. Grummann, V. Koren, G. Gayno, and J. D. Tarpley, 2003: Implementation of Noah land surface model advances in the National Centers for Environmental Prediction operational Mesoscale Eta Model.<em>J. Geophys. Res.</em>,&nbsp;<strong>108</strong>, 8851, doi:10.1029/2002JD003296.</li>
                	<li>Koren, V., J. Schaake, K. Mitchell, Q.-Y. Duan, and F. Chen, 1999: A parameterization of snowpack and frozen ground intended for NCEP weather and climate models.&nbsp;<em>J. Geophys. Res.</em>,&nbsp;<strong>104</strong>, 19569-19585.</li>
                </ul>
                
                <p style="margin-bottom: 0.14in; line-height: 115%">&nbsp;</p>
                
                <h1 style="text-align: center;"><strong><span style="font-size:20px;">The NCEP CPPA/GAPP Core Project</span></strong></h1>
                
                <p><span style="font-size:16px;"><span style="color: rgb(0, 0, 0); font-family: Arial,Helvetica,sans-serif;">On April 1, 1995, the&nbsp;</span><strong>National Centers for Environmental Prediction</strong><span style="color: rgb(0, 0, 0); font-family: Arial,Helvetica,sans-serif;">&nbsp;(</span><strong>NCEP</strong><span style="color: rgb(0, 0, 0); font-family: Arial,Helvetica,sans-serif;">) began routine generation of N. America analysis and forecast fields for the CPPA/GAPP Core Project. This new 48 km resolution "Early Eta" system became operational on 12Z 12 Oct 1995, and output from this operational system began to populate the CPPA/GAPP&nbsp;</span><a href="http://www.emc.ncep.noaa.gov/mmb/gcp/access.perm.html" style="text-decoration: none; color: rgb(0, 0, 0); font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;">tape archive</a><span style="color: rgb(0, 0, 0); font-family: Arial,Helvetica,sans-serif;">&nbsp;on 00Z 1 Nov 95 (prior to 1 Nov 95 the tape archive was populated by the output from the pre-implementation version of the same model). The output files include A) gridded 3-D and 2-D atmospheric fields of wind velocity, temperature, humidity, and cloud water, as well as a whole host of surface, sub-surface, and near surface fields and B) hourly time series output at a large set of selected sites (about 600) over N. America. On June 20, 2006, Eta was replaced by the nonhydrostatic WRF-NMM as the NCEP mesoscale operational model. On October 11, 2011 the WRF-NMM was replaced in the NAM by the NEMS Non-Hydrostatic Multiscale Model on B-Grid (NEMS-NMMB). The final NAM upgrade was implemented in March 2017. A comprehensive list of all NAM implementations from 1995-2017 can be found at <a href="http://www.emc.ncep.noaa.gov/mmb/mmbpll/eric.html#TAB4">EMC's Mesoscale Systems Change List</a>. </span></span></p>
                
                <h3 style="text-align:start"><span style="font-size:16px;">CPPA/GAPP (formerly GCIP) and GEWEX web sites:</span></h3>
                
                <p><a href="http://www.ogp.noaa.gov/mpe/gapp/" style="text-decoration: none; color: rgb(0, 0, 0); font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><img src="http://www.emc.ncep.noaa.gov/mmb/gcp/logos/GAPPlogo.jpg" style="border:none; width:100px"></a><span style="color:#000000; font-family:Arial,Helvetica,sans-serif; font-size:12px">&nbsp;</span><a href="http://www.weather.gov/nwsexit.php?url=http://www.gewex.org/" style="text-decoration: none; color: rgb(0, 0, 0); font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><img src="http://www.emc.ncep.noaa.gov/mmb/www_images/gewex.gif" style="border:none; width:120px"></a><span style="color:#000000; font-family:Arial,Helvetica,sans-serif; font-size:12px">&nbsp;</span></p>
                
                <h3 style="text-align:start">Other Related Links:</h3>
                
                <p style="text-align:justify">&nbsp;&nbsp; <a href="http://wwwt.ncep.noaa.gov/" style="text-decoration: none; color: rgb(0, 0, 0); font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><img alt="NCEP HOME" src="http://www.emc.ncep.noaa.gov/mmb/gcp/logos/ncep_logo.gif" style="border:none; height:80px; width:100px"></a>&nbsp;<a href="http://www.nws.noaa.gov/" style="text-decoration: none; color: rgb(0, 0, 0); font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><img alt="NWS LOGO" src="http://www.emc.ncep.noaa.gov/mmb/gcp/logos/nws_logo.gif" style="border:none; height:80px; width:80px"></a>&nbsp;<a href="http://www.noaa.gov/" style="text-decoration: none; color: rgb(0, 0, 0); font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><img alt="NOAA HOME" src="http://www.emc.ncep.noaa.gov/mmb/gcp/logos/noaa_logo.gif" style="border:none; height:80px; width:80px"></a></p>
                
                <table style="-webkit-text-stroke-width:0px; color:#000000; font-family:Arial,Helvetica,sans-serif; font-size:12px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:normal; letter-spacing:normal; orphans:2; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px" cellspacing="2" cellpadding="2" border="2">
                	<tbody>
                		<tr>
                			<td>
                			<p><a href="http://weather.gov/disclaimer" style="text-decoration: none; color: rgb(0, 0, 0); font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><strong><em>Disclaimer for this non-operational web page</em></strong></a></p>
                			</td>
                		</tr>
                	</tbody>
                </table>
                
                <p><br>
                <span style="color:#000000; font-family:Arial,Helvetica,sans-serif; font-size:12px"></span></p>
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
 
