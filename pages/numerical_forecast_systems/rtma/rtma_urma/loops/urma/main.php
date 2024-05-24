
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/mmb/jcarley/rtma_urma/prod/css/looper.css" type="text/css" media="all"/>
<!--<script src="../js/looper.js" type="text/javascript"></script>
<script src="https://www.emc.ncep.noaa.gov/mmb/jcarley/rtma_urma/prod/js/slidingbox.js" type="text/javascript"></script>
<script src="https://www.emc.ncep.noaa.gov/mmb/jcarley/rtma_urma/prod/js/keycommands.js" type="text/javascript"></script>-->

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
.dropdown a {
   color: white;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-menu {
 visibility: visible;
 display: block;
 color:black;
}
.dropdown:hover .dropdown-item{
 color:black;
}
.dropdown:hover .dropdown-item:hover{
  background-color: #000066;
  color: white;
}

.dropdown{
  z-index:200;
  height: 10px;
}
</style>
<!-- The following code creates the menu -->
<div class="container-fluid" style="position:relative; padding-top:20px; padding-bottom:30px;background-color: #333;">
   <div class="row">
      <div class="col">
         <div class="dropdown" style="z-index:200;height: 10px;">
           <a href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Choose Cycle
           </a>
           <div id="m1" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
        </div>
     </div>
     <div class="col">
       <div class="dropdown">
         <a href="#" id="dropdownMenuButton" class="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           CONUS
         </a>
         <div id="m2" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
       </div>
     </div>
      <div class="col">
       <div class="dropdown">
         <a href="#" id="dropdownMenuButton" class="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           NW
         </a>
         <div id="m3" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
       </div>
     </div> 
     <div class="col">
       <div class="dropdown">
         <a href="#" id="dropdownMenuButton" class="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           NWRFC
         </a>
         <div id="m4" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
       </div>
     </div>
     <div class="col">
       <div class="dropdown">
         <a href="#" id="dropdownMenuButton" class="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           NC
         </a>
         <div id="m5" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
       </div>
     </div>     
     <div class="col">
       <div class="dropdown">
         <a href="#" id="dropdownMenuButton" class="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           NE
         </a>
         <div id="m6" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
       </div>
     </div>
     <div class="col">
       <div class="dropdown">
         <a href="#" id="dropdownMenuButton" class="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           SW
         </a>
         <div id="m7" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
       </div>
    </div>
    <div class="col">
       <div class="dropdown">
         <a href="#" id="dropdownMenuButton" class="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           SC
         </a>
         <div id="m8" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
       </div>
    </div>
    <div class="col">
       <div class="dropdown">
         <a href="#" id="dropdownMenuButton" class="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           SE
         </a>
         <div id="m9" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
       </div>
    </div>
    <div class="col">
       <div class="dropdown">
         <a href="#" id="dropdownMenuButton" class="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Great Lakes
         </a>
         <div id="m10" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
       </div>
   </div>
   <div class="col">
       <div class="dropdown">
         <a href="#" id="dropdownMenuButton" class="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           MIDATL
         </a>
         <div id="m11" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
       </div>
   </div>
   <div class="col">
       <div class="dropdown">
         <a href="#" id="dropdownMenuButton" class="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           AK
         </a>
         <div id="m12" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
       </div>
   </div>
   <div class="col">
       <div class="dropdown">
         <a href="#" id="dropdownMenuButton" class="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           NAK
         </a>
         <div id="m13" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
       </div>
   </div>
   <div class="col">
       <div class="dropdown">
         <a href="#" id="dropdownMenuButton" class="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           SAK
         </a>
         <div id="m14" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
       </div>
   </div>
   <div class="col">
       <div class="dropdown">
         <a href="#" id="dropdownMenuButton" class="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           SWAK
         </a>
         <div id="m15" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
       </div>
   </div>
   <div class="col">
       <div class="dropdown">
         <a href="#" id="dropdownMenuButton" class="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           SEAK
         </a>
         <div id="m16" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
       </div>
  </div>
  <div class="col">
       <div class="dropdown">
         <a href="#" id="dropdownMenuButton" class="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           HI
         </a>
         <div id="m17" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
       </div>
  </div>
  <div class="col">
       <div class="dropdown">
         <a href="#" id="dropdownMenuButton" class="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           PR
         </a>
         <div id="m18" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
       </div>
  </div>
  <div class="col">
       <div class="dropdown">
         <a href="#" id="dropdownMenuButton" class="dropdownMenuButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           GUAM
         </a>
         <div id="m19" class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
       </div>
  </div>


   </div> <!-- End tag Row div-->
   <div class="row">
       <div id="keyCodeMenu" style="display:none;opacity:.9;filter:alpha(opacity=90);background-color:#FFFFFF;position:absolute;left:700px;top:480px;border:1px solid #DDDDDD;">
 		<div style="width:200px;background-color:#EEEEEE;border-bottom:1px solid #997033;">
			<a href="javascript:open_key()"><b>Close</b> (or press 1 again)</a>
		</div>
 		<div style="display:none" id="loadingBox">Images loading, please wait . . .</div>

		Type in these keys to control the <br />

         	animation from your keyboard. <br />
         	You do not need to press the shift key. <br />
         	<table> 
            		<tr>
               			<td>
                  			<b>p</b> Play<br />
                  			<b>o</b> Stop<br />
                  			<b>+</b> Increase Speed<br />
                  			<b>-</b> Decrease Speed<br />
                  			<b>]</b> Forward<br />
                  			<b>[</b> Reverse<br />
               			</td>
               			<td>
                  			<b>r</b> Rock (on/off)<br />
                  			<b>></b> Forward Step<br />
                  			<b>&#60;</b> Back Step<br /> 
                  			<b>d</b> Dwell (on/off)<br />
                  			<b>w</b> increase Dwell<br /> 
                  			<b>q</b> decrease Dwell<br />
               			</td>
            		</tr>
         	</table>
         	<b>m</b> Turn on/off rollover times
      </div> <!-- End of Key Code Menu Div -->
   </div><!-- End of Row Div -->
</div>

<form name="form" method="post" action="">
<input type="hidden" id="fh" name="csrfToken" value='<?php echo($_SESSION["csrfToken"]) ?>' />


     <table border="0" cellspacing="0" cellpadding="0" width="100%" bgcolor="#D5D5D5" style="border-bottom:1px solid #DDDDDD">
        <tr>
	  <td style="padding:0 2px 0 2px;text-align:center;">
            <input value="Start" onclick="start_play();" name="button3" type="button" class="mapbutton" style="float:left" />

            <input value="Stop" onclick="stop_play();" name="button" type="button" class="mapbutton" style="float:right" />

	    
          </td>
          <td bgcolor="" style="border-left:1px solid #BBBBBB;text-align:center;"><font style="font-size:10px;"><b>FRAME</b></font></td>
	  <td>
            <input value="" name="frame" size="6" type="text" class="maptext" />
	  </td>
          <td bgcolor="" style="border-left:1px solid #BBBBBB;text-align:center;"><font style="font-size:10px;"><b>SPEED</b></font></td>

	  <td> 
            <input value="&lt;&lt;" onclick="delay=delay*inc; show_delay();" class="mapbutton2" name="button2" type="button" />

            <input value="&gt;&gt;" onclick="delay=delay/inc; show_delay();" class="mapbutton2" name="button2" type="button" />
	    <input value="" name="dly" size="2" type="text" class="maptext" />img/sec
	  </td>
          <td bgcolor="" style="border-left:1px solid #BBBBBB;text-align:center;"><font style="font-size:10px;"><b>DIRECTION</b></font></td>
	  <td style="text-align:center;">
            <input value="REV" onclick="reverse();start_play();" name="rev" type="button" class="mapbutton2" />
            <input value="FWD" onclick="forward();start_play();" name="fwd" type="button" class="mapbutton2" />

            <label><input name="rock" type="checkbox" />Rock</label>

	  </td>
          <td bgcolor="" style="border-left:1px solid #BBBBBB;text-align:center;"><font style="font-size:10px;"><b>DWELL</b></font></td>
          <td>
           <label><input type="checkbox" name="dwell" onclick="show_dwell();" checked="checked" />Dwell</label> 
            <input type="button" value=" - " onclick="decDwell(); show_dwell();" class="mapbutton2" />
            <input type="button" value=" + " onclick="incDwell(); show_dwell();" class="mapbutton2" />

            <input type="text" size="2" name="dwl" class="maptext" />sec
          </td>
          <td bgcolor="" style="border-left:1px solid #BBBBBB;text-align:center;"><font style="font-size:10px;"><b>STEP</b></font></td>

	  <td style="text-align:center">
            <input value=" &lt; " onclick="backstep();" name="button2" type="button" class="mapbutton2" />
            <input value=" &gt; " onclick="forwardstep();" name="button2" type="button" class="mapbutton2" />
	  </td>
	  <td><label><input type="checkbox" checked="checked" name="nostep"/>On/Off</label></td>

	</tr>
    </table>
</table>

<div class="mapbox">
<img id="mapBoxImg" src="https://www.emc.ncep.noaa.gov/mmb/rtma/prod/URMA/13/pan_t2m_CONUS_URMA.gif" name="animation" alt="Loading..." ondblclick="document.location.href = this.src" />

<br />
Double-click this frame to see individual image.  Quick keyboard cmds: > Forward Step < Back Step.  Page style is from <a target="_blank" rel="noopener noreferrer"  style="color:black" href="//www.spc.noaa.gov">//www.spc.noaa.gov</a>. DISCLAIMER : This page is not "operational" and is not subject to 24-h monitoring by NCEP's Central Operations staff. 
 </div>

<!--  Delay (ms): <INPUT TYPE=text VALUE="" NAME="delay" SIZE=6> //-->
</form>
<?php
require "utc_retrieval.php";
$result = $result."/URMA_CONUS_t2m.php";
#$fileName = "../../../../../../../mmb/rtma/prod/URMA/index.html";
#$str = "<base";
#$result = "";
#$contents = file($fileName);

#foreach ($contents as $line) {
  # var_dump($line . "\n");
#   if (strpos($line, $str) !== false) {
 #       $result = $line;
#        break;
#    }
#}
#$result = trim(preg_replace('/\s+/', ' ', $result));
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="../../loops/js/loopers.js"></script>
<script src="https://www.emc.ncep.noaa.gov/mmb/jcarley/rtma_urma/prod/js/slidingbox.js"></script>
<script src="https://www.emc.ncep.noaa.gov/mmb/jcarley/rtma_urma/prod/js/keycommands.js"></script>

<script>
var baseValUrl = '<?php echo $result; ?>';
console.log('Value is the following: ' + baseValUrl);
//baseValUrl = baseValUrl.slice(baseValUrl.indexOf('URMA')+5, baseValUrl.length);
//console.log('Value is the following: ' + baseValUrl);
var titles = ['gust10m', 't2m', 'vis', 'td2m', 'spd10m', 'vec10m', 'sfcp', 'tcamt', 'ceiling', 'spfh'];
var htmlAnchor = '<a class="dropdown-item lnkm1"  href="https://www.emc.ncep.noaa.gov/mmb/rtma/prod/URMA/';
/***************************************************************************
* When the Page finish loading get the current image of the current UTC time
***************************************************************************/

var loadHref = 'https://www.emc.ncep.noaa.gov/mmb/rtma/prod/URMA/'+ baseValUrl.split('/')[0]  +'/pan_t2m_CONUS_URMA.gif';
document.animation.src = loadHref;


/*************************************
* Load the rest of the drop down menus
*************************************/
function pad(n) {
    return (n < 10) ? ("0" + n) : n;
}

function displayImg(){
 var linkEvent = document.getElementsByClassName("lnkm1");
  //var linkEvent = document.getElementsByClassName(elementClassName);
  for (var i=0; i < linkEvent.length;i++){
      var lnk = linkEvent[i].getAttribute('href');
      //console.log(lnk);
      linkEvent[i].addEventListener('click', function(e){
        e.preventDefault();
      //  console.log(this.getAttribute('href'));
        document.animation.src = this.getAttribute('href');
      },false);
   }

}

loadChooseCycleDrpdwn("m1");
loadAllOtherDrpdwn();
//loadConusDrpdwn("m2");
//loadNwDrpdwn("m3");

function loadChooseCycleDrpdwn(id){
  document.getElementById(id).innerHTML = '<a class="dropdown-item" href="main.php"> Most recent </a>';
  for(var i = 0; i < 24; i++){
      var url = "https://www.emc.ncep.noaa.gov/mmb/rtma/prod/URMA/";
      url = url+pad(i)+'/pan_t2m_CONUS_URMA.gif';
      var href_lnk = '<a class="dropdown-item lnkm1" href="'+url+'">'+pad(i)+' UTC</a>';
      document.getElementById(id).innerHTML += href_lnk;
  }
  displayImg();
}

function loadAllOtherDrpdwn(){
   var dropdown = document.getElementsByClassName("dropdown");
   for (var i=0; i < dropdown.length;i++){
     var a = dropdown[i].getElementsByClassName("dropdownMenuButton");
     var div = dropdown[i].getElementsByTagName("div");
     //console.log(a);
     if (a.length > 0){
       var lnkTitle = a[0].innerText;
       var id = div[0].getAttribute('id');
      // console.log(a[0]);
      // console.log(div[0]);
      //var now = new Date; 
       for (var j=0; j < titles.length; j++){
          var fileTitle = lnkTitle.replace(/\s+/g,'_');
          var href_lnk = htmlAnchor + baseValUrl.split('/')[0] + '/pan_'+titles[j]+'_'+fileTitle+'_URMA.gif">'+titles[j]+'</a>';
          document.getElementById(id).innerHTML += href_lnk;
       }
      displayImg(); 
     }
   } 
}

var imax = 6;
var base_url = 'https://www.emc.ncep.noaa.gov/mmb/rtma/prod/URMA/'+ baseValUrl.split('/')[0];
var navTitles = ['CONUS', 'NW', 'NWRFC', 'NC', 'NE', 'SW', 'SC', 'SE', 'Great_Lakes', 'MIDATL', 'AK', 'NAK', 'SAK', 'SWAK', 'SEAK', 'HI', 'PR', 'GUAM'];
window.pauseOnStart = true;
window.pauseWhere = 0;
window.temp_list = new Array(imax);
window.temp_list[0]= base_url + '/pan_t2m_CONUS_URMA.gif';
window.temp_list[1]= base_url + '/t2m_CONUS_URMA_ANL.gif';
window.temp_list[2]= base_url + '/t2m_CONUS_URMA_GES.gif';
window.temp_list[3]= base_url + '/inc_t2m_CONUS_URMA.gif';
window.temp_list[4]= base_url + '/obs_t2m_CONUS_URMA.gif';
window.temp_list[5]= base_url + '/usedobs_t2m_CONUS_URMA.gif';
initialize_looper();

$(document).ready(function(){
var linkEvent = document.getElementsByClassName("lnkm1");
  //var linkEvent = document.getElementsByClassName(elementClassName);
  for (var i=0; i < linkEvent.length;i++){
      var lnk = linkEvent[i].getAttribute('href');
      //console.log(lnk);
      linkEvent[i].addEventListener('click', function(e){
        e.preventDefault();
        //console.log(this.getAttribute('href'));
        //document.animation.src = this.getAttribute('href');
        //console.log(this);
       for (var j=0; j < navTitles.length; j++){
        if (this.getAttribute('href').indexOf(navTitles[j]) >= 0){

          window.temp_list[0]= this.getAttribute('href');
          //var filename = this.getAttribute('href').replace(base_url,'');
          window.temp_list[1]= this.getAttribute('href').replace('pan_','').replace('.gif','_ANL.gif');
          window.temp_list[2]= this.getAttribute('href').replace('pan_','').replace('.gif','_GES.gif');
          window.temp_list[3]= this.getAttribute('href').replace('pan','inc'); //base_url+'/inc_t2m_CONUS_URMA.gif';
          window.temp_list[4]= this.getAttribute('href').replace('pan','obs');//base_url+'/obs_t2m_CONUS_URMA.gif';
          window.temp_list[5]= this.getAttribute('href').replace('pan','usedobs');//base_url+'/usedobs_t2m_CONUS_URMA.gif';
          //console.log(window.temp_list);
          //initialize_looper();
          $.ajax({url: "action.php",
                  type: 'POST',
                  dataType: "json",
                  data: { data: JSON.stringify({ paramName: window.temp_list }), utc: baseValUrl.split('/')[0]},
                  success: function(result){
                    //console.log("Success");
                    //console.log(result.results);
                    var count = 0;
                    for(var i=0; i <= result.results.length; i++){
                       if (result.results[i] != null){
                          count++;
                       }
                    }

                    //console.log('The array count:'+count);
                    imax = count;
                    document.form.frame.value="1 of "+imax;

                    window.temp_list[1]= result.results[1];
                    window.temp_list[2]= result.results[2];
                    window.temp_list[3]= result.results[3];
                    window.temp_list[4]= result.results[4];
                    window.temp_list[5]= result.results[5];
                    
                    initialize_looper();
                  },
                  error: function(e){
                    console.log(e);
                  },
				});
          initialize_looper();
        }
       }
      },false);
   }
});
</script>
