<?php include '../header.php';?>

    <link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-about.css" media="all">
	<link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-content-template.css" media="all">

<div class="container-fluid  main-content">
		<section class="main-first-content-row">
			<div class="container">
				<div class="row">
				  <div class="col-lg-12"><h2 class="page-title">RESEARCH<h2></div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="col-lg-3 left-side-bar">
							<ul class="list-group">
								<li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/research.php" class="see-link">Research</a>
            						<ul class="list-group">
                						<li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/infrastructure.php">Infrastructure</li>
                                        <li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/projects.php">Projects</a></li>
                                        <li class="list-group-item"><a href="https://vlab.noaa.gov/web/environmental-modeling-center">EMC VLAB</a></li>
                                     </ul>
                                 </li>
							</ul>
						  
						</div>
						
						<div class="col-lg-9">
							<div class="seminar-content-page">
								<h4>Research</h4>
								<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">EMC is at the forefront of research for numerical weather prediction including probabilistic forecasting.</span></span></p>

                                <p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">We research collaboratively with scientists across the world and consider all aspects of prediction systems as well as the many areas that support forecast production. This includes the visualisation of big data sets and the scalability of our computer code, which is required for its efficient running on future supercomputers.</span></span></p>
                                
                                <p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"></span></span></p>
                                
                                <p>&nbsp;</p>
								
 																
 								<div class="container-fluid">
        							<div class="row">
         							      									
										<div class="col-lg-6">
										
     									<ul class="list-group">
                                            <li class="list-group-item">
                                            <h5><a class="read-more-link" href="https://www.emc.ncep.noaa.gov/emc/pages/infrastructure.php">Infrastructure</a></h5>
                                            <span class="more">
        					We develop models for different components of the Earth System so that we can improve our weather/climate/ocean forecasts.  
                                            </li>
                                         </ul>
                                      </div>
                                             									
										<div class="col-lg-6">
										
     									<ul class="list-group">
                                            <li class="list-group-item">
                                            <h5><a class="read-more-link" href="https://www.emc.ncep.noaa.gov/emc/pages/projects.php">Projects</a></h5>
                                            <span class="more">
        										Description of the NCEP Monsoon Desk Project  
                                  <span class="moreellipses">...&nbsp;</span><span class="morecontent"><span>          </span>&nbsp;&nbsp;<a href="" class="morelink">Show more &gt;</a></span></span>
                                            </li>
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
<?php include '../footer.php';?>
