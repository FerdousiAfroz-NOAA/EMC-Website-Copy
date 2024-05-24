<?php 
global $browser_title;
 $browser_title = 'IMPLEMENTATION STANDARDS';   
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
          <li class="nav-item">
          </li>
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
     <h2 id="section-title">NCEP Production Suite (NPS) Implementation Standards</h2>
     	<div id="description">

                <div id="tabs" style="margin-left:2px;">&nbsp;</div>
                
                <div id="branch"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The implementation of new or upgraded NPS systems are the culmination of the combined efforts of the (1) NOAA Development organization (such as EMC, SWPC, MDL, NOS) to develop, test, validate, and optimize the new/upgraded system, and (2) NCEP Central Operations which installs the change package on the NOAA operational High Performance Computing (HPC) system, ensuring it adheres to implementation standards, that all changes contained in the package were as described by the Development organization, and that there are no unadvertised changes in timing or HPC resource usage encountered during their testing. The documents listed below describe technical requirements and timeline for NPS implementations (the EE2 document) and the NCO official Implementation Standards that must be applied by a developer of any system designated for implementation in the NPS.</span></span></div>
<p>
<H2>Relevent Documents</H2>         
<p>
                <ul>
                	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="https://www.nco.ncep.noaa.gov/idsb/implementation_standards/">NCEP Central Operations High Performance Computing (HPC) Implementation Standards</a></span></span></li>
                            <ul>
                                 <li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Latest version (v11.0), contains changes to be applied to the NPS on WCOSS-2</span></span></li>
                                 <li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Older versions (back to 2009) which describe standards used on previous NOAA HPC systems are listed for reference purposes</span></span></li>
                            </ul>
                	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="https://www.emc.ncep.noaa.gov/users/impldocs/EE2-Consolidated-Document.V2.pdf">Environmental Equivalence V2 (EE2)</a></span></span></li>
                            <ul>
                                 <li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Outlines the process for the transition of numerical modeling and analysis systems from research and development to the NPS.</span></span></li>
                            </ul>
                </ul>
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

</body>
      
</html>
 
