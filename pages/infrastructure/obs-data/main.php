            
            <style>
            p{
                  font-family:arial,helvetica,sans-serif;
                  font-size:16px;
            }
            </style>
            <p>Please take a moment to read the 
                  <b><a href="http://weather.gov/disclaimer.php" target="_blank">
                        <span style="color: rgb(0, 0, 255);">Disclaimer</span>
                  </a></b>
                  for this non-operational web page.</span>
            </p>
            
            <p>For any questions about NCEP's observational data processing, please contact the 
                  <a href="mailto:ncep.list.obsproc_support@noaa.gov">NCEP Observation Processing Team</a>.&nbsp;
            </p>
            
            <p>Most of the observational data at NCEP are stored in WMO 
                        <a href="https://www.weather.gov/nwsexit.php?url=http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html" target="_blank">
                              <span style="color: rgb(0, 0, 255);"> BUFR</span></a> format. 
                              This format is an international standard and provides an efficient means for transferring data. 
                              In addition it allows for great flexibility for adding new observation elements.
            </p>
            
            <p>There are a series of tables associated with BUFR.&nbsp; "
                  <a href="https://www.weather.gov/nwsexit.php?url=http://www.wmo.int/pages/prog/www/WMOCodes/WMO306_vI2/LatestVERSION/WMO306_vI2_BUFR_TableA_en.pdf" target="_blank">
                        <span style="color: rgb(0, 0, 255);">Table A</span>
                  </a>" defines the data category associated with a particular BUFR message containing report data.&nbsp; 
                  "<a href="https://www.weather.gov/nwsexit.php?url=http://www.wmo.int/pages/prog/www/WMOCodes/WMO306_vI2/LatestVERSION/WMO306_vI2_BUFRCREX_TableB_en.pdf" target="_blank">
                  <span style="color: rgb(0, 0, 255);">Table B</span></a>" 
                  classifies and defines data elements, or descriptors, according to scale, reference value, number of bits and units.&nbsp; 
                  "<a href="https://www.weather.gov/nwsexit.php?url=http://www.wmo.int/pages/prog/www/WMOCodes/WMO306_vI2/LatestVERSION/WMO306_vI2_BUFR_TableC_en.pdf" target="_blank">
                        <span style="color: rgb(0, 0, 255);">Table C</span>
                  </a>" defines data description operators.&nbsp; "
                  <a href="https://www.weather.gov/nwsexit.php?url=http://www.wmo.int/pages/prog/www/WMOCodes/WMO306_vI2/LatestVERSION/WMO306_vI2_BUFR_TableD_en.pdf" target="_blank">
                  <span style="color: rgb(0, 0, 255);">Table D</span></a>" defines the list of common sequences.&nbsp; In addition, there are 
                  <a href="https://www.weather.gov/nwsexit.php?url=http://www.wmo.int/pages/prog/www/WMOCodes/WMO306_vI2/LatestVERSION/WMO306_vI2_BUFRCREX_CodeFlag_en.pdf" target="_blank">
                        <span style="color: rgb(0, 0, 255);"> BUFR code and flag tables</span>
                  </a> as well as 
                        <a href="https://www.weather.gov/nwsexit.php?url=http://www.wmo.int/pages/prog/www/WMOCodes/WMO306_vI2/LatestVERSION/WMO306_vI2_CommonTable_en.pdf" target="_blank">
                              <span style="color: rgb(0, 0, 255);"> code tables common to BUFR and other binary and alphanumeric codes</span>
                        </a>.
                        &nbsp; The need for external tables can make the process for BUFR data encoding and decoding quite cumbersome for a typical user.
            </p>
            
            <p>
                  As such, a special application has been designed at NCEP which provides user-friendly access to the BUFR files through a series of FORTRAN and C subroutines 
                  in a machine independent BUFR library (called BUFRLIB).&nbsp; These routines allow one to encode or decode data into BUFR using mnemonics to represent the data.
                  &nbsp; The mnemonics are associated with BUFR descriptors in a special version of the Tables A, B, C and D.&nbsp; When a BUFR file is created, the mnemonic table 
                  is read in from an external location and is itself encoded into BUFR messages at the top of the output file.&nbsp; 
                  <a href="obs-data/NCEP_BUFR_File_Structure.php" target="_blank">
                        <span style="color: rgb(0, 0, 255);"> These messages</span>
                  </a> have Table A data category (message type) 11 (BUFR tables).&nbsp; 
                  This allows each BUFR file to be "self defined".&nbsp; No external tables are needed to decode data out of the file.
            </p>
            
            <p>
                  The NCEP BUFRLIB team&nbsp;has written a <a href="https://emc.ncep.noaa.gov/emc/pages/infrastructure/bufrlib.php" target="_blank">
                  <span style="color: rgb(0, 0, 255);"> BUFRLIB software user guide</span></a> 
                  which provides a detailed explanation of the NCEP BUFRLIB subroutines along with other useful information on BUFR as it is used at NCEP. 
                  <a href="obs-data/encode_only_BUFR_example.txt" target="_blank">
                        <span style="color: rgb(0, 0, 255);"> Click here</span>
                  </a> 
                  to view a sample Fortran code which uses BUFRLIB routines to encode reports into a BUFR file.
            </p>
            
            <p>
                  Next is a brief outline on the current method for processing observations that arrive at NCEP. 
                  ts main function is to provide links to web pages which discuss each item in detail. &nbsp; 
                  <a href="obs-data/Obs_group_roundtable.doc/dataflow.pdf"><span style="color: rgb(0, 0, 255);"> Click here</span></a> 
                  to see&nbsp;a flow chart depicting the data processing system at NCEP.
                  
            </p>
            
            <p>
                  1. NCEP receives the majority of its data from the 
                  <a href="https://www.weather.gov/nwsexit.php?url=http://www.wmo.int/pages/prog/www/TEM/GTS/index_en.html" target="_blank">
                        <span style="color: rgb(0, 0, 255);"> Global Telecommunications System (GTS)</span>
                  </a> 
                  and the 
                  <a href="http://www.nesdis.noaa.gov/" target="_blank">
                        <span style="color: rgb(0, 0, 255);"> National Environmental Satellite, Data, and Information Service (NESDIS)</span>
                  </a>.
            </p>
            
            <p>
                  &nbsp;&nbsp;&nbsp; a. The GTS and aviation circuit bulletins are transferred from the 
                  <a href="http://www.nws.noaa.gov/tg/" target="_blank">
                        <span style="color: rgb(0, 0, 255);"> NWS Telecommunication Operations Center (TOC/NWSTG)&nbsp;</span>
                  </a> to 
                  <a href="http://www.nco.ncep.noaa.gov/" target="_blank"><span style="color: rgb(0, 0, 255);"> NCEP's Central Operations (NCO) </span></a>
                  and networked to one of two interactive nodes on the 
                   NCEP&nbsp;Weather &amp; Climate Operational Supercomputing System (WCOSS) (one production, one development) using 
                  <a href="https://www.weather.gov/nwsexit.php?url=http://www.unidata.ucar.edu/software/ldm/" target="_blank">
                        <span style="color: rgb(0, 0, 255);"> LDM (Local Data Manager)</span></a> 
                  and 
                  <a href="http://www.nco.ncep.noaa.gov/pmb/docs/dbnet/" target="_blank"><span style="color: rgb(0, 0, 255);"> DBNet (Distributive Brokered Networking)</span></a> 
                  software packages.&nbsp; These data are then decoded from their native format and encoded into WMO BUFR format using 
                  <a href="http://www.nco.ncep.noaa.gov/sib/decoders/" target="_blank"><span style="color: rgb(0, 0, 255);"> decoder software </span></a>designed by 
                  <a href="http://www.nco.ncep.noaa.gov/sib/" target="_blank"><span style="color: rgb(0, 0, 255);"> NCO's System's Integration Branch</span></a>.
            </p>
            
            <p>
                  &nbsp;&nbsp;&nbsp; b. Most of the satellite data are processed in batch mode as they become available from the various NESDIS servers.
                  &nbsp; Regularly scheduled jobs on the WCOSS transfer "new" files from these servers and encode the data into WMO BUFR format.
            </p>
            
            <p>
                  &nbsp;See <a href="obs-data/satellite_ingest.doc/document.php" target="_blank">
                              <span style="color: rgb(0, 0, 255);"> https://www.emc.ncep.noaa.gov/emc/pages/infrastructure/obs-data/satellite_ingest.doc/document.php</span>
                        </a> 
                  for more information.
            </p>
            
            <p>
                  &nbsp;&nbsp;&nbsp; c. NCEP receives "Level 3" radial wind data from 158 NEXRAD radar stations via the 
                   radar multicast (NIDS format).
                  &nbsp; At eight minutes past each hour, a script runs to gather up the most recent radar data into eight pairs of files containing the raw data 
                  and a station list.&nbsp; At thirty-five minutes past each hour these raw data are superobed and encoded into BUFR format.
            </p>
            
            <p>
                  &nbsp;&nbsp;&nbsp; d. NCEP receives on-site superobed&nbsp;Level 2 (which we call "Level 2.5") radial wind data from 158 NEXRAD radar stations via 
                  the <a href="https://www.roc.noaa.gov/WSR88D/" target="_blank"><span style="color: rgb(0, 0, 255);"> NOAA/Radar Operations Center (ROC)</span></a> 
                   Open Systems Radar Product Generator (ORPG) stream from the 
                  <a href="http://www.nws.noaa.gov/tg/" target="_blank">
                        <span style="color: rgb(0, 0, 255);"> NWS Telecommunication Operations Center (TOC/NWSTG) </span>
                  </a>.&nbsp; Raw data files arriving at NCEP are placed in a holding area.&nbsp; Twice each hour at five and thirty-five minutes past the hour, 
                  all newly arrived files are first uncompressed and then encoded into WMO BUFR format.
            </p>
            
            <p>&nbsp; &nbsp; e. NCEP receives the full complement of Level 2 radial wind and reflectivity data from 158 NEXRAD radar 
                  stations&nbsp;via&nbsp;the 
                  <a href="http://www.roc.noaa.gov/" target="_blank"><span style="color: rgb(0, 0, 255);"> NOAA/Radar Operations Center (ROC)</span></a> 
                  Radar Data Acquisition stream from the 
                  <a href="http://www.nws.noaa.gov/tg/" target="_blank">
                        <span style="color: rgb(0, 0, 255);"> NWS Telecommunication Operations Center (TOC/NWSTG) </span>
                  </a>.&nbsp; Raw data files arriving at NCEP are placed in a holding area.&nbsp; Four times&nbsp;each hour at ten, twenty-five, forty and 
                  fifty-five&nbsp;minutes past the hour, all newly arrived files are first uncompressed, then quality controlled (both radial wind and reflectivity) 
                  and&nbsp;then encoded into WMO BUFR format.
            </p>
            
            <p>
                  &nbsp;&nbsp;&nbsp;&nbsp; f.&nbsp;
                  <a href="http://madis.ncep.noaa.gov/" target="_blank">
                        <span style="color: rgb(0, 0, 255);"> Mesonet surface data</span>
                  </a> are gathered by <a href="http://esrl.noaa.gov/gsd/" target="_blank"><span style="color: rgb(0, 0, 255);">NOAA/ERSL/GSL</span></a> 
                  and then pushed to an NCO server several times each hour.&nbsp; NCO converts the data from netCDF to WMO BUFR format.
            </p>
            
            <p>All of the encoded BUFR data are then appended to the appropriate files in the data base.&nbsp; The files are organized by the WMO BUFR type and 
                  local subtype and contain information in 24 hour blocks (based on report time).&nbsp; Observational files remain on-line for up to 10 days before 
                  migration to off line cartridges.&nbsp; This allows late arriving observations to be accumulated.&nbsp; While on line, there is open access to them 
                  not only for operations, but also for research and study.<br>&nbsp;
            </p>
            
            <p>2. The various NCEP networks access the observational data base at a set time each day (i.e., the data cutoff time) and perform a time-windowed dump of 
                  requested observations.&nbsp; Observations of a similar type [e.g., satellite-derived winds ("satwnd"), surface land reports ("adpsfc")] are dumped 
                  into individual BUFR files which maintain the original structure of&nbsp; reports, although some interactive quality control is applied, duplicate 
                  reports are removed, and upper-air report "parts" are merged.&nbsp; See 
                  <a href="obs-data/data_dumping.doc/document.php" target="_blank">
                        <span style="color: rgb(0, 0, 255);"> http://www.emc.ncep.noaa.gov/emc/pages/infrastructure/obs-data/data_dumping.doc/document.php</span>
                  </a> 
                        for more information.<br>&nbsp;
            </p>
            
            <p>3. The final step in preparing most of the "conventional" observational data for assimilation by the analysis involves the execution of a series 
                  of programs which read in the observations from the various dump files, add forecast ("first guess") background and observation error information, 
                  perform automated quality control, and finally output the observations in a monolithic BUFR file known as "PREPBUFR".&nbsp; See 
                  <a href="obs-data/prepbufr.doc/document.php" target="_blank">
                        <span style="color: rgb(0, 0, 255);"> http://www.emc.ncep.noaa.gov/emc/pages/infrastructure/obs-data/prepbufr.doc/document.php</span>
                  </a> for more information.<br>&nbsp;
            </p>
            
            <p>4. The PREPBUFR file is read by the <a href="https://www.weather.gov/nwsexit.php?url=https://dtcenter.org/community-code/gridpoint-statistical-interpolation-gsi" target="_blank"><span style="color: rgb(0, 0, 255);">Global Statistical Interpolation (GSI) analysis</span></a>
                  <span style="color: rgb(0, 0, 255);"> 
                        <span style="color: rgb(0, 0, 0);">which runs in the 
                              <a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gfs.php" target="_blank">
                                    <span style="color: rgb(0, 0, 255);"> Global Forecast System (GFS)</span>
                              </a> 
                              and&nbsp;the&nbsp;Global Data Assimilation System (GDAS) (running the Global FV3 model) 
                        </span>
                  </span>, the&nbsp;regional 
                  <a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/nam.php" target="_blank">
                        <span style="color: rgb(0, 0, 255);"> North American Model (NAM)</span>
                  </a>
                  &nbsp;[running the NOAA Environmental Modeling System (NEMS) version of the Non-Hydrostatic Multi-scale Model in B-grid (NMMB)], the 
                  <a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/rap.php" target="_blank">
                        <span style="color: rgb(0, 0, 255);"> Rapid Refresh (RAP)</span>
                  </a> 
                  [running the&nbsp;RAP-configuration of the WRF model with Advanced Rearch WRF (ARW) core, shared with the&nbsp;
                  <a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/hrrr.php" target="_blank">
                        <span style="color: rgb(0, 0, 255);"> High-Resolution Rapid Refresh (HRRR)</span>
                  </a>], and the&nbsp;
                  <a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/rtma.php" target="_blank">
                        <span style="color: rgb(0, 0, 255);">Real-Time Mesoscale Analysis (RTMA) and UnRestricted Mesoscale Analysis (URMA)</span>
                  </a>.<br>
            </p>
            
            <p><i>Here are some other links to web sites devoted to data processing:</i></p>
            
            <p><a href="obs-data/prepbufr.doc/table_18.php" target="_blank"><span style="color: rgb(0, 0, 255);">Satellite and radar data used by Global GFS/GDAS, NAM and&nbsp;Rapid Refresh/High-Resolution Rapid Refresh GSI&nbsp;analysis</span></a></p>
            
            <p><a href="obs-data/prepbufr.doc/table_2.php" target="_blank"><span style="color: rgb(0, 0, 255);">PREPBUFR Report Types used by Global GFS and GDAS GSI analyses</span></a></p>
            
            <p><a href="obs-data/prepbufr.doc/table_3.php" target="_blank"><span style="color: rgb(0, 0, 255);">PREPBUFR Report Types used by Global CDAS/reanalysis analyses</span></a></p>
            
            <p><a href="obs-data/prepbufr.doc/table_4.php" target="_blank"><span style="color: rgb(0, 0, 255);">PREPBUFR Report Types used by NAM&nbsp;GSI analyses</span></a></p>
            
            <p><a href="obs-data/prepbufr.doc/table_5.php" target="_blank"><span style="color: rgb(0, 0, 255);"></span><span style="color: rgb(0, 0, 255);">PREPBUFR Report Types used by Rapid Refresh and High-Resolution Rapid Refresh GSI&nbsp;analysis</span></a></p>
            
            <p><a href="obs-data/prepbufr.doc/table_19.php" target="_blank"><b><b><font color="#cc0000">**NEW**</font></b></b><span style="color: rgb(0, 0, 255);"> PREPBUFR Report Types used by Real-Time Mesoscale Analysis (RTMA)</span> </a></p>
            
            <p><a href="obs-data/prepbufr.doc/Virtual_Temperature_Processing.php" target="_blank"><span style="color: rgb(0, 0, 255);">Summary of Virtual Temperature Processing in PREPBUFR</span></a> </p>
            
            <p><a href="obs-data/prepbufr.doc/balloon_drift_for_TPB.php" target="_blank"><span style="color: rgb(0, 0, 255);">RAOB/PIBAL Balloon Drift Processing in PREPBUFR</span></a> </p>
            
            <p><a href="obs-data/prepbufr.doc/decode_prepbufr_example.php" target="_blank"><span style="color: rgb(0, 0, 255);">Sample program to decode reports from PREPBUFR file</span></a> </p>
            
            <p><a href="obs-data/data_dumping.doc/User_Guide_to_Interpreting_Data_Dump_Counts.php" target="_blank"><span style="color: rgb(0, 0, 255);">User Guide to Interpreting Data Dump Counts in Data Dump Status Files</span></a> </p>
            
            <p><!--<a href="obs-data/bufrtab_tablea.php" target="_blank">--><a href="https://www.emc.ncep.noaa.gov/emc/pages/infrastructure/bufrlib/tables/bufrtab_tablea.html" target="_blank"><span style="color: rgb(0, 0, 255);">BUFR Table A</span></a> </p>
            
            <p><!--<a href="obs-data/bufrtab_tableb.php" target="_blank">--><a href="https://www.emc.ncep.noaa.gov/emc/pages/infrastructure/bufrlib/tables/bufrtab_tableb.html" target="_blank"><span style="color: rgb(0, 0, 255);">BUFR Table B Descriptors and Mnemonics in NCEP Observational Database</span></a> </p>
            
            <p><!--<a href="obs-data/bufrtab_tabled.php" target="_blank">--><a href="https://www.emc.ncep.noaa.gov/emc/pages/infrastructure/bufrlib/tables/bufrtab_tabled.html" target="_blank"><span style="color: rgb(0, 0, 255);">BUFR Table D Descriptors and Mnemonics in NCEP Observational Database</span></a> </p>
            
            <p><a href="obs-data/Satellite_Historical_Documentation.php" target="_blank"><span style="color: rgb(0, 0, 255);">Satellite Historical Documentation</span></a> </p>
            
            <p><a href="obs-data/Non-satellite_Historical_Documentation.php" target="_blank"><span style="color: rgb(0, 0, 255);">Non-Satellite Data Historical Documentation</span></a> </p>
            
            <p><a href="obs-data/tcvitals_description.php" target="_blank"><span style="color: rgb(0, 0, 255);">Format of Tropical Cyclone Vital Statistics Records ("tcvitals")</span></a> </p>
            
            <p><a href="obs-data/NCEP_BUFR_File_Structure.php" target="_blank"><span style="color: rgb(0, 0, 255);">NCEP BUFR File Structure [with emphasis on&nbsp;embedded BUFR table (A, B, D) messages]</span></a> </p>
            
            <p><a href="obs-data/on29.php" target="_blank"><span style="color: rgb(0, 0, 255);">NMC Office Note 29</span></a> </p>
            
            <p><a href="obs-data/on124.php" target="_blank"><span style="color: rgb(0, 0, 255);">NMC Office Note 124</span></a> </p>
            
            <table style="-webkit-text-stroke-width:0px; background-color:#ffffff; border-collapse:collapse; border-spacing:0px; box-sizing:border-box; color:#000000; font-family:Arial,Helvetica,sans-serif; font-size:12px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:normal; letter-spacing:normal; orphans:2; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px" cellspacing="0">
            	<tbody>
            		<tr>
            			<td colspan="4">&nbsp;</td>
            		</tr>
            	</tbody>
            </table>
			  </div>
     
