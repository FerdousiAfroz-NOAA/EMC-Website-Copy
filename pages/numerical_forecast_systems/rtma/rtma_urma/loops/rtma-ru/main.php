<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://www.emc.ncep.noaa.gov/mmb/jcarley/rtma_urma/prod/rtma2p5_ru/hrefrtma.css">
<link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/mmb/jcarley/rtma_urma/prod/css/looper.css" type="text/css" media="all"/>

<form name="form" action=""><input type="hidden" id="fh" name="fh" value="0">
<div class="container-fluid">
	<div class="row">
		<!--<form name="form" action=""><input type="hidden" id="fh" name="fh" value="0">-->

     			<table border="0" cellspacing="0" cellpadding="0" width="100%" bgcolor="#D5D5D5" style="border-bottom:1px solid #DDDDDD">
        		  <tr>
				<td style="padding:0 2px 0 2px;text-align:center;">
            				<input value="Start" onclick="start_play();" name="button3" type="button" class="mapbutton" style="float:left" />
					<input value="Stop" onclick="stop_play();" name="button" type="button" class="mapbutton" style="float:right" />
          	              	</td>
          		  	<td bgcolor="" style="border-left:1px solid #BBBBBB;text-align:center;"><font style="font-size:10px;"><b>FRM</b></font></td>
				<td><input value="" name="frame" size="6" type="text" class="maptext" /></td>
          			<td bgcolor="" style="border-left:1px solid #BBBBBB;text-align:center;"><font style="font-size:10px;"><b>SPD</b></font></td>
	  			<td> 
            				<input value="&lt;&lt;" onclick="delay=delay*inc; show_delay();" class="mapbutton2" name="button2" type="button" />
					<input value="&gt;&gt;" onclick="delay=delay/inc; show_delay();" class="mapbutton2" name="button2" type="button" />
	    				<input value="" name="dly" size="2" type="text" class="maptext" />img/sec
	  			</td>
          			<td bgcolor="" style="border-left:1px solid #BBBBBB;text-align:center;"><font style="font-size:10px;"><b>DIR</b></font></td>
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
   				<td style="text-align:center">
          				<input value=" REFRESH " style="font-size: 12px; color: red;" onClick="window.location.reload();" type="button" class="mapbutton2" />
   				</td>
			</tr>
    		</table>
	</div><!-- End of Row #1 -->
        <div class="row" style="height: 65px;">
        	<div id="divpps">
  			<select id="pps"></select>
  			<div id="afterpps"></div>
		</div>
		<div id="divsf">
  			<select id="sf"></select>
  			<div id="aftersf"></div>
		</div>
		<div id="divsfb">
  			<select id="sfb"></select>
  			<div id="aftersfb"></div>
		</div>
		<div id="divsfc">
  			<select id="sfc"></select>
  			<div id="aftersfc"></div>
		</div>
		<div id="divdom">
	  		<select id="dom"></select>
  			<div id="afterdom"></div>
		</div>
        </div>
        <div class="row">
        	 <div id="keyCodeMenu" style="display:none;opacity:.9;filter:alpha(opacity=90);background-color:#FFFFFF;position:absolute;left:700px;top:480px;border:1px solid #DDDDDD;">
                    	<div style="width:200px;background-color:#EEEEEE;border-bottom:1px solid #997033;">
				<a href="javascript:open_key()"><b>Close</b> (or press 1 again)</a>
			</div>
			<div style="display:none" id="loadingBox">Images loading, please wait . . .</div>
           	</div>
        </div>
        <div class="row">
           <div class="mapbox">
		<center>
			<img src="https://www.emc.ncep.noaa.gov/mmb/rtma/prod/rtma2p5_ru/1500/t2m_CONUS_RTMA2P5_RU_ANL.gif" name="animation" alt="Loading..." ondblclick="document.location.href = this.src" />
		</center>
		<br />
		<div id="text1" style="position: absolute; left:100px;">
			<span><p>
				Double-click this frame to see individual image.  Quick keyboard cmds: use arrow keys, or > Forward Step < Back Step.  Page style is from 
				<a target="_blank" rel="noopener noreferrer"  style="color:black" href="http://www.spc.noaa.gov">http://www.spc.noaa.gov</a>.<br> 
				DISCLAIMER : This page is not "operational" and is not subject to 24-h monitoring by NCEP's Central Operations staff.</p> 
			</span>
		</div>
 	  </div>
        </div>
