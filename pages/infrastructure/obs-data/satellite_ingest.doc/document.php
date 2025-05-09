<?php
global $browser_title;
 $browser_title = 'SATELLITE DATA INGEST AT NCEP';
 include '../../../portal_header.php';?>

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
            <a class="nav-link sidelnk" href="https://emc.ncep.noaa.gov/emc/pages/infrastructure/bufrlib.php">
              BUFRLIB (BUFRLIB User Guide)
            </a>
          </li>
                  </ul>

                  <!-- The file that contains the Resource links to VLAB & Help -->
                <?php include '../../../portal_resources_sidelnks.php';?>


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
     <h2 id="section-title">SATELLITE DATA INGEST AT NCEP</h2>
     <center>
        <h3><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:18px;"><strong>NOAA/NWS/NCEP/EMC<br>
        (Last Revised 2/12/2018)</strong></span></span><span style="font-style: italic;"></span></h3>
     </center>

     <div id="description">

<body style="color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);" alink="#ff0000" link="#0000ff" vlink="#800080">
<center><span style="text-decoration: underline;">Satellite Data
Ingest
at NCEP</span>
<p><span style="font-family: Arial;"></span>Dennis Keyser - NOAA/NWS/NCEP/EMC<br>(Last Revised 2/13/2018<big><span style="font-style: italic;">-&nbsp;</span></big><big><span style="font-style: italic;">should now
be&nbsp;completely up-to-date</span></big>)</p></center><p><br><br><br></p><p><b>Please
take a moment to read the <a href="http://weather.gov/disclaimer.php">Disclaimer</a>
for this non-operational web page.</b>
<br>&nbsp;
<br>&nbsp;
<br>&nbsp;
</p><p>The ingest of most satellite
data into the NCEP /dcom database on
the
<a href="http://www-03.ibm.com/press/us/en/pressrelease/37091.wss">IBM
Central Computer System (IBM-WCOSS)</a>
machines is performed separately
from
the <a href="http://www.nco.ncep.noaa.gov/sib/decoders/">NCEP/NCO
decoding
system</a> which handles data
primarily on GTS.
</p><p>Most of the satellite data
described here are provided to NCEP from
NESDIS (either directly or as a conduit from other centers). Files are
transferred, via wget, ftp or lftp, from various servers directly
to
the NCEP IBM-WCOSS machine as they become available. A schedule has
been
established for the initiation of jobs on the IBM-WCOSS which perform
this
file transfer (see <a href="table_1.htm">Table
1</a>).&nbsp; Each time a
particular ingest job runs, a query is first
performed which returns a listing of files for the particular data type
currently residing on the server . This list is compared against a
history
of files that have previously been transferred and processed. If any
new
files are present, then those files are transferred. Otherwise, no
action
is taken.
</p><p>The following types are
currently part of the satellite ingest:
<br></p><ul>  <li><a name="radsnd"></a>NESDIS&nbsp;and
NASA/Langley&nbsp;GOES
inager and sounder&nbsp;data&nbsp;(for
ingest schedule see type
"goes_radsnd"
in <a href="table_1.htm#radsnd">Table
1</a>)</li>  
  
  <ul>    <li>NESDIS 1x1 field-of-view
satellite soundings, retrievals, level
1c
sounder
brightness
temperatures&nbsp;pulled
from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-acess account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/GOESND/satsnd.goesW.D??????????.T????Z.1B1&nbsp;[GOES-15 (W)]
(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);"></span></li>      <li><span style="text-decoration: line-through;">files (DDS) /pull/satsnd.goesE.D??????????.T????Z.1B1&nbsp;[GOES-13
(E)]</span>&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)
        <span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer produced after 11-20-15, sounder went bad)&nbsp;</span><span style="color: rgb(204, 0, 0);"></span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);"></span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);"></span></li>    
    
    </ul>    <li>NESDIS 1x1
field-of-view&nbsp;cloud data (cloud top pressure,
cloud temperature)
pulled
from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-acess account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/GOESND/goesW.RMD.D?????.T????.Z [GOES-15
(W)]&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li><span style="text-decoration: line-through;">files (DDS) /pull/GOESND/goesE.RMD.D?????.T????.Z&nbsp;[GOES-13
(E)]</span>&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer produced after 11-20-15, sounder went bad)&nbsp;</span> <span style="color: rgb(204, 0, 0);"></span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);"></span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);"></span></li>    
    
    </ul>    <li>NESDIS 11x17 field-of-view
level 1c imager (clear-sky)
brightness
temperatures
pulled
from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-acess account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/GOESND/gicsbt.???????.????.goes15NB [GOES-15
(W)]&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li>files
        <span style="text-decoration: line-through;">PDAFileLinks/PULL/GOESND/gicsbt.???????.????.goes13NB [GOES-13
(E)]&nbsp;</span>(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no longer produced after 01-08-18)&nbsp;</span><span style="color: rgb(204, 0, 0);"></span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);"></span></li>    
    
    </ul>    <li>NASA/Langley&nbsp;1x1
field-of-view&nbsp;cloud data (cloud
top/bottom pressure/height, cloud temperature, cloud phase)
pulled
from NASA typhoon.larc.nasa.gov&nbsp;server (primary) or ESRL&nbsp;
gsdftp.fsl.noaa.gov&nbsp;server (backup)&nbsp;via anonymous user-access</li>    
    
    <ul>      <li>files
/pub/rabi/RR/G15V3.0.RR.???????.????.PX.08K.CDF.gz
[GOES-15
(W)]&nbsp;(<a href="http://www.unidata.ucar.edu/software/netcdf/">NetCDF</a>)</li>      <li>files
/pub/rabi/RR/G16V3.0.RR.???????.????.PX.06K.CDF.gz&nbsp;[GOES-16
(E)]&nbsp;(<a href="http://www.unidata.ucar.edu/software/netcdf/">NetCDF</a>)</li>      <li><span style="text-decoration: line-through;">files
/pub/rabi/RR/G13V3.0.RR.???????.????.PX.08K.CDF.gz&nbsp;[GOES-13
(E)]&nbsp;</span>(<a href="http://www.unidata.ucar.edu/software/netcdf/">NetCDF</a>)&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer produced after 12-28-17, GOES-16 replaced GOES-13 as
GOES-E)&nbsp;</span></li>    
    
    </ul>    <li>GOES Imager Effective Cloud
Amount (i.e.,
sky-Cover) data&nbsp;pulled from Univ. of Wisconsin
ftp.ssec.wisc.edu server&nbsp;via&nbsp;anonymous user-access</li>    
    
    <ul>      <li>files
/pub/goes_imgr_sky_cvr/ascii/G15_Imgr_????z_???????.TXT [GOES-15 (W)]
(<a href="File_Format.doc/GOES-sky_cover.html">ASCII</a>)</li>      <li>files
/pub/goes_imgr_sky_cvr/ascii/G16_Imgr_????z_???????.TXT [GOES-16 (E)]
(<a href="File_Format.doc/GOES-sky_cover.html">ASCII</a>)</li>      <li><span style="text-decoration: line-through;">files
/pub/goes_imgr_sky_cvr/ascii/G13_Imgr_????z_???????.TXT [GOES-13
(E)]&nbsp;</span><span style="text-decoration: line-through;"></span><span style="text-decoration: line-through;"></span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);"></span>(<a href="File_Format.doc/GOES-sky_cover.html">ASCII</a>)<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">
(no
longer produced after 12-27-17, GOES-16 replaced GOES-13 as
GOES-E)&nbsp;</span></li>    
    
    </ul>    <br>  
  
  </ul>  <li><a style="color: rgb(0, 0, 0);" name="ssmi"></a>FNMOC/DMSP SSM/I,
FNMOC/DMSP SSM/IS and NASA/GPM-core/GMI data
(for ingest schedule see type "ssmi" in <a href="table_1.htm#ssmi">Table
1</a>)</li>  
  
  <ul>    <li>SSM/I EDR files (derived
products) pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-access
account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/DMSP/NPR.EDRR.S9.D?????.S????.E????.????????.NS (DMSP
F-15)&nbsp;(<a href="http://www.ncdc.noaa.gov/oa/rsad/ssmi/ssmi-edr-documentation.pdf">Shared
Processing Data Exchange Format/EDR</a>)</li>    
    
    </ul>    <li>SSM/I SDR files (1c
brightness temperatures) pulled from&nbsp;NESDIS&nbsp;PDA
server via user-access
account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/DMSP/NPR.SDRR.S9.D?????.S????.E????.????????.NS
(DMSP&nbsp;F-15)&nbsp;(<a href="http://www.ncdc.noaa.gov/oa/rsad/ssmi/ssmi-sdr-documentation.pdf">Shared
Processing Data Exchange Format/SDR</a>)</li>    
    
    </ul>    <li>SSM/IS UPP (Unified
Pre-Processor)&nbsp;1b brightness
temperatures pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-access&nbsp;account</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">files&nbsp;(DDS)
/pull/NPR.TDUP.SA.D?????.S????.E????.????????.NS (DMSP
F-16)&nbsp;</span>(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a><span style="text-decoration: line-through;">)</span>&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer produced after 2-2-16)&nbsp;</span></li>      <li>files PDAFileLinks/PULL/DMSP/NPR.TDUP.SB.D?????.S????.E????.????????.NS (DMSP
F-17)&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>      <li>files PDAFileLinks/PULL/DMSP/NPR.TDUP.SC.D?????.S????.E????.????????.NS (DMSP
F-18)&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>      <li><span style="text-decoration: line-through;">files (DDS)
/pull/NPR.TDUP.SD.D?????.S????.E????.????????.NS (DMSP
F-19)</span>&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer produced after 2-11-16)&nbsp;</span></li>    
    
    </ul>    <li>GMI L1C-R brightness temperatures&nbsp;pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-access&nbsp;account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/GMI/1C-R.GPM.GMI.XCAL????-?.????????-S??????-E??????.V???.bufr&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)
        <span style="font-size: 10pt;"></span> </li>    
    
    </ul>  
  
  </ul>  <br>  <li><a style="color: rgb(0, 0, 0);" name="tovs"></a>NESDIS/POES
