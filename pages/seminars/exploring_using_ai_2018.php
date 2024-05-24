<?php include '../../header.php';?>

    <link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-seminar.css" media="all">
	<link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-content-template.css" media="all">

<div class="container-fluid main-content">
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
						<h3> Exploring Using Artificial Intelligence (AI) for NWP and Situational Awareness Applications </h3>
						<h4> NCWCP | Tuesday April 24, 2018 | Time: 12:00 PM North American Eastern</h4>
					<div class="seminar-overview">
						<p>Use of AI applications to process large volumes of environmental data for NWP.
						</p>
					</div>	
                    <!-- Org Diagram -->
                                        						
                    <!-- Org diagram -->

						<div class="seminar-speaker-info">
    						<h4> Speaker</h4>
    						<h5> Sid Boukabara</h5>
    						<p>NESDIS/STAR</p>
						</div>

						<div class="seminar-speaker-abstract">
						<h4> Abstract</h4>
						<p>The volume and diversity of environmental data obtained from a variety of Earth-observing systems, has experienced a significant increase in the last couple years with the advent of high spectral, high- spatial and temporal resolutions sensors. At the same time, users-driven requirements, especially for nowcasting and short-term forecasting applications but also for medium-range weather forecasting, strongly point to the need for providing this data in a consistent, comprehensive and consolidated fashion, combining space-based, air-based and surface-based sources, but at higher spatial and temporal resolutions and with low latency. This trend is expected to continue further with the emergence of commercial space-based data from multiple industry players and the advent of flotillas of small satellites (Cubesats) as well as new sources of data (such as Internet of Things IoT) to complement traditional environmental data. Yet, the data volume presents already a significant challenge. Satellite measurements input to data assimilation algorithms for instance, need to be aggressively thinned spatially, spectrally and temporally in order to allow the products generation, calibration, assimilation and forecast system to be executed. Only a fraction of satellite data gets actually assimilated. Taking full advantage of all the observations, allowing more sources of observations to be used for initial conditions setting, and to do it within an ever shrinking window of assimilation/dissemination, requires exploring new approaches for processing the data, from ingest to dissemination. We present in this study the results of a pilot project’s effort to use cognitive learning approaches for numerical weather prediction (NWP) applications. The Google’s machine learning open-source tool TensorFlow, used for many Artificial Intelligence (AI) applications, was used to reproduce the performances of remote sensing and some data assimilation tools (radiative transfer), with flexibility to extend to other sources such as IoT. The approach relies on training a deep-layer neural network on a set of inputs from NASA’s GEOS-5 Nature Run (NR) as well as ECMWF analyses, along with corresponding observations simulated  using the Community Radiative Transfer Model (CRTM) and other forward operators. The present study demonstrates the proof of concept and shows that using AI holds significant promise in potentially addressing the vexing issue of computational power and time requirements needed to handle the extraordinarily highvolume of environmental data, current and expected. It is found that AI-based algorithms have dramatically lower execution times, and provide very favorable performances when compared to traditional approaches.
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
 								<li class="list-group-item">Point of Contact: Brian Gross</li>
 								<li class="list-group-item">Point of Contact Phone Number: (301) 683-3748</li>
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
										<li class="list-group-item">NWP, AI</li>
										<li class="list-group-item">Sid Boukabara</li>
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
	</div>

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