<?php
require "utc_retrieval.php";
?>
</div><!-- End of Container -->
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="../js/loopers_rtma_ru.js" type="text/javascript"></script>
<script src="https://www.emc.ncep.noaa.gov/mmb/jcarley/rtma_urma/prod/rtma2p5_ru/js/slidingBox.js"></script>
<script src="https://www.emc.ncep.noaa.gov/mmb/jcarley/rtma_urma/prod/js/keycommands.js"></script>
<script src="https://d3js.org/d3.v4.min.js"></script>
<script>
//allow the use of arrow keys for advancing images
window.addEventListener("keydown", function(e) {
    if([37,39].indexOf(e.keyCode) > -1) {
        e.preventDefault();
        }
});
document.onkeydown = checkKey;
function checkKey(e) {
  e = e || window.event;
  if (e.keyCode == '37') {
     backstep();
    }
  if (e.keyCode == '39') {
      forwardstep();
    }
  }

//variables and functions for dropping menu if not already dropped and 
//retracting menu if it is already dropped when clicked
var dropped=0;
var droppedpps=0;
var droppedsf=0;
var droppedsfb=0;
var droppedsfc=0;
var droppeddom=0;

function change() {
  if (dropped==0) {
    afterdate.attr("class","select-styled active");
    uldate.style("display","block")
    dropped=1;
   }
   else {
    dropped=0;
    uldate.style("display","none");
    afterdate.attr("class","select-styled");
    showdate.attr("class","select");};
  subul.style("display","none");
};
function changepps() {
  if (droppedpps==0) {
    afterpps.attr("class","select-styled active");
    ulpps.style("display","block")
    droppedpps=1;
   }
   else {
    droppedpps=0;
    ulpps.style("display","none");
    afterpps.attr("class","select-styled");
    showpps.attr("class","selectpps");};
};
function changesf() {
  if (droppedsf==0) {
    aftersf.attr("class","select-styled active");
    ulsf.style("display","block")
    droppedsf=1;
   }
   else {
    droppedsf=0;
    ulsf.style("display","none");
    aftersf.attr("class","select-styled");
    showsf.attr("class","selectpps");};
};
function changesfb() {
  if (droppedsfb==0) {
    aftersfb.attr("class","select-styled active");
    ulsfb.style("display","block")
    droppedsfb=1;
   }
   else {
    droppedsfb=0;
    ulsfb.style("display","none");
    aftersfb.attr("class","select-styled");
    showsfb.attr("class","selectpps");};
};
function changesfc() {
  if (droppedsfc==0) {
    aftersfc.attr("class","select-styled active");
    ulsfc.style("display","block")
    droppedsfc=1;
   }
   else {
    droppedsfc=0;
    ulsfc.style("display","none");
    aftersfc.attr("class","select-styled");
    showsfc.attr("class","selectpps");};
};
function changedom() {
  if (droppeddom==0) {
    afterdom.attr("class","select-styled active");
    uldom.style("display","block")
    droppeddom=1;
   }
   else {
    droppeddom=0;
    uldom.style("display","none");
    afterdom.attr("class","select-styled");
    showdom.attr("class","select");};
};
//a bunch of arrays and variables to keep track of which image is currently being looped
var field="t2m";
var dom="CONUS";
var datelist=[""];
var cyc="<?php echo $hour; ?>";
var min="<?php echo $min; ?>";
var imax=96;
var typ="ANL.gif";
var rurtma="RTMA2P5_RU_";
var animImg = document.getElementsByName("animation");
animImg.src = "https://www.emc.ncep.noaa.gov/mmb/rtma/prod/rtma2p5_ru/"+cyc+min+"/t2m_CONUS_RTMA2P5_RU_ANL.gif";
console.log(animImg.src);

