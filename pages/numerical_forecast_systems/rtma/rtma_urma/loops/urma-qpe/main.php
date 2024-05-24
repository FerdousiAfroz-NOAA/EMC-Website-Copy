<TITLE>Hourly/6-hourly Precipitation Analysis at NCEP/EMC</TITLE>
<CENTER>
<H2>Hourly/6-hourly Precipitation Analysis at NCEP/EMC</H2>
</CENTER>
<P>

<BLOCKQUOTE><DIV style="background-color:#DCDCDC; color:#000000; font-style: normal; font-family: Georgia;">
<CENTER>
<H3>NEWS</H3>

<font color=red><b>Since 28 July 2020, Stage II has been discontinued and Stage IV output has been changed from GRIB1 to GRIB2 in format.</b></font> <P>
<a href="#UpcomingChange">Additional information</A><br>
</CENTER>
<P>

</DIV></BLOCKQUOTE>

<H3>(1) Background Information</H3>
<DL>
   <DT><B><FONT SIZE=+2><A HREF="stage4/">
       Stage IV: Mosaicked from the regional multi-sensor analyses generated 
       by the RFCs</A></FONT></B></DT>

   <DD> Mosaicked into a national product at NCEP, from the regional
        hourly/6-hourly multi-sensor (radar+gauges) precipitation 
        analyses produced by the 12 River Forecast Centers (RFCs)
        over CONUS. Some manual QC done at the RFCs.  Mosaic done at NCEP 
        within an hour of receiving any new hourly/6-hourly data from one 
        or more RFC.
  </DD> 
<P>
   <DT><B><FONT SIZE=+2><A HREF="precip_rtma_aor.html">
       Precipitation RTMA</A></FONT></B></DT>
<P>
   <DT><B><FONT SIZE=+2><A HREF="urma/precip_urma.html">
       Precipitation URMA</A></FONT></B></DT>
<P>
   <DT><B><A HREF="QandA/">Questions and Answers</A></B></DT>

<P>
   <DT><B><A HREF="references.html">References</A></B></DT>
<P>
<H3>(2) Dataset</H3>
<P>
The <B>official NCO data (past 14 days)</B>:
<A HREF="http://nomads.ncep.noaa.gov/pub/data/nccf/com/pcpanl/prod/">
         http://nomads.ncep.noaa.gov/pub/data/nccf/com/pcpanl/prod/pcpanl.yyyymmdd/</A>
<br>
The <B>NCAR archive</B>:
<A HREF="https://data.eol.ucar.edu/dataset/21.087">
         "https://data.eol.ucar.edu/dataset/21.087</A>
<br>
The <B>developer's backup data</B>:
<A HREF="ftp://ftp.emc.ncep.noaa.gov/mmb/sref/st2n4.arch/">
         "ftp://ftp.emc.ncep.noaa.gov/mmb/sref/st2n4.arch</A>
</UL>
<P>
<A HREF="http://www.emc.ncep.noaa.gov/mmb/SREF/pcpanl/QandA/#ARCHIVE_WHEREDAT">
   Other archive locations</A>

<H3>(3) Images</H3>
<UL> 
   <LI> Hourly loop Stage IV
   <LI><A HREF="current_images/st4.tm11h_01h.gif">Snapshot from T-24h</A> (T is current time)
   <LI><A HREF="current_images/st4_12hloop_01h.gif">Hourly loop for the latest 24 hours</A>
   <LI><A HREF="current_images/st4_48hloop_01h.gif">Hourly loop for the latest 72 hours</A>
   <LI><A HREF="current_images/st4_240hloop_01h.gif">Hourly loop for the latest 240 hours</A>
</UL> 
<UL> 
   <LI> 6-Hourly loop Stage IV
   <LI><A HREF="current_images/st4.tm11h_06h.gif">Snapshot from T-24h</A> (T is current time)
   <LI><A HREF="current_images/st4_12hloop_06h.gif">6-Hourly loop for the latest 24 hours</A>
   <LI><A HREF="current_images/st4_48hloop_06h.gif">6-Hourly loop for the latest 72 hours</A>
   <LI><A HREF="current_images/st4_240hloop_06h.gif">6-Hourly loop for the latest 240 hours</A>
</UL> 
<UL> 
   <LI> 24-Hourly loop Stage IV
   <LI><A HREF="current_images/st4.tm11h_24h.gif">Snapshot from T-24h</A> (T is current time)
   <LI><A HREF="current_images/st4_12hloop_24h.gif">24-Hourly loop for the latest 24 hours</A>
   <LI><A HREF="current_images/st4_48hloop_24h.gif">24-Hourly loop for the latest 72 hours</A>
   <LI><A HREF="current_images/st4_240hloop_24h.gif">24-Hourly loop for the latest 240 hours</A>
