<?php 
global $browser_title;
 $browser_title = 'GFS Version 16';   
 include '../../portal_header.php';?>

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
            <a class="nav-link sidelnk" href="gfsv16/EMC-PMR-Quad-GFS-v16.pdf">
              Quad Chart
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link sidelnk" href="gfsv16/GFSv16 Project Plan Draft v1.0.pdf">
              Project Plan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link sidelnk" href="gfsv16/GFS.v16  task tracker - task tracker.pdf">
              Task Tracker
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="https://drive.google.com/drive/folders/1iMKNqdSw3tr14QPd3vQTxl3JZtH4B552">
              Physics Presentation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://drive.google.com/drive/folders/1Sc6oGMkRZ1P9uAuUu4CELZnMixiTwuba">
              GFSv16 Technical Meeting
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link sidelnk" href="gfsv16/GEFS_GFS-wave Development Plan.pdf">
              Wave Component Development Plan
            </a>
          </li>
		  </ul>
		  
		 <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Experiments</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
		<ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              Real-Time Experiment
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Retrospective Experiment
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Others</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              Product Changes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              News
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <!--<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>-->
            <button id="export" type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>
     <h2 id="section-title">EMC GFS Version 16 Quad</h2>
      <iframe id="frame" src="gfsv16/EMC-PMR-Quad-GFS-v16.pdf" frameborder="0" width="100%" height="669" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true">
             <p>It appears your web browser doesn't support iframes.</p>
      </iframe>
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
(function(){
var sectionTitles = ["EMC GFS Version 16 Quad", "EMC GFS Version 16 Project Plan", "EMC GFS Version 16 Issue Tracker", "EMC GFS Version Wave Component Development Plan"];
$(".sidelnk").on("click", function(e) {
     e.preventDefault();
     var a_href = $(this).attr('href');	
     var iframe = $('#frame');
     //var i = 0;

     for (var i = 0; i < sectionTitles.length; ++i) {
           if ( a_href.indexOf('Quad') >= 0 && sectionTitles[i].indexOf('Quad') >= 0){
             $("#section-title").html(sectionTitles[i]);
           }else if (a_href.indexOf('Project') >= 0 && sectionTitles[i].indexOf('Project') >= 0) {
             $("#section-title").html(sectionTitles[i]);
           }else if (a_href.indexOf('tracker') >= 0 && sectionTitles[i].indexOf('Tracker') >= 0) {
             $("#section-title").html(sectionTitles[i]);
           }else if (a_href.indexOf('wave') >= 0 && sectionTitles[i].indexOf('Wave') >= 0) {
               $("#section-title").html(sectionTitles[i]);
             }

     }
     
     iframe.attr('src', a_href);
});

$('#export').on("click", function(e) {
  
  var sectionTitle = $("#section-title").val();
  var iframeSrc = $('#frame').attr('src');
  var url = iframeSrc.substring(0, iframeSrc.indexOf('.'));
  
  if ( iframeSrc.indexOf('Quad') >= 0 ){
      window.location.href = url + '.pptx';
  }else if (iframeSrc.indexOf('Project') >= 0 ) {
      window.location.href = 'GFSv16 Project Plan Draft v1.0.docx';
  }else if (iframeSrc.indexOf('tracker') >= 0 ) {
      window.location.href = 'GFS.v16  task tracker.xlsx';
  }

  //window.location.href = iframeSrc;
});

}());
</script>
</body>
      
</html>
