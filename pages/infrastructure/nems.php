
<?php 
global $browser_title;
 $browser_title = 'NEMS';   
 include '../portal_header.php';?>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        
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
     <h2 id="section-title">NOAA Environmental Modeling System</h2>
     
     <div id="container">
		<div id="description">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                    	<u>Home</u>
                	</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  aria-selected="false"
                    data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://www.emc.ncep.noaa.gov/projects/nems-doc/documentation.html&amp;source=gmail&amp;ust=1528979474471000&amp;usg=AFQjCNGhigUiwKVDRWVpgpe_nikSasgXQA" 
                    href="https://noaa-emc.github.io/NEMS_doc_ufs-v2.0.0/documentation.html" target="_blank">
                    <u>NEMS Users Guide and Reference</u>
                </a></span>
                </li>
           </ul>

    <div class="tab-content" id="myTabContent">
        <div aria-labelledby="home-tab" class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p style="text-align: center;">
            <span style="font-size:24px;">
                <span style="font-family:arial,helvetica,sans-serif;">&nbsp; 
                	<span class="title">NOAA Environmental Modeling System</span>
                </span>
            </span>
            </p>
            
            <table>
            	<tbody>
            		<tr>
            			<td>
            			<p>&nbsp;</p>
            
            			<p style="text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The NOAA Environmental Modeling System (NEMS) is a unified community modeling system that supports multiple modeling applications. This diagram shows the main components in NEMS, including physical components such as atmosphere and ice models, mediators (couplers), and the sub-components of the atmosphere. The NEMS architecture is based on the Earth System Modeling Framework (ESMF).</span></span></p>
            
            			<p style="text-align: left;"><span style="font-size:14px;"><img alt="" src="https://vlab.noaa.gov/documents/84077/1193927/image_1601_nems_schematic.png/8c98b931-3200-8480-62dd-af44d0ee07d9?t=1487190456232" style="height: 400px; width: 517px;"></span></p>
            
            			<p style="text-align: left;"><em>Image courtesy of the Developmental&nbsp;Testbed&nbsp;Center</em></p>
            
            			<p style="text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">NEMS is a shared, portable, high performance software superstructure and infrastructure for use in operational prediction models at the National Centers for Environmental Prediction (NCEP). It is also part of the National Unified Operational Predication Capability (NUOPC) with Navy and the Air Force, and will eventually provide support to the community through the Developmental Test Center (DTC). Currently, the Global Forecast System (GFS, both the earlier spectral model and current FV3GFS) , the Global Ensemble Forecast System (GEFS), the B-grid version of the Nonhydrostatic Multiscale Model (NMM-B), and the Flow-following finite-volume Icosahedral Model (FIM) are placed together within NEMS.</span></span></p>
            
            			<p style="text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><strong>NOTE : As of 2017, EMC ceased development of the Global Spectral Model (GSM) and the NMM-B model, which is used in several NCEP mesoscale modeling systems (NAM, SREF, HIRESW). NOAA has committed to a multi-year plan to use the Next Generation Global Prediction System (<a href="https://www.weather.gov/sti/stimodeling_nggps">NGGPS</a>) as the foundation upon which to build a Unified Forecast Syatem (<a href="https://www.emc.ncep.noaa.gov/emc/pages/infrastructure/unified-forecast-systems.php">UFS</a>) for the NCEP Production Suite. The envisioned end state is a simplified production suite under this unified framework using a single dynamic core (the Finite Volume Cubed-Sphere (FV3) for all temporal and spatial model scales which is both fully coupled and ensemble-based, and built within the NEMS framework. The replacement of GSM-based GFS with the FV3 version of the FV3GFS was accomplished in June 2019.&nbsp;</strong></span></span></p>
            
            			<h3 style="text-align: left;"><span style="font-size:18px;"><span style="font-family:arial,helvetica,sans-serif;"><u>Past Operational Implementations of NEMS at NCEP</u></span></span></h3>
            
            			<ul>
            		 	<li style="text-align: left;"><i>NMM-B with nests for operational NAM</i></li>
            			<li style="text-align: left;"><i>Global Spectral Model in Global Forecast System </i></li>
            			<li style="text-align: left;"><em>Hurricanes in a Multi-scale Ocean coupled Non-hydrostatic model (HMON)</em></li>
            			<li style="text-align: left;"><i>NEMS GFS Aerosol Component (NGAC)</i></li>
            			<li style="text-align: left;"><i>NMM-B Members of the Short-Range Ensemble Forecast System (SREF)</i></li>
            			<li style="text-align: left;"><i>NMM-B members of High-Resolution Ensemble Forecast System (HREF) / HiresW</i></li>
            			<li style="text-align: left;"><i>FV3 version of Global Forecast System with NEMS framework (June 2019)</i></li>
            			<li style="text-align: left;"><i>FV3 version of the Global Ensemble Forecast System (September 2020)</i></li>
                                <li style="text-align: left;"><i>Limited-area FV3 version in the High-Resolution Ensemble Forecast System (HREF, May 2021)</i></li>
            			</ul>
            
            			</td>
            		</tr>
            	</tbody>
            </table>
            </div>  <!--  NEMS HOME tab ends -->
            <!--  NEMSIO Software Documentation -->
            <div aria-labelledby="nems-doc-tab" class="tab-pane fade" id="nemsdoc" role="tabpanel" aria-labelledby="nems-doc-tab">
            	
				<h1><a name="intro"><u>NEMSIO - Introduction</u></a></h1>

                <p><br>
                NEMSIO is a package created to support input/output in NEMS. The basic functions it provides are to read and write data sets for all NEMS applications. It currently can handle binary data and GRIB1 data, but in the future will also handle GRIB2 data and NetCDF data. NEMSIO has a serial version and a parallel version (using MPI-II parallel I/O).<br>
                <br>
                NEMSIO files consist of meta data and data fields, with meta data preceding all data fields. Meta data has two parts, standard meta data and user-defined meta data. The standard meta data was designed to contain all information needed by the GSI and NEMS systems. For general NEMSIO files only, the first two meta data records are required, therefore the standard meta data can be minimized by only outputting the first several meta data records. The total number of standard meta data records is controlled by nmeta. Users can define their own meta data, which, if existing, are present after the standard meta data.<br>
                <br>
                A printable (but not recent) version of the NEMSIO user guide can be found in the original <a href="http://www.emc.ncep.noaa.gov/NEMS/nemsio_userguide.pdf"><u>NEMSIO Package User Guide</u></a> document written by <u><a href="mailto:jun.wang@noaa.gov">Jun Wang</a></u>.<br>
                &nbsp;</p>
                
                <table border="0">
                	<tbody>
                		<tr>
                			<td valign="middle" align="left">&nbsp;</td>
                			<td>
                			<div id="dataandtopics_links">
                			<table width="250" cellspacing="0" cellpadding="0" border="0" align="center">
                				<tbody>
                					<tr>
                						<th width="100%" valign="top" align="left">
                						<div class="box1" style="word-wrap:  break-word">
                						<h3>NAVIGATE THIS PAGE</h3>
                
                						<ul>
                							<li><span style="color:#ffffff;font-weight:600"><a href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#metadata">Meta Data Structure</a></span></li>
                							<li><span style="color:#ffffff;font-weight:600"><a href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#fields">Data Fields</a></span></li>
                							<li><span style="color:#ffffff;font-weight:600"><a href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#interfaces">NEMSIO Interfaces</a></span></li>
                							<li><span style="color:#ffffff;font-weight:600"><a href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#interfaces_s">NEMSIO Interfaces - Serial Version</a></span></li>
                							<li><span style="color:#ffffff;font-weight:600"><a href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#interfaces_p">NEMSIO Interfaces - Parallel Version</a></span></li>
                							<li><span style="color:#ffffff;font-weight:600"><a href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#examples">Examples</a></span></li>
                							<li><span style="color:#ffffff;font-weight:600"><a href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#Requirement">Requirement</a></span></li>
                						</ul>
                						</div>
                						</th>
                					</tr>
                				</tbody>
                			</table>
                			</div>
                			</td>
                		</tr>
                	</tbody>
                </table>
                
                <p><br>
                <br>
                <a name="metadata"></a></p>
                
                <h1><a name="metadata"><u>Meta Data Structure</u></a></h1>
                
                <p>&nbsp;</p>
                
                <h3>First two standard meta data records:</h3>
                
                <table frame="box" rules="none" cellpadding="10" border="1">
                	<tbody>
                		<tr>
                			<td valign="center"><b><u>Variable Name</u></b></td>
                			<td valign="center"><b><u>Kind</u></b></td>
                			<td valign="center"><b><u>Description</u></b></td>
                		</tr>
                		<tr>
                			<td valign="center">nrec</td>
                			<td>integer</td>
                			<td>total data fields in data part</td>
                		</tr>
                		<tr>
                			<td valign="center">idate</td>
                			<td>integer(7)</td>
                			<td>starting date contains:<br>
                			yyyy/mm/dd/hh/m<br>
                			m/ss(numerator)/ss(den
                			<p style="text-align: center;"><span style="font-size:22px;">&nbsp; <span class="title">NOAA Environmental Modeling System</span></span></p>
                			ominator)</td>
                		</tr>
                		<tr>
                			<td valign="center">nfday</td>
                			<td>integer</td>
                			<td>forecast days</td>
                		</tr>
                		<tr>
                			<td valign="center">nfhour</td>
                			<td>integer</td>
                			<td>forecast hours</td>
                		</tr>
                		<tr>
                			<td valign="center">nfminute</td>
                			<td>integer</td>
                			<td>forecast minutes</td>
                		</tr>
                		<tr>
                			<td valign="center">nfsecondn</td>
                			<td>integer</td>
                			<td>forecast seconds (numerator)</td>
                		</tr>
                		<tr>
                			<td valign="center">nfsecondd</td>
                			<td>integer</td>
                			<td>forecast seconds (denominator)</td>
                		</tr>
                		<tr>
                			<td valign="center">dimx</td>
                			<td>integer</td>
                			<td>dimension in x-direction (not including halo)</td>
                		</tr>
                		<tr>
                			<td valign="center">dimy</td>
                			<td>integer</td>
                			<td>dimension in y-direction (not including halo)</td>
                		</tr>
                		<tr>
                			<td valign="center">dimz</td>
                			<td>integer</td>
                			<td>dimension in y-direction</td>
                		</tr>
                		<tr>
                			<td valign="center">nframe</td>
                			<td>integer</td>
                			<td>dimension of halo (not zero if output data has halo)</td>
                		</tr>
                		<tr>
                			<td valign="center">nsoil</td>
                			<td>integer</td>
                			<td>number of soil layers (e.g. 4)</td>
                		</tr>
                		<tr>
                			<td valign="center">ntrac</td>
                			<td>integer</td>
                			<td>number of tracers</td>
                		</tr>
                		<tr>
                			<td valign="center">jcap</td>
                			<td>integer</td>
                			<td>spectral truncation wave number</td>
                		</tr>
                		<tr>
                			<td valign="center">ncldt</td>
                			<td>integer</td>
                			<td>number of cloud types</td>
                		</tr>
                		<tr>
                			<td valign="center">idvc</td>
                			<td>integer</td>
                			<td>vertical coordinate id</td>
                		</tr>
                		<tr>
                			<td valign="center">idsl</td>
                			<td>integer</td>
                			<td>semi-Lagrangian id</td>
                		</tr>
                		<tr>
                			<td valign="center">idvm</td>
                			<td>integer</td>
                			<td>mass variable id</td>
                		</tr>
                		<tr>
                			<td valign="center">idrt</td>
                			<td>integer</td>
                			<td>grid identifier</td>
                		</tr>
                		<tr>
                			<td valign="center">rlon_min</td>
                			<td>real(4)</td>
                			<td>minimal longitude of regional domain</td>
                		</tr>
                		<tr>
                			<td valign="center">rlon_max</td>
                			<td>real(4)</td>
                			<td>maximal longitude of regional domain</td>
                		</tr>
                		<tr>
                			<td valign="center">rlat_min</td>
                			<td>real(4)</td>
                			<td>minimal latitude of regional domain</td>
                		</tr>
                		<tr>
                			<td valign="center">rlat_max</td>
                			<td>real(4)</td>
                			<td>maximal latitude of regional domain</td>
                		</tr>
                		<tr>
                			<td valign="center">extrameta</td>
                			<td>logical</td>
                			<td>extra user-defined meta data flag</td>
                		</tr>
                	</tbody>
                </table>
                
                <ul>
                	<li>Meta1 is fixed to 48 bytes in length and contains variables listed in the table below:
                	<table frame="box" rules="none" cellpadding="10" border="1">
                		<tbody>
                			<tr>
                				<td valign="center"><b><u>Variable Name</u></b></td>
                				<td valign="center"><b><u>Kind</u></b></td>
                				<td valign="center"><b><u>Description</u></b></td>
                			</tr>
                			<tr>
                				<td valign="center">gtype</td>
                				<td>character(8)</td>
                				<td>NEMSIO file indicator (e.g. 'nemsio')</td>
                			</tr>
                			<tr>
                				<td valign="center">modelname</td>
                				<td>character(8)</td>
                				<td>model name (e.g. 'GFS', 'NMMB')</td>
                			</tr>
                			<tr>
                				<td valign="center">gdatatype</td>
                				<td>character(8)</td>
                				<td>data format (e.g. 'grib', 'bin4_be', bin8_be', 'bin4_le', 'bin8_le')</td>
                			</tr>
                			<tr>
                				<td valign="center">version</td>
                				<td>integer</td>
                				<td>version number (e.g. 201010)</td>
                			</tr>
                			<tr>
                				<td valign="center">nmeta</td>
                				<td>integer</td>
                				<td>number of standard meta records (&lt;= 12)</td>
                			</tr>
                		</tbody>
                	</table>
                	</li>
                	<li>Meta2 contains some integers, real numbers, and a logic variable. All variables in meta2 have a default value -9999 for integers, -9999. for real numbers, and false for logical variables before initialization.</li>
                </ul>
                
                <p>&nbsp;</p>
                
                <h3>Other standard meta data records:</h3>
                
                <table frame="box" rules="none" cellpadding="10" border="1">
                	<tbody>
                		<tr>
                			<td valign="center"><b><u>Variable Name</u></b></td>
                			<td valign="center"><b><u>Kind</u></b></td>
                			<td valign="center"><b><u>Dimension</u></b></td>
                			<td valign="center"><b><u>Description</u></b></td>
                		</tr>
                		<tr>
                			<td valign="center">recname</td>
                			<td>character(16)</td>
                			<td>nrec</td>
                			<td>name for each data field record</td>
                		</tr>
                		<tr>
                			<td valign="center">reclevtyp</td>
                			<td>character(16)</td>
                			<td>nrec</td>
                			<td>level type for each data field record</td>
                		</tr>
                		<tr>
                			<td valign="center">reclev</td>
                			<td>integer</td>
                			<td>nrec</td>
                			<td>level for each data field record</td>
                		</tr>
                		<tr>
                			<td valign="center">vcoord</td>
                			<td>real(4)</td>
                			<td>(dimz+1,3,2)</td>
                			<td>vertical coordinator profile</td>
                		</tr>
                		<tr>
                			<td valign="center">lat</td>
                			<td>real(4)</td>
                			<td>fieldsize</td>
                			<td>latitude</td>
                		</tr>
                		<tr>
                			<td valign="center">lon</td>
                			<td>real(4)</td>
                			<td>fieldsize</td>
                			<td>longitude</td>
                		</tr>
                		<tr>
                			<td valign="center">dx</td>
                			<td>real(4)</td>
                			<td>fieldsize</td>
                			<td>grid distance in longitude in meters</td>
                		</tr>
                		<tr>
                			<td valign="center">dy</td>
                			<td>real(4)</td>
                			<td>fieldsize</td>
                			<td>grid distance in latitude in meters</td>
                		</tr>
                		<tr>
                			<td valign="center">Cpi</td>
                			<td>real(4)</td>
                			<td>ntrac</td>
                			<td>constant-pressure specific heat capacity for tracers</td>
                		</tr>
                		<tr>
                			<td valign="center">Ri</td>
                			<td>real(4)</td>
                			<td>ntrac</td>
                			<td>specific gas constant for tracers</td>
                		</tr>
                	</tbody>
                </table>
                
                <ul>
                	<li>fieldsize = (dimx+2*nframe)*(dimy+2*nframe)</li>
                	<li>Users can omit other data records by setting nmeta to 2. Setting nmeta to 3 will keep only recname in the meta data. Setting nmeta to 4 will keep recname and reclevtyp in the meta data, etc.</li>
                </ul>
                
                <p>&nbsp;</p>
                
                <h3>User-defined meta data:</h3>
                
                <ul>
                	<li>Extrameta in second meta data indicates if there are any user-defined meta data (8 categories):
                	<ul>
                		<li>Variables: integer, real(4), real(8), logical, and character(16)</li>
                		<li>1D arrays: integer, real(4), real(8), logical, and character(16)</li>
                	</ul>
                	</li>
                	<li>If extrameta is true, meta data record exists and includes the following dimensions: nmetavari, nmetavarr, nmetavarl, nmetavarc, nmetavarr8, nmetaaryi, nmetaaryr, nmetaaryl, nmetaaryc, nmetaaryr8
                	<ul>
                		<li>nmetavari, nmetavarr, nmetavarl, nmetavarc and nmetavarr8 specify the number of integer, real, logical, and character variables in extra meta data</li>
                		<li>nmetaaryi, nmetaaryr, nmetaaryl, nmetaaryc, and nmetaaryr8 specify the number of 1-D integer, real, logical, and character arrays in extra meta data</li>
                	</ul>
                	</li>
                	<li>If any of the numbers in the above meta data are greater than 0, the corresponding meta data records holding the names, lengths (for arrays), and values will be shown in the meta data</li>
                	<li>Possible extra meta data:
                	<table frame="box" rules="none" cellpadding="10" border="1">
                		<tbody>
                			<tr>
                				<td valign="center"><b><u>Variable</u></b></td>
                				<td valign="center"><b><u>Kind</u></b></td>
                				<td valign="center"><b><u>Dimension</u></b></td>
                				<td valign="center"><b><u>Description</u></b></td>
                			</tr>
                			<tr>
                				<td valign="center">variname</td>
                				<td>character(16)</td>
                				<td>nmetavari</td>
                				<td>names of user-defined integer variables</td>
                			</tr>
                			<tr>
                				<td valign="center">varival</td>
                				<td>integer</td>
                				<td>nmetavari</td>
                				<td>values of user-defined integer variables</td>
                			</tr>
                			<tr>
                				<td valign="center">varrname</td>
                				<td>character(16)</td>
                				<td>nmetavarr</td>
                				<td>names of user-defined real variables</td>
                			</tr>
                			<tr>
                				<td valign="center">varr8name</td>
                				<td>character(8)</td>
                				<td>nmetavarr</td>
                				<td>names of user-defined real variables</td>
                			</tr>
                			<tr>
                				<td valign="center">varrval</td>
                				<td>real(4)</td>
                				<td>nmetavarr</td>
                				<td>values of user-defined real variables</td>
                			</tr>
                			<tr>
                				<td valign="center">varr8val</td>
                				<td>real(8)</td>
                				<td>nmetavarr</td>
                				<td>values of user-defined real variables</td>
                			</tr>
                			<tr>
                				<td valign="center">varlname</td>
                				<td>character(16)</td>
                				<td>nmetavarl</td>
                				<td>names of user-defined logical variables</td>
                			</tr>
                			<tr>
                				<td valign="center">varlval</td>
                				<td>logical</td>
                				<td>nmetavarl</td>
                				<td>values of user-defined logical variables</td>
                			</tr>
                			<tr>
                				<td valign="center">varcname</td>
                				<td>character(16)</td>
                				<td>nmetavarc</td>
                				<td>names of user-defined character variables</td>
                			</tr>
                			<tr>
                				<td valign="center">varcval</td>
                				<td>character(16)</td>
                				<td>nmetavarc</td>
                				<td>values of user-defined character variables</td>
                			</tr>
                			<tr>
                				<td valign="center">aryiname</td>
                				<td>character(16)</td>
                				<td>nmetaaryi</td>
                				<td>names of user-defined integer arrays</td>
                			</tr>
                			<tr>
                				<td valign="center">aryilen</td>
                				<td>integer</td>
                				<td>nmetaaryi</td>
                				<td>lengths of user-defined integer arrays</td>
                			</tr>
                			<tr>
                				<td valign="center">aryival</td>
                				<td>integer</td>
                				<td>(maxval(aryilen),nmetaaryi)</td>
                				<td>values of user-defined integer arrays</td>
                			</tr>
                			<tr>
                				<td valign="center">aryrname</td>
                				<td>character(16)</td>
                				<td>nmetaaryr</td>
                				<td>names of user-defined real arrays</td>
                			</tr>
                			<tr>
                				<td valign="center">aryr8name</td>
                				<td>character(8)</td>
                				<td>nmetaaryr</td>
                				<td>names of user-defined real arrays</td>
                			</tr>
                			<tr>
                				<td valign="center">aryrlen</td>
                				<td>integer</td>
                				<td>nmetaaryr</td>
                				<td>lengths of user-defined real arrays</td>
                			</tr>
                			<tr>
                				<td valign="center">aryr8len</td>
                				<td>integer</td>
                				<td>nmetaaryr</td>
                				<td>lengths of user-defined real arrays</td>
                			</tr>
                			<tr>
                				<td valign="center">aryrval</td>
                				<td>real(4)</td>
                				<td>(maxval(aryrlen),nmetaaryr)</td>
                				<td>values of user-defined real arrays</td>
                			</tr>
                			<tr>
                				<td valign="center">aryr8val</td>
                				<td>real(8)</td>
                				<td>(maxval(aryrlen),nmetaaryr)</td>
                				<td>values of user-defined real arrays</td>
                			</tr>
                			<tr>
                				<td valign="center">arylname</td>
                				<td>character(16)</td>
                				<td>nmetaaryl</td>
                				<td>names of user-defined logical arrays</td>
                			</tr>
                			<tr>
                				<td valign="center">aryllen</td>
                				<td>integer</td>
                				<td>nmetaaryl</td>
                				<td>lengths of user-defined logical arrays</td>
                			</tr>
                			<tr>
                				<td valign="center">arylval</td>
                				<td>logical</td>
                				<td>(maxval(aryllen),nmetaaryl)</td>
                				<td>values of user-defined logical arrays</td>
                			</tr>
                			<tr>
                				<td valign="center">arycname</td>
                				<td>character(16)</td>
                				<td>nmetaaryc</td>
                				<td>names of user-defined character arrays</td>
                			</tr>
                			<tr>
                				<td valign="center">aryclen</td>
                				<td>integer</td>
                				<td>nmetaaryc</td>
                				<td>lengths of user-defined character arrays</td>
                			</tr>
                			<tr>
                				<td valign="center">arycval</td>
                				<td>character(16)</td>
                				<td>(maxval(aryclen),nmetaaryc)</td>
                				<td>values of user-defined character arrays</td>
                			</tr>
                		</tbody>
                	</table>
                	</li>
                	<li>All of the values of 1-D arrays are held in the 2-D array according to their kind. For example, aryival holds all 1-D integer arrays, the first dimension of varival is the maximum length of all the 1-D integer arrays, the second dimension is the total number of integer arrays.</li>
                	<li>However, in the data file, for each 1-D array, it will be written in the file in its own length, the value holder array, such as aryival, will not be written out.</li>
                </ul>
                
                <p><a class="homepagelinks" href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1" title="Top of Page"><font size="-2"><u>Return to top</u></font></a><br>
                <br>
                <br>
                <br>
                <a name="fields"></a></p>
                
                <h1><a name="fields"><u>Data Fields</u></a></h1>
                
                <p><br>
                NEMSIO supports binary and GRIB1 data formats, the default being GRIB1. For binary data, the gdatatype has to be set to either 'bin4_be' or 'bin4_le' for 4 byte binary data files or 'bin8_be' or 'bin8_le' for 8 byte binary data files. The 'be' in the gdatatype is for big endian files and 'le' is for little endian files. The standard meta data records, recname, reclevtyp, and lev, if existing, record the name, level type, and level for each data field.<br>
                <br>
                The data fields can be read/written/updated by using the data field record number or by giving the name, level type, and level of a data field. For binary data files, users could get/write/update data by only using the variable name. For GRIB1 data, level type and level of a data field are required along with the name.<br>
                <br>
                <a class="homepagelinks" href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1" title="Top of Page"><font size="-2"><u>Return to top</u></font></a><br>
                <br>
                <br>
                <br>
                <a name="interfaces"></a></p>
                
                <h1><a name="interfaces"><u>NEMSIO Interfaces</u></a></h1>
                
                <p><br>
                NEMSIO defines a data type called nemsio_gfile which contains all meta data information. All of the variables in meta1 and meta2, other standard meta data, and uer-defined meta data are the components of nemsio_gfile. Besides that, nemsio_gfile holds some file information such as file name and the action to the file (READ/WRITE). For the parallel version, MPI information such as MPI communicator and lead_task is also in nemsio_gfile. All of the components of nemsio_gfile have a private attribute. Users have to call the subroutines nemsio_getfilehead or nemsio_getheadvar to get the values of the components in nemsio_gfile.<br>
                <br>
                NEMSIO provides various interfaces for users to access the NEMSIO data files. The most commonly used interfaces and their functions are described below.<br>
                <br>
                <a class="homepagelinks" href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1" title="Top of Page"><font size="-2"><u>Return to top</u></font></a><br>
                <br>
                <br>
                <br>
                <a name="interfaces_s"></a></p>
                
                <h1><a name="interfaces_s"><u>NEMSIO Interfaces - Serial Version</u></a></h1>
                
                <p><br>
                &nbsp;</p>
                
                <h3>Initialization and Finalization</h3>
                
                <p>Users are required to call nemsio_init before they call any NEMSIO functions (sets up GRIB table) and call nemsio_finalize to end the use of NEMSIO functions. Here are examples on how to use them:<br>
                &nbsp;</p>
                
                <ul>
                	<li><font face="Courier New, Courier, monospace">call nemsio_init(iret)</font>
                
                	<ul>
                		<li><font face="Courier New, Courier, monospace">iret output integer return code</font></li>
                	</ul>
                	<font face="Courier New, Courier, monospace">call nemsio_finalize(iret)</font>
                
                	<ul>
                		<li><font face="Courier New, Courier, monospace">iret output integer return code</font></li>
                	</ul>
                	</li>
                </ul>
                
                <h3>Open NEMSIO File</h3>
                
                <p>Nemsio_open must be called when users are ready to read/write/update data. For READ or RDWR (used when users need to update data fields; only for binary files), no optional arguments are needed since all information will be obtained from the file. NEMSIO data type nemsio_gfile will contain all the meta data information after nemsio_open. For WRITE, users need to specify some optional arguments such as dimx, dimy, dimz, idate, nmeta, and nrec, otherwise default initialization will be called to set up the values for those meta data. For the default, standard meta data will be set up, which contains 12 standard meta data records including meta1, meta2, recname, reclevtyp, reclev, vcoord, lat, lon, dx, dy, cpi, and ri. Users can set the optional argument, nmeta, to output fewer standard meta data, however, as specified before, the first two meta data must be written out in any case. Users also need to set extrameta in nemsio_open if they want to output their own meta data.<br>
                <br>
                <u>For read</u>:<br>
                <br>
                <font face="Courier New, Courier, monospace">call nemsio_open(gfile,gname,'read',iret)</font><br>
                <br>
                <u>For update</u>:<br>
                <br>
                <font face="Courier New, Courier, monospace">call nemsio_open(gfile,gname,'rdwr',iret)</font><br>
                <br>
                <u>For write</u>:<br>
                <br>
                <font face="Courier New, Courier, monospace">call nemsio_open(gfile,gname,'write',optargs,iret)</font><br>
                &nbsp;</p>
                
                <ul>
                	<li>
                	<ul>
                		<li><b>gfile</b>: nemsio_gfile, file meta data holder</li>
                	</ul>
                
                	<ul>
                		<li><b>gfname</b>: file name</li>
                	</ul>
                
                	<ul>
                		<li><b>iret</b>: return code</li>
                	</ul>
                
                	<ul>
                		<li><b>optargs</b>: optional arguments - gdatatype,version, nmeta, lmeta, modelname, nrec, idate, nfday, nfhour, nfminute, nfsecondn, nfsecondd, dimx, dimy, dimz, nframe, nsoil, ntrac, jcap, ncldt, idvc, idsl, idvm, idrt, rlon_min, rlon_max, rlat_min, rlat_max, extrameta, recname, reclevtyp, reclev, vcoord, lat, lon, dx, dy, cpi, ri, nmetavari, nmetavarr, nmetavarl, nmetavarc, nmetaaryi, nmetaaryr, nmetaaryl, nmetaaryc, variname, varival, varrname, varrval, varlname, varlval, varcname, varcval, aryiname, aryilen, aryival, aryrname, aryrlen, aryrval, arylname, aryllen, arylval, arycname, aryclen, arycval</li>
                	</ul>
                	</li>
                </ul>
                
                <p>&nbsp;</p>
                
                <h3>Close NEMSIO File</h3>
                
                <p>Nemsio_close closes the data file, de-allocates all the meta data arrays, and sets meta data variables into default values in the file meta data holder.<br>
                &nbsp;</p>
                
                <ul>
                	<li><font face="Courier New, Courier, monospace">call nemsio_close(gfile,iret)</font></li>
                </ul>
                
                <p>After nemsio_close, all variables in NEMSIO data type gfile have a default value of -9999 or false for logical.<br>
                <br>
                &nbsp;</p>
                
                <h3>Read Data Fields</h3>
                
                <p>NEMSIO has two read subroutines to read out a data field. One is nemsio_readrec, which will read data fields from the file by order of the data fields. The other is nemsio_readrecv, which allows users to read out the data field by giving the data field's name, level type, and level; levtyp and level are optional for binary data. Only when the recname, possibly reclevtyp and reclev, are set in the standard meta data, can the second function be used. Level type and level are required to exist in the meta data when levtyp and lev are present in the nemsio_readrecv argument list. The output data can either be 4 byte real or 8 byte double precision real no matter whether the data file is 4 byte binary, 8 byte binary, or GRIB1.<br>
                <br>
                <font face="Courier New, Courier, monospace">call nemsio_readrec(gfile,jrec,data,nframe,iret)</font><br>
                &nbsp;</p>
                
                <ul>
                	<li>
                	<ul>
                		<li><b>gfile</b>: input/output nemsio_gfile file metadata</li>
                	</ul>
                
                	<ul>
                		<li><b>jrec</b>: input integer the j-th record in the data fields</li>
                	</ul>
                
                	<ul>
                		<li><b>data</b>: output real(:), 1 data field, could be either real(4) or real(8)</li>
                	</ul>
                
                	<ul>
                		<li><b>nframe</b>: optional, cut off nframe from data domain, nframe must be less than nframe in the data sets</li>
                	</ul>
                
                	<ul>
                		<li><b>iret</b>: output integer return code</li>
                	</ul>
                	</li>
                </ul>
                
                <p><font face="Courier New, Courier, monospace">call nemsio_readrecv(gfile,name,levtyp,lev,data,nframe,iret)</font><br>
                &nbsp;</p>
                
                <ul>
                	<li>
                	<ul>
                		<li><b>gfile</b>: input/output nemsio_gfile file metadata</li>
                	</ul>
                
                	<ul>
                		<li><b>name</b>: input, character(8) name of data field</li>
                	</ul>
                
                	<ul>
                		<li><b>levtyp</b>: optional input, character(16) level type of data field</li>
                	</ul>
                
                	<ul>
                		<li><b>lev</b>: optional input, integer, level of data field</li>
                	</ul>
                
                	<ul>
                		<li><b>data</b>: output, real(:) data, could be either real(4) or real(8)</li>
                	</ul>
                
                	<ul>
                		<li><b>nframe</b>: optional, cut off nframe from data domain, nframe must be less than nframe in the data sets</li>
                	</ul>
                
                	<ul>
                		<li><b>iret</b>: output integer return code</li>
                	</ul>
                	</li>
                </ul>
                
                <p>&nbsp;</p>
                
                <h3>Write Data Fields</h3>
                
                <p>Similar to READ, NEMSIO has two write functions. One is nemsio_writerec, which will write the data field by order of the data field, and the other is nemsio_writerecv, which allows users to write out data by giving the data field's name, levtyp, and lev; like READ, the recname, reclevtyp, and reclev have to be written out in the standard meta data for this function to be called. Also, the input data can be either 4 byte real or 8 byte double precision real regardless of the data type of the file. Some inner transform will write out the data sets according to the data type of your file. The precision can be defined for a specific field when the field is output to a grib file. The default precision is in the grib table inside nemsio lib.<br>
                <br>
                <font face="Courier New, Courier, monospace">call nemsio_writerec(gfile,jrec,itr,zhour,data,iret)</font><br>
                &nbsp;</p>
                
                <ul>
                	<li>
                	<ul>
                		<li><b>gfile</b>: input/output nemsio_gfile file metadata</li>
                	</ul>
                
                	<ul>
                		<li><b>jrec</b>: input integer the j-th record in the data fields</li>
                	</ul>
                
                	<ul>
                		<li><b>itr</b>: time range flag</li>
                	</ul>
                
                	<ul>
                		<li><b>zhour</b>: time range 1 when time range flag is for average or accumulation</li>
                	</ul>
                
                	<ul>
                		<li><b>data</b>: output, real(:) data, could be either real(4) or real(8)</li>
                	</ul>
                
                	<ul>
                		<li><b>iret</b>: output integer return code</li>
                	</ul>
                	</li>
                </ul>
                
                <p><font face="Courier New, Courier, monospace">call nemsio_writerecv(gfile,name,levtyp,lev,itr,zhour,data,iret)</font><br>
                &nbsp;</p>
                
                <ul>
                	<li>
                	<ul>
                		<li><b>gfile</b>: input/output nemsio_gfile file metadata</li>
                	</ul>
                
                	<ul>
                		<li><b>name</b>: input, character(8) name of data field</li>
                	</ul>
                
                	<ul>
                		<li><b>levtyp</b>: optional input, character(16) level type of data field</li>
                	</ul>
                
                	<ul>
                		<li><b>lev</b>: optional input, integer, level of data field</li>
                	</ul>
                
                	<ul>
                		<li><b>itr</b>: time range flag</li>
                	</ul>
                
                	<ul>
                		<li><b>zhour</b>: time range 1 when time range flag is for average or accumulation</li>
                	</ul>
                
                	<ul>
                		<li><b>data</b>: output, real(:) data, could be either real(4) or real(8)</li>
                	</ul>
                
                	<ul>
                		<li><b>iret</b>: output integer return code</li>
                	</ul>
                	</li>
                </ul>
                
                <p>When reading or writing GRIB1 data using NEMSIO, users who use w3_4, rather than w3_d, when compiling their code will need to use different interfaces. This is because NEMSIO has no knowledge which w3 library (w3_4 or w3_d) is used. Below is a list of interfaces to be used instead. Field precision is also an additional optional argument.<br>
                <br>
                <font face="Courier New, Courier, monospace">call nemsio_readrecw34(gfile,jrec,data,nframe,iret)</font><br>
                <font face="Courier New, Courier, monospace">call nemsio_writerecw34(gfile,jrec,itr,zhour,data,iret)</font><br>
                <font face="Courier New, Courier, monospace">call nemsio_readrecvw34(gfile,jrec,levtyp,lev,data,nframe,iret)</font><br>
                <font face="Courier New, Courier, monospace">call nemsio_writerecvw34(gfile,jrec,levtyp,lev,itr,zhour,data,iret)</font><br>
                <br>
                The argument lists are the same as in the subroutines using w3_d in compile.<br>
                <br>
                &nbsp;</p>
                
                <h3>Get Meta Data Information</h3>
                
                <p>Since the nemsio_gfile has private attribute for its meta data, all meta data has to be obtained through nemsio_getfilehead or nemsio_getheadvar. Users can use nemsio_getfilehead to get all the meta data as variables listed in the above tables or they can get any single meta data variable including any in the user defined meta data arrays.<br>
                <br>
                <font face="Courier New, Courier, monospace">call nemsio_getfilehead(gfile,optargs,iret,file_endian,do_byteswap,tlmeta)</font><br>
                &nbsp;</p>
                
                <ul>
                	<li>
                	<ul>
                		<li><b>gfile</b>: input nemsio_gfile file metadata</li>
                	</ul>
                
                	<ul>
                		<li><b>optargs</b>: output optional arguments</li>
                	</ul>
                
                	<ul>
                		<li><b>iret</b>: output integer return code</li>
                	</ul>
                
                	<ul>
                		<li><b>file_endian</b>: contains information on a nemsio file's endianness</li>
                	</ul>
                
                	<ul>
                		<li><b>do_byteswap</b>: shows if byteswap is used when accessing the data</li>
                	</ul>
                
                	<ul>
                		<li><b>tlmeta</b>: returns total meta data length</li>
                	</ul>
                	</li>
                </ul>
                
                <ul>
                	<li>
                	<ul>
                		<li><b>Optargs includes</b>: gdatatype, version, nmeta, lmeta, modelname, nrec, idate, nfday, nfhour, nfminute, nfsecondn, nfsecondd, dimx, dimy, dimz, nframe, nsoil, ntrac, jcap, ncldt, idvc, idsl, idvm, idrt, rlon_min, rlon_max, rlat_min, rlat_max, extrameta, recname, reclevtyp, reclev, vcoord, lat, lon, dx, dy, cpi, ri, nmetavari, nmetavarr, nmetavarl, nmetavarc, nmetaaryi, nmetaaryr, nmetaaryl, nmetaaryc, variname, varival, varrname, varrval, varlname, varlval, varcname, varcval, aryiname, aryilen, aryival, aryrname, aryrlen, aryrval, arylname, aryllen, arylval, arycname, aryclen, arycval</li>
                	</ul>
                	</li>
                </ul>
                
                <p><font face="Courier New, Courier, monospace">call nemsio_getheadvar(gfile,argname,argval,iret,file_endian,do_byteswap,tlmeta)</font><br>
                &nbsp;</p>
                
                <ul>
                	<li>
                	<ul>
                		<li><b>gfile</b>: input nemsio_gfile file metadata</li>
                	</ul>
                
                	<ul>
                		<li><b>argname</b>: input argument name</li>
                	</ul>
                
                	<ul>
                		<li><b>argval</b>: output argument value</li>
                	</ul>
                
                	<ul>
                		<li><b>iret</b>: output integer return code</li>
                	</ul>
                
                	<ul>
                		<li><b>file_endian</b>: contains information on a nemsio file's endianness</li>
                	</ul>
                
                	<ul>
                		<li><b>do_byteswap</b>: shows if byteswap is used when accessing the data</li>
                	</ul>
                
                	<ul>
                		<li><b>tlmeta</b>: returns total meta data length</li>
                	</ul>
                	</li>
                </ul>
                
                <p>Argname can be any meta data variable name, including names in variname, varrname, varlname, varcname, aryiname, aryrname, arylname, and arycname. Users can call nemsio_getfilehead to get variname (or other array names) then call nemsio_getheadvar to get the value of a specific variable or array.<br>
                <br>
                &nbsp;</p>
                
                <h3>Get Data Field Information</h3>
                
                <p>Users can get the name, level type, and level of each data field by calling nemsio_getrechead if they need this information. For example, users can obtain the values of data fields by calling nemsio_readrecv or nemsio_writerecv with that information. As specified before, meta data records recname, reclevtyp, and reclev must be present in meta data in order to use this interface.<br>
                <br>
                <font face="Courier New, Courier, monospace">call nemsio_getrechead(gfile,jrec,vname,vlevtyp,vlev,iret)</font><br>
                &nbsp;</p>
                
                <ul>
                	<li>
                	<ul>
                		<li><b>gfile</b>: input/output nemsio_gfile file metadata</li>
                	</ul>
                
                	<ul>
                		<li><b>jrec</b>: input integer the j-th record</li>
                	</ul>
                
                	<ul>
                		<li><b>vname</b>: output data field name</li>
                	</ul>
                
                	<ul>
                		<li><b>vlevtyp</b>: output data field level type</li>
                	</ul>
                
                	<ul>
                		<li><b>vlev</b>: output data field level</li>
                	</ul>
                
                	<ul>
                		<li><b>iret</b>: output integer return code</li>
                	</ul>
                	</li>
                </ul>
                
                <p>&nbsp;</p>
                
                <h3>Set Meta Data Information</h3>
                
                <p>In some special cases when the meta data information such as lat, lon, dx, and dy cannot be obtained at the time the NEMSIO file is opened, NEMSIO allows users to set these four meta data later. Users need to be careful with the dimension of those four variables since it may destroy the data in the file.<br>
                <br>
                <font face="Courier New, Courier, monospace">call nemsio_setfilehead(gfile,optarg,iret)</font><br>
                &nbsp;</p>
                
                <ul>
                	<li>
                	<ul>
                		<li><b>gfile</b>: input/output nemsio_gfile file metadata</li>
                	</ul>
                
                	<ul>
                		<li><b>optargs</b>: input optional arguments</li>
                	</ul>
                
                	<ul>
                		<li><b>iret</b>: output integer return code</li>
                	</ul>
                	</li>
                </ul>
                
                <p>Optargs can only be lat, lon, dx, and dy.<br>
                <br>
                <a class="homepagelinks" href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1" title="Top of Page"><font size="-2"><u>Return to top</u></font></a><br>
                <br>
                <br>
                <br>
                <a name="interfaces_p"></a></p>
                
                <h1><a name="interfaces_p"><u>NEMSIO Interfaces - Parallel Version</u></a></h1>
                
                <p><br>
                In the parallel version of NEMSIO, MPI-II parallel I/O is used for MPI I/O. For meta data, the read-broadcast method is used, so one processor will read the header information and broadcast it to all the other processors. For data fields, parallel I/O is used so all of the processors will read/write data simultaneously. The user will decide which portion of data will be accessed by each processor. Therefore, the argument lists for interfaces of opening files and reading/writing/updating data fields are different from the serial version.<br>
                <br>
                This version also includes a module, module_nemsio_mpi, that handles endianness, allowing NEMSIO to be used on different machines for files with different endianness. The module will read big or little endian files and write user-specified endianness files. The default endianness for write is the machine endianness. For example, the default for IBM is big endian and the default for Linux is little endian.<br>
                &nbsp;</p>
                
                <h3>Interfaces Identical to Serial Version</h3>
                
                <ul>
                	<li>
                	<ul>
                		<li>call nemsio_init(iret)</li>
                	</ul>
                
                	<ul>
                		<li>call nemsio_finalize(iret)</li>
                	</ul>
                
                	<ul>
                		<li>call nemsio_close(gfile, iret)</li>
                	</ul>
                
                	<ul>
                		<li>call nemsio_getfilehead(gfile,optargs,iret)</li>
                	</ul>
                
                	<ul>
                		<li>call nemsio_getheadvar(gfile,argname,argval,iret)</li>
                	</ul>
                
                	<ul>
                		<li>call nemsio_getrechead(gfile,jrec,vname,vlevtyp,vlev,iret)</li>
                	</ul>
                
                	<ul>
                		<li>call nemsio_setfilehead(gfile,optarg,iret)</li>
                	</ul>
                	</li>
                </ul>
                
                <h3>Open NEMSIO File</h3>
                
                <p>To open a NEMSIO file, MPI information, such as MPI communicator, is needed. Also, a lead task which will read/write meta data is needed. Following is the interface for opening files:<br>
                <br>
                <font face="Courier New, Courier, monospace">call nemsio_open(gfile,gfname,gaction,mpi_comm,optargs,iret)</font><br>
                &nbsp;</p>
                
                <ul>
                	<li>
                	<ul>
                		<li><b>gfile</b>: input/output nemsio_gfile nemsio_gfile file meta</li>
                	</ul>
                
                	<ul>
                		<li><b>gfname</b>: input character file name</li>
                	</ul>
                
                	<ul>
                		<li><b>gaction</b>: input character, allowed operations: 'READ', 'WRITE', 'RDWR'</li>
                	</ul>
                
                	<ul>
                		<li><b>mpi_comm</b>: input integer MPI communicator</li>
                	</ul>
                
                	<ul>
                		<li><b>optargs</b>: input optional arguments</li>
                	</ul>
                
                	<ul>
                		<li><b>iret</b>: output integer return code</li>
                	</ul>
                	</li>
                </ul>
                
                <p>Optargs are the same as in the serial version.</p>
                
                <h3>Read Data Field</h3>
                
                <p>To read data, users need to provide information on what portion of data each processor deals with. A map array describing the location of each element of the data array for each processor is all that is needed. In NEMSIO, a simplified implementation is to specify four arguments, ista, iend, jsta, and jend. Those four variables will specify the subdomain of the data array for each processor located on the whole data field domain. The figure below shows an example. A 2D data field (global array) is shown in dimension(ISTA_G:IEND_G), (JSTA_G:JEND_G). Each small rectangular box specifies the portion of data (local array) (ISTA:IEND,JSTA:JEND) for each processor. Ista and iend are the starting and ending point in the X-direction and jsta and jend are the starting and ending points in the Y-direction.<br>
                &nbsp;</p>
                
                <center><img src="http://www.emc.ncep.noaa.gov/NEMS/ParallelVersion.png" width="600"></center>
                
                <p><br>
                The interface for reading by using the data field record number is:<br>
                <br>
                <font face="Courier New, Courier, monospace">call nemsio_readrec(gfile,ista,iend,jsta,jend,jrec,data,iret)</font><br>
                &nbsp;</p>
                
                <ul>
                	<li>
                	<ul>
                		<li><b>ista, iend, jsta, jend</b>: input dimension of local array</li>
                	</ul>
                	</li>
                </ul>
                
                <p>If calling by data field name, level type, and level, the interface would be:<br>
                <br>
                <font face="Courier New, Courier, monospace">call nemsio_readrecv(gfile,ista,iend,jsta,jend,jrec,name,levtyp,lev,data,iret)</font><br>
                &nbsp;</p>
                
                <ul>
                	<li>
                	<ul>
                		<li><b>ista, iend, jsta, jend</b>: input dimension of local array</li>
                	</ul>
                	</li>
                </ul>
                
                <p>Because the parallel I/O works more efficiently for large size data sets, getting out all the data fields by one reading call will save time compared to reading one data field at a time. Therefore, the interface for reading all data fields in a file is:<br>
                <br>
                <font face="Courier New, Courier, monospace">call nemsio_denseread(gfile,ista,iend,jsta,jend,jrec,data,iret)</font><br>
                &nbsp;</p>
                
                <ul>
                	<li>
                	<ul>
                		<li><b>ista, iend, jsta, jend</b>: input dimension of local array</li>
                	</ul>
                
                	<ul>
                		<li><b>data(:)</b>: data((iend-ista+1)*(jend-jsta+1)*nrec)</li>
                	</ul>
                	</li>
                </ul>
                
                <h3>Write Data Field</h3>
                
                <p>The interfaces for writing data fields are similar to those for reading data fields.<br>
                <br>
                <font face="Courier New, Courier, monospace">call nemsio_writerec(gfile,ista,iend,jsta,jend,jrec,data,iret)</font><br>
                &nbsp;</p>
                
                <ul>
                	<li>
                	<ul>
                		<li><b>ista, iend, jsta, jend</b>: input dimension of local array</li>
                	</ul>
                	</li>
                </ul>
                
                <p><font face="Courier New, Courier, monospace">call nemsio_writerecv(gfile,ista,iend,jsta,jend,jrec,name,levtyp,lev,data,iret)</font><br>
                &nbsp;</p>
                
                <ul>
                	<li>
                	<ul>
                		<li><b>ista, iend, jsta, jend</b>: input dimension of local array</li>
                	</ul>
                	</li>
                </ul>
                
                <p><font face="Courier New, Courier, monospace">call nemsio_densewrite(gfile,ista,iend,jsta,jend,jrec,name,levtyp,lev,data,iret)</font><br>
                &nbsp;</p>
                
                <ul>
                	<li>
                	<ul>
                		<li><b>ista, iend, jsta, jend</b>: input dimension of local array</li>
                	</ul>
                
                	<ul>
                		<li><b>data(:)</b>: data((iend-ista+1)*(jend-jsta+1)*nrec)</li>
                	</ul>
                	</li>
                </ul>
                
                <p><a class="homepagelinks" href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1" title="Top of Page"><font size="-2"><u>Return to top</u></font></a><br>
                <br>
                <br>
                <br>
                <a name="drop2"></a> <a name="examples"></a></p>
                
                <h1><a name="examples"><u>Examples</u></a></h1>
                
                <p><br>
                Following are a few examples showing how to read and write NEMSIO files and get data from them. Use the menu below to jump to a specific example:</p>
                
                <ul>
                	<li><a href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#Ex1">Read a NEMSIO File (Serial Version)</a></li>
                	<li><a href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#Ex2">Write a NEMSIO File (1) (Serial Version)</a></li>
                	<li><a href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#Ex3">Write a NEMSIO file (2)</a></li>
                	<li><a href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#Ex4">Get user-defined meta data</a></li>
                	<li><a href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#Ex5">Read Data Field (MPI version)</a></li>
                	<li><a href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#Ex6">Write Data Field (MPI version</a></li>
                </ul>
                
                <form id="form" name="form">&nbsp;</form>
                
                <p><br>
                <a name="Ex1"></a></p>
                
                <h3><a name="Ex1">#1 - Read a NEMSIO File (Serial Version)</a></h3>
                
                <p><font face="Courier New, Courier, monospace">program main<br>
                <br>
                use nemsio_module<br>
                implicit none<br>
                !<br>
                type(nemsio_gfile) :: gfile<br>
                integer im,jm,jrec,nframe,nrec,fieldsize,vlev,iret<br>
                character(8) vname<br>
                character(16) vlevtyp<br>
                character(255) cin<br>
                real(4),allocatable :: fis(:)<br>
                !<br>
                !--- Initialize<br>
                call nemsio_init(iret=iret)<br>
                !<br>
                !--- Opean a NEMSIO file<br>
                call getarg(1,cin)<br>
                call nemsio_open(gfile,trim(cin),'READ',iret=iret)<br>
                !<br>
                !--- Get dimension<br>
                call nemsio_getfilehead(gfile,iret=iret,dimx=im,dimy=jm,nframe=nframe)<br>
                !<br>
                !---Allocate array<br>
                fieldsize=(im+2*nframe)*(jm+2*nframe)<br>
                allocate(fix(fieldsize))<br>
                !<br>
                !--- You could get the name, levtyp, and level of j-th record data field by calling:<br>
                jrec=1<br>
                call nemsio_getrechead(gfile,jrec,vname,vlevtyp,vlev,iret=iret)<br>
                !<br>
                !--- Get one data field out by data field record number<br>
                call nemsio_readrec(gfile,jrec,fis(:),iret=iret)<br>
                !<br>
                !--- Get one data field out by giving field name, levtyp, and level<br>
                call nemsio_readrecv(gfile,'hgt','sfc',1,fis(:),iret=iret)<br>
                !<br>
                !--- Close the NEMSIO file<br>
                call nemsio_close(gfile,iret=iret)<br>
                !<br>
                !--- Finalize<br>
                call nemsio_finalize()<br>
                !<br>
                end</font><br>
                <br>
                <a class="homepagelinks" href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1" title="Top of Page"><font size="-2"><u>Return to top</u></font></a><br>
                <a class="homepagelinks" href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#examples" title="Second Drop-Down Menu"><font size="-2"><u>Return to examples menu</u></font></a><br>
                <br>
                <br>
                <a name="Ex2"></a></p>
                
                <h3><a name="Ex2">#2 - Write a NEMSIO File(1) (Serial Version)</a></h3>
                
                <p><font face="Courier New, Courier, monospace">!--- Set up NEMSIO<br>
                call nemsio_init(iret=iret)<br>
                print *,'nemsio_init, iret=',iret<br>
                !<br>
                !--- Open gfile for writing, the default meta data setting for model nmmb contains all the meta data information in NMMB run history plain binary file.<br>
                <br>
                call nemsio_open(gfilew,trim(cout),'write',iret,modelname="NMMB",gdatatype="bin4_be", &amp;<br>
                idate=idate,nfhour=nfhour,nfminute=nfminute,nfsecondn=nfsecondn, &amp;<br>
                nfsecondd=nfsecondd,dimx=im,dimy=jm,dimz=lm,nframe=nframe,nsoil=nsoil, &amp;<br>
                ntrac=3,ncldt=1,rlon_min=minval(glon1d),rlon_max=maxval(glon1d),rlat_max=maxval(glad1d), &amp;<br>
                rlat_min=minval(glat1d),extrameta=.true.,nmetavari=10,nmetavarr=12,nmetavarl=2, &amp;<br>
                nmetaaryi=1,nmetaaryr=7,variname=variname,varival=varival,varrname=varrname, &amp;<br>
                varrval=varrval,varlname=varlname,varlval=varlval,aryiname=aryiname,aryilen=aryilen, &amp;<br>
                aryival=aryival,aryrname=aryrname,aryrlen=aryrlen,aryrval=aryrval, &amp;<br>
                lat=glat1d,lon=glon1d,dx=dx,dy=dy)<br>
                !<br>
                !--- Write out data field<br>
                call nemsio_writerec(gfilew,jrec,datatmp(:,jrec),iret=iret)<br>
                !<br>
                !--- Write data field by names<br>
                call nemsio_writerecv(gfilew2,'tmp','mid layer',L,tmp(:,L),iret=iret)<br>
                !<br>
                !--- Close NEMSIO file<br>
                call nemsio_close(gfile,iret=iret)<br>
                !<br>
                !--- Finalize<br>
                call nemsio_finalize()</font><br>
                <br>
                <a class="homepagelinks" href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1" title="Top of Page"><font size="-2"><u>Return to top</u></font></a><br>
                <a class="homepagelinks" href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#examples" title="Second Drop-Down Menu"><font size="-2"><u>Return to examples menu</u></font></a><br>
                <br>
                <br>
                <a name="Ex3"></a></p>
                
                <h3><a name="Ex3">#3 Write a NEMSIO file(2)</a></h3>
                
                <p>This NEMSIO file just has the first two meta data records. The user can not call nemsio_readrecv or nemsio_writerecv since not enough information is provided in the meta data.<br>
                <br>
                <font face="Courier New, Courier, monospace">!--- Prepare meta data<br>
                cin='nemsio_2meta'<br>
                nmeta=2<br>
                nrec=60<br>
                idate(1:7)=(/2007,05,18,0,0,0,100/)<br>
                im=231;jm=141;lm=60;nframe=0<br>
                !<br>
                !--- Open NEMSIO file for write<br>
                call nemsio_open(gfilem2,trim(cin),'write',modelname='NMMB',gdatatype='bin4_be', &amp;<br>
                idate=idate,dimx=im,dimy=jm,dimz=lm, &amp;<br>
                nmeta=nmeta,nrec=nrec,iret=iret)<br>
                print *,'after open write,iret=',iret<br>
                !<br>
                !--- Allocate array and set data field for write<br>
                fieldsize=(im+2*nframe)*(jm+2*nframe)<br>
                allocate(tmp(fieldsize,nrec),fis(fieldsize))<br>
                fis(1:fieldsize)=1000.<br>
                !<br>
                !---Write 2 fields: tmp and hgt<br>
                do jrec=1,lm</font></p>
                
                <ul>
                	<li><font face="Courier New, Courier, monospace">tmp(1:fieldsize,jrec)=jrec<br>
                	call nemsio_writerec(gfilem2,jrec,tmp(:,jrec),iret=iret)<br>
                	print *,'after write,jrec=',jrec,'iret=',iret</font></li>
                </ul>
                
                <p><font face="Courier New, Courier, monospace">enddo<br>
                !<br>
                !--- Close NEMSIO file<br>
                call nemsio_close(gfilem2,iret=iret)</font><br>
                <br>
                <a class="homepagelinks" href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1" title="Top of Page"><font size="-2"><u>Return to top</u></font></a><br>
                <a class="homepagelinks" href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#examples" title="Second Drop-Down Menu"><font size="-2"><u>Return to examples menu</u></font></a><br>
                <br>
                <br>
                <a name="Ex4"></a></p>
                
                <h3><a name="Ex4">#4 - Get user-defined meta data</a></h3>
                
                <p>If users do not know which variables are int he meta data part of the file, they can call nemsio_getfilehead.<br>
                <br>
                <font face="Courier New, Courier, monospace">call nemsio_getfilehead(gfile,iret=iret,nmetavari=nmetavari,nmetavarr=nmetavarr, &amp;<br>
                nmetavarl=nmetavarl,nmetaaryi=nmetaaryi,nmetaaryr=nmetaaryr)<br>
                <br>
                allocate(variname(nmetavari),varrname(nmetavarr),varlname(nmetavarl))<br>
                allocate(aryiname(nmetaaryi),aryrname(nmetaaryr))<br>
                allocate(aryilen(nmetaaryi),aryrlen(nmetaaryr))<br>
                <br>
                call nemsio_getfilehead(gfile,iret=iret,variname=variname,varrname=varrname, &amp;<br>
                varlname=varlname,aryiname=aryiname,aryrname=aryrname,aryilen=aryilen,aryrlen=aryrlen)</font><br>
                <br>
                Then they can call:<br>
                <br>
                <font face="Courier New, Courier, monospace">call nemsio_getheadvar(gfile,'run',run,iret)<br>
                <br>
                call nemsio_getheadvar(gfile,'DSG1',dsg1,iret)</font><br>
                <br>
                <a class="homepagelinks" href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1" title="Top of Page"><font size="-2"><u>Return to top</u></font></a><br>
                <a class="homepagelinks" href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#examples" title="Second Drop-Down Menu"><font size="-2"><u>Return to examples menu</u></font></a><br>
                <br>
                <br>
                <a name="Ex5"></a></p>
                
                <h3><a name="Ex5">#5 - Read data field (MPI version)</a></h3>
                
                <p>This example shows how to read a NMMB NEMSIO data set. It also shows how to set up the dimensions of local arrays.<br>
                <br>
                <font face="Courier New, Courier, monospace">call nemsio_init(ierr)<br>
                !<br>
                cin='nemsiowrt'<br>
                root=0<br>
                print *,'before call nemsio_open'<br>
                call nemsio_open(gfile,trim(cin),'READ',mpi_comm_world,iret=iret)<br>
                !<br>
                call nemsio_getfilehead(gfile,iret=iret,nrec=nrec,dimx=im,nframe=nframe,dimy=jm,dimz=lm,nsoil=nsoil,nrec=nrec)<br>
                !<br>
                !--- Get fieldsize<br>
                im2=im+2*nframe<br>
                jm2=jm+2*nframe<br>
                fieldsize=im2*jm2<br>
                !<br>
                !--- Set up the subdomain<br>
                inum_base=im2/inpes<br>
                in_remain=im2-inpes*inum_base<br>
                imype=mod(mype,inpes)<br>
                iadd=1<br>
                if (imype&gt;=in_remain) iadd=0<br>
                if (imyep&lt;=in_remain) then </font></p>
                
                <ul>
                	<li><font face="Courier New, Courier, monospace">ista=(inum_base+1)*imype+1</font></li>
                </ul>
                
                <p><font face="Courier New, Courier, monospace">else </font></p>
                
                <ul>
                	<li><font face="Courier New, Courier, monospace">ista=inum_base*imype+in_remain+1</font></li>
                </ul>
                
                <p><font face="Courier New, Courier, monospace">endif<br>
                iend=ista+inum_base+iadd-1<br>
                !<br>
                jnum_base=jm2/jnmpes<br>
                jn_remain=jm2-jnpes*jnum_base<br>
                jmype=mype/inpes<br>
                jadd=1<br>
                if (jmype&gt;=jn_remain) jadd=0<br>
                if (jmype&lt;=jn_remain) then </font></p>
                
                <ul>
                	<li><font face="Courier New, Courier, monospace">jsta=(jnum_base+1)*jmype+1</font></li>
                </ul>
                
                <p><font face="Courier New, Courier, monospace">else </font></p>
                
                <ul>
                	<li><font face="Courier New, Courier, monospace">jsta=jnum_base*jmype+jn_remain+1</font></li>
                </ul>
                
                <p><font face="Courier New, Courier, monospace">endif<br>
                jend=jsta+jnum_base+jadd-1<br>
                !<br>
                !--- Allocate array<br>
                subdmfldsize=(iend-ista+1)*(jend-jsta+1)<br>
                <br>
                allocate(data(subdmfldsize,nrec),data1(subdmfldsize,nrec))<br>
                allocate(data2(subdmfldsize*nrec))<br>
                allocate(tmp(subdmfldsize,lm),tmp1(subdmfldsize,lm))<br>
                allocate(fis(subdmfldsize),fis1(subdmfldsize))<br>
                !<br>
                !--- Read by data filed record number<br>
                do jrec=1,nrec </font></p>
                
                <p><font face="Courier New, Courier, monospace">call nemsio_getrechead(gfile,jrec,vname,vlevtyp,vlev,iret=iret)<br>
                call nemsio_readrec(gfile,ista,iend,jsta,jend,jrec,data1(:,jrec),iret=iret)<br>
                print *,'read,iret=',iret,jrec,vname,vlevtyp,vlev,'data=',maxval(data1(:,jrec)),minval(data1(:,jrec)), &amp;<br>
                data1(1,jrec),data1(subdmfldsize,jrec)</font></p>
                
                <p><font face="Courier New, Courier, monospace">enddo<br>
                !<br>
                !--- Dense read<br>
                call nemsio_denseread(gfile,ista,iend,jsta,jend,data2,iret)<br>
                !<br>
                !--- Read by data field name, level type, and level<br>
                do L=1,lm </font></p>
                
                <ul>
                	<li><font face="Courier New, Courier, monospace">call nemsio_readrecv(gfile,ista,iend,jsta,jend,'tmp','mid layer',L,tmp(:,L),iret=iret)</font></li>
                </ul>
                
                <p><font face="Courier New, Courier, monospace">enddo<br>
                !<br>
                !--- Close NEMSIO file<br>
                call nemsio_close(gfile,iret=iret)<br>
                !<br>
                !--- Finalize<br>
                call nemsio_finalize() </font><br>
                <br>
                <a class="homepagelinks" href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1" title="Top of Page"><font size="-2"><u>Return to top</u></font></a><br>
                <a class="homepagelinks" href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#examples" title="Second Drop-Down Menu"><font size="-2"><u>Return to examples menu</u></font></a><br>
                <br>
                <br>
                <a name="Ex6"></a></p>
                
                <h3><a name="Ex6">#6 - Write Data Field (MPI Version)</a></h3>
                
                <p><font face="Courier New, Courier, monospace">cout2='nemsio2rec_gfs'<br>
                lonb=1152<br>
                latb=576<br>
                lm=64<br>
                root=0<br>
                nrec=lm+1<br>
                allocate(recname(nrec),reclevtyp(nrec),reclev(nrec))<br>
                recname(1:lm)='tmp'<br>
                recname(1+lm)='hgt'<br>
                reclevtyp(1:lm)='mid layer'<br>
                reclevtyp(1+lm)='sfc'<br>
                do l=1,lm<br>
                reclev(l)=l<br>
                enddo<br>
                reclev(lm+1)=1<br>
                !<br>
                !--- Open NEMSIO file<br>
                call nemsio_open(gfile,trim(cout2),'write',mpi_comm_world,modelname="GFS", &amp;<br>
                gdatatype="bin4_be",idate=idate,nrec=nrec,dimx=lonb, &amp;<br>
                dimy=latb,dimz=levs,iret=iret,recname=recname, &amp;<br>
                reclevtyp=reclevtyp,reclev=reclev,nmeta=5)<br>
                !<br>
                !--- Call dense write<br>
                call nemsio_densewrite(gfile,ista,iend,jsta,jend,data2,iret=iret)<br>
                !<br>
                !--- Close NEMSIO file<br>
                call nemsio_close(gfile,iret=iret)<br>
                !<br>
                !--- Finalize<br>
                call nemsio_finalize<br>
                <br>
                <a class="homepagelinks" href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1" title="Top of Page"><font size="-2"><u>Return to top</u></font></a><br>
                <a class="homepagelinks" href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/nemsio-1#examples" title="Second Drop-Down Menu"><font size="-2"><u>Return to examples menu</u></font></a> </font><br>
                <br>
                <a name="drop2"></a> <a name="examples"></a></p>
                
                <h1><a name="examples"><u>Requirement</u></a></h1>
                
                <p><span style="font-size:14px;">To read or write a nemsio file, nemsio library is required. Versions of the nemsio library source code are available at:<br>
                <a href="http://www.nco.ncep.noaa.gov/pmb/codes/nwprod/lib/nemsio/">http://www.nco.ncep.noaa.gov/pmb/codes/nwprod/lib/nemsio </a></span></p>
			  
            </div>
        </div>
    </div>
	</div>
</div>
      
      
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
