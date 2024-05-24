<?php include '../header.php';?>

    <link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-about.css" media="all">
	<link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-content-template.css" media="all">

<div class="container-fluid  main-content">
		<section class="main-first-content-row">
			<div class="container">
				<div class="row">
				  <div class="col-lg-12"><h2 class="page-title"><h2></div>
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
								<div class="row">
    								<div class="col"><p>&nbsp;</p>
                                        <p><iframe align="middle" frameborder="0" height="730" scrolling="no" src="https://www.emc.ncep.noaa.gov/documents/EMC-org.pdf" width="100%"></iframe></p>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <hr />
                                        <p>&nbsp;</p>
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
