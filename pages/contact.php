<?php include '../header.php';?>
<link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-about.css" media="all">
	<link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-content-template.css" media="all">
	<link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-contact-us.css" media="all">
	<link type="text/css" rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/js/BootstrapFormHelpers/dist/css/bootstrap-formhelpers.css">
<div class="contact-us">
<br>
<br>

       <div class="container">
          <div class="contact-form">
           <div class="row">
               <div class="col-sm-7">   
                              	
                              
                    <form id="ajax-contact" action="actions/contactus_form_action.php" method="post" role="form">
                    <input type="hidden" id="form__token" name="form[_token]" value="d87ff57ec679a7be53e84b94fc034259941187d4">
                        <div class="messages" id="form-messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">fullName *</label>
                                        <input type="text" id="form_fullname" name="fullname" required="required" class="form-control" placeholder="Please enter your firstname *" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input type="text" id="form_email" name="email" required="required" class="form-control" placeholder="Please enter your email *" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Comments *</label>
                                        <textarea id="form_message" name="comments" required="required" class="form-control" placeholder="Message for me *" rows="4" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <!--   <div class="col-md-12">
                                    <img id="captcha_5d9e03730bf3e" src="/generate-captcha/gcb_captchaCode" alt="" title="captcha" width="130" height="50"><script type="text/javascript">
        function reload_captcha_5d9e03730bf3e() {
            var img = document.getElementById('captcha_5d9e03730bf3e');
            img.src = '/generate-captcha/gcb_captchaCode?n=' + (new Date()).getTime();
        }
    </script><a class="captcha_reload" href="javascript:reload_captcha_5d9e03730bf3e();">Renew</a><input type="text" id="form_captchaCode" name="form[captchaCode]" required="required" placeholder="Enter Security Code">
                                </div>-->
                                <div class="col-md-12">
                                	<br>
                                    <input type="submit" class="btn btn-info" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                   <br>
                                    <small class="text-muted"><strong>*</strong> These fields are required.</small>
                                </div>
                            </div>
                        </div>

                    </form>
                                 </div>
               
               
               
               <div class="col-sm-5">
                   <div class="row col1">
                       <div class="col-xs-3">
                           <i class="fa fa-map-marker" style="font-size:16px;"></i>Address
                       </div>
                       <div class="col-xs-9">
                            NOAA Center for Weather and Climate Prediction,<br> 5830 University Research Court College Park,<br>MD 20740
                       </div>
                   </div><br>
                    <iframe style="border-radius:0px;border-radius:20px;-webkit-box-shadow: -8px 11px 10px -4px rgba(128,126,128,0.42);
-moz-box-shadow: -8px 11px 10px -4px rgba(128,126,128,0.42);
box-shadow: -8px 11px 10px -4px rgba(128,126,128,0.42);" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-76.93575382232667%2C38.96409720825616%2C-76.912579536438%2C38.9791948016909&amp;layer=mapnik&amp;marker=38.97164640725732%2C-76.92416667938232" width="100%" height="350" frameborder="0"></iframe><br><small><a href="https://www.openstreetmap.org/?mlat=38.9716&amp;mlon=-76.9242#map=16/38.9716/-76.9242&amp;layers=N">View Larger Map</a></small>
                    
               </div>
           </div>
           
           
            <div class="row">
            <hr>
            	<div class="col-sm-12">
<div class="col-sm-4">
<h3 class="title-divider span4"><strong>Get In Touch</strong></h3>

<p>Thank you for visiting NOAA's National Centers for Environmental Prediction Environmental Modeling Center. Take our website <a href="/survey.html">user survey</a>. We welcome your ideas, comments, concerns, and suggestions. Our address is:</p>

<address>National Centers for Weather and Climate Prediction<br>
NOAA/NWS/NCEP/EMC<br>
5830 University Research Court<br>
College Park, MD 20740</address>

<p><strong><span style="font-size:14px;"><span class="black">Find a EMC employee</span></span></strong><br>
<a href="https://www.emc.ncep.noaa.gov/emc/pages/staff.php">EMC Staff directory</a></p>

<p><strong><span style="font-size:14px;"><span class="black">Find a NOAA employee</span></span></strong><br>
<a href="https://nsd.rdc.noaa.gov/nsd">NOAA Staff directory (online)</a><br>
<a href="https://oceanservice.noaa.gov/goodbye.html?url=https%3A%2F%2Fitunes.apple.com%2Fus%2Fapp%2Fnoaa-directory%2Fid1205621233">NOAA Staff directory (iOS application)</a></p>

<p><strong><span style="font-size:14px;"><span class="black">Privacy policy</span></span></strong><br>
<a href="https://www.weather.gov/privacy">Your privacy is important to us.</a></p>

<div class="text-center center-block socialMediaContact">&nbsp;</div>
</div>

<div class="col-sm-4">
<h3><a id="contacts" name="contacts"></a>Website Technical Support</h3>

<p>For technical questions about this or other Enviromental Modeling Center websites, contact us by filling out the form displayed above.</p>
</div>

<div class="col-sm-4">
<h3><a id="contacts" name="contacts"></a>National Weather Service</h3>

<p>Please visit <a href="https://www.weather.gov" target="_blank">weather.gov</a> to review active alert, forecast maps, past weather information.</p>

<h3><a id="contacts" name="contacts"></a>Climate</h3>

<p>Please visit <a href="https://www.climate.gov" target="_blank">climate.gov</a> to learn more about climate variability and projections.</p>
</div>
</div>
          
            	<div class="col-sm-12"> 
                	<div class="col-sm-4">
                		 <div class="text-center center-block socialMediaContact">
                            <br>
                            <a href="https://www.facebook.com/NOAA-NWS-Environmental-Modeling-Center-151823641556512/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                        	<a href="https://twitter.com/nwsemc"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                        	<a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-instagram fa-3x social"></i></a>
                        </div>
                   </div>
                </div>
            </div>
           
          </div>
       </div>

   </div>
<?php include '../footer.php';?>   
