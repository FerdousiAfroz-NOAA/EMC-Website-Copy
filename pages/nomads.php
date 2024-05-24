<?php include '../header.php';?>

    <link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-about.css" media="all">
	<link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-content-template.css" media="all">

<div class="container-fluid  main-content">
		<section class="main-first-content-row">
			<div class="container">
				<div class="row">
				  <div class="col-lg-12"><h2 class="page-title">NOAA National Operational Model Archive and Distribution System (NOMADS)<h2></div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="col-lg-3 left-side-bar">
							<ul class="list-group">
								<li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/guidance-systems.php" class="see-link">Guidance Systems</a>
            						<ul class="list-group">
                						<li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/ncep-numerical-forecast-systems.php">NCEP Numerical Forecast/Analysis Systems</li>
                                        <li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/verification.php">Verification</a></li>
                                        <li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/emc-research-developmental-graphics.php">EMC Research and Development Graphics</a></li>
                                        <li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/nomads.php" class="see-link">NOMADS Product Site</a></li>
                                        <li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/documentation-support.php">Documentation and Support</a></li>
                                     </ul>
                                 </li>
							</ul>
						  
						</div>
						
						<div class="col-lg-9">
							<div class="seminar-content-page">
								<p><span style="font-size:14px;">The NOAA National Operational Model Archive and Distribution System (NOMADS) is a network of data servers using established and emerging technologies to access and integrate model and other data stored in geographically distributed repositories in heterogeneous formats. NOMADS enables the sharing and comparing of model results and is a major collaborative effort, spanning multiple government agencies and academic institutions. The data available under the NOMADS framework include model input and numerical weather prediction (NWP) gridded output from NCEP, and global climate models (GCMs) and simulations from GFDL and other leading institutions from around the world. The goals of NOMADS are to</span></p>

                                <ul>
                                	<li><span style="font-size:14px;">Improve access to NWP and GCM's model output and provide the observational and model data assimilation products for regional model initialization and forecast verification</span></li>
                                	<li><span style="font-size:14px;">Promote improvements to operational weather forecasts</span></li>
                                	<li><span style="font-size:14px;">Develop linkages between the research and operational modeling communities and foster collaborations between the climate and weather modeling communities</span></li>
                                	<li><span style="font-size:14px;">Promote product development and collaborations within the geo-science communities (ocean, weather, and climate) to study multiple Earth systems using collections of distributed data under a sustainable system architecture</span></li>
                                </ul>
                                
                                <h2><span style="font-size:14px;">Benefits</span></h2>
                                
                                <p><span style="font-size:14px;">NOMADS fosters system interoperability by integrating legacy systems with emerging technologies and existing metadata conventions used for models and observational data. NOMADS relies on local decisions about data holdings. Loosely combining legacy systems, while developing new ways to support access to valuable data, permits NOMADS to work on the cutting edge of distributed data systems. In this effort, no single institution carries the weight of data delivery since data are distributed across the network and served by the institutions that developed the data. The responsibility for documentation falls on the data generator with Advisory Panels ensuring overall quality and systems standards and determining which NOMADS data are required for long-term storage. Further, NOMADS in no way precludes the need for national centers to maintain and support long-term archives. In fact, NOMADS and secure data archives are mutually supportive and necessary for long-term research. The primary science benefit of the NOMADS framework is that it enables a feedback mechanism to tie government and university research directly back to the NOAA operational communities, numerical weather prediction quality-control and diagnostics processes at NCEP, and climate model assessments and intercomparisons from around the world.</span></p>
                                
                                <h2><span style="font-size:14px;">Future</span></h2>
                                
                                <p><span style="font-size:14px;">Researchers and policy makers alike now expect our national data assets to be easily accessible and interoperable, regardless of their physical location. As a result, an effective interagency distributed data service requires coordination of data infrastructure and management extending beyond traditional organizational boundaries. Under NOMADS and its collaborators, NOAA will be at the forefront of a worldwide-distributed data-serving network. This will allow users at any level to obtain weather and climate information. It will enable them to make better, informed decisions about how nature will impact their future, either in their life or in their business decisions.</span></p>
                                
                                <p><span style="font-size:14px;">Visit the NCEP NOMADS server at <a href="http://nomads.ncep.noaa.gov/">http://nomads.ncep.noaa.gov/</a></span></p>
                                
                                <p><span style="font-size:14px;">Visit the National Centers for Environmental Information (NCEI, formerly the National Climatic Data Center) NOMADS server at <a href="https://www.ncdc.noaa.gov/data-access/model-data">https://www.ncdc.noaa.gov/data-access/model-data</a></span></p>
                                								
 																
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