var ppslist=["latest","00 UTC","01 UTC","02 UTC","03 UTC","04 UTC","05 UTC","06 UTC","07 UTC","08 UTC","09 UTC","10 UTC","11 UTC","12 UTC","13 UTC","14 UTC","15 UTC","16 UTC","17 UTC","18 UTC","19 UTC","20 UTC","21 UTC","22 UTC","23 UTC"];
var ppsdata=[cyc,"00","01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23"];

var sflist=["2 m temperature","2 m dew point","2 m specific humidity","10 m wind speed","10 m vector wind","10 m wind gust","Visibility","Surface pressure","Ceiling height"];
var sfdata=["t2m","td2m","spfh","spd10m","vec10m","gust10m","vis","sfcp","ceiling"];
var imaxessf=[96,96,96,96,96,96,96,96,96];
var types=["ANL.gif","GES.gif",".gif"];
// var rtmatypes=["rtma2p5_ru_","RTMA2P5_RU"]
var rtmatypes=["RTMA2P5_RU_","RTMA2P5_RU"]

var sfblist=["2 m temperature","2 m dew point","2 m specific humidity","10 m wind speed","10 m vector wind","10 m wind gust","Visibility","Surface pressure","Ceiling height"];
var sfbdata=["t2m","td2m","spfh","spd10m","vec10m","gust10m","vis","sfcp","ceiling"];
var imaxessfb=[96,96,96,96,96,96,96,96,96];

var sfclist=["2 m temperature","2 m specific humidity","10 m wind speed","10 m U wind","10 m V wind","10 m wind gust","Visibility","Surface pressure","Ceiling height"];
var sfcdata=["t2m","spfh","spd10m","u10m","v10m","gust10m","vis","sfcp","cei"];
var sfctypelist=["increment","obs value","obs used/rejected"]
var sfctypes=["inc_","obs_","usedobs_"]
var imaxessfc=[96,96,96,96,96,96,96,96,96];

// var domlist=["CONUS","G Lakes","NW","NWRFC","MIDATL","NC","NE","SW","SC","SE","------","AK","NAK","SAK","SEAK","SWAK","HI","PR"];
// var domdata=["CONUS","Great_Lakes","NW","NWRFC","MIDATL","NC","NE","SW","SC","SE","SE","AK","NAK","SAK","SEAK","SWAK","HI","PR"];

var domlist=["CONUS","NW","NC","NE","SW","SC","SE","MIDATL","G Lakes","NWRFC"];
var domdata=["CONUS","NW","NC","NE","SW","SC","SE","MIDATL","Great_Lakes","NWRFC"];