ATOVS sounder&nbsp;data (for
ingest
schedule
see &ldquo;tovs&rdquo; in <a href="table_1.htm#tovs">Table
1</a>)</li>  
  
  <ul>    <li>ATOVS&nbsp;soundings
and level 1c&nbsp;brightness
temperatures&nbsp;pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-access
account</li>    
    
    <ul>      <li>files
PDAFileLinks/PULL/ATOVS/NPR.ATNC.NP.D?????.S????.E????.????????
(NOAA-19)&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>      <li>files
PDAFileLinks/PULL/ATOVS/NPR.ATNC.M1.D?????.S????.E????.????????
[METOP-1(B)]&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>    
    
    </ul>    <li>AMSU-A 1b&nbsp;brightness temperatures&nbsp;pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-access&nbsp;account</li>    
    
    <ul>      <li>files
PDAFileLinks/PULL/ATOVS/NSS.AMAX.NK.D?????.S????.E????.????????.??
(NOAA-15) [<a href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-6.htm">NOAA
Level 1b (Native) Format/AMSU-A</a>]</li>      <li><span style="text-decoration: line-through;">files (DDS)
/pull/NSS.AMAX.NL.D?????.S????.E????.????????.??
(NOAA-16)&nbsp;[</span><a style="text-decoration: line-through;" href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-6.htm">NOAA
Level 1b (Native) Format/AMSU-A</a><span style="text-decoration: line-through;">]</span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">
(no longer produced after 6-9-14)&nbsp;</span></li>      <li>files
PDAFileLinks/PULL/ATOVS/NSS.AMAX.NN.D?????.S????.E????.????????.??
(NOAA-18)&nbsp;[<a href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-6.htm">NOAA
Level 1b (Native) Format/AMSU-A</a>]</li>      <li>files
PDAFileLinks/PULL/ATOVS/NSS.AMAX.NP.D?????.S????.E????.????????.??
(NOAA-19)&nbsp;[<a href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-6.htm">NOAA
Level 1b (Native) Format/AMSU-A</a>]</li>      <li>files
PDAFileLinks/PULL/ATOVS/NSS.AMAX.M2.D?????.S????.E????.????????.??
(METOP-2)&nbsp;[<a href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-6.htm">NOAA
Level 1b (Native) Format/AMSU-A</a>]</li>      <li>files
PDAFileLinks/PULL/ATOVS/NSS.AMAX.M1.D?????.S????.E????.????????.??
(METOP-1)&nbsp;[<a href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-6.htm">NOAA
Level 1b (Native) Format/AMSU-A</a>]</li>    
    
    </ul>    <li style="text-decoration: line-through;">AMSU-B
1b&nbsp;brightness temperatures&nbsp;pulled from
NESDIS dds.nesdis.noaa.gov machine via user-access&nbsp;account</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">files
/pull/NSS.AMBX.NL.D?????.S????.E????.????????.??
(NOAA-16)&nbsp;[</span><a style="text-decoration: line-through;" href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-7.htm">NOAA
Level 1b (Native) Format/AMSU-B</a><span style="text-decoration: line-through;">]</span>&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">
(no longer produced after 6-9-14)&nbsp;</span></li>      <li><span style="text-decoration: line-through;">files
/pull/NSS.AMBX.NM.D?????.S????.E????.????????.??
(NOAA-17)&nbsp;[</span><a style="text-decoration: line-through;" href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-7.htm">NOAA
Level 1b (Native) Format/AMSU-B</a><span style="text-decoration: line-through;">]</span>&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer produced after 4-10-13)&nbsp;</span></li>    
    
    </ul>    <li>MHS 1b&nbsp;brightness
temperatures&nbsp;pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-access
account</li>    
    
    <ul>      <li>files
PDAFileLinks/PULL/ATOVS/NSS.MHSX.NN.D?????.S????.E????.????????.??
(NOAA-18) [<a href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-9.htm">NOAA
Level 1b (Native) Format/MHS</a>]</li>      <li>files
PDAFileLinks/PULL/ATOVS/NSS.MHSX.NP.D?????.S????.E????.????????.??
(NOAA-19)&nbsp;[<a href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-9.htm">NOAA
Level 1b (Native) Format/MHS</a>]</li>      <li>files
PDAFileLinks/PULL/ATOVS/NSS.MHSX.M2.D?????.S????.E????.????????.??
[METOP-2(A)] [<a href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-9.htm">NOAA
Level 1b (Native) Format/MHS</a>]</li>      <li>files
PDAFileLinks/PULL/ATOVS/NSS.MHSX.M1.D?????.S????.E????.????????.??
[METOP-1(B)] [<a href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-9.htm">NOAA
Level 1b (Native) Format/MHS</a>]</li>    
    
    </ul>    <li style="text-decoration: line-through;">HIRS-3
1b&nbsp;brightness temperatures&nbsp;pulled from
NESDIS dds.nesdis.noaa.gov machine via user-access&nbsp;account</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">files
/pull/NSS.HIRX.NL.D?????.S????.E????.????????.??
(NOAA-16) [</span><a style="text-decoration: line-through;" href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-5.htm">NOAA
Level 1b (Native) Format/HIRS-3, HIRS-4</a><span style="text-decoration: line-through;">]</span>&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">
(no longer produced after 6-9-14)&nbsp;</span></li>      <li><span style="text-decoration: line-through;">files
/pull/NSS.HIRX.NM.D?????.S????.E????.????????.??
(NOAA-17)&nbsp;[</span><a style="text-decoration: line-through;" href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-5.htm">NOAA
Level 1b (Native) Format/HIRS-3, HIRS-4</a><span style="text-decoration: line-through;">]</span>&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer produced after 4-10-13)&nbsp;</span></li>    
    
    </ul>    <li>HIRS-4 1b&nbsp;brightness temperatures&nbsp;pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-access&nbsp;account</li>    
    
    <ul>      <li>files
PDAFileLinks/PULL/ATOVS/NSS.HIRX.NN.D?????.S????.E????.????????.??
(NOAA-18)&nbsp;[<a href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-5.htm">NOAA
Level 1b (Native) Format/HIRS-3, HIRS-4</a>]</li>      <li>files
PDAFileLinks/PULL/ATOVS/NSS.HIRX.NP.D?????.S????.E????.????????.??
(NOAA-19)&nbsp;[<a href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-5.htm">NOAA
Level 1b (Native) Format/HIRS-3, HIRS-4</a>]</li>      <li>files
PDAFileLinks/PULL/ATOVS/NSS.HIRX.M2.D?????.S????.E????.????????.??
[METOP-2(A)] [<a href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-5.htm">NOAA
Level 1b (Native) Format/HIRS-3, HIRS-4</a>]</li>      <li>files
PDAFileLinks/PULL/ATOVS/NSS.HIRX.M1.D?????.S????.E????.????????.??
[METOP-1(B)] [<a href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-5.htm">NOAA
Level 1b (Native) Format/HIRS-3, HIRS-4</a>]</li>    
    
    </ul>  
  
  </ul></ul><ul></ul><ul>  <li><a style="color: rgb(0, 0, 0);" name="satwnd"></a>NESDIS/NASA
GEOSTATIONARY and &nbsp;POLAR-ORBITING&nbsp;satellite derived winds
(for ingest schedule see "satwnd" in <a href="table_1.htm#satwnd">Table
1</a>)</li>  
  
  <ul>    <li>GOES IR
(long-wave) imager&nbsp;winds&nbsp;pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-access
account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/GOESAMV/satwnd.bufrCD.goesW.D?????.T??:??:??Z&nbsp;[GOES-15
(W)]&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li><span style="text-decoration: line-through;">files PDAFileLinks/PULL/GOESAMV/satwnd.bufrCD.goesE.D?????.T??:??:??Z
[GOES-13 (E)]&nbsp;</span>(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no longer produced after 01-08-18)</span></li>    
    
    </ul>    <li>GOES IR
