<?php include('./header.php') ?>
<h1 class="hurricane text-center">HURRICANE numerical analysis and forecast systems at JNWPU/NMC/NCEP - a HISTORY!</h1>
        <div id="model-table">
        <table class="table table-hover">
            <tr>
                <td>Year</td>
                <td>Type</td>
                <td>Model</td>
                <td>Horizontal Resolution</td>
                <td>Layers</td>
                <td>Domain</td>
                <td>Forecast Length</td>
                <td>Documentation</td>
                <td>Bye</td>
                <td>#/day</td>
            </tr>
                    <tr>
                        <td>1978</td>
                        <td>Hu</td>
                        <td>Moveable Fine-Mesh</td>
                        <td>60 km</td>
                        <td>10</td>
                        <td>Window (50x50 points)</td>
                        <td>48-h</td>
                        <td>NWS TPB #259</td>
                        <td>1988</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1988</td>
                        <td>Hu </td>
                        <td>Quasi-Lagrangian Model (QLM)</td>
                        <td>40 km</td>
                        <td>10</td>
                        <td>Window (111x111)</td>
                        <td>72-h</td>
                        <td><a href="https://doi.org/10.1175/1520-0493(1991)119%3C1419:TNMCQL%3E2.0.CO;2">Mathur 1991 MWR</td>
                        <td>6/1995</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>1995</td>
                        <td>Hu</td>
                        <td>GFDL multi-nest</td>
                        <td>1, 1/3rd, 1/6th deg</td>
                        <td>18</td>
                        <td>Window</td>
                        <td>78-h</td>
                        <td><a href="https://s3.us-east-1.amazonaws.com/library.oarcloud.noaa.gov/noaa_documents.lib/NOAA_historic_documents/WB/TPB/1990-1999/TPB_424.pdf">NWS TPB #424</td>
                        <td>6/2001</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2001</td>
                        <td>Hu</td>
                        <td>GFDL + URI Ocean (coupled)</td>
                        <td>Atmos: 1, 1/3rd, 1/6th deg; Ocean: 1/6th deg</td>
                        <td>A=18, O=23</td>
                        <td>Window</td>
                        <td>126-h</td>
                        <td><a href="https://s3.us-east-1.amazonaws.com/library.oarcloud.noaa.gov/noaa_documents.lib/NOAA_historic_documents/WB/TPB/2000-2003/TPB_472B.pdf">NWS TPB #472b</a></td>
                        <td>6/2017 (2003)</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>2003</td>
                        <td>Hu</td>
                        <td>GFDL + URI Ocean (coupled)</td>
                        <td>Atmos: 2 nests (33, 18 km); Ocean (1/6th deg)</td>
                        <td>A=42, O=23</td>
                        <td>Window (.75x .75 deg)</td>
                        <td>126-h</td>
                        <td></td>
                        <td>6/2017 (2005)</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>2005</td>
                        <td>Hu</td>
                        <td>GFDL + URI Ocean (coupled)</td>
                        <td>Atmos=33, 18, 8 km; Ocean: 1/6th deg</td>
                        <td>A=42, O=23</td>
                        <td>Window (.75 x .75 deg)</td>
                        <td>126-h</td>
                        <td></td>
                        <td>6/2017 (2014)</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>2007</td>
                        <td>Hu</td>
                        <td>HWRF; POM for ocean coupling (2-d in NATL, 1-d in EPAC)</td>
                        <td>27/9/3km; POM=9 km</td>
                        <td>ATM=43</td>
                        <td>NATL/EPAC</td>
                        <td>126h</td>
                        <td></td>
                        <td>Still (2012)</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>2012</td>
                        <td>Hu</td>
                        <td>HWRF; add POM 2-d coupling in EPAC</td>
                        <td>27/9/3 km; POM=1/6th deg</td>
                        <td>ATM=43</td>
                        <td>NATL/EPAC/CPAC</td>
                        <td>126h</td>
                        <td><a href="https://www.weather.gov/media/notification/tins/tin12-19hwrfaaa.pdf">NWS TIN</a></td>
                        <td>Still (2014)</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>2014</td>
                        <td>Hu</td>
                        <td>HWRF; POM </td>
                        <td>27/9/3 km; POM =1/12th deg</td>
                        <td>ATM=61; POM=23</td>
                        <td>NATL/EPAC/CPAC</td>
                        <td>126h</td>
                        <td><a href="https://www.weather.gov/media/notification/tins/tin14-19hwrf_aaa.pdf">NWS TIN</a></td>
                        <td>Still (2015)</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>2014</td>
                        <td>Hu</td>
                        <td>GFDL</td>
                        <td>Inner nest 1/18th deg; POM (9 km)</td>
                        <td>ATM=42, Ocean=23</td>
                        <td>NATL/EPAC/CPAC</td>
                        <td>126h</td>
                        <td><a href="https://www.weather.gov/media/notification/tins/tin14-20gfdl_aab.pdf">NWS TIN</a></td>
                        <td>7/2017</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>2015</td>
                        <td>Hu</td>
                        <td>HWRF; POM coupling for NATL, EPAC only</td>
                        <td>18/6/2 km: POM 1/12th deg</td>
                        <td>ATM=61; POM=23</td>
                        <td>All TC Basins</td>
                        <td>126h</td>
                        <td><a href="https://www.weather.gov/media/notification/tins/tin15-25hwrf.pdf">NWS TIN</a></td>
                        <td>Still (2016)</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>2016</td>
                        <td>Hu</td>
                        <td>HWRF; POM ocean coupling for all NH basins, HWRF ensemble DA</td>
                        <td>18/6/2 km</td>
                        <td>ATM=61 (NATL, EPAC, CPAC), 43 (WPAC, NIO); POM= 23</td>
                        <td>All TC Basins</td>
                        <td>126h</td>
                        <td><a href="https://www.weather.gov/media/notification/tins/tin16-18hwrfaaa.pdf">NWS TIN</a></td>
                        <td>Still (2017)</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>2017</td>
                        <td>Hu</td>
                        <td>HMON</td>
                        <td>18/6/2km</td>
                        <td>43</td>
                        <td>NATL, EPAC, CPAC</td>
                        <td>126h</td>
                        <td><a href="https://www.weather.gov/media/notification/pdfs/scn17-83hmonaaa.pdf">NWS SCN</a></td>
                        <td>Still (2018)</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>2017</td>
                        <td>Hu</td>
                        <td>HWRF; HYCOM coupling for WPAC/NIO, 1-way coupling to WW-III</td>
                        <td>18/6/2 km</td>
                        <td>ATM= 75 (NATL, EPAC, CPAC), 61 (WPAC, NIO); POM=40</td>
                        <td>All TC Basins</td>
                        <td>126h</td>
                        <td><a href="https://www.weather.gov/media/notification/pdfs/scn17-80hwrfaab.pdf">NWS SCN</a></td>
                        <td>Still (2018)</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>2018</td>
                        <td>Hu</td>
                        <td>HMON; add HYCOM coupling in NATL</td>
                        <td>18/6/2km</td>
                        <td>ATM=51</td>
                        <td>NATL, EPAC, CPAC</td>
                        <td>126h</td>
                        <td><a href="https://www.weather.gov/media/notification/pdfs/scn18-59hmon.pdf">NWS SCN</a></td>
                        <td>Still (2020)</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>2018</td>
                        <td>Hu</td>
                        <td>HWRF, add ocean coupling (HYCOM) for SH basins</td>
                        <td>13.5/4.5/1.5km</td>
                        <td>ATM=75; POM=40</td>
                        <td>All TC basins</td>
                        <td>126h</td>
                        <td><a href="https://www.weather.gov/media/notification/pdfs/scn18-60hwrf.pdf">NWS SCN</a></td>
                        <td>Still (2020)</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>2020</td>
                        <td>Hu </td>
                        <td>HMON</td>
                        <td>18/6/2km</td>
                        <td>ATM=71</td>
                        <td>NATL, EPAC, CPAC</td>
                        <td>126h</td>
                        <td><a href="https://www.weather.gov/media/notification/pdf2/scn20-51hmon_v3_0-0.pdf">NWS SCN</a></td>
                        <td>Still</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>2020</td>
                        <td>Hu</td>
                        <td>HWRF, use HYCOM for ocean coupling in JTWC basins</td>
                        <td>13.5/4.5/1.5km</td>
                        <td>ATM=75; POM=40</td>
                        <td>All TC Basins</td>
                        <td>126h</td>
                        <td><a href="https://www.weather.gov/media/notification/pdf2/scn20-54hwrf_v13aaa.pdf">NWS SCN</a></td>
                        <td>Still</td>
                        <td>4</td>
                    </tr>
        </table>
        </div>


<?php include('./footer.php') ?>