</UL> 
<UL> 
   <LI> pcpURMA
   <LI><A HREF="https://www.emc.ncep.noaa.gov/gmb/yluo/precip/nco_para/pcprtma_pcpurma_1h.php">Hourly pcpURMA</A>
   <LI><A HREF="https://www.emc.ncep.noaa.gov/gmb/yluo/precip/nco_para/pcpurma_6h.php">6-hourly pcpURMA</A>
   <LI><A HREF="https://www.emc.ncep.noaa.gov/gmb/yluo/precip/nco_para/snow.php">Snowfall in URMA</A>
</UL> 

<H3>(4) Precipitation Verification</H3>
<UL> 
   <LI><A HREF="https://www.emc.ncep.noaa.gov/users/verification/precip/verif/daily/">Daily precip verification</A>
</UL> 


<H3>(5) Contact</H3>
   Jun.Du@noaa.gov (<A HREF="http://www.emc.ncep.noaa.gov/mmb/SREF/SREF.html">NCEP SREF</A>)
<br>
<B><A HREF="http://www.emc.ncep.noaa.gov/">NCEP/EMC</A></B>
<HR>

<CENTER><H3>List of Upgrades</H3></CENTER>

<A NAME="UpcomingChange">
<B>28 July 2020, pcpanl.v4.0.1/RTMA-URMA v2.8.2</B><br>
<UL>
  <LI>Discontinue Stage II
  <LI>Stage IV output will be in GRIB2 instead of GRIB1; Stage IV run made at hh:55 instead of hh:33 to include more RFC updates for the latest hour
  <LI>pcpRTMA to use radar-only MRMS QPE instead of Stage II/IV as source; run time advanced from hh:33 to hh:15
  <LI>Add NOHRSC 6h/24h snowfall analyses to pcpURMA
  <LI>Smoother offshore filling of ConUS pcpURMA field
  <LI>Earth radius correction in grib2 coding
</UL>
Update presentation: <a href="https://docs.google.com/presentation/d/1GUjHKmD56AR1fxzgF-LexBsJTfs0KNEG4O7xonZpJ7g/edit#slide=id.g758b1ee57d_0_106/">Presentation</a><br>
Additional information: <a href="https://www.emc.ncep.noaa.gov/users/verification/precip/rtma-urma.v2.8/">https://www.emc.ncep.noaa.gov/users/verification/precip/rtma-urma.v2.8/</a><br>
Latest update to implementation schedule: <a href="https://www.emc.ncep.noaa.gov/users/meg/rtma_urma_v2p8/">https://www.emc.ncep.noaa.gov/users/meg/rtma_urma_v2p8/</a><br>
<p><HR><p>
<B>4 Dec 2018, pcpanl.v.3.1.0/URMA v2.7.1</B><BR>
Filling offshore data gaps in ConUS PCPURMA with 1) gauge QC'd MRMS 2) CMORPH.
<P>
Notes on this upgrade:
<a href="https://docs.google.com/presentation/d/1IU2IXCvitN1zQ8joE20prr8z2MrucVdpe6uNKsCWtpg/edit?usp=sharing">https://docs.google.com/presentation/d/1IU2IXCvitN1zQ8joE20prr8z2MrucVdpe6uNKsCWtpg/edit?usp=sharing</a>

<P>
Unofficial parallel runs starting 28 Nov 2017:<BR>
<a href="/mmb/ylin/pcpanl/urma/v2p7/">
  Parallel validations</a><BR>
<a href="ftp://ftp.emc.ncep.noaa.gov/mmb/precip/urma.v2.7.0/">
         ftp://ftp.emc.ncep.noaa.gov/mmb/precip/urma.v2.7.0/yyyymmdd</a><BR>
The EMC URMA v2.7.0 parallel ftp page for non-precip fields, with links to
   the pcpurma:
<a href="ftp://ftp.emc.ncep.noaa.gov/mmb/rtma/v2.7.0/urma/para/">
         ftp://ftp.emc.ncep.noaa.gov/mmb/rtma/v2.7.0/urma/para/</a>
<P>

<A NAME="Dec2017Change">
<B>13 Dec 2017, pcpanl.v.3.0.0, affecting: Stage IV/PCPURMA (RTMA/URMA v2.6)</B><BR>
Hourly URMA for ConUS and Puerto Rico (requirement from MDL/NBM)
<UL>
  <LI>Hourly QPE from Puerto Rico
  <LI>For ConUS: no hourly input from NWRFC and CNRFC.  Previously 
      the Stage IV hourly does not cover NWRFC and CNRFC.  In this
      implementation, we  use the hourly gauge-corrected MRMS to 
      dis-aggregate the 6-hourly QPE from NWRFC and CNRFC into hourly amounts, 
      then combine them with the hourly QPEs from the other 10 RFCs, to cover
      the entire ConUS.
