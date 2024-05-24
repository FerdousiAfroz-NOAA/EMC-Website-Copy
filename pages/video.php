<?php include '../header.php';?>

    <link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-about.css" media="all">
	<link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-content-template.css" media="all">

<div class="container-fluid  main-content">
		<section class="main-first-content-row">
			<div class="container">
				<div class="row">
				  <div class="col-lg-12"><h2 class="page-title">Video<h2></div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="col-lg-3 left-side-bar">
							<ul class="list-group">
								<li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/learning.php">Learning</a>
            						<ul class="list-group">
                						<li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/seminars.php">Seminars</li>
                                        <li class="list-group-item"><a href="https://www.emc.ncep.noaa.gov/emc/pages/video.php" class="see-link">Video</a></li>
                                     </ul>
                                 </li>
							</ul>
						  
						</div>
						
						<div class="col-lg-9">
							<div class="seminar-content-page">
								<h4>Video</h4>
								
								
 																
 								<div class="container-fluid">
        							<div class="row">
         							      									
										
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
