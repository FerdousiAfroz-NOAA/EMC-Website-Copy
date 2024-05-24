<?php include 'header.php' ?>
<h1 id="model-protoype-headline">Coupled Model Prototypes</h1>
<a  href="./content.php" class="btn btn-warning" role="button" id="changeBtn">Change to: Diffmaps</a>

<form class="form-group"  id="menu-container"   onsubmit="event.preventDefault()"> 
<select class="form-control" id="map" onchange="mapsObject.updateMap(event)">
<option value="" disabled selected>Map</option>
        <option value="biasmaps">biasmaps</option>
</select>
<br>
<select class="form-control" id="biasmapsVarname"  onchange="mapsObject.updateVarname(event)">
        <option value="" disabled selected>Varname</option>
        <option value="cloudtot">cloudtot</option>
        <option value="dlwrf">dlwrf</option>
        <option value="dswrf">dswrf</option>
        <option value="prate">prate</option>
        <option value="t2max">t2max</option>
        <option value="t2min">t2min</option>
        <option value="tmp2m">tmp2m</option>
        <option value="u200">u200</option>
        <option value="u850">u850</option>
        <option value="olr">olr</option>
        <option value="ulwrf">ulwrf</option>
        <option value="uswrf">uswrf</option>
        <option value="z500">z500</option>
</select>
<br>
<select class="form-control" name="" id="model" onchange="mapsObject.updateModel(event)">
<option value="" disabled selected>Models</option>
        <option value="ufs_p6">ufs_p6</option>
        <option value="ufs_p7">ufs_p7</option>
</select>
<br>
<select class="form-control" name="" id="biasmapsSeason" onchange="mapsObject.updateSeason(event)">
<option value="" disabled selected>Season</option>
        <option value="AllAvailable.168ICs">AllAvailable.168ICs</option>
        <option value="DJF.42ICs">DJF.42ICs</option>
        <option value="MAM.42ICs">MAM.42ICs</option>
        <option value="JJA.42ICs">JJA.42ICs</option>
        <option value="SON.42ICs">SON.42ICs</option>

</select>
<br>
<select class="form-control"  onchange="mapsObject.updateDomain(event)">
<option value="" disabled selected>Domain</option>
    <option value="Global">Global</option>
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
</form>
<br>
<div id="text">
</div>


<a  class="doc-link" href="https://docs.google.com/document/d/1ROvYy1CI213CuYySVHI8RNqkV14Fgm52KUp7iyADFtY/edit?usp=sharing">Click Here for More Information</a>
<script src="index.js"></script>

</body>
</html>