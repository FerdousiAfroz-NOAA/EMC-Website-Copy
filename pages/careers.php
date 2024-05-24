<?php include '../header.php';?>

    <link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-about.css" media="all">
	<link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-content-template.css" media="all">

<div class="container-fluid  main-content">
		<section class="main-first-content-row">
			<div class="container">
				<div class="row">
				  <div class="col-lg-12"><h2 class="page-title">Careers<h2></div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="col-lg-3 left-side-bar">
							<ul class="list-group">
								<li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pagesAbout.php" class="see-link">About</a>
            						<ul class="list-group">
                						<li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/strategicvision.php">Our Strategic Vision</li>
                                        <li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/ourhistory.php">Our History</a></li>
                                        <li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/components-leadership.php">Components/Leadership</a></li>
                                        <li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/collaborators.php">Collaborators</a></li>
                                        <li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/docs/EMC_Awards.pdf">Awards</a></li>
                                        <li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/careers.php">Careers</a></li>
                                        <li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/contact.php">Contact Us</a></li>
                                        <li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/staff.php">Staff Directory</a></li>
                                     </ul>
                                 </li>
							</ul>
						  
						</div>
						
						<div class="col-lg-9">
							<div class="seminar-content-page">
								<p>NWS is successful in achieving its wide range of environment-focused missions through the support of a highly-skilled workforce. 
								NWS employs over 4,000 people serving in a variety of careers, including scientific, technical, and administrative positions in offices 
								across the country. We hope you will explore opportunities with NWS and join us in enhancing life through science!</p>

								<p>Job vacancies with the NWS are posted on the <a href="https://www.usajobs.gov/" target="_blank">USAJOBS</a> 
								website and all applicants must have an account with USAJOBS in order to submit application materials.&nbsp; By using USAJOBS, you may fine-tune your 
								job search by occupation, pay, or location, and you may also set your account to automatically notify you when positions of interest to you are open.&nbsp; 
								Additional information is available through the 
								<a href="https://help.usajobs.gov/index.php/Main_Page" target="_blank">USAJOBS Resource Center</a>.</p>

                                <div class="region region-content">
                                    <div class="block block-system" id="block-system-main">
                                        <div class="content">
                                            <div about="/find/careers" class="ds-1col node node-page view-mode-full  clearfix" typeof="foaf:Document">
                                                <div class="field field-name-body field-type-text-with-summary field-label-hidden">
                                                    <div class="field-items">
                                                        <div class="field-item even" property="content:encoded">
                                                        <p>&nbsp;</p>
                                                        
                                                        <p>Other career opportunities:</p>
                                                        
                                                        <ul>
                                                        	<li>
                                                        	<p><a href="https://www.weather.gov/exit?url=http://www.ametsoc.org/careercenter/index.html">How to be a meteorologist</a></p>
                                                        	</li>
                                                        	<li>
                                                        	<p><a href="http://www.careers.noaa.gov/">Careers at NOAA</a></p>
                                                        	</li>
                                                        	<li>
                                                        	<p><a href="http://www.nws.noaa.gov/careers.php">NWS careers related materials</a></p>
                                                        	</li>
                                                        </ul>
                                                        
                                                        <p>Interested in serving as a commissioned officer in the NOAA Corps, one of the nation's seven uniformed services? 
                                                        If so, visit the <a href="https://www.omao.noaa.gov/learn/noaa-commissioned-officer-corps">NOAA Corps website</a>.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
 																
 								<div class="container-fluid">
        							<div class="row"></div>
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
<?php include '../footer.php';?>
