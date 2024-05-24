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
						<h3> 29 May 2018: The emerging role of the land surface in weather and climate prediction </h3>
						<h4> NCWCP | Tuesday May 29, 2018 | Time: 12:00 PM North American Eastern</h4>
					<div class="seminar-overview">
						<p>I will briefly present some applications of CNOP to the ENSO spring predictability barrier, Indian Ocean dipole, North Atlantic oscillation (NAO) onset, and ocean circulation of Kuroshio path variations. An interesting phenomenon that the similarities between optimal precursors and optimally growing initial errors will be shown, and related targeted observations issues will be discussed.

The challenges, related to the calculations of CNOP, to the targeted observations of tropical cyclones, and to ensemble forecasts, will be discussed too.
						</p>
					</div>	
                    <!-- Org Diagram -->
                                        						
                    <!-- Org diagram -->

						<div class="seminar-speaker-info">
    						<h4> Speaker</h4>
    						<h5> Paul Dirmeyer</h5>
    						<p>George Mason University-COLA</p>
						</div>

						<div class="seminar-speaker-abstract">
						<h4> Abstract</h4>
						<p>Like the ocean, the land surface is a slowly varying manifold relative to the atmosphere that provides predictability and prediction skill across a range of time scales. Although the peak influence of land surface states is in the “subseasonal” time range between 1-3 weeks, significant impact of land, or errors in its representation, begins in forecasts the first morning of simulation. The process chains that link soil moisture, vegetation, snow, and other land states through the energy and water cycles manifest though their effects on the growing daytime boundary layer, cloud formation and convection. Thus, the diurnal cycle is key to assessing and improving model performance related to land-atmosphere interactions. Daily, monthly and seasonal mean skill arising from coupled land-atmosphere feedbacks can only improve by improving the diurnal cycle.
						</p>
						</div>
						
						<div class="seminar-attendance">
							<h4> Attendance</h4>
							<p>
								The seminar is open to anyone interested in the field of forecasting systems. 
								<!--  To register, please complete the online registration form by May 10 2017.-->
							</p>
							
							<ul class="list-group">
								<li class="list-group-item">Web Conference link: <a href="https://ncwcp-meet.webex.com/mw3300/mywebex/default.do?service=1&amp;siteurl=ncwcp-meet&amp;nomenu=true&amp;main_url=%2Fmc3300%2Fe.do%3Fsiteurl%3Dncwcp-meet%26AT%3DMI%26EventID%3D429387%26UID%3D9772%26Host%3DQUhTSwAAAAIrJJ0D-y89i7YvegDZDCr-lhcHdQ1VXU4YM6vVY9KG0Xh1LL35gTpUM4G5-By0uDX1d0llZTzO-nDtdf63AWaq0%26FrameSet%3D2%26MTID%3Dme96b2f1147f3e3e099c3a491afc5f3b4">NCWCP Webex</a></li>
								
                    
																								
 								<li class="list-group-item">webex meeting number: 900  82 6 7 95 </li>
 								<li class="list-group-item">webex meeting Passcode: a3YhdEPN</li>
 								<li class="list-group-item">Meeting Phone Number: (877) 953-0315</li>
 								<li class="list-group-item">Meeting Toll Phone Number: (517) 268-7866</li>
 								<li class="list-group-item">Participate Passcode: 1262920#</li>
 								<li class="list-group-item">Point of Contact: Holly Norton</li>
 								<li class="list-group-item">Point of Contact Phone Number: (301) 362-3651</li>
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
										<li class="list-group-item">Land-surface modeling</li>
										<li class="list-group-item">Paul Dirmeyer</li>
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
