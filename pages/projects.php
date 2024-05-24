<?php include '../header.php';?>

    <link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-about.css" media="all">
	<link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-content-template.css" media="all">

<div class="container-fluid  main-content">
		<section class="main-first-content-row">
			<div class="container">
				<div class="row">
				  <div class="col-lg-12"><h2 class="page-title">PROJECTS<h2></div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="col-lg-3 left-side-bar">
							<ul class="list-group">
								<li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/research.php">Research</a>
            						<ul class="list-group">
                						<li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/infrastructure.php">Infrastructure</li>
                                        <li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/projects.php" class="see-link">Projects</a>
                                        	<!---<ul class="list-group"> 
                                        	 <li class="list-group-item">
                                                 <a href="https://www.emc.ncep.noaa.gov/emc/pages/projects/monsoondesk.php">NCEP Monsoon Desk  </a>
                                             </li>
                                            </ul>-->
                                        </li>
                                        <li class="list-group-item"><a href="https://vlab.noaa.gov/web/environmental-modeling-center">EMC VLAB</a></li>
                                     </ul>
                                 </li>
							</ul>
						  
						</div>
						
						<div class="col-lg-9">
							<div class="seminar-content-page">
								<div class="col-lg-6">
                                    <ul class="list-group">
                                    	<li class="list-group-item">
                                    	<h5><span style="font-size:20px;"><span style="font-family:arial,helvetica,sans-serif;"><a class="read-more-link" href="https://vlab.noaa.gov/web/osti-modeling/air-quality">National Air Quality Forecast Capability (NAQFC)</a></span></span></h5>
                                    	<span> <a href="https://vlab.noaa.gov/web/osti-modeling/air-quality"><img alt="" src="https://www.weather.gov/images/sti/aq/aq_image.jpg" width="300" height="200"></a> </span>&nbsp;&nbsp;</li>
                                    </ul>
                                    </div>
                                    
                                    <p>&nbsp;</p>
                                    
                                    <p>&nbsp;</p>
                                    
                                    <p>&nbsp;</p>						
 								<!---<div class="container-fluid">
        							<div class="row">
         							      									
										<div class="col-lg-6">
										
     									<ul class="list-group">
                                            <li class="list-group-item">
                                            <h5><a class="read-more-link" href="https://www.emc.ncep.noaa.gov/emc/pages/projects/monsoondesk.php">NCEP Monsoon Desk</a></h5>
                                            <span class="more">
        					The Monsoon Desk at NOAA's National Centers for Environmental Prediction (NCEP) serves as the modality to coordinate numerical model simulations and diagnostics between NCEP and MoES parties in India. For details please read the Monsoon Desk curriculum.  
                                            </li>
                                         </ul>
                                      </div>
                                                  							</div>
     							</div>
								
								-->
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
