<?php include '../../header.php';?>

    <link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-seminar.css" media="all">
	<link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-content-template.css" media="all">
	
	<section class="main-first-content-row">
			<div class="container">
			
			<div class="row">
			  <div class="col-md-12"><h2 class="page-title">Seminars</h2><h2></h2></div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-3 left-side-bar">
						<ul class="list-group">
							<li class="list-group-item"><a href="../seminars.php" class="see-link">Seminars</a>
							</li>
						</ul>
					  
					</div>
					<div class="col-md-9">
						<h3> 18 July 2018: Hydrologic Prediction through Changes in Soil Moisture and Snowpack:  Estimating Natural and Anthropogenic Fluxes </h3>
						<h4> NCWCP | Tuesday July 10, 2018 | Time: 10:00 AM North American Eastern</h4>
					<div class="seminar-overview">
						<p>An approach for producing spatial estimates of evaporation using changes in soil moisture from NASA’s SMAP satellite will be presented and evaluated at a set of monitoring sites across the U.S.
						</p>
					</div>	
                    <!-- Org Diagram -->
                    						
                    
                    <br>
                    <br>
                                        						
                    <!-- Org diagram -->

						<div class="seminar-speaker-info">
    						<h4> Speaker</h4>
    						<h5> Ben Livneh</h5>
    						<p>University of Colorado / CIRES</p>
						</div>

						<div class="seminar-speaker-abstract">
						<h4> Abstract</h4>
						<p>Water stored at the Earth surface—in the soil and snow—represents a window into the future and past, controlling the rate of water transfer to the atmosphere and rivers, and providing a basis for forecasting. The first part of this presentation will focus on two applications using remotely sensed soil moisture to estimate evaporation and irrigation. Evaporation is an integral component of the water balance, yet it’s estimation over large areas is limited by observational scarcity and is hence typically estimated using models. An approach for producing spatial estimates of evaporation using changes in soil moisture from NASA’s SMAP satellite will be presented and evaluated at a set of monitoring sites across the U.S.

Next, variations in remotely sensed soil moisture are evaluated as a means to estimate irrigation. Water withdrawals for agriculture represent the single largest consumptive use for many parts of the U.S., bearing a large anthropogenic footprint on the water and energy cycles. However, practical challenges exist in estimating irrigation magnitude and resulting impacts on water supply modeling. A synthetic data assimilation experiment is presented to estimate irrigation, with potential errors sources evaluated using land surface outputs in the place of remote sensing.

The last part of the presentation will focus on how the predictive value of snowpack-based drought indicators—identified as the most useful and reliable drought indicator by western U.S. water stakeholders—are expected change in a warmer world; where projections show more rain versus snow. Across the western U.S., snow-water equivalent (SWE) at key dates during the year (e.g., April 1) is routinely used in water resource planning as it embodies stored water to be released, through melt, during critical periods later in the summer. The robustness of these snowpack-based drought indicators will be assessed under historical and future climate.
						</p>
						</div>
						
						<div class="seminar-attendance">
							<h4> Attendance</h4>
							<p>
								The seminar is open to anyone interested in the field of forecasting systems. 
								<!--  To register, please complete the online registration form by May 10 2017.-->
							</p>
							
							<ul class="list-group">
								<li class="list-group-item">Web Conference link: <a href="https://ncwcp-meet.webex.com/ncwcp-meet/j.php?MTID=me96b2f1147f3e3e099c3a491afc5f3b4">NCWCP Webex</a></li>
								
                    
																								
 								<li class="list-group-item">webex meeting number: 900  82 6 7 95 </li>
 								<li class="list-group-item">webex meeting Passcode: a3YhdEPN</li>
 								<li class="list-group-item">Meeting Phone Number: (877) 953-0315</li>
 								<li class="list-group-item">Meeting Toll Phone Number: (517) 268-7866</li>
 								<li class="list-group-item">Participate Passcode: 1262920#</li>
 								<li class="list-group-item">Point of Contact: Youlong Xia</li>
 								<li class="list-group-item">Point of Contact Phone Number: (301) 683-3696</li>
							</ul>
							
							<p>
								The NOAA Center for Weather and Climate Prediction (NCWCP)
								5830 University Research Court College Park, MD 20740 
								The Conference center is located on the right of the main entrance. 
								Room number is 2155 and is located in 2nd floor of NCWCP. 
							</p>
						</div>
						
						<div class="container-fluid">
							<div class="row">
							  <div class="col-md-8">
								  <div class="seminar-topics">
									<h4> Topics</h4>
									<ul class="list-group">
										<li class="list-group-item">Soil Moisture, snowpack, land-surface physics</li>
										<li class="list-group-item">Ben Livneh</li>
									</ul>
								  </div>
							  </div>
							</div>
						</div>
						
					</div>
				</div>
					
			</div>
			
			</div>
	</section>
	
<script type="text/javascript">
 // Configure/customize these variables.
    var showChar = 100;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Show more >";
    var lesstext = "Show less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
</script>
<?php include '../../footer.php';?>