(long-wave) imager&nbsp;winds&nbsp;pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-acess&nbsp;account</li>    
    
    <ul>      <li>files
PDAFileLinks/NDE/GOESAMV/?M?F-M?C14_v1r0_g16_s???????????????_e???????????????_c???????????????.bufr
[(GOES-16 (E), chn. 14] (<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>    
    
    </ul>    <li>GOES water vapor imager
winds&nbsp;pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-access
account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/GOESAMV/satwnd.bufrWV.goesW.D?????.T??:??:??Z&nbsp;[GOES-15
(W)]&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li><span style="text-decoration: line-through;">files PDAFileLinks/PULL/GOESAMV/satwnd.bufrWV.goesE.D?????.T??:??:??Z
[GOES-13 (E)]&nbsp;</span>(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no longer produced after 01-08-18)</span></li>    
    
    </ul>    <li>GOES water vapor imager clear
sky/deep-layer&nbsp;winds&nbsp;pulled
from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-acess&nbsp;account</li>    
    
    <ul>      <li>files
PDAFileLinks/NDE/GOESAMV/?M?VF-M?C08_v1r0_g16_s???????????????_e???????????????_c???????????????.bufr
[(GOES-16 (E), chn. 8]&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li>files
PDAFileLinks/NDE/GOESAMV/?M?VF-M?C09_v1r0_g16_s???????????????_e???????????????_c???????????????.bufr
[(GOES-16 (E), chn. 9]&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li>files
PDAFileLinks/NDE/GOESAMV/?M?VF-M?C10_v1r0_g16_s???????????????_e???????????????_c???????????????.bufr
[(GOES-16 (E), chn. 10]&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>    
    
    </ul>    <li>GOES water vapor imager cloud top&nbsp;winds&nbsp;pulled
from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-acess&nbsp;account</li>    
    
    <ul>      <li>files
PDAFileLinks/NDE/GOESAMV/?M?F-M?C08_v1r0_g16_s???????????????_e???????????????_c???????????????.bufr
[(GOES-16 (E), chn. 8]&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>    
    
    </ul>    <li>GOES visible imager winds
pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-access
account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/GOESAMV/satwnd.bufrVZ02.goesW.D?????.T??:??:??Z&nbsp;[GOES-15
(W)]&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li><span style="text-decoration: line-through;">files PDAFileLinks/PULL/GOESAMV/satwnd.bufrVZ02.goesE.D?????.T??:??:??Z
[GOES-13 (E)]&nbsp;</span>(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no longer produced after 01-08-18)</span></li>    
    
    </ul>    <li>GOES visible imager winds&nbsp;pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-acess&nbsp;account</li>    
    
    <ul>      <li>files
PDAFileLinks/NDE/GOESAMV/?M?F-M?C02_v1r0_g16_s???????????????_e???????????????_c???????????????.bufr
[(GOES-16 (E), chn. 2]&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>    
    
    </ul>    <li>GOES IR
(short-wave) imager&nbsp;winds&nbsp;pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-access
account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/GOESAMV/satwnd.bufrSWIR.goesW.D?????.T??:??:??Z&nbsp;[GOES-15
(W)]&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li><span style="text-decoration: line-through;">files PDAFileLinks/PULL/GOESAMV/satwnd.bufrSWIR.goesE.D?????.T??:??:??Z
[GOES-13 (E)]&nbsp;</span>(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no longer produced after 01-08-18)</span></li>    
    
    </ul>    <li>GOES IR
(short-wave) imager&nbsp;winds&nbsp;pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-acess&nbsp;account</li>    
    
    <ul>      <li>files
PDAFileLinks/NDE/GOESAMV/?M?F-M?C07_v1r0_g16_s???????????????_e???????????????_c???????????????.bufr
[(GOES-16 (E), chn. 7]&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>    
    
    </ul>    <li>GOES water vapor sounder
winds pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-access
account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/GOESAMV/satwnd.bufrWV11.goesW.D?????.T??:??:??Z&nbsp;[GOES-15
(W),
channel 11]&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li>files PDAFileLinks/PULL/GOESAMV/satwnd.bufrWV10.goesW.D?????.T??:??:??Z&nbsp;[GOES-15
(W), channel 10]&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li><span style="text-decoration: line-through;">files (DDS) /pull/satwnd.bufrWV11.goesE.D?????.T??:??:??Z&nbsp;[GOES-13
(E), channel 11]&nbsp;</span>(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer produced after 11-20-15, sounder went bad)&nbsp;</span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);"></span></li>      <li><span style="text-decoration: line-through;">files (DDS) /pull/satwnd.bufrWV10.goesE.D?????.T??:??:??Z
[GOES-13 (E), channel 10]&nbsp;</span>(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer produced after 11-20-15, sounder went bad)&nbsp;</span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);"></span></li>    
    
    </ul>    <li>MODIS&nbsp;IR&nbsp;(long-wave)
imager
winds pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-access
account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/POESAMV/satwnd.bufrcdft.aqua.D?????.T??:??:??Z
(AQUA)&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li>files PDAFileLinks/PULL/POESAMV/satwnd.bufrcdft.terra.D?????.T??:??:??Z
(TERRA)&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>    
    
    </ul>    <li>MODIS&nbsp;water
vapor&nbsp;imager winds pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-access
account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/POESAMV/satwnd.bufrwvap.aqua.D?????.T??:??:??Z
(AQUA)&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>    
    
    </ul>    <li>AVHRR&nbsp;IR
(long-wave) imager
winds pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-access
account</li>    
    
    <ul>      <li>files
PDAFileLinks/PULL/POESAMV/satwnd.bufrcdft.METOPA.D?????.T??:??:??Z [METOP-2(A)] (<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li>files
PDAFileLinks/PULL/POESAMV/satwnd.bufrcdft.METOPB.D?????.T??:??:??Z [METOP-1(B)] (<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li>files
PDAFileLinks/PULL/POESAMV/satwnd.bufrcdft.N15.D?????.T??:??:??Z
(NOAA-15) (<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li>files
PDAFileLinks/PULL/POESAMV/satwnd.bufrcdft.N18.D?????.T??:??:??Z
(NOAA-18) (<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li>files
PDAFileLinks/PULL/POESAMV/satwnd.bufrcdft.N19.D?????.T??:??:??Z
(NOAA-19) (<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>    
    
    </ul>    <li>VIIRS&nbsp;IR
(long-wave) imager
winds&nbsp;pulled from&nbsp;NESDIS PDA
server&nbsp;via user-acess&nbsp;account</li>    
    
    <ul>      <li>files
PDAFileLinks/NDE/VIIRS/PAMV_v1r0_npp_s???????????????_e???????????????_c???????????????.bufr
(S-NPP) (<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>    
    
    </ul>  
  
  </ul>  <br>  <li><a style="color: rgb(0, 0, 0);" name="qscatter"></a>EUMETSAT/ASCAT
and ISS/RapidSCAT data (for ingest schedule see
"qscatter"
in <a href="table_1.htm#qscatter">Table
1</a>)</li>  
  
  <ul>    <li>ASCAT&nbsp;wind
scatterometer&nbsp;data at 50 km resolution
pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-access
account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/SCAT/ascat_????????_??????_metopa_?????_srv_o_250_ovw.l2_bufr
[METOP-2(A)] &nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li>files PDAFileLinks/PULL/SCAT/ascat_????????_??????_metopb_?????_srv_o_250_ovw.l2_bufr
[METOP-1(B)] &nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>    
    
    </ul>    <li style="text-decoration: line-through;">RapidScat wind scatterometer data&nbsp; at 25 km resolution
pulled from KNMI server ftp.knmi.nl via user-access
account</li>    
    
    <ul>      <li>f<span style="text-decoration: line-through;">iles
/rscat_nrt/rapid_????????_??????_iss____?????_2hr_o_250_ovw_l2.bufr
(2-hour latency)&nbsp;</span>(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer produced after 8-19-16)&nbsp;</span></li>      <li><span style="text-decoration: line-through;">files
/rscat_del/rapid_????????_??????_iss____?????_o_250_ovw_l2.bufr (3-hour
latency)&nbsp;</span>(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer produced after 8-19-16)&nbsp;</span></li>    
    
    </ul>  
  
  </ul></ul><ul>  <li><a style="color: rgb(0, 0, 0);" name="windsat"></a>FNMOC/WindSat&nbsp;data
(for ingest schedule see "windsat"
in <a href="table_1.htm#windsat">Table
1</a>)</li>  
  
  <ul>    <li style="text-decoration: line-through;">wind
scatterometer&nbsp;data pulled from NESDIS
dds.nesdis.noaa.gov machine via user-access
account</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">files
/pull/NPR.E068.WS.D?????.S????.E???? (CORIOLIS) (</span><a href="File_Format.doc/WindSat%20Environmental%20Data%20Record%20files%20from%20NAVOCEANO.htm">WindSAT
Shared Processing Data Exchange Format/EDR</a><span style="text-decoration: line-through;">)</span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">&nbsp;(no
longer processed&nbsp;after </span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">8-4-12,
format change)&nbsp;</span></li>    
    
    </ul>  
  
  </ul>  <br>  <li><a name="airs"></a>NASA/AQUA/AIRS/AMSU-A,&nbsp;EUMETSAT/METOP/IASI
(global
satellite broadcast, and regional direct broadcast from
UW/SSEC),&nbsp;ISRO-CNES/Megha-Tropiques/SAPHIR
and&nbsp;JAXA/GCOM-W/AMSR2 data
(for
ingest
schedule
see "airs" in <a href="table_1.htm#airs">Table
1</a>)</li>  
  
  <ul>    <li>AIRS and&nbsp;AMSU-A
every&nbsp;field-of-view 1b&nbsp;brightness temperatures pulled from&nbsp;NESDIS PDA
server&nbsp;via user-access
account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/NPR.AIBT.AQ.D?????.S????.E????.????.C0300.U8
(AQUA)&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>    
    
    </ul>    <li>METOP/IASI 616 channel
every&nbsp;field-of-view
1c radiances pulled from&nbsp;NESDIS PDA
server via user-access
account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/IASI/NPR_IARD.M02_D?????_S??????_E??????_G???_C0616_U6
[METOP-2(A)] (<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>      <li>files PDAFileLinks/PULL/IASI/NPR_IARD.M01_D?????_S??????_E??????_G???_C0616_U6
[METOP-1(B)] (<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>    
    
    </ul>    <li>SAPHIR L1A2 brightness temperatures pulled from&nbsp;NESDIS PDA
server&nbsp;via user-access
account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/SAPHIR/W_XX-EUMETSAT-Darmstadt,SOUNDING+SATELLITE,MEGHA-TROPIQUES+<br>SAPHIR_C_EUMP_??????????????_?????_?????_?_??_L1A2.bin.bz2
(Megha-Tropiques) (<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>    
    
    </ul>    <li>AMSR2 L1B brightness&nbsp;temperatures pulled from NESDIS PDA
server&nbsp;via user-access account</li>    
    
    <ul>      <li>files
PDAFileLinks/NDE/AMSR2/AMSR2-MBT-89A_v2r0_GW1_s???????????????_e???????????????_c???????????????.bufr
(chn 89 A-horn) (GCOM-W) (<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li>files
PDAFileLinks/NDE/AMSR2/AMSR2-MBT-89B_v2r0_GW1_s???????????????_e???????????????_c???????????????.bufr
(chn 89 B-horn) (GCOM-W) (<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li>files
PDAFileLinks/NDE/AMSR2/AMSR2-MBT-LR_v2r0_GW1_s???????????????_e???????????????_c???????????????.bufr
(chn 6-36) (GCOM-W) (<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>    
    
    </ul>    <li>METOP/IASI 616 channel
every&nbsp;field-of-view
1c regional direct broadcast radiances pulled from UW/SSEC server
ftp.ssec.wisc.edu&nbsp;via&nbsp;via anonymous user-access</li>    
    
    <ul>      <li>files
/santek/DB_BUFR/ALL/IASI_xxx_1C_M01_??????????????Z_??????????????Z_V_T_??????????????Z.bufr&nbsp;[METOP-1(B)]&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>      <li>files
/santek/DB_BUFR/ALL/IASI_xxx_1C_M02_??????????????Z_??????????????Z_V_T_??????????????Z.bufr
[METOP-2(A)]&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>    
    
    </ul>  
  
  </ul>  <br>  <li><a name="avhrr"></a>NESDIS/POES&nbsp;AVHRR/GAC&nbsp;data (for
ingest
schedule
see "avhrr" in <a href="table_1.htm#avhrr">Table
1</a>)</li>  
  
  <ul>    <li>METOP-2(A)
every&nbsp;field-of-view
GAC&nbsp;brightness
temperatures pulled from&nbsp;NESDIS PDA
server&nbsp;via user-access
account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/AVHRRGAC/NSS.GHRR.M2.D?????.S????.E????.????????.??&nbsp;[<a href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-4.htm">NOAA
Level 1b (Native) Format/GAC</a>]</li>    
    
    </ul>    <li>NOAA-18&nbsp;every&nbsp;field-of-view
GAC&nbsp;brightness
temperatures pulled from&nbsp;NESDIS PDA
server via user-access
account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/AVHRRGAC/NSS.GHRR.NN.D?????.S????.E????.????????.??&nbsp;[<a href="http://www2.ncdc.noaa.gov/docs/klm/html/c8/s831-4.htm">NOAA
Level 1b (Native) Format/GAC</a>]</li>    
    
    </ul>  
  
  </ul>  <br>  <li><a style="color: rgb(0, 0, 0);" name="tmi"></a>NASA/TRMM
(Tropical Rainfall Measuring Mission)&nbsp;data (for
ingest schedule see &ldquo;tmi&rdquo; in <a href="table_1.htm#tmi">Table
1</a>)</li>  
  
  <ul>    <li style="text-decoration: line-through;">TMI (TRMM
Microwave
Imager)&nbsp;rainfall data pulled from
NASA&nbsp;trmmrt.gsfc.nasa.gov
server&nbsp;via user-access&nbsp;account</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">files
/TRMMRT/data/files/2A12.????-??-??T??-??-??Z.7.rt.gz
(TRMM) (</span><a href="http://www.hdfgroup.org/">HDF format</a><span style="text-decoration: line-through;">)</span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">&nbsp;(no
longer produced after 4-8-15)&nbsp;</span></li>    
    
    </ul>  
  
  </ul>  <br>  <li><a style="color: rgb(0, 0, 0);" name="poessst"></a>POES
SST data
(for ingest schedule see "poes_sst" in <a href="table_1.htm#poessst">Table
1</a>)</li>  
  
  <ul>    <li>NAVOCEANO-generated AVHRR sea-surface
temperature&nbsp;retrievals,&nbsp;brightness temperature and
albedo&nbsp;pulled from
NCEP ncorzdm.ncep.noaa.gov machine via user-access&nbsp;account</li>    
    
    <ul>      <li>files
/home/ftp/data/nco/navysst_tempobs/mcsst_n18_d*tmp (NOAA-18) [<a href="File_Format.doc/NAVY_SST_new.htm">MCSST&nbsp;temporary
file
binary format</a>]</li>      <li>files
/home/ftp/data/nco/navysst_tempobs/mcsst_n19_d*tmp (NOAA-19)&nbsp; [<a href="File_Format.doc/NAVY_SST_new.htm">MCSST&nbsp;temporary
file
binary format</a>]</li>      <li>files
/home/ftp/data/nco/navysst_tempobs/mcsst_mta_d*tmp [METOP-2(A)]&nbsp; [<a href="File_Format.doc/NAVY_SST_new.htm">MCSST&nbsp;temporary
file
binary format</a>]</li>    
    
    </ul>    <li style="text-decoration: line-through;">NESDIS-generated
AVHRR sea-surface temperature&nbsp;retrievals,&nbsp;brightness
temperature
and albedo pulled from NESDIS dds.nesdis.noaa.gov machine via
user-access
account</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">files
/pull/sst.tmpobs.*.????.???.???? [NOAA-18, -19,
METOP-2(A)] [</span><a href="File_Format.doc/NESDIS_SST.htm">NESDIS&nbsp;temporary
file
binary format (output of NESDIS' MUT processing for NESDIS data</a><span style="text-decoration: line-through;">]</span> <span style="font-style: italic; color: rgb(204, 0, 0); font-weight: bold;">(no
longer produced after 12-1-15)</span></li>    
    
    </ul>  
  
  </ul>  <br>  <li><a name="goessst"></a>GOES-sea-surface
temperature&nbsp;data&nbsp; (for ingest schedule
see "goes_sst" in <a href="table_1.htm#goessst">Table
1</a>)</li>  
  
  <ul>    <li>NESDIS-generated 24-hour
average sea-surface temperature
retrievals pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via
user-access&nbsp;account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/BIN/sst24o_goes_????_???.gz [GOES-15 (W)
        <span style="text-decoration: line-through;">and&nbsp;-13 (E)</span>]&nbsp;(<a href="File_Format.doc/GOES_SST.htm">GOES&nbsp;SST&nbsp;file
byte-addressable binary format</a>) &nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(GOES-13&nbsp;no longer produced after 01-08-18)&nbsp;</span><span style="color: rgb(204, 0, 0);"></span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);"></span></li>    
    
    </ul>  
  
  </ul>  <br>  <li><a style="color: rgb(0, 0, 0);" name="ozone_orbit"></a>NESDIS/POES,&nbsp;METOP-2
and AURA orbital ozone data&nbsp;(for
ingest
schedule
see &ldquo;ozone_orbit&rdquo; in <a href="table_1.htm#ozone_orbit">Table
1</a>)</li>  
  
  <ul>    <li>Solar Backscatter
UltraViolet (SBUV-2) nadir profile ozone&nbsp;data&nbsp;in
Version 8 BUFR pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via user-access
account</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">files (DDS)
/pull/PRD.OZONE.PMFV8.N17.D?????.S????.E????.??????
(NOAA-17)&nbsp;(</span><a style="text-decoration: line-through;" href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a><span style="text-decoration: line-through;">, </span><a style="text-decoration: line-through;" href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a><span style="text-decoration: line-through;">)</span>&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer produced after 4-10-13)&nbsp;</span></li>      <li><span style="text-decoration: line-through;">files (DDS)
/pull/PRD.OZONE.PMFV8.N16.D?????.S????.E????.??????
(NOAA-16)&nbsp;(</span><a style="text-decoration: line-through;" href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a><span style="text-decoration: line-through;">, </span><a style="text-decoration: line-through;" href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a><span style="text-decoration: line-through;">)</span>&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer produced after 6-9-14)&nbsp;</span></li>      <li><span style="text-decoration: line-through;">files (DDS)
/pull/PRD.OZONE.PMFV8.N18.D?????.S????.E????.??????
(NOAA-18)&nbsp;(</span><a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a><span style="text-decoration: line-through;">)</span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">&nbsp;(no
longer produced after 12-12-12)&nbsp;</span></li>      <li>files PDAFileLinks/PULL/OZONE/PRD.OZONE.PMFV8.N19.D?????.S????.E????.??????
(NOAA-19)&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>    
    
    </ul>    <li>Global Ozone Monitoring
Experiment (GOME-2) ozone
data&nbsp;pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via
user-access&nbsp;account</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/OZONE/GOME_M02_8TO3_??????????????Z_??????????????Z.BUFR
[METOP-2(A)] (<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>      <li>files PDAFileLinks/PULL/OZONE/GOME_M01_8TO3_??????????????Z_??????????????Z.BUFR
[METOP-1(B)] (<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>    
    
    </ul>    <li>Ozone Monitoring
Instrument (OMI)&nbsp;ozone
data&nbsp;pulled from NESDIS eosb1.nesdis.noaa.gov machine via
user-access
account</li>    
    
    <ul>      <li>files
omi/OMTO3/OMI-Aura_L2-OMTO3_????m????t????-o?????_v883-????m????t??????.he5&nbsp;(AURA)
(<a href="http://www.hdfgroup.org/HDF5/">HDF5
format</a>)</li>    
    
    </ul>    <li>Microwave Limb
Sounder&nbsp;(MLS)&nbsp;ozone
data&nbsp;pulled from NASA discnrt1.ecs.nasa.gov&nbsp;machine
via user-access&nbsp;account</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">files
data/Aura_NRT/ML2O3_NRT.002/Recent/MLS-Aura_L2GP-O3_v03-43-NRT-07-c01_????d???t????.he5</span>&nbsp;(AURA)
(<a href="http://www.hdfgroup.org/HDF5/">HDF5
format</a>) <span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(ingest
temporarity stopped 1-31-17)</span></li>    
    
    </ul>  
  
  </ul>  <br>  <li><a name="ozone14"></a>NESDIS/POES
daily&nbsp;ozone data (for
ingest schedule see
"ozone14" in <a href="table_1.htm#ozone14">Table
1</a>)</li>  
  
  <ul>    <li style="text-decoration: line-through;">NOAA-18 Solar
Backscatter&nbsp;UltraViolet (SBUV-2) nadir profile ozone data in
Version 8
BUFR&nbsp;pulled from NESDIS dds.nesdis.noaa.gov machine via
user-access
account</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">file
/pull/PRD.OZONE.PMF.N18.BUFR&nbsp;(</span><a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a><span style="text-decoration: line-through;">)</span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">
(no longer produced after 12-12-12)&nbsp;</span></li>    
    
    </ul>    <li style="text-decoration: line-through;">NOAA-16 Solar
Backscatter&nbsp;UltraViolet (SBUV-2) nadir profile ozone data
in&nbsp;Version 8
BUFR&nbsp;pulled from NESDIS dds.nesdis.noaa.gov machine via
user-access
account</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">file
/pull/PRD.OZONE.PMF.N16.BUFR&nbsp;(</span><a style="text-decoration: line-through;" href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a><span style="text-decoration: line-through;">, </span><a style="text-decoration: line-through;" href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a><span style="text-decoration: line-through;">)</span>&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer produced after 6-9-14)&nbsp;</span></li>    
    
    </ul>    <li style="text-decoration: line-through;">NOAA-17 Solar
Backscatter&nbsp;UltraViolet (SBUV-2) nadir profile ozone data
in&nbsp;Version 8
BUFR&nbsp;pulled from NESDIS dds.nesdis.noaa.gov machine via
user-access&nbsp;account</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">file
/pull/PRD.OZONE.PMF.N17.BUFR&nbsp;(</span><a style="text-decoration: line-through;" href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a><span style="text-decoration: line-through;">, </span><a style="text-decoration: line-through;" href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a><span style="text-decoration: line-through;">)</span>&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer produced after 4-10-13)&nbsp;</span></li>    
    
    </ul>    <li>NOAA-19 Solar Backscatter
UltraViolet (SBUV-2) nadir profile ozone data in
Version 8 BUFR pulled from&nbsp;NESDIS&nbsp;PDA
server&nbsp;via
user-access
account</li>    
    
    <ul>      <li>file PDAFileLinks/PULL/OZONE/PRD.OZONE.PMF.N19.BUFR&nbsp;(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>    
    
    </ul>  
  
  </ul>  <br>  <li><a name="aerosol"></a>Aerosol,&nbsp;Green
Vegetation Fraction,&nbsp;smoke and dust data</li>  
  
  <ul>    <li><span style="text-decoration: line-through;">100 km (1
degree)
field of
weekly-averaged global
NESDIS aerosol analyses pulled from NESDIS
dds.nesdis.noaa.gov machine via user-access
account (every Thursday) [for
ingest
schedule see
"aerosol(1)"
in </span><a href="table_1.htm#aerosol_1">Table
1</a>&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);"></span></li>    
    
    <ul>      <li><span style="text-decoration: line-through;">file
/pull/aer.field.100km_global.n19.weekly (NOAA-19) (100
km
grid)&nbsp;(</span><a href="http://www2.ncdc.noaa.gov/docs/klm/html/c9/sec98-2.htm">NOAA
Operational Aerosol/Optical Thickness Products/Aerosol Weekly 100 km
Analyzed Field File</a><span style="text-decoration: line-through;">)</span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">
(no
longer processed)&nbsp;</span></li>    
    
    </ul>    <li><span style="text-decoration: line-through;">100 km (1
degree)
field of
monthly-averaged
global&nbsp;NESDIS&nbsp;aerosol analyses pulled from NESDIS
dds.nesdis.noaa.gov machine via user-access
account (the 2nd day of the month) [for
ingest
schedule see
"aerosol(1)"
in </span><a href="table_1.htm#aerosol_1">Table
1]</a></li>    
    
    <ul>      <li><span style="text-decoration: line-through;">file
/pull/aer.gridmean.100km_global.n19.monthly (NOAA-19)
(100 km grid) (</span><a href="http://www2.ncdc.noaa.gov/docs/klm/html/c9/sec98-3.htm">NOAA
Operational Aerosol/Optical Thickness Products/Aerosol Monthly Mean
Field File</a><span style="text-decoration: line-through;">)</span> <span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer processed)&nbsp;</span></li>    
    
    </ul>  
  
  </ul>  
  
  <ul>    <li>NESDIS&nbsp;weekly real-time
0.144-degree AVHRR Global
(Green)&nbsp;Vegetation
Fraction (GVF) field pulled from NESDIS&nbsp;PDA
server&nbsp;via user-access account&nbsp;[for
ingest
schedule see
"aerosol(1)"
in <a href="table_1.htm#aerosol_1">Table
1]</a></li>    
    
    <ul>      <li>files PDAFileLinks/PULL/GRIB/NPR.VGWG.NN.D?????.GRIBF (NOAA-18) (<a href="http://dss.ucar.edu/docs/formats/grib/gribdoc/" target="_blank">GRIB</a>)&nbsp;</li>      <li>files PDAFileLinks/PULL/GRIB/NPR.VGWG.NP.D?????.GRIBF (NOAA-19) (<a href="http://dss.ucar.edu/docs/formats/grib/gribdoc/" target="_blank">GRIB</a>)&nbsp;</li>    
    
    </ul>    <li>NESDIS&nbsp;weekly real-time
4 km VIIRS&nbsp;Global
(Green)&nbsp;Vegetation
Fraction (GVF) field pulled from NESDIS PDA
server&nbsp;via
user-acess&nbsp;account&nbsp;[for
ingest
schedule see
"aerosol(7)"
in <a href="table_1.htm#aerosol_1">Table
1]</a></li>    
    
    <ul>      <li>files
PDAFileLinks/NDE/GRIB/GVF-WKL-GLB_v1r0_npp_s????????_e????????_c???????????????.grib2
(S-NPP) (<a href="http://www.nco.ncep.noaa.gov/pmb/docs/grib2/">GRIB2</a>)&nbsp;</li>    
    
    </ul>    <li>MODIS aerosol optical
depth&nbsp;data pulled from&nbsp;NESDIS
R10 Gateway data server&nbsp;via ftp account [for
ingest
schedule see
"aerosol(2)"
in <a href="table_1.htm#aerosol_2">Table
1]</a></li>    
    
    <ul>      <li>files&nbsp;/MODIS/AOD/Aqua_AOD_BUFR.???????.????
(AQUA) [<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>
(raw files in <a href="http://modis-atmos.gsfc.nasa.gov/MOD04_L2/format.html">HDF</a>,
converted to BUFR by NESDIS)]</li>      <li>files&nbsp;/MODIS/AOD/Terra_AOD_BUFR.???????.????
(TERRA)&nbsp;[<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>
(raw files in <a href="http://modis-atmos.gsfc.nasa.gov/MOD04_L2/format.html">HDF</a>,
converted to BUFR by NESDIS)]</li>    
    
    </ul>    <li>NESDIS GOES-E Automated
Smoke Detection and Tracking Algorithm
smoke-specific aerosol optical depth and&nbsp;total aerosol
concentration pulled from&nbsp;NESDIS PDA
server&nbsp;via user-access&nbsp;account [for
ingest
schedule see
"aerosol(2)"
in <a href="table_1.htm#aerosol_2">Table
1</a>]</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">files PDAFileLinks/PULL/GRIB/G13.????????????.all.aod_conc.NAM3.grd
(GOES-13)
        </span>(<a style="text-decoration: line-through;" href="http://dss.ucar.edu/docs/formats/grib/gribdoc/">GRIB1</a>)&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no longer produced after 01-08-18)&nbsp;</span><span style="text-decoration: line-through;"> </span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);"></span><span style="font-weight: bold; font-style: italic; color: rgb(255, 0, 0);"></span></li>    
    
    </ul>    <li>NESDIS GOES-E Automated
Smoke Detection and Tracking Algorithm
smoke-specific aerosol optical depth and smoke&nbsp;concentration
pulled from&nbsp;NESDIS PDA
server&nbsp;via
user-access&nbsp;account [for
ingest
schedule see
"aerosol(2)"
in <a href="table_1.htm#aerosol_2">Table
1</a>]</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">files PDAFileLinks/PULL/BIN/G13.??????????.2smoke.combaod.hmshysplitcomb2.NAM3.dat
(GOES-13) </span>(BINARY)&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no longer produced after 01-08-18)&nbsp;</span> </li>      <li><span style="text-decoration: line-through;">files PDAFileLinks/PULL/GRIB/G13.??????????.2smoke.combaod.hmshysplitcomb2.NAM3.grd
(GOES-13) </span>(<a style="text-decoration: line-through;" href="http://dss.ucar.edu/docs/formats/grib/gribdoc/">GRIB1</a>)&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no longer produced after 01-08-18)&nbsp;</span><span style="text-decoration: line-through;"> </span><span style="text-decoration: line-through;"></span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">
        </span><span style="font-weight: bold; font-style: italic; color: rgb(255, 0, 0);"></span></li>    
    
    </ul>    <li>NESDIS GOES-W Automated
Smoke Detection and Tracking Algorithm
smoke-specific aerosol optical depth and&nbsp;total aerosol
concentration pulled from&nbsp;NESDIS PDA
server&nbsp;via user-access&nbsp;account [for
ingest
schedule see
"aerosol(2)"
in <a href="table_1.htm#aerosol_2">Table
1</a>]</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/GRIB/GW.????????????.all.aod_conc.NAM3.grd
(GOES-15)
(<a href="http://dss.ucar.edu/docs/formats/grib/gribdoc/">GRIB1</a>)</li>    
    
    </ul>    <li>NESDIS GOES-W Automated
Smoke Detection and Tracking Algorithm
smoke-specific aerosol optical depth and smoke&nbsp;concentration
pulled from&nbsp;NESDIS PDA
server&nbsp;via
user-access&nbsp;account [for
ingest
schedule see
"aerosol(2)"
in <a href="table_1.htm#aerosol_2">Table
1</a>]</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/GRIB/GW.??????????.2smoke.combaod.hmshysplitcomb2.NAM3.grd
(GOES-15)
(<a href="http://dss.ucar.edu/docs/formats/grib/gribdoc/">GRIB1</a>)</li>    
    
    </ul>    <li>NESDIS GOES-W Hawaii
Automated
Smoke Detection and Tracking Algorithm
smoke-specific aerosol optical depth and smoke&nbsp;concentration
pulled from&nbsp;NESDIS PDA
server&nbsp;via
user-access&nbsp;account [for
ingest
schedule see
"aerosol(5)"
in <a href="table_1.htm#aerosol_5">Table
1</a>]</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/GRIB/GWHI.??????????.2smoke.combaod.hmshysplitcomb2.NAM3.grd
(GOES-15)
(<a href="http://dss.ucar.edu/docs/formats/grib/gribdoc/">GRIB1</a>)</li>    
    
    </ul>    <li>NESDIS PRELIMINARY Hazard
Mapping System HYbrid Single-Particle
Lagrangian
Integrated Trajectory (HYSPLIT) model fire/smoke information pulled
from&nbsp;NESDIS PDA
server&nbsp; via
user-access&nbsp;account&nbsp;[for
ingest
schedule see
"aerosol(3)"
in <a href="table_1.htm#aerosol_3">Table
1]</a></li>    
    
    <ul>      <li>PDAFileLinks/PULL/ASCII/hmshysplit????????.prelim.txt&nbsp;(<a href="File_Format.doc/hmshysplit.htm">ASCII</a>)</li>    
    
    </ul>    <li>NESDIS FINAL Hazard
Mapping System HYbrid Single-Particle
Lagrangian
Integrated Trajectory (HYSPLIT) model fire/smoke information pulled
from&nbsp;NESDIS PDA
server&nbsp;via
user-access&nbsp;account&nbsp;[for
ingest
schedule see
"aerosol(4)"
in <a href="table_1.htm#aerosol_4">Table
1]</a></li>    
    
    <ul>      <li>files PDAFileLinks/PULL/ASCII/hmshysplit????????.txt&nbsp;(<a href="File_Format.doc/hmshysplit.htm">ASCII</a>)</li>    
    
    </ul>    <li>NESDIS MODIS dust mask
product pulled
from&nbsp;NESDIS PDA
server&nbsp;via
user-access&nbsp;account&nbsp;[for
ingest
schedule see
"aerosol(6)"
in <a href="table_1.htm#aerosol_6">Table
1]</a></li>    
    
    <ul>      <li>files PDAFileLinks/PULL/GRIB/MYDdust.aod_conc.v6.3.4.????????.hr??.grib&nbsp;(<a href="http://dss.ucar.edu/docs/formats/grib/gribdoc/">GRIB1</a>)</li>    
    
    </ul>    <li>Burned area&nbsp;product&nbsp;pulled from&nbsp;NESDIS PDA
server&nbsp;via user-access&nbsp;account&nbsp;&nbsp;[for
ingest
schedule see
"aerosol(2)"
in <a href="table_1.htm#aerosol_2">Table
1]</a></li>    
    
    <ul>      <li>files PDAFileLinks/PULL/GRIB/burned_area_????????_??_??_1km.grib2.gz (1 km) (<a href="http://www.nco.ncep.noaa.gov/pmb/docs/grib2/">GRIB2</a>)</li>      <li>files PDAFileLinks/PULL/GRIB/burned_area_????????_??_??_12km.grib2.gz (12 km) (<a href="http://www.nco.ncep.noaa.gov/pmb/docs/grib2/">GRIB2</a>)</li>    
    
    </ul>    <li>Blended global biomass burning emissions product&nbsp;pulled
from&nbsp;NESDIS PDA
server&nbsp;via user-access&nbsp;account&nbsp;[for
ingest
schedule see
"aerosol(7)"
in <a href="table_1.htm#aerosol_7">Table
1]</a></li>    
    
    <ul>      <li>files PDAFileLinks/PULL/NETCDF/GBBEPx.emis_bc.*.????????.nc (black carbon species)&nbsp;(<a href="http://www.unidata.ucar.edu/software/netcdf/">NetCDF</a>)</li>      <li>files PDAFileLinks/PULL/NETCDF/GBBEPx.emis_oc.*.????????.nc (organic&nbsp;carbon species)&nbsp;(<a href="http://www.unidata.ucar.edu/software/netcdf/">NetCDF</a>)</li>      <li>files PDAFileLinks/PULL/NETCDF/GBBEPx.emis_so2.*.????????.nc (sulfur dioxide species)&nbsp;(<a href="http://www.unidata.ucar.edu/software/netcdf/">NetCDF</a>)</li>    
    
    </ul>    <li>Global geostationary satellite composite mosaic
imagery&nbsp;pulled from&nbsp;NESDIS PDA
server&nbsp;via user-access&nbsp;account&nbsp;[for
ingest
schedule see
"aerosol(2)"
in <a href="table_1.htm#aerosol_2">Table
1]</a></li>    
    
    <ul>      <li>files PDAFileLinks/PULL/MCIDAS/GLOBCOMPLIR.?????????? (long-wave IR channels) (<a href="http://www.ssec.wisc.edu/mcidas/">McIDAS</a>)</li>      <li>files PDAFileLinks/PULL/MCIDAS/GLOBCOMPSIR.?????????? (short-wave IR channels)&nbsp;(<a href="http://www.ssec.wisc.edu/mcidas/">McIDAS</a>)</li>      <li>files PDAFileLinks/PULL/MCIDAS/GLOBCOMPVIS.?????????? (visible&nbsp;channels)&nbsp;(<a href="http://www.ssec.wisc.edu/mcidas/">McIDAS</a>)</li>      <li>files PDAFileLinks/PULL/MCIDAS/GLOBCOMPSSR.?????????? (satellite resources metadata)&nbsp;(<a href="http://www.ssec.wisc.edu/mcidas/">McIDAS</a>)</li>    
    
    </ul>  
  
  </ul></ul><ul>  <li><a name="snow"></a>Daily
snow and ice&nbsp;analyses
(for
ingest schedule see "snow" in <a href="table_1.htm#snow">Table
1</a>)</li>  
  
  <ul>    <li>NESDIS IMS 16'th
mesh (or 1/16 'th Bedient, or 24 km) global snow-cover/sea-ice
field&nbsp;pulled from&nbsp;NESDIS PDA
server&nbsp;via
user-access&nbsp;account (later converted to GRIB1, GRIB1 file
copied
forward to the new day until a new file is present for the new day)</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/ASCII/NIC.IMS_v3_???????00_24km.asc.gz (<a href="File_Format.doc/IMS_24km_snow_ice.htm">ASCII</a>)</li>    
    
    </ul>    <li>NESDIS IMS
96'th mesh (or 1/96'th Bedient, or&nbsp;4 km ) global
snow-cover/sea-ice field&nbsp;pulled
from&nbsp;NESDIS PDA
server&nbsp;via user-access&nbsp;account (later&nbsp;converted to
GRIB1,
GRIB1 file
copied forward to the new day until a new file is present for the new
day)</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/ASCII/NIC.IMS_v3_???????00_4km.asc.gz (<a href="File_Format.doc/IMS_4km_snow_ice.htm">ASCII</a>)</li>    
    
    </ul>    <li>USAF 8'th mesh
(or 1/8 'th Bedient, or 48 km) Northern Hemisphere snow-depth/sea-ice
field&nbsp;pulled from&nbsp;NESDIS PDA
server&nbsp;via user-access account (later&nbsp;converted to&nbsp;<a href="http://dss.ucar.edu/docs/formats/grib/gribdoc/">GRIB1</a>,
both
this file&nbsp;and GRIB1
file are copied forward to the new day until a new file is present
for the new day)</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/BIN/PRD.SPPROD.SNODEPH.NHMAMAP.D????? (<a href="File_Format.doc/USAF_NH_48km_snow_ice.htm" target="_blank">binary</a>)</li>    
    
    </ul>    <li>USAF 8'th mesh (or 1/8 'th
Bedient, or 48 km)
Southern&nbsp;Hemisphere snow-depth/sea-ice
field&nbsp;pulled from&nbsp;NESDIS PDA
server&nbsp;via
user-access&nbsp;account (this file&nbsp;copied forward to the
new day
until a new
file is present for the new day)</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/BIN/PRD.SPPROD.SNODEPH.SHMAMAP.D?????&nbsp;(<a href="File_Format.doc/USAF_SH_48km_snow_ice.htm" target="_blank">binary</a>)</li>    
    
    </ul>    <li>NESDIS 4 km
Southern&nbsp;Hemisphere "autosnow" (yes/no) snow
cover product field&nbsp;pulled from&nbsp;NESDIS PDA
server&nbsp;via user-access&nbsp;account&nbsp;(file&nbsp;copied
forward to
the new day, normally always 1-day behind)</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/GRIB/SH4km_autosnow_????????.grb (<a href="http://www.nco.ncep.noaa.gov/pmb/docs/grib2/">GRIB2</a>)</li>    
    
    </ul>    <li>USAF 16'th mesh (or 1/16
'th Bedient, or 24 km) Northern
Hemisphere snow-depth/sea-ice
field&nbsp;pulled from&nbsp;NESDIS PDA
server&nbsp;via user-access account (file&nbsp;copied forward to
the new day
until a
new
file is present for the new day)</li>    
    
    <ul>      <li>files PDAFileLinks/PULL/GRIB/NPR.SNWN.SP.D?????.S1200.MESH16 (<a href="http://dss.ucar.edu/docs/formats/grib/gribdoc/">GRIB1</a>)</li>    
    
    </ul>    <li>USAF 16'th mesh (or 1/16
'th Bedient, or 24 km)
Southern&nbsp;Hemisphere snow-depth/sea-ice
field&nbsp;pulled from&nbsp;NESDIS PDA
server via
user-access account (file&nbsp;copied forward to the new day until
a new file is present for the new day)</li>    
    
    <ul>      <li>files
PDAFileLinks/PULL/GRIB/NPR.SNWS.SP.D?????.S1200.MESH16&nbsp;(<a href="http://dss.ucar.edu/docs/formats/grib/gribdoc/">GRIB1</a>)</li>    
    
    </ul>  
  
  </ul></ul><ul>  <li><a name="sstfld"></a><span style="text-decoration: line-through;">NESDIS
daily sea-surface temperature
analyses (for ingest
schedule see
"sstfld"
in </span><a style="text-decoration: line-through;" href="table_1.htm#sstfld">Table
1</a><span style="text-decoration: line-through;">)</span></li>  
  
  <ul>    <li style="text-decoration: line-through;">50 km (0.5 degree) field
of daily-averaged global data pulled
from NESDIS
dds.nesdis.noaa.gov machine via user-access
account (every Tuesday and Saturday)</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">file
/pull/sst.field.50km_global.n19 (NOAA-19)&nbsp;(</span><a style="text-decoration: line-through;" href="http://www2.ncdc.noaa.gov/docs/klm/html/c9/sec91-1.htm">NOAA
Operational SST Products/SST Field Format</a><span style="text-decoration: line-through;">:&nbsp;1 </span><a style="text-decoration: line-through;" href="http://www2.ncdc.noaa.gov/docs/klm/html/c9/sec91-1.htm#sec9112">Field
Documentation Record</a><span style="text-decoration: line-through;">,
followed
by a </span><a style="text-decoration: line-through;" href="http://www2.ncdc.noaa.gov/docs/klm/html/c9/sec91-1.htm#sec9113">Field
Data
Record</a><span style="text-decoration: line-through;"> for each
latitude row in
the field)</span><span style="color: rgb(204, 0, 0);"> </span><span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(removed
on 9-7-16, file no longer available from NESDIS after 5-3-16)</span></li>    
    
    </ul>  
  
  </ul>  <br>  <li><a name="snowgrib"></a>Daily
global 0.5 degree and T382 and snow
depth analysis (<a href="http://dss.ucar.edu/docs/formats/grib/gribdoc/">GRIB</a>)
[Note: This is&nbsp;not an ingest job. &nbsp;It creates this
product
from&nbsp;snow files that are ingested (see above).]
(for&nbsp;schedule
see
"snowgrib" in <a href="table_1.htm#snowgrib">Table
1</a>) &nbsp;</li></ul><ul>  <li><a name="cloud"></a>Cloud
analyses (for ingest schedule see
"cloud" in&nbsp;<a href="table_1.htm#cloud">Table
1</a>)</li>  
  
  <ul>    <li style="text-decoration: line-through;">AFWA (Air Force Weather
Agency) Northern Hemisphere cloud
cover analyses&nbsp;pulled from NESDIS dds.nesdis.noaa.gov
machine via user-access
account</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">files
/pull/NPR.CLON.SP.D?????.S????&nbsp; </span>(<a href="http://dss.ucar.edu/docs/formats/grib/gribdoc/">GRIB</a>) <span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(file
no longer available from NESDIS after 6-30-17)</span></li>    
    
    </ul>    <li style="text-decoration: line-through;">AFWA (Air Force Weather
Agency) Southern Hemisphere cloud
cover analyses&nbsp;pulled from NESDIS dds.nesdis.noaa.gov
machine via user-access
account</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">files
/pull/NPR.CLOS.SP.D?????.S????&nbsp; </span>(<a href="http://dss.ucar.edu/docs/formats/grib/gribdoc/">GRIB</a>)<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">
(file no longer available from NESDIS after 6-30-17)</span></li>    
    
    </ul>    <li>CLAVR (Clouds
from&nbsp;AVHRR)&nbsp;analyses&nbsp;for
00,&nbsp;06, 12 and 18Z pulled from&nbsp;NESDIS PDA
server
via user-access
account</li>    
    
    <ul>      <li>files&nbsp;PDAFileLinks/PULL/GRIB/clavrx_??_??_?_????_???.cell.hdf&nbsp; (<a href="http://dss.ucar.edu/docs/formats/grib/gribdoc/">GRIB</a>)</li>    
    
    </ul>  
  
  </ul></ul><ul>  <li><a name="goes_ir"></a>GOES
IR imager data&nbsp;(for ingest
schedule see "goes_ir"
in&nbsp;<a href="table_1.htm#goes_ir">Table
1</a>)</li>  
  
  <ul>    <li style="text-decoration: line-through;">GOES-15&nbsp;11 micron
channel (chn. 4) IR from the 3-axis
stabilized GOES imager pulled from NESDIS dds.nesdis.noaa.gov machine
via user-access
account</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">files
/pull/GIM.G15.D?????.S????.T????.????????.????????</span>&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer produced after 10-20-15)&nbsp;</span></li>    
    
    </ul>    <li style="text-decoration: line-through;">GOES-13 11 micron
channel (chn. 4) IR from the 3-axis
stabilized GOES imager pulled from NESDIS dds.nesdis.noaa.gov machine
via user-access
account</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">files
/pull/GIM.G13.D?????.S????.T????.????????.????????</span>&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer produced after 10-20-15)&nbsp;</span></li>    
    
    </ul>  
  
  </ul></ul><ul>  <li><a name="npp"></a>S-NPP and NOAA-20 radiance and
ozone&nbsp;(global
satellite broadcast, and regional direct broadcast from
UW/SSEC) data&nbsp;(for ingest
schedule see "npp"
in&nbsp;<a href="table_1.htm#npp">Table
1</a>)</li>  
  
  <ul>    <li>ATMS brightness
temperatures pulled from&nbsp;NESDIS PDA
server&nbsp;via user-acess&nbsp;account</li>    
    
    <ul>      <li>files
PDAFileLinks/NDE/ATMS/ATMS_v1r0_npp_s???????????????_e???????????????_c???????????????.bufr
(S-NPP)
(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>      <li><span style="font-weight: bold; font-style: italic; color: rgb(255, 0, 0);">FUTURE
==&gt;</span> <span style="color: rgb(153, 153, 153);">files
PDAFileLinks/NDE/ATMS/ATMS_v1r0_j01_s???????????????_e???????????????_c???????????????.bufr
(NOAA-20)</span>
(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>    
    
    </ul>    <li>CrIS apodized radiances (399 channels) pulled from&nbsp;NESDIS
PDA
server&nbsp;via user-access account</li>    
    
    <ul>      <li>files
PDAFileLinks/NDE/NUCAPS/NUCAPS-C0399_v1r0_npp_s???????????????_e???????????????_c???????????????.bufr
(S-NPP)
(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>    
    
    </ul>    <li>CrIS full spectral&nbsp;radiances (431 channel subset) pulled
from&nbsp;NESDIS PDA
server&nbsp;via user-access account</li>    
    
    <ul>      <li>files
PDAFileLinks/NDE/NUCAPS/NUCAPS-C0431_v2r0_npp_s???????????????_e???????????????_c???????????????.bufr
(S-NPP)
(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>      <li><span style="font-weight: bold; font-style: italic; color: rgb(255, 0, 0);">FUTURE
==&gt; </span><span style="color: rgb(153, 153, 153);">files
PDAFileLinks/NDE/NUCAPS/NUCAPS-C0431_v2r0_j01_s???????????????_e???????????????_c???????????????.bufr
(NOAA-20)</span>
(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>    
    
    </ul>    <li>OMPS Total Column
Ozone (version 6) pulled from&nbsp;NESDIS PDA
server&nbsp;via user-access account</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">files
PDAFileLinks/NDE/OMPS/OMPS-TC_v1r0_npp_s???????????????_e???????????????_c???????????????.bufr
(S-NPP) </span>(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer processed&nbsp;after 12-21-17)&nbsp;</span></li>    
    
    </ul>    <li>OMPS Total Column
Ozone (version 8) pulled from&nbsp;NESDIS PDA
server&nbsp;via user-access account</li>    
    
    <ul>      <li>files
PDAFileLinks/NDE/OMPS/OMPS-TC_v2r0_npp_s???????????????_e???????????????_c???????????????.bufr
(S-NPP)
(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>      <li><span style="font-weight: bold; font-style: italic; color: rgb(255, 0, 0);">FUTURE
==&gt; </span><span style="color: rgb(153, 153, 153);">files
PDAFileLinks/NDE/OMPS/OMPS-TC_v2r0_j01_s???????????????_e???????????????_c???????????????.bufr
(NOAA-20)</span>
(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>    
    
    </ul>    <li>OMPS Nadir
Profile&nbsp;Ozone (version 6) pulled from&nbsp;NESDIS PDA
server&nbsp;via user-access account</li>    
    
    <ul>      <li><span style="text-decoration: line-through;">files
PDAFileLinks/NDE/OMPS/OMPS-NP_v1r0_npp_s???????????????_e???????????????_c???????????????.bufr
(S-NPP) </span>(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)&nbsp;<span style="font-weight: bold; font-style: italic; color: rgb(204, 0, 0);">(no
longer processed&nbsp;after 12-21-17)</span></li>    
    
    </ul>    <li>OMPS Nadir Profile&nbsp;Ozone (version 8) pulled
from&nbsp;NESDIS PDA
server&nbsp;via user-access account</li>    
    
    <ul>      <li>files
PDAFileLinks/NDE/OMPS/OMPS-NP_v2r0_npp_s???????????????_e???????????????_c???????????????.bufr
(S-NPP)
(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>      <li><span style="font-weight: bold; font-style: italic; color: rgb(255, 0, 0);">FUTURE
==&gt; </span><span style="color: rgb(153, 153, 153);">files
PDAFileLinks/NDE/OMPS/OMPS-NP_v2r0_j01_s???????????????_e???????????????_c???????????????.bufr
(NOAA-20)</span>
(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>,
        <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">NCEP-flavored</a>)</li>    
    
    </ul>    <li>ATMS regional direct broadcast brightness
temperatures pulled from&nbsp;UW/SSEC server
ftp.ssec.wisc.edu&nbsp;via&nbsp;via anonymous user-access</li>    
    
    <ul>      <li>files
/santek/DB_BUFR/ALL/ATMS_v1r0_npp_s???????????????_e???????????????_c???????????????.DB.bufr
(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>    
    
    </ul>    <li>CrIS regional direct broadcast radiances&nbsp;pulled
from&nbsp;UW/SSEC
server
ftp.ssec.wisc.edu&nbsp;via&nbsp;via anonymous user-access</li>    
    
    <ul>      <li>files
/santek/DB_BUFR/ALL/NUCAPS-C0399_v1r0_npp_s???????????????_e???????????????_c???????????????.DB.bufr
(<a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>)</li>    
    
    </ul>  
  
  </ul></ul><span style="text-decoration: underline;"></span>The
following
non-satellite
types&nbsp;are processed in a manner
similar to&nbsp;the satellite ingest:
<ul>  <li><a name="shf"></a>Hourly
precipitation data from Office of
Hydrology's HADS system
(for ingest schedule see "shf" in <a href="table_1.htm#shf">Table
1</a>) (<a href="http://www.nws.noaa.gov/ohd/hrl/shef/shefcode.htm">SHEF</a>)</li></ul><ul>  <li><a name="shef"></a>24-hour
precipitation data from Office of
Hydrology's HADS system
(for ingest schedule see
"shef" in <a href="table_1.htm#shef">Table
1</a>)&nbsp;(<a href="http://www.nws.noaa.gov/ohd/hrl/shef/shefcode.htm">SHEF</a>)</li></ul><ul>  <li><a name="radwnd"></a>NEXRAD
WSR-88D radial wind data&nbsp; (for
ingest schedule see
"radwnd" in <a href="table_1.htm#radwnd">Table
1</a>)</li>  
  
  <ul>    <li>Level 3 superobs from NWS
Radar Multicast (<a href="http://wxp.unisys.com/Appendices/Formats/NIDS.html" target="_blank">"NIDS" format</a>)</li>    <li>Level 2 on-site superobs
from Open RPG (referred to as Level
2.5) (<a href="File_Format.doc/superob_level2.5_code_27-2.doc" target="_blank">Packed binary format</a>)</li>  
  
  </ul></ul><br>NCO also maintains a Satellite Ingest&nbsp;web page - <a href="http://www2.nco.ncep.noaa.gov/pmb/nwprod/ingest/">click
here</a>.<br><br></body>
</html>
