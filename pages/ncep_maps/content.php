<?php include 'header.php' ?>

<!-- <div id="downloadImage"  download> </div> -->
<h1 id="model-protoype-headline">Coupled Model Prototypes</h1>
<a  href="./biasmaps.php" class="btn btn-success" role="button" id="changeBtn">Change to: Biasmaps</a>

<form class="form-group"  id="menu-container"   onsubmit="event.preventDefault()"> 
<select class="form-control" id="map" onchange="mapsObject.updateMap(event)">
<option value="" disabled selected>Map</option>
        <option value="diffmaps">diffmaps</option>
</select>

<!-- diffmaps -->
 <br>
<select class="form-control" id="diffmapsVarname"  onchange="mapsObject.updateVarname(event)">
        <option value="" disabled selected>Varname</option>
        <option value="snowc">snowc</option>
        <option value="cloudbdry">cloudbdry</option>
        <option value="cloudhi">cloudhi</option>
        <option value="cloudlow">cloudlow</option>
        <option value="cloudmid">cloudmid</option>
        <option value="cloudtot">cloudtot</option>
        <option value="dlwrf">dlwrf</option>
        <option value="dswrf">dswrf</option>
        <option value="icec">icec</option>
        <option value="icetk">icetk</option>
        <option value="prate">prate</option>
        <option value="pres">pres</option>
        <option value="pwat">pwat</option>
        <option value="snod">snod</option>
        <option value="spfh2m">spfh2m</option>
        <option value="t2max">t2max</option>
        <option value="t2min">t2min</option>
        <option value="tmp2m">tmp2m</option>
        <option value="tmpsfc">tmpsfc</option>
        <option value="u200">u200</option>
        <option value="u850">u850</option>
        <option value="olr">olr</option>
        <option value="ulwrf">ulwrf</option>
        <option value="uswrf">uswrf</option>
        <option value="weasd">weasd</option>
        <option value="z500">z500</option>
</select>

<br>
<select class="form-control" name="" id="model" onchange="mapsObject.updateModel(event)">
<option value="" disabled selected>Models</option>
        <option value="ufs_p6.vs.ufs_p5">ufs_p6.vs.ufs_p5 </option>
        <option value="ufs_p7.vs.ufs_p6">ufs_p7.vs.ufs_p6</option>
</select>
<br>
<select class="form-control" name="" id="diffmapsSeason" onchange="mapsObject.updateSeason(event)">
<option value="" disabled selected>Season</option>
        <option value="AllAvailable.168ICs">AllAvailable.168ICs</option>
        <option value="DJF.42ICs">DJF.42ICs</option>
        <option value="MAM.42ICs">MAM.42ICs</option>
        <option value="JJA.42ICs">JJA.42ICs</option>
        <option value="SON.42ICs">SON.42ICs</option>

</select>
<br>
<select  id="diffmapsPeriod" class="form-control" name="" placeholder="period" onchange="mapsObject.updatePeriod(event)">
<option value="" disabled selected>Period</option>
    <option value="d1-d7">d1-d7</option>
    <option value="d1-d35">d1-d35</option>
    <option value="d8-d14">d8-d14</option>
    <option value="d15-d28">d15-d28</option>
    <option value="d15-d21">d15-d21</option>
</select>  


<select class="form-control"  onchange="mapsObject.updateDomain(event)">
<option value="" disabled selected>Domain</option>
    <option value="Global">Global</option>
</select>
<br>

</form>
<br>
<div id="text">
</div>


<a  class="doc-link" href="https://docs.google.com/document/d/1ROvYy1CI213CuYySVHI8RNqkV14Fgm52KUp7iyADFtY/edit?usp=sharing">Click Here for More Information</a>
<script src="index.js"></script>
</body>
</html>