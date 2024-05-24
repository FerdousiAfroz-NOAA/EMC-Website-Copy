<?php include 'header.php' ?>

<!-- <div id="downloadImage"  download> </div> -->

<form class="form-group"  id="menu-container"   onsubmit="event.preventDefault()"> 
<label for="map-select-label">Map</label> 
<select class="form-control" id="map" onchange="mapsObject.updateMap(event)">
<option value="" disabled selected>Map</option>
        <option value="biasmaps" >biasmaps</option>
        <option value="diffmaps">diffmaps</option>
</select>
 <br>
<label for="varname-select-label">Varname</label> 
<select class="form-control" id="varname"  onchange="mapsObject.updateVarname(event)">
<option value="" disabled selected>Varname</option>

</select>
<br>
<label id="modelSixLabel" for="modelSix-select-label">ModelNew</label> 
<select class="form-control" name="" id="modelSix" onchange="mapsObject.updateModelSix(event)">
<option value="" disabled selected>ModelNew</option>
        <option value="ufs_p6">ufs_p6</option>
        <option value="ufs_p7">ufs_p7</option>

</select><label id="models" for="models-select-label">ModelNew</label> 
<select class="form-control" name="" id="models" onchange="mapsObject.updateModelSix(event)">
<option value="" disabled selected>ModelNew</option>
        <option value="ufs_p6">ufs_p6</option>
        <option value="ufs_p7">ufs_p7</option>
</select>
<br>
<label id="models" for="models-select-label">Models</label> 
<select class="form-control" name="" id="modelFive" onchange="mapsObject.updateModelFive(event)">
<option value="" disabled selected>Models</option>
        <option value="ufs_p6.vs.ufs_p5">ufs_p6.vs.ufs_p5</option>
        <option value="ufs_p7.vs.ufs_p6">ufs_p7.vs.ufs_p6</option>
</select>
<br>
<label for="season-select-label">Season</label> 
<select class="form-control" name="" id="season" onchange="mapsObject.updateSeason(event)">
<option value="" disabled selected>Season</option>
        <option value="AllAvailable.168ICs">AllAvailable.168ICs</option>
        <option value="DJF.42ICs">DJF.42ICs</option>
        <option value="MAM.42ICs">MAM.42ICs</option>
        <option value="JJA.42ICs">JJA.42ICs</option>
        <option value="SON.42ICs">SON.42ICs</option>

</select>
<br>
<label id="diffmapsPeriodLabel" for="period-select-label">Period</label> 
<select  class="form-control" name="" id="diffmapsPeriod" placeholder="period" onchange="mapsObject.updatePeriod(event)">
<option value="" disabled selected>Period</option>
    <option value="d1-d7">d1-d7</option>
    <option value="d1-d35">d1-d35</option>
    <option value="d8-d14">d8-d14</option>
    <option value="d15-d28">d15-d28</option>
    <option value="d15-d21">d15-d21</option>
</select> 

<label for="domain-select-label" id="domainLabel">Domain</label> 
<select class="form-control" name="" id="biasmapsDomain"  onchange="mapsObject.updateDomain(event)">
<option value="" disabled selected>Domain</option>
    <option value="Global50">Global50</option>
</select>
<br>
<select class="form-control" name=""  id="biaspdfDomain" onchange="mapsObject.updateDomain(event)">
<option value="" disabled selected>Domain</option>
    <option value="GlobalTropics">GlobalTropics</option>
</select>
<br>
<select class="form-control" name=""  id="diffmapsDomain" onchange="mapsObject.updateDomain(event)">
<option value="" disabled selected>Domain</option>
    <option value="Global">Global</option>
</select>
<br>
<label id="maskLabel" for="mask-select-label">Mask</label> 
<select class="form-control" name="" id="mask" onchange="mapsObject.updateMask(event)">
<option value="" disabled selected>Mask</option>
    <option value="oceanonly">oceanonly</option>
    <option value="landonly">landonly</option>
    <option value="nomask">nomask</option>

</select>

<br>
<label id="periodLabel" for="period-select-label">Period</label> 
<select  id="periodSelect" class="form-control" name="" id="period" placeholder="period" onchange="mapsObject.updatePeriod(event)">
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


<script src="index.js"></script>
</body>
</html>