//function for loading images
function loadimages() {
  window.pauseOnStart = false;
  window.pauseWhere = 0;

  if (cyc == "00") {
   var myhours=["00","01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00","01"];
  }
  if (cyc == "01") {
   var myhours=["01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00","01","02"];
  }
  if (cyc == "02") {
   var myhours=["02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00","01","02","03"];
  }
  if (cyc == "03") {
   var myhours=["03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00","01","02","03","04"];
  }
  if (cyc == "04") {
   var myhours=["04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00","01","02","03","04","05"];
  }
  if (cyc == "05") {
   var myhours=["05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00","01","02","03","04","05","06"];
  }
  if (cyc == "06") {
   var myhours=["06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00","01","02","03","04","05","06","07"];
  }
  if (cyc == "07") {
   var myhours=["07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00","01","02","03","04","05","06","07","08"];
  }
  if (cyc == "08") {
   var myhours=["08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00","01","02","03","04","05","06","07","08","09"];
  }
  if (cyc == "09") {
   var myhours=["09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00","01","02","03","04","05","06","07","08","09","10"];
  }
  if (cyc == "10") {
   var myhours=["10","11","12","13","14","15","16","17","18","19","20","21","22","23","00","01","02","03","04","05","06","07","08","09","10","11"];
  }
  if (cyc == "11") {
   var myhours=["11","12","13","14","15","16","17","18","19","20","21","22","23","00","01","02","03","04","05","06","07","08","09","10","11","12"];
  }
  if (cyc == "12") {
   var myhours=["12","13","14","15","16","17","18","19","20","21","22","23","00","01","02","03","04","05","06","07","08","09","10","11","12","13"];
  }
  if (cyc == "13") {
   var myhours=["13","14","15","16","17","18","19","20","21","22","23","00","01","02","03","04","05","06","07","08","09","10","11","12","13","14"];
  }
  if (cyc == "14") {
   var myhours=["14","15","16","17","18","19","20","21","22","23","00","01","02","03","04","05","06","07","08","09","10","11","12","13","14","15"];
  }
  if (cyc == "15") {
   var myhours=["15","16","17","18","19","20","21","22","23","00","01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16"];
  }
  if (cyc == "16") {
   var myhours=["16","17","18","19","20","21","22","23","00","01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17"];
  }
  if (cyc == "17") {
   var myhours=["17","18","19","20","21","22","23","00","01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18"];
  }
  if (cyc == "18") {
   var myhours=["18","19","20","21","22","23","00","01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19"];
  }
  if (cyc == "19") {
   var myhours=["19","20","21","22","23","00","01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20"];
  }
  if (cyc == "20") {
   var myhours=["20","21","22","23","00","01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21"];
  }
  if (cyc == "21") {
   var myhours=["21","22","23","00","01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22"];
  }
  if (cyc == "22") {
   var myhours=["22","23","00","01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23"];
  }
  if (cyc == "23") {
   var myhours=["23","00","01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00"];
  }

  window.temp_list=[];
  var base_url = 'https://www.emc.ncep.noaa.gov/mmb/rtma/prod/rtma2p5_ru/';
  window.temp_list = new Array(imax);
  if (min == "45") {
  j=0;
  for (i=0;i<imax;i++) {
  window.temp_list[i]=base_url+myhours[j+1]+'00/'+field+'_'+dom+'_'+rurtma+typ
  i++;
  window.temp_list[i]=base_url+myhours[j+1]+'15/'+field+'_'+dom+'_'+rurtma+typ
  i++;
  window.temp_list[i]=base_url+myhours[j+1]+'30/'+field+'_'+dom+'_'+rurtma+typ
  i++
  window.temp_list[i]=base_url+myhours[j+1]+'45/'+field+'_'+dom+'_'+rurtma+typ
  j++;
  }
  }

  if (min == "30") {
  j=0;
  for (i=0;i<imax;i++) {
  window.temp_list[i]=base_url+myhours[j]+'45/'+field+'_'+dom+'_'+rurtma+typ
  i++;
  window.temp_list[i]=base_url+myhours[j+1]+'00/'+field+'_'+dom+'_'+rurtma+typ
  i++;
  window.temp_list[i]=base_url+myhours[j+1]+'15/'+field+'_'+dom+'_'+rurtma+typ
  i++
  window.temp_list[i]=base_url+myhours[j+1]+'30/'+field+'_'+dom+'_'+rurtma+typ
  j++;
  }
  }

  if (min == "15") {
  j=0;
  for (i=0;i<imax;i++) {
  window.temp_list[i]=base_url+myhours[j]+'30/'+field+'_'+dom+'_'+rurtma+typ
  i++;
  window.temp_list[i]=base_url+myhours[j]+'45/'+field+'_'+dom+'_'+rurtma+typ
  i++;
  window.temp_list[i]=base_url+myhours[j+1]+'00/'+field+'_'+dom+'_'+rurtma+typ
  i++
  window.temp_list[i]=base_url+myhours[j+1]+'15/'+field+'_'+dom+'_'+rurtma+typ
  j++;
  }
  }

  if (min == "00") {
  j=0;
     for (i=0;i<imax;i++) {
  	window.temp_list[i]=base_url+myhours[j]+'15/'+field+'_'+dom+'_'+rurtma+typ
  	i++;
  	window.temp_list[i]=base_url+myhours[j]+'30/'+field+'_'+dom+'_'+rurtma+typ
  	i++;
  	window.temp_list[i]=base_url+myhours[j]+'45/'+field+'_'+dom+'_'+rurtma+typ
  	i++
  	window.temp_list[i]=base_url+myhours[j+1]+'00/'+field+'_'+dom+'_'+rurtma+typ
  	j++;
     } 
  }


  initialize_looper(delay);
};

