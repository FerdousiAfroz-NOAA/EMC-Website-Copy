<?php
header('X-Frame-Options: GOFORIT');  
global $browser_title;
$browser_title = 'GEFS-Aero';   
include '../portal_header.php';?>
 
 <div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          </ul>

          <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#">Operational GEFS-Aerosol forecast guidance graphics</a></li>
          </ul>

         <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Background</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
         </h6>

          <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#">GEFS-Aerosols development history</a></li>
	    <li class="nav-item"><a class="nav-link" href="#">Rick Saylor’s ICAP 2019 presentation</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Partha Bhatacharjee  AMS 2020 presentation</a></li>
            <li class="nav-item"><a class="nav-link" href="#">GEFS V12 implementation information</a></li>
          </ul>
       

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
    <span>Evaluation Information</span>
        <a class="d-flex align-items-center text-muted" href="#">
           <span data-feather="plus-circle"></span>
        </a>
</h6>
<ul class="nav flex-column">
	<li class="nav-item"><a class="nav-link" href="#">GEFS V12 Evaluation Letter</a></li>
	<li class="nav-item"><a class="nav-link" href="#">GEFS-aerosol retrospective forecasts (June-Sept 2020)</a></li>
	<li class="nav-item"><a class="nav-link" href="#">EMC verification statistics web graphics</a></li>
	<li class="nav-item"><a class="nav-link" href="#">GEFS Evaluation Plan</a></li> 
</ul>


<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
    <span>Forecasts and inputs</span>
        <a class="d-flex align-items-center text-muted" href="#">
           <span data-feather="plus-circle"></span>
        </a>
</h6>
<ul class="nav flex-column">
	<li class="nav-item"><a class="nav-link" href="#">Experimental ESRL global aerosol forecasts</a></li>
	<li class="nav-item"><a class="nav-link" href="#">Soil map for dust</a></li>
</ul>


<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
    <span>Users</span>
        <a class="d-flex align-items-center text-muted" href="#">
           <span data-feather="plus-circle"></span>
        </a>
</h6>
<ul class="nav flex-column">
	<li class="nav-item"><a class="nav-link" href="#">ICAP</a></li>
	<li class="nav-item"><a class="nav-link" href="#">WMO SDS-WAS</a></li>
	<li class="nav-item"><a class="nav-link" href="#">Global Air Quality Index project</a></li>  
	<li class="nav-item"><a class="nav-link" href="#">WMO VFSP-WASL</a></li>
	<li class="nav-item"><a class="nav-link" href="#">Miami WFO</a></li>
	<li class="nav-item"><a class="nav-link" href="#">San Juan WFO</a></li>
	<li class="nav-item"><a class="nav-link" href="#">NESDIS STAR SST Retrievals</a></li>
	<li class="nav-item"><a class="nav-link" href="#">NCEP/CPC UV Index</a></li>