</UL>
<P>
<a href="http://www.nws.noaa.gov/os/notification/scn17-105rtma_urma_namaad.htm">
     SCN</a><BR>
<a href="refs/pcpanl_v3.0.0_notes.pdf">Additional notes about this change</a><P>
Official parallel output on para.nomads.ncep.noaa.gov:
<UL>
  <LI>
     <a href="http://para.nomads.ncep.noaa.gov/pub/data/nccf/com/pcpanl/para/">
        Stage IV</a>
  <LI>
     <a href="http://para.nomads.ncep.noaa.gov/pub/data/nccf/com/urma/para/">
        URMA</a>
  <LI>
     <a href="http://para.nomads.ncep.noaa.gov/pub/data/nccf/com/rtma/para/">
        RTMA</a>
</UL>   

Unofficial parallel runs, 26 Mar - 28 Nov 2017:
<a href="ftp://ftp.emc.ncep.noaa.gov/mmb/precip/pcpanl.v3.0.0/">
ftp://ftp.emc.ncep.noaa.gov/mmb/precip/pcpanl.v3.0.0/</a><br>
<P>
Missing MRMS logs (incomplete):
<UL>
  <LI>No hourly NW/CNRFC coverage for 01-06Z 26 Mar 2017: missing 05Z MRMS
  <LI>No hourly NW/CNRFC coverage for 07-18Z 27 Apr 2017: MRMS n/a for 12Z/13Z
  <LI>No hourly NW/CNRFC coverage for 13-18Z 09 May 2017: MRMS n/a for 18Z
  <LI>No hourly NW/CNRFC coverage for 19Z 11th - 00Z 12th May 2017: MRMS n/a for 21Z/22Z
  <LI>No hourly NW/CNRFC coverage for 19Z 14th - 00Z 15th May 2017: MRMS n/a for 21Z
</UL>
<P>
<A NAME="May2017Change">
<B>2 May 2017 (Stage IV/URMA)</B>
[pcpanl.v2.3.0, rtma/urma v2.5]
<UL>
  <LI>Adding Alaska and Puerto Rico QPE's to Stage IV (AK: 6h/24h, PR: 1h/6h/24h) and URMA (6-hourly for both AK and PR, adding to the existing 6h ConUS URMA)
  <LI>Stage IV 24h total now mosaicked directly from 24h QPE from NWRFC and MBRFC, 6h QPE from CB and CN RFCs, and 1h QPE from the other 8 central/eastern RFCs (previously it was a simple sum of the 6h Stage IV)
  <LI>Data path on NCEP NOMADS changed from      
    <A HREF="http://nomads.ncep.noaa.gov/pub/data/nccf/com/hourly/prod/">
             http://nomads.ncep.noaa.gov/pub/data/nccf/com/hourly/prod/
                    nam_pcpn_anal.yyyymmdd</A> to
     <A HREF="http://nomads.ncep.noaa.gov/pub/data/nccf/com/pcpanl/prod/">
              http://nomads.ncep.noaa.gov/pub/data/nccf/com/pcpanl/prod/
                    pcpanl.yyyymmdd/</A>

</UL>
Official 30-day evaluation started at 18Z 16 Feb 2017.<BR>
Unofficial parallel runs: 
<a href="ftp://ftp.emc.ncep.noaa.gov/mmb/precip/pcpanl.v2.3.0/">
ftp://ftp.emc.ncep.noaa.gov/mmb/precip/pcpanl.v2.3.0/</a><BR>
Official NCO parallel output:
<a href="http://para.nomads.ncep.noaa.gov/pub/data/nccf/com/pcpanl/para/">
   http://para.nomads.ncep.noaa.gov/pub/data/nccf/com/pcpanl/para/</a><BR>
<a href="http://www.nws.noaa.gov/os/notification/scn17-17rtma_urma.htm">
   NWS Service Change Notice (SCN) for this change</a><BR>
<a href="refs/pcpanl_v2.3.0_notes.pdf">Additional notes about this change</a><P>

<A NAME="Mar2016Change">
<B>1 Mar 2016 (Stage IV/URMA)</B>
<OL>Stage IV mosaicking:
  <LI> Revised RFC domains map: filled in isolated “missing” pixels at 
       RFC boundaries
  <LI> Source of 6-hourly Stage IV: if hourly QPE from a central/eastern RFC 
       is missing, then the corresponding 6-hourly QPE for that RFC is used 
       as the source of 6-hourly Stage IV 