//initial call for loading images
loadimages();

//precipitation, p-type, snow menu creation
var hidepps=d3.select("#pps").attr("class","select-hidden");
hidepps.selectAll("option")
       .data(ppslist)
       .enter()
       .append("option")
       .text(function(d) { return d; });

hidepps.property("value","precipitation|p-type|snow");

var showpps=d3.select("#divpps")
    .attr("class","selectpps")
    .style("left","70px");

var afterpps=d3.select("#afterpps")
  .attr("class","select-styled")
  .text("CYC ending loop ")
  .on("click",changepps);

afterpps.property("value","precipitation|p-type|snow");

var ulpps=d3.select("#divpps")
   .append("ul")
   .attr("class","uldate");

ulpps.selectAll("li")
  .data(ppslist)
  .enter().append("li")
  .attr("class","mainlipps")
  .text(function(d,i) { return ppslist[i]; })
  .attr("id",function(d) { return "MD"+String(d);});

ulpps.style("display","none");
ulpps.selectAll(".mainlipps").on("click",function(d) {
  for (i=0;i<ppslist.length;i++) {
    if (ppslist[i]==d) {
      cyc=String(ppsdata[i]);
    }
   }
    droppedpps=0;
    ulpps.style("display","none");
    afterpps.attr("class","select-styled");
    showpps.attr("class","selectpps");
  loadimages();
});

//surface fields menu creation
var hidesf=d3.select("#sf").attr("class","select-hidden");
hidesf.selectAll("option")
  .data(sflist)
  .enter().append("option")
          .text(function(d) { return d; });
hidesf.property("value","surface fields");

var showsf=d3.select("#divsf").attr("class","selectpps").style("left","280px");
var aftersf=d3.select("#aftersf").attr("class","select-styled").text("RTMA-RU Analysis").on("click",changesf);
aftersf.property("value","surface fields");

var ulsf=d3.select("#divsf").append("ul").attr("class","uldate");
ulsf.selectAll("li")
  .data(sflist)
  .enter().append("li")
    .attr("class","mainlipps")
    .text(function(d,i) { return sflist[i]; })
    .attr("id",function(d) { return "MD"+String(d);});
ulsf.style("display","none");

ulsf.selectAll(".mainlipps").on("click",function(d) {
  for (i=0;i<sflist.length;i++) {
    if (sflist[i]==d) {
      field=sfdata[i];
      imax=imaxessf[i];
      rurtma=rtmatypes[0];
      typ=types[0];
    }
   }
    droppedsf=0;
    ulsf.style("display","none");
    aftersf.attr("class","select-styled");
    showsf.attr("class","selectpps");
  loadimages();
})


//surface fields menu creation
var hidesfb=d3.select("#sfb").attr("class","select-hidden");
hidesfb.selectAll("option")
  .data(sfblist)
  .enter().append("option")
          .text(function(d) { return d; });
hidesfb.property("value","surface fields");

var showsfb=d3.select("#divsfb").attr("class","selectpps").style("left","490px");
var aftersfb=d3.select("#aftersfb")
  .attr("class","select-styled")
  .text("RTMA-RU Guess")
  .on("click",changesfb);
aftersfb.property("value","surface fields");

var ulsfb=d3.select("#divsfb").append("ul").attr("class","uldate");
ulsfb.selectAll("li")
  .data(sfblist)
  .enter().append("li")
          .attr("class","mainlipps")
          .text(function(d,i) { return sfblist[i]; })
          .attr("id",function(d) { return "MD"+String(d);});