</ul>

 
		<!-- The file that contains the Resource links to VLAB & Help -->
		<?php include '../portal_resources_sidelnks.php';?>
		  
		 
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <!--<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>-->
            <button id="export" type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>
     <h1 id="section-title"><div style="text-align left; margin-left:440px;">GEFS-Aerosol 5-day Forecasts</h1>
     	<div id="description">
    
          <?php include "gefs-aero/GlobalAerosols5dayForecasts.html"; ?> 
	  <br/>
      
    </main>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <!--<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
	  <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>-->
	  
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script>
var links = document.getElementsByClassName("nav-link");
var base_url = "https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gefs-aero/documents";
var iframe = document.createElement('iframe');
iframe.style.width="100%";
iframe.style.height="100vh";
for (var i = 0; i < links.length; i++) {
  //console.log(links[i].text);
  links[i].addEventListener("click", function(){
    console.log(this.text);
    if ("Operational GEFS-Aerosol forecast guidance graphics" === this.text){
        var contentDescription = document.getElementById('description');
        contentDescription.innerHTML = "";
        iframe.src = "https://www.emc.ncep.noaa.gov/gc_wmb/parthab/NCO-GEFSAerosol/html/fv3_aod_png.html#picture";
        contentDescription.appendChild(iframe);        
    } else if ("GEFS-Aerosols development history" === this.text){
        var contentDescription = document.getElementById('description');
        contentDescription.innerHTML = "";
        iframe.src = "gefs-aero/documents/background/FV3GFS-Chem_Run_History.pdf";
        contentDescription.appendChild(iframe);        
    } else if ("Rick Saylor’s ICAP 2019 presentation" == this.text){
        var contentDescription = document.getElementById('description');
        contentDescription.innerHTML = "";
        iframe.src = "gefs-aero/documents/background/ICAP2019-NOAAUpdate-FINAL.pptx.pdf";
        contentDescription.appendChild(iframe);
    }else if ("Partha Bhatacharjee  AMS 2020 presentation" == this.text){
       var contentDescription = document.getElementById('description');
       contentDescription.innerHTML = "";
       iframe.src = "gefs-aero/documents/background/AMS2020_PSB.pdf";
       contentDescription.appendChild(iframe);
    }else if ("GEFS V12 implementation information" == this.text){
       var contentDescription = document.getElementById('description');
       contentDescription.innerHTML = "";
       iframe.src = "gefs-aero/documents/background/GEFS_v12-Info.pdf";
       contentDescription.appendChild(iframe);
    }else if ("GEFS V12 Evaluation Letter" == this.text){
       var contentDescription = document.getElementById('description');
       contentDescription.innerHTML = "";
       iframe.src = "gefs-aero/documents/evaluationInformation/Eval_Letter_GEFSv12.docx.pdf";
       contentDescription.appendChild(iframe);
    }else if ("GEFS-aerosol retrospective forecasts (June-Sept 2020)" == this.text){
       var contentDescription = document.getElementById('description');
       contentDescription.innerHTML = "";
       iframe.src = "https://www.emc.ncep.noaa.gov/gc_wmb/parthab/NCO-GEFSAerosol/html/fv3_aod_png.html";
       contentDescription.appendChild(iframe);
    }else if ("EMC verification statistics web graphics" == this.text){
       var contentDescription = document.getElementById('description');
       contentDescription.innerHTML = "";
       iframe.src = "https://www.emc.ncep.noaa.gov/gc_wmb/parthab/GEFS-Aerosol/html/fv3_mongridstat_png.html";
       contentDescription.appendChild(iframe);
    }else if ("GEFS Evaluation Plan" == this.text){
       var contentDescription = document.getElementById('description');
       contentDescription.innerHTML = "";
       iframe.src = "gefs-aero/documents/evaluationInformation/GEFS_v12_Evaluation_Plan.pdf";
       contentDescription.appendChild(iframe);
    }else if ("Experimental ESRL global aerosol forecasts" == this.text){
       window.location = "https://fim.noaa.gov/FV3chem/";
    }else if ("Soil map for dust" == this.text){
       var contentDescription = document.getElementById('description');
       var img = document.createElement("IMG"); 
       contentDescription.innerHTML = "";
       img.src = "gefs-aero/documents/forecastInputs/12type_isric_soil.jpg";
       img.style.width="100%";
       img.style.height="100%";
       contentDescription.appendChild(img);
    }else if ("ICAP" == this.text){
       window.location = "https://www.weather.gov/exit?url=http://icap.atmos.und.edu/";
    }else if ("WMO SDS-WAS" == this.text){
       window.location = "https://www.weather.gov/exit?url=https://public.wmo.int/en/our-mandate/focus-areas/environment/SDS/warnings";
    }else if ("Global Air Quality Index project" == this.text){
       window.location = "http://www.weather.gov/exit?url=https://aqicn.org/forecast/models/";
    }else if ("WMO VFSP-WASL" == this.text){
       window.location = "https://www.weather.gov/exit?url=http://www.weather.gov.sg/vfsp-was/about-vfsp-was/";
    }else if ("Miami WFO" == this.text){
       window.location = "https://www.weather.gov/mfl/";
    }else if ("San Juan WFO" == this.text){
       window.location = "https://www.weather.gov/sju/";
    }else if ("NESDIS STAR SST Retrievals" == this.text){
       window.location = "https://www.star.nesdis.noaa.gov/star/socd_sst_team.php";
    }else if ("NCEP/CPC UV Index" == this.text){
      window.location = "https://www.cpc.ncep.noaa.gov/products/stratosphere/uv_index/uv_current.shtml";
    }
});
}
</script>
</body>
      
</html>
 