</OL>
<a href="refs/pcpanl_v2.2.1_notes.pdf">Additional notes about this change</a><P>
<P>
<A NAME="Jan2016Change">
<B>6 Jan 2016 (Stage II/IV, RTMA/URMA)</B>
<OL>
  <LI>Stage IV mosaicking:
    <UL>
      <LI> For grid points inside of an RFC's domain, if input from that RFC is
           late or missing, we will no longer use neighboring RFCs' data to 
           fill in.
      <LI> Areas outside of the RFC domains (except for Gulf of Mexico and the
           Atlantic) are set as no data/missing
      <LI> Areas in the Gulf of Mexico and off the Atlantic Coast are filled in
           with data from the RFCs, as before
      <LI> WGRFC domain expanded to part of Mexico
      <LI> Coverage for the Great Lakes will come from specific RFCs assigned to the Lakes (currently it is the average of coverage from all neighboring RFCs)
      <LI> For hourly Stage IV, CNRFC input is excluded (as is NWRFC, which does not provide hourly input)
    </UL>
  <LI>Stage II: gross error check of gauges (reports tossed above limit) 
      increased from 1"/hr to 5"/hr
  <LI>Precipitation RTMA: Stage IV hourly is used as primary input for RTMA,
      supplemented by Stage II hourly
</OL>
<P>
  <a href="ftp://ftp.emc.ncep.noaa.gov/mmb/precip/rfc.mask/rfc_domain_mask.gif">New RFC domain mask</a>
<P>
<a href="refs/pcpanl_v2.2.0_notes.pdf">Additional notes/examples about this upgrade</a><P>
<B>Parallel run output:</B><br>
<B>NCO parallel runs, 30 Oct 2015 - </B><P>
<UL>
   <LI> Real time output on NOMADS (RTMA for past 3 days; URMA for past 9 days)
      <UL>
         <LI><a href=
            "http://para.nomads.ncep.noaa.gov/pub/data/nccf/com/rtma/para/">
             http://para.nomads.ncep.noaa.gov/pub/data/nccf/com/rtma/para/</a>
             rtma2p5.yyyymmdd
         <LI><a href=
            "http://para.nomads.ncep.noaa.gov/pub/data/nccf/com/urma/para/">
             http://para.nomads.ncep.noaa.gov/pub/data/nccf/com/urma/para/</a>
             urma2p5.yyyymmdd
      </UL>
   <LI><a href="ftp://ftp.emc.ncep.noaa.gov/mmb/precip/pcpanl.v2.2.0.nco"/>
      RTMA and URMA Images captured from NCO runs</a>.  Look for 'st4.*.06h.gif' for URMA.  RTMA images sent over the next day.  URMA images sent over 1/4/8 days later.  I'm tar'ing up the data files - if you'd to have them, please contact me at the email address at the bottom of this web page. 
</UL>
      
<A NAME="Apr2015Change">
<B>14 Apr 2015 (Stage IV/URMA)</B></br>
<OL>
  <LI>Sources of 6-hourly mosaic QPE for Stage IV/URMA: currently the 
      6-hourly Stage IV is a mosaic of the 6-hourly QPEs from the 12 ConUS 
      RFCs (the “quilt” approach). For this release, we adopted a 
      “laminate-and-quilt” approach, i.e. based on each individual RFC’s 
      practice of producing either hourly or 6-hourly as its base/primary 
      analysis, we first produce 6-hourly totals from the eight Eastern/Central
      RFCs’ hourly QPEs, then combine these 6-hourly totals with the four 
      Western RFCs’ (NWRFC, CNRFC, CBRFC, MBRFC) 6-hourly QPEs to arrive a 
      6-hourly ConUS QPE.
  <LI>Hourly Stage IV is re-made hourly (if there are new input) after valid 
      time for the next 23 hours, then again at 1/3/5/7 days after valid time.  
      The 6-hourly Stage IV/URMA is re-made hourly (if there are new input) 
      for 42 hours after valid time; the four 6-hourlies covering a 12Z-12Z 
      24h period are also re-made on a fixed schedule (regardless of input)
      at 1/3/5/7 days after the ending 12Z (i.e. at the 12:33Z run); at which 
      time the corresponding 24h totals are also re-made.  The current day's 
      24h totals are made at 15:33/21:33/23:33Z run cycles.  
</OL>
<HR>
<P>
<P>
<HR>
<P>
<CENTER>