ulsfb.style("display","none");
ulsfb.selectAll(".mainlipps").on("click",function(d) {
  
for (i=0;i<sfblist.length;i++) {
    if (sfblist[i]==d) {
      field=sfbdata[i];
      imax=imaxessfb[i];
      rurtma=rtmatypes[0];
      typ=types[1];
    }
   }
    droppedsfb=0;
    ulsfb.style("display","none");
    aftersfb.attr("class","select-styled");
    showsfb.attr("class","selectpps");
  loadimages();
})
//dropdown menu creation

//surface fields menu creation

var hidesfc=d3.select("#sfc")
  .attr("class","select-hidden");
hidesfc.selectAll("option")
  .data(sfclist)
  .enter().append("option")
  .text(function(d) { return d; });
hidesfc.property("value","sfc fields");
var showsfc=d3.select("#divsfc")
  .attr("class","selectpps")
  .style("left","700px");
var aftersfc=d3.select("#aftersfc")
  .attr("class","select-styled")
  .text("Inc, obs, obs used")
  .on("click",changesfc);
aftersfc.property("value","sfc fields");
var ulsfc=d3.select("#divsfc").append("ul")
  .attr("class","uldate");
ulsfc.selectAll("li")
  .data(sfcdata)
  .enter().append("li")
    .attr("class","mainlippsub")
    .text(function(d,i) { return sfclist[i]; })
    .attr("id",function(d) { return "MD"+String(d);});
ulsfc.style("display","none");


subulsfc=ulsfc.selectAll("li").append("ul")
  .data(sfcdata)
    .attr("id",function(d) { return "Dsfc"+String(d);})
    .attr("class","subuldropcycle");

 for (j=0;j<sfcdata.length;j++) {
  d3.select("#Dsfc"+sfcdata[j]).selectAll("li")
  .data(sfctypes,function(d,i) { return d;})
  .enter().append("li")
    .attr("class","subli")
    .text(function(d,i) {return sfctypelist[i];});
}

ulsfc.selectAll(".mainlippsub").on("mouseover",function(d) {
  tempsfc=d;
  for (i=0;i<sfcdata.length;i++) {
    if (sfcdata[i]==d) {
      document.getElementById("Dsfc"+d).style.display="block";
    }
    else {
      document.getElementById("Dsfc"+sfcdata[i]).style.display="none";
    }
  }


});

//**********to be completed***********
subulsfc.selectAll(".subli").on("click",function(d) {
  iou=d;

// change cei to ceiling if it is an increment plot
  if (iou == "inc_"){
    if (tempsfc == "cei") {
      tempsfc="ceiling";
    };
  };

  field=iou+tempsfc;
  rurtma=rtmatypes[1];
  typ=types[2];
  imax=imaxessfc[1];
  console.log("field");
  console.log(field);
  droppedsfc=0;
  ulsfc.style("display","none");
  subulsfc.style("display","none");
  aftersfc.attr("class","select-styled");
  showsfc.attr("class","selectpps");
  loadimages();
});

//region menu creation
var hidedom=d3.select("#dom")
  .attr("class","select-hidden");

hidedom.selectAll("option")
  .data(domlist)
  .enter().append("option")
    .text(function(d) { return d; });

hidedom.property("value","region");

var showdom=d3.select("#divdom")
  .attr("class","select")
  .style("left","910px");

var afterdom=d3.select("#afterdom")
  .attr("class","select-styled")
  .text("domain")
  .on("click",changedom);

afterdom.property("value","region");

var uldom=d3.select("#divdom").append("ul")
  .attr("class","uldate");

uldom.selectAll("li")
  .data(domlist)
  .enter().append("li")
    .attr("class","mainli")
    .text(function(d,i) { return domlist[i]; })
    .attr("id",function(d) { return "MD"+String(d);});

uldom.style("display","none");

uldom.selectAll(".mainli").on("click",function(d) {
  for (i=0;i<domlist.length;i++) {
    if (domlist[i]==d) {
      dom=domdata[i];
    }
   }
    droppeddom=0;
    uldom.style("display","none");
    afterdom.attr("class","select-styled");
    showdom.attr("class","select");
  loadimages();
});

</script